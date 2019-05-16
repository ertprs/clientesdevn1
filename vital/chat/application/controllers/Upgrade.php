<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Upgrade extends CP_AdminController {
    /*
     * Calling parent constructor
     */

    public function __construct() {
        parent::__construct();
    }

    /*
     * To load upgrade links view
     */

    function index() {
        // add users.js file
        $this->addjs(theme_url("js/app/upgrade.js"), TRUE);
        $this->add_js_inline(array('user' => $this->current_user, 'settings' => $this->settings));

        //write code here to load view
        $this->bulid_layout("pages/upgrade");
    }

    /*
     * To load upgrade view
     */

    function upgrade() {
        // Update config/database.php file
        $dbdata = array('dbprefix' => DB_PRIFIX);
        $this->config->db_config_update($dbdata);

        // add css and js file
        $this->body_classes[] = 'intallation-process';
        $this->addcss(base_url("assets/cmodule/css/cmodule-installer.css"), TRUE);
        $this->addjs(theme_url("js/app/install/main.js"), TRUE);
        $this->addjs(theme_url("js/app/install/upgrade.js"), TRUE);

        $files_updated = 'no';
        $action_type = 'update';
        if ($this->settings->current_version != CHATBULL_VERSION or ! isset($this->settings->current_product_name) or $this->settings->current_product_name != PRODUCT_NAME) {
            $files_updated = 'yes';
        }

        if (isset($this->settings->current_product_name) and $this->settings->current_product_name != PRODUCT_NAME) {
            $action_type = 'upgrade';
        }

        // get all agents with admin
        $upgrade_text = $this->lang->load('upgrade', '', TRUE);
        $data = array('upgrade_text' => $upgrade_text, 'settings' => $this->settings);
        $data['files_updated'] = $files_updated;
        $data['action_type'] = $action_type;
        $this->add_js_inline($data);

        //write code here to load view
        $data['content'] = $this->load->view('install/upgrade', $data, TRUE);
        $this->load->view('install/template', $data);
    }

    /*
     * To send request to plugin domain and return response
     * 
     * @return {Json) $response
     */

    function get_server() {
        $response = array('result' => 'failed', 'errors' => '', 'message' => '');
        $action = ($this->input->get('action')) ? $this->input->get('action') : '';

        // sending request on server to check version.
        $url = CHATBULL_APIURL . 'api-info.php';
        $fields = array('product_name' => PRODUCT_NAME, 'action' => $action);

        $this->curl->create($url);
        $this->curl->post($fields);
        $result = json_decode($this->curl->execute());

        if ($result->result == 'success') {
            $response = $result;
        } else {
            $response['errors'] = $result->errors;
        }

        return $this->output->set_content_type('application/json')->set_output($this->return_json($response));
    }


    /*
     * This function Extracting downloaded latest version of chatbull plugin
     */

    function extract() {
        $response = array('result' => 'failed', 'errors' => '', 'message' => '');
        $downloaded_filename = ($this->input->get('downloaded_filename')) ? $this->input->get('downloaded_filename') : '';
        $zipFile = UPDATE_DIR . $downloaded_filename; // Local Zip File Path

        if (file_exists($zipFile)) {
            $output = extractZip($zipFile, FCPATH);
            if ($output['result'] == 'failed') {
                $response['errors'] = $output['errors'];
            } else {
                $response['result'] = 'success';
                $response['message'] = $this->lang->line('files_extracted');
            }
        } else {
            $response['errors'] = $this->lang->line('zip_not_found');
        }

        return $this->output->set_content_type('application/json')->set_output($this->return_json($response));
    }

    /*
     * This function will be use to make changes in database on made in new version.
     * #method Get
     * @return json object
     */

    function update_db() {
        $response = array('result' => 'failed', 'errors' => '', 'message' => '');
        $response['message'] = $this->lang->line('db_updated');
        $response['result'] = 'success';

        $this->load->library('migration');

        if ($this->migration->latest() === FALSE) {
            $response['errors'] = $this->migration->error_string();
        } else {
            // upgrade site settings for version 5.x
            if ($this->settings->current_version < 5) {
                $sites = $this->site_model->get_sites();
                $this->configuration->upgrade_site_settings($sites, $this->settings);
            } else {
                $sites = $this->site_model->get_sites();
                $this->configuration->merge_settings_options($sites);
            }

            $options = $this->configuration->get_default();
            $new_options = array();

            foreach ($options as $opt) {
                if (!isset($this->settings->{$opt['config_option']})) {
                    $new_options[] = $opt;
                }
            }

            if (count($new_options) > 0) {
                $this->configuration->insert_options($new_options, TRUE);
            }

            if ($this->settings->current_version < 5) {
                // update for version 5.x
                $this->configuration->model_data = array('admin_panel_logo' => $this->settings->site_logo);
                $this->configuration->model_data['admin_panel_name'] = $this->settings->site_name;
                $this->configuration->model_data['admin_panel_email'] = $this->settings->site_email;
                $this->configuration->model_data['enable_agent_file_sharing'] = $this->settings->enable_file_sharing;
                $this->configuration->model_data['agent_file_upload_size'] = $this->settings->file_upload_size;
                $this->configuration->model_data['agent_allowed_filetypes'] = $this->settings->allowed_filetypes;
                $this->configuration->model_data['agent_time_interwal'] = $this->settings->time_interwal;
                $this->configuration->update();

                $users = $this->user->get_all();
                $profile_colors = array('#f16364', '#f58559', '#f9a43e', '#e4c62e', '#67bf74', '#59a2be', '#2093cd', '#ad62a7', '#805781', '#e57373', '#f06292', '#a1887f', '#ba68c8', '#9575cd', '#7986cb', '#64b5f6', '#4fc3f7', '#4dd0e1', '#4db6ac', '#81c784', '#aed581', '#ff8a65', '#d4e157', '#ffd54f', '#ffb74d', '#90a4ae');
                foreach ($users as $user) {
                    $this->user->model_data = array('profile_color' => $profile_colors[rand(0, 25)]);
                    $this->user->model_data['name'] = $user->name;
                    $this->user->model_data['display_name'] = $user->display_name;
                    $this->user->update($user->id);
                }
            }

            // changing site lived year value.
            $lived_date = explode("-", $this->settings->site_lived_year);
            if (count($lived_date) < 2) {
                $admin = $this->user->get_single(array('role' => 'admin'));

                // updating site_lived_year in database.
                $this->configuration->model_data = array('site_lived_year' => date("Y-m-d", strtotime($admin->created_at)));
                $this->configuration->update();
            }

            if ($this->settings->current_version < 5) {
                $update_config_data = array();
                $update_config_data['enable_query_strings'] = 'TRUE';
                $update_config_data['time_reference'] = 'UTC';
                $update_config_data['language_version'] = date("YmdHis", now());
                $update_config_data['application_token'] = random_string('alnum', 20);
                $update_config_data['log_threshold'] = 1;

                // updating config options
                $this->config->config_update($update_config_data);
            }

            $this->_update_languages();

            $files = array('desktop_lang', 'chat_lang', 'conf_lang', 'user_lang');
            $this->sync_lanuages($files);
        }

        return $this->output->set_content_type('application/json')->set_output($this->return_json($response));
    }

    /*
     * Update languages record and files.
     */

    private function _update_languages() {
        $entered_languages = $this->language->get_all();
        if (empty($entered_languages)) {
            // inserting english language in database
            $this->language->model_data = array('lang_name' => 'English', 'machine_name' => 'english', 'lang_status' => 'unpublish');
            if ($this->config->item('language') == 'english') {
                $this->language->model_data['lang_status'] = 'publish';
            }

            $this->language->insert();

            $this->load->helper('directory');
            $languages_path = APPPATH . 'language';
            $languages = directory_map($languages_path, 1);

            foreach ($languages as $language) {
                $machine_name = str_replace('/', '', stripslashes($language));
                if (!in_array($machine_name, array('english', 'index.html'))) {
                    $langdir_path = APPPATH . 'language/' . $machine_name;
                    $english_dir_path = APPPATH . 'language/english';
                    $lang_files = get_filenames($english_dir_path);

                    foreach ($lang_files as $file) {
                        $source_file = $english_dir_path . '/' . $file;
                        $target_file = $langdir_path . '/' . $file;

                        if (file_exists($target_file) === false) {
                            copy($source_file, $target_file);
                        }
                    }

                    $this->language->model_data = array('lang_name' => ucfirst($machine_name), 'machine_name' => $machine_name, 'lang_status' => 'unpublish');
                    if ($this->config->item('language') == $machine_name) {
                        $this->language->model_data['lang_status'] = 'publish';
                    }
                    $this->language->insert();
                }
            }
        } else {
            foreach ($entered_languages as $language) {
                if ($language->machine_name != 'english') {
                    $langdir_path = APPPATH . 'language/' . $language->machine_name;
                    $english_dir_path = APPPATH . 'language/english';
                    $lang_files = get_filenames($english_dir_path);

                    foreach ($lang_files as $file) {
                        $source_file = $english_dir_path . '/' . $file;
                        $target_file = $langdir_path . '/' . $file;

                        if (file_exists($target_file) === false) {
                            copy($source_file, $target_file);
                        }
                    }
                }
            }
        }
    }
}

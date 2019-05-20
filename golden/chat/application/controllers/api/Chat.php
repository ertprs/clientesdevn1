<?php

/*
 * Controller to manage all caht related actions
 * Author: Pukhraj Prajapat (pukhraj.prajapat@g-axon.com)
 */

class Chat extends CP_AppController {
    /*
     * Calling parent constructor
     */

    public function __construct() {
        parent::__construct();
    }

    /*
     * this function will return all chat list.
     * 
     * @param $user_id
     * 
     * @return all chat list or error if any.
     */

    function index() {
        $user_id = $this->input->get('user_id');
        $response = array('result' => 'failed');
        $response['language_version'] = $this->config->item('language_version');

        if ($this->valid_token) {
            $recent_chats = $this->chat_session->get_recent_chats($user_id);

            $response['result'] = 'success';
            $response['chats'] = $recent_chats;
        } else {
            $response['error'] = $this->lang->line('invalid_token');
        }

        return $this->output->set_content_type('application/json')->set_output($this->return_json($response));
    }

    /*
     * This function will use to get all closed chats.
     * 
     * @param $user_id
     * 
     * @return json data of requests
     */

    function closed() {
        $user_id = $this->input->get('user_id');
        $excepts = ($this->input->post('excepts')) ? $this->input->post('excepts') : array();
        $response = array('result' => 'failed');
        $response['language_version'] = $this->config->item('language_version');

        if ($this->valid_token) {
            // getting closed chat list
            $closed_chats = $this->chat_session->get_closed_chats($user_id, $excepts);

            $response['result'] = 'success';
            $response['chats'] = $closed_chats;
        } else {
            $response['error'] = $this->lang->line('invalid_token');
        }

        return $this->output->set_content_type('application/json')->set_output($this->return_json($response));
    }

    /*
     * This function will return cureent server time.
     * 
     * @return milliseconds
     */

    function get_server_time() {
        $response = array('result' => 'failed');
        $api_version = $this->input->get('api_version');

        if ($api_version == API_VERSION) {
            $response['result'] = 'success';
            $response['milliseconds'] = $this->get_time_miliseconds();
            $response['language_version'] = $this->config->item('language_version');
        } elseif ($api_version > API_VERSION) {
            $response['error'] = 'It seems like that your Chatbull web app is running on an old version ' . CHATBULL_VERSION . '. You must need to update the web version to latest to make this application work.';
        } else {
            $response['error'] = 'Your Chatbull web version is ahead of your android application. Please update your android application to the latest to make it work.';
        }

        return $this->output->set_content_type('application/json')->set_output($this->return_json($response));
    }

    /*
     * This function will update mobile_last_activity_time for user
     * 
     * @param $user_id
     * 
     * @return error success
     */

    function update_last_activity() {
        $user_id = $this->input->get('user_id');

        $response = array('result' => 'failed');
        $response['language_version'] = $this->config->item('language_version');

        if ($this->valid_token) {
            // closing closable sessions
            $this->user->closeClosedSessions();

            // updating last activity time of logged in user
            $this->user->model_data = array('mobile_last_activity_time' => date("Y-m-d H:i:s", now()));
            $this->user->update($user_id);
            $response['result'] = 'success';
        } else {
            $response['error'] = $this->lang->line('invalid_token');
        }

        return $this->output->set_content_type('application/json')->set_output($this->return_json($response));
    }

    /*
     * This function will forward chat to another agent.
     * 
     * @param $user_id
     * 
     * @param Post params = agent_ids, csid
     * 
     * @return $error or $message
     */

    function forward() {
        $user_id = $this->input->get('user_id');
        $response = array('result' => 'failed');
        $response['language_version'] = $this->config->item('language_version');

        if ($this->valid_token) {
            //check if data is valid or not
            $this->form_validation->set_rules($this->chat_request->validation_rules['agent_forward']);

            if ($this->form_validation->run() === true) {
                $chat_session_id = $this->input->post('csid');

                $this->chat_request->model_data = $this->input->post(array('agent_ids'));
                $this->chat_request->model_data['chat_session_id'] = $chat_session_id;
                $this->chat_request->model_data['request_type'] = 'forward';
                $this->chat_request->model_data['message'] = $this->lang->line('get_forwarded_request');

                $visitor = $this->chat_user->get_visitor($chat_session_id);

                $output = $this->chat_request->forward_to_agents($user_id, $visitor->id, $this->input->post('device_id'));
                if ($output) {
                    $response['result'] = 'success';
                    $response['message'] = $this->lang->line('chat_forwarded');
                } else {
                    $response['error'] = $this->lang->line('process_error');
                }
            } else {
                $response['error'] = validation_errors();
            }
        } else {
            $response['error'] = $this->lang->line('invalid_token');
        }

        return $this->output->set_content_type('application/json')->set_output($this->return_json($response));
    }

    /*
     * This function will forward chat to departments.
     * 
     * @param $user_id
     * 
     * @param Post params = department_ids, csid
     * 
     * @return $error or $message
     */

    function forward_to_departments() {
        $user_id = $this->input->get('user_id');
        $response = array('result' => 'failed');
        $response['language_version'] = $this->config->item('language_version');

        if ($this->valid_token) {
            //check if data is valid or not
            $this->form_validation->set_rules($this->chat_request->validation_rules['deprtment_forward']);

            if ($this->form_validation->run() === true) {
                $chat_session_id = $this->input->post('csid');

                $this->chat_request->model_data = $this->input->post(array('department_id'));
                $this->chat_request->model_data['chat_session_id'] = $chat_session_id;
                $this->chat_request->model_data['request_type'] = 'forward';
                $this->chat_request->model_data['message'] = $this->lang->line('get_forwarded_request');

                $visitor = $this->chat_user->get_visitor($chat_session_id);

                $output = $this->chat_request->forward_to_deprtments($user_id, $visitor->id, $this->input->post('device_id'));
                if ($output === 'no-agents') {
                    $response['error'] = $this->lang->line('no_departments_agents');
                } elseif ($output === true) {
                    $response['result'] = 'success';
                    $response['message'] = $this->lang->line('chat_forwarded');
                } else {
                    $response['error'] = $this->lang->line('process_error');
                }
            } else {
                $response['error'] = validation_errors();
            }
        } else {
            $response['error'] = $this->lang->line('invalid_token');
        }

        return $this->output->set_content_type('application/json')->set_output($this->return_json($response));
    }

    /*
     * This function will end (close) chat.
     * 
     * @param Get params = csid
     * 
     * @return $error or $message
     */

    function end() {
        $response = array('result' => 'failed');

        $chat_session_id = $this->input->get('csid');
        $response['language_version'] = $this->config->item('language_version');

        if ($this->valid_token) {
            if ($chat_session_id) {
                $this->chat_session->model_data['session_status'] = 'closed';
                if ($this->chat_session->update_chat_session($chat_session_id)) {
                    $response['result'] = 'success';
                    $response['message'] = $this->lang->line('chat_closed');
                } else {
                    $response['error'] = $this->lang->line('process_error');
                }
            } else {
                $response['error'] = $this->lang->line('missing_chat_session_id');
            }
        } else {
            $response['error'] = $this->lang->line('invalid_token');
        }

        return $this->output->set_content_type('application/json')->set_output($this->return_json($response));
    }

    /*
     * This function will hold chat.
     * 
     * @param Get params = csid
     * 
     * @return $error or $message
     */

    function hold() {
        $response = array('result' => 'failed');

        $chat_session_id = $this->input->get('csid');
        $response['language_version'] = $this->config->item('language_version');

        if ($this->valid_token) {
            if ($chat_session_id) {
                $this->chat_session->model_data['session_status'] = 'on-hold';
                if ($this->chat_session->update_chat_session($chat_session_id)) {
                    $response['result'] = 'success';
                    $response['message'] = $this->lang->line('hold_chat');
                } else {
                    $response['error'] = $this->lang->line('process_error');
                }
            } else {
                $response['error'] = $this->lang->line('missing_chat_session_id');
            }
        } else {
            $response['error'] = $this->lang->line('invalid_token');
        }

        return $this->output->set_content_type('application/json')->set_output($this->return_json($response));
    }

    /*
     * This function will return agent list which are not joind this chat session
     * 
     * @param Get params = csid
     * @return $agentListData (list of agents) or error
     */

    public function agents_list() {
        $response = array('result' => 'failed');

        $chat_session_id = $this->input->get('csid');
        $response['language_version'] = $this->config->item('language_version');

        if ($this->valid_token) {
            if ($chat_session_id) {
                $chat_session = $this->chat_session->get_single(array('id' => $chat_session_id));
                $agents_list = $this->chat_session->get_available_agents($chat_session);

                $response['result'] = 'success';
                $response['agents_list'] = $agents_list;
            } else {
                $response['error'] = $this->lang->line('missing_chat_session_id');
            }
        } else {
            $response['error'] = $this->lang->line('invalid_token');
        }

        return $this->output->set_content_type('application/json')->set_output($this->return_json($response));
    }

    /*
     * This function will return departments list
     * 
     * @param Get params = csid
     * 
     * @return $departmentListData (list of departments) or error
     */

    public function departments_list() {
        $response = array('result' => 'failed');
        $response['language_version'] = $this->config->item('language_version');

        if ($this->valid_token) {
            $chat_session_id = $this->input->get('csid');
            if ($chat_session_id) {
                $chat_session = $this->chat_session->get_single(array('id' => $chat_session_id));
                $departments_list = $this->chat_session->get_available_departments($chat_session);

                $response['result'] = 'success';
                $response['departments_list'] = $departments_list;
            } else {
                $response['error'] = $this->lang->line('missing_chat_session_id');
            }
        } else {
            $response['error'] = $this->lang->line('invalid_token');
        }

        return $this->output->set_content_type('application/json')->set_output($this->return_json($response));
    }

    /*
     * This function will use to send chat message.
     * 
     * @return $message_id or error
     */

    public function send_message() {
        $response = array('result' => 'failed');
        $response['language_version'] = $this->config->item('language_version');

        if ($this->valid_token) {
            //check if data is valid or not
            $this->form_validation->set_rules($this->chat_message->validation_rules['operator_message']);
            if ($this->form_validation->run() === true) {
                $chat_session_id = $this->input->post('csid');

                // getting visitor
                $visitor = $this->chat_user->get_visitor($chat_session_id);

                $this->chat_message->model_data = $this->input->post(array('chat_message', 'message_status', 'sender_id', 'sort_order'));
                $local_id = 'am' . $this->input->post('sender_id') . $this->input->post('sort_order');
                $this->chat_message->model_data['local_id'] = $local_id;
                $this->chat_message->model_data['chat_session_id'] = $chat_session_id;

                $message_id = $this->chat_message->add_message($local_id);
                if ($message_id and is_object($message_id) === false) {
                    $sender = $this->user->get_single(array('id' => $this->input->post('sender_id')));
                    // sending push notification
                    $message = array();
                    $notifications = $this->user->get_notifications($sender->id);
                    $message['notificationsCounter'] = count($notifications);
                    $message['unreadSession'] = $this->chat_session->get_running_session($sender->id);

                    $message['type'] = 'message';
                    $message['senderId'] = $sender->id;
                    $message['name'] = $visitor->name;
                    $message['profile_color'] = $visitor->profile_color;
                    $message['profilePic'] = $this->media->get_thumbnail($sender->profile_pic, PROFILE_PICS, $sender->email, '404');
                    $message['message'] = $this->input->post('chat_message');
                    $message['message_type'] = 'text';
                    $message['message_meta'] = '';
                    $message['displayMessage'] = sprintf($this->lang->line('get_new_message'), $sender->name);
                    $message['chatSessionId'] = $chat_session_id;
                    $message['sortOrder'] = $this->input->post('sort_order');
                    $message['messageId'] = $message_id;

                    push_notification($sender->id, $message, 1, $this->input->post('device_id'));

                    $response['messageId'] = $message_id;
                    $response['sortOrder'] = $this->input->post('sort_order');
                } else if ($message_id and is_object($message_id)) {
                    $response['messageId'] = $message_id->id;
                    $response['sortOrder'] = $this->input->post('sort_order');
                }

                $response['result'] = 'success';
            } else {
                $response['error'] = validation_errors();
            }
        } else {
            $response['error'] = $this->lang->line('invalid_token');
        }

        return $this->output->set_content_type('application/json')->set_output($this->return_json($response));
    }

    /*
     * Upload user file and add in chat
     * 
     */

    public function upload_file() {
        $response = array('result' => 'failed');
        $response['language_version'] = $this->config->item('language_version');

        if ($this->valid_token) {
            //check if data is valid or not
            $this->form_validation->set_rules($this->chat_message->validation_rules['new_base64file']);
            if ($this->form_validation->run() === true) {
                $chat_session_id = $this->input->post('csid');

                $upload_path = UPLOAD_DIR . CHATFILES_DIR;
                $extension_lenth = strlen(strrchr($this->input->post('filename'), '.'));
                $filename_lenth = strlen($this->input->post('filename'));

                $file_name = $chat_session_id . date("YmdHis", now()) . '_' . substr($this->input->post('filename'), 0, ($filename_lenth - $extension_lenth));

                $allowed_types = str_replace(".", "", str_replace(" ", "", $this->settings->agent_allowed_filetypes));
                $config = array("upload_path" => "./" . $upload_path, "allowed_types" => substr($allowed_types, 1), "file_name" => $file_name);
                $filedata = $this->media->upload_media('shared_file', $config);

                if (isset($filedata['error'])) {
                    $extra_data = implode(" - ", $_FILES['shared_file']);
                    $response['error'] = $filedata['error'] . $extra_data;
                } else {
                    $uploaded_fileurl = upload_url(CHATFILES_DIR . $filedata['file_name']);

                    // getting visitor
                    $visitor = $this->chat_user->get_visitor($chat_session_id);

                    $this->chat_message->model_data = $this->input->post(array('chat_message', 'message_status', 'sender_id', 'sort_order'));
                    $local_id = 'am' . $this->input->post('sender_id') . $this->input->post('sort_order');
                    $this->chat_message->model_data['local_id'] = $local_id;
                    $this->chat_message->model_data['chat_session_id'] = $chat_session_id;
                    $this->chat_message->model_data['message_type'] = 'file';
                    $this->chat_message->model_data['chat_message'] = $uploaded_fileurl;
                    $this->chat_message->model_data['message_meta'] = json_encode($this->input->post(array('filename', 'filetype', 'filesize')));

                    $message_id = $this->chat_message->add_message($local_id);
                    if ($message_id and is_object($message_id) === false) {
                        $sender = $this->user->get_single(array('id' => $this->input->post('sender_id')));
                        // sending push notification
                        $message = array();
                        $notifications = $this->user->get_notifications($sender->id);
                        $message['notificationsCounter'] = count($notifications);
                        $message['unreadSession'] = $this->chat_session->get_running_session($sender->id);

                        $message['type'] = 'message';
                        $message['senderId'] = $sender->id;
                        $message['name'] = $visitor->name;
                        $message['profile_color'] = $visitor->profile_color;
                        $message['profilePic'] = $this->media->get_thumbnail($sender->profile_pic, PROFILE_PICS, $sender->email, '404');
                        $message['message'] = $this->input->post('chat_message');
                        $message['message_type'] = 'file';
                        $message['message_meta'] = $this->chat_message->model_data['message_meta'];
                        $message['displayMessage'] = sprintf($this->lang->line('get_new_message'), $sender->name);
                        $message['chatSessionId'] = $chat_session_id;
                        $message['sortOrder'] = $this->input->post('sort_order');
                        $message['messageId'] = $message_id;

                        push_notification($sender->id, $message, 1, $this->input->post('device_id'));

                        $response['messageId'] = $message_id;
                        $response['chat_message'] = $uploaded_fileurl;
                        $response['sortOrder'] = $this->input->post('sort_order');
                    } else if ($message_id and is_object($message_id)) {
                        $response['messageId'] = $message_id->id;
                        $response['chat_message'] = $message_id->chat_message;
                        $response['sortOrder'] = $this->input->post('sort_order');
                    }
                }

                $response['result'] = 'success';
            } else {
                $response['error'] = validation_errors();
            }
        } else {
            $response['error'] = $this->lang->line('invalid_token');
        }

        return $this->output->set_content_type('application/json')->set_output($this->return_json($response));
    }

    /*
     * This function will return all mesages in current chat session.
     * 
     * @param GEt Params csid
     * 
     * @return $chatMessagesData (list of chat message) or error
     */

    public function session() {
        $response = array('result' => 'failed');

        $chat_session_id = $this->input->get('csid');
        $response['language_version'] = $this->config->item('language_version');

        if ($this->valid_token) {
            $agent = $this->chat_user->get_agent($chat_session_id);
            $chat_session = $this->chat_session->get_single(array('id' => $chat_session_id));
            $response['session_status'] = $chat_session->session_status;

            // mark notification as read
            $this->user->mark_notification_read(array('chat_session_id' => $chat_session_id, 'notification_type' => 'message'));

            $messages = array();
            $last_id = 0;

            $messages_list = $this->chat_message->get_chat_messages($chat_session_id);

            if (count($messages_list) > 0) {
                $last_message = end($messages_list);
                $last_id = $last_message->id;
            }

            $notifications = $this->user->get_notifications($agent->id);
            $response['notifications_counter'] = count($notifications);
            $response['unread_session'] = $this->chat_session->get_running_session($agent->id);
            $response['messages_list'] = $messages_list;

            if ($last_id > 0) {
                $this->chat_message->mark_message_read($chat_session_id, $last_id);
            }

            $response['result'] = 'success';
        } else {
            $response['error'] = $this->lang->line('invalid_token');
        }

        return $this->output->set_content_type('application/json')->set_output($this->return_json($response));
    }

    /*
     * Get visitor details
     */

    function get_visitor() {
        $response = array('result' => 'failed');
        $response['language_version'] = $this->config->item('language_version');

        if ($this->valid_token) {
            $chat_session_id = $this->input->get('csid');
            $visitor = $this->chat_user->get_visitor($chat_session_id);

            $response['result'] = 'success';
            $response['visitor'] = $visitor;
        } else {
            $response['error'] = $this->lang->line('invalid_token');
        }

        return $this->output->set_content_type('application/json')->set_output($this->return_json($response));
    }

    /*
     * This function will use to get offline requests
     * 
     * @param $user_id
     */

    function get_offline_requests() {
        $user_id = $this->input->get('user_id');
        $response = array('result' => 'failed');
        $response['language_version'] = $this->config->item('language_version');

        if ($this->valid_token) {
            // gettting new chat requests
            $offline_requests = array();
            $offline_requests = $this->orequest->get_offline_requests($user_id);

            $response['offline_requests'] = $offline_requests;
            $response['result'] = 'success';
        } else {
            $response['error'] = $this->lang->line('invalid_token');
        }

        return $this->output->set_content_type('application/json')->set_output($this->return_json($response));
    }

    /*
     * This function will use to get conversations of offline request
     * 
     * @param $request_id
     * 
     * @return json array of conversations
     */

    function get_offline_request() {
        $request_id = $this->input->get('request_id');

        $response = array('result' => 'failed');
        $response['language_version'] = $this->config->item('language_version');

        if ($this->valid_token) {
            // mark notification as read
            $this->user->mark_notification_read(array('request_id' => $request_id, 'notification_type' => 'offline_request'));

            $conversations = $this->orequest->get_conversation($request_id);
            $response['conversations'] = $conversations;
            $response['result'] = 'success';
        } else {
            $response['error'] = $this->lang->line('invalid_token');
        }

        return $this->output->set_content_type('application/json')->set_output($this->return_json($response));
    }

    /*
     * This function will use to reply of online request
     * 
     * @param $request_id
     * 
     * @param Post `sender_id`, `message`
     * 
     * @return $reply_id or error
     */

    function reply_offline_request() {
        $request_id = $this->input->get('request_id');
        $response = array('result' => 'failed');
        $response['language_version'] = $this->config->item('language_version');

        if ($this->valid_token) {
            //check if data is valid or not
            $this->form_validation->set_rules($this->orequest->validation_rules['reply']);
            if ($this->form_validation->run() === true) {
                $this->orequest->model_data = $this->input->post(array('sender_id', 'message'));
                $this->orequest->model_data['request_id'] = $request_id;
                $this->orequest->model_data['message_status'] = 'unread';
                $this->orequest->model_data['conversation_type'] = 'reply';

                $request = $this->orequest->get_request_data($request_id);
                if ($request->request_status == 'pending') {
                    $reply_id = $this->orequest->reply_request($request_id);
                    if ($request_id) {
                        $response['replyId'] = $reply_id;
                        $response['currentId'] = $this->input->post('current_id');
                    } else {
                        $response['error'] = $this->lang->line('process_error');
                    }
                } else {
                    $response['error'] = $this->lang->line('request_opened');
                }

                if (isset($response['replyId'])) {
                    $sender = $this->user->get_single(array('id' => $this->input->post('sender_id')));
                    // send email to visitor
                    $template_file = 'request_reply';
                    $to = $request->email;
                    $subject = 'Reply your request';
                    $link = site_url('d=visitors&c=orequests&m=index&rid=' . convert_to_hash($request->id));
                    $data = array('link' => $link, 'name' => $request->name, 'sender' => $sender, 'from_email' => $sender->email, 'from_name' => $sender->name, 'message' => $this->input->post('message'));
                    send_template_email($template_file, $to, $subject, $data);

                    $response['result'] = 'success';
                }
            } else {
                $response['error'] = validation_errors();
            }
        } else {
            $response['error'] = $this->lang->line('invalid_token');
        }

        return $this->output->set_content_type('application/json')->set_output($this->return_json($response));
    }

    /*
     * This function will use to get online requests
     * 
     * @param $user_id
     * 
     * @return Json of array
     */

    function get_online_requests() {
        $user_id = $this->input->get('user_id');
        $response = array('result' => 'failed');
        $response['language_version'] = $this->config->item('language_version');

        if ($this->valid_token) {
            // gettting new chat requests
            $new_requests = $this->chat_request->new_requests($user_id);

            $response['new_requests'] = $new_requests;
            $response['result'] = 'success';
        } else {
            $response['error'] = $this->lang->line('invalid_token');
        }

        return $this->output->set_content_type('application/json')->set_output($this->return_json($response));
    }

    /*
     * This function will use to get details of online request
     * 
     * @param $request_id
     * 
     * @return json object of details
     */

    function get_online_request() {
        $request_id = $this->input->get('request_id');
        $response = array('result' => 'failed');
        $response['language_version'] = $this->config->item('language_version');

        if ($this->valid_token) {
            $request = $this->chat_request->get_request($request_id);

            if ($request) {
                $response['request'] = $request;
                $response['result'] = 'success';
            } else {
                $response['error'] = 'Invalid Request Id.';
            }
        } else {
            $response['error'] = $this->lang->line('invalid_token');
        }

        return $this->output->set_content_type('application/json')->set_output($this->return_json($response));
    }

    /*
     * This function will use to accept online request
     * 
     * @param $request_id
     * 
     * @return 
     */

    function accept_online_request() {
        $request_id = $this->input->get('request_id');
        $response = array('result' => 'failed');
        $response['language_version'] = $this->config->item('language_version');

        if ($this->valid_token) {
            $request = $this->chat_request->get_single(array('id' => $request_id));

            // mark notification as read
            $this->user->mark_notification_read(array('chat_session_id' => $request->chat_session_id, 'notification_type' => 'online_request'));

            // get chat session
            $chat_session = $this->chat_session->get_single(array('id' => $request->chat_session_id));
            if ($chat_session->session_status == 'requested' or $chat_session->session_status == 'forward') {
                if ($request->request_status == 'pending') {
                    $this->chat_request->accept_request($request);

                    $response['settings'] = $this->settings;
                    $response['result'] = 'success';
                } else {
                    $response['error'] = $this->lang->line('request_expired');
                }
            } else {
                $response['error'] = $this->lang->line('request_expired');
                $this->close_requests($request->chat_session_id);
            }
        } else {
            $response['error'] = $this->lang->line('invalid_token');
        }

        return $this->output->set_content_type('application/json')->set_output($this->return_json($response));
    }

    /*
     * Get current lang labels
     */

    function get_lang_labels() {
        $response = array('result' => 'success');
        $response['language_version'] = $this->config->item('language_version');

        if ($this->valid_token) {
            $lang_labels = $this->lang->load('mobile', '', TRUE);
            $response['lang_labels'] = $lang_labels;
        } else {
            $response['error'] = $this->lang->line('invalid_token');
        }

        return $this->output->set_content_type('application/json')->set_output($this->return_json($response));
    }

}

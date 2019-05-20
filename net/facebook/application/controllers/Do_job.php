<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * 
 * @extends CI_Controller
 */
class Do_job extends CI_Controller {
	/**
	 * __construct function.
	 * 
	 * @access public
	 * @return void
	 */
	public function __construct() {	
		parent::__construct();
		$this->load->database();
	}
	
	public function check_expired_accounts() {
		$this->load->model("User_Model");
		$this->User_Model->checkExpiredAccounts();
	}
	
	public function check_proxies(){
		// Get and test proxies
		$this->load->library('Cron_lib');
		if($this->cron_lib->lock("check_proxies")) return false;

		$this->load->model("Proxy_Model");
		$availabelProxies = $this->Proxy_Model->getAllProxies();
		$proxiesToRemove = array();
		foreach ($availabelProxies as $p) {
			$waitTimeoutInSeconds = 10; 
			if($fp = @fsockopen($p['host'],$p['port'],$errCode,$errStr,$waitTimeoutInSeconds)){
			   fclose($fp);
			} else {
			   $proxiesToRemove[] = $p['host'];
			}
		}
		// Remove failed proxies
		foreach ($proxiesToRemove as $ptr) {
			$this->Proxy_Model->setHost($ptr);
			$this->Proxy_Model->deleteByIp();
		}
	}

	public function runServices(){
		
		$services = array();
		$services[]["post"] = "schedules/schedule_run";

		$services[]["join_groups"]	= "join_groups/schedule_run";
		$services[]["invite_joingroups"]	= "invite_join_groups/schedule_run";
		
		if(KPMIsActive("comments")){
			$services[]["comments"]="comments/schedule_run";
		}

		if(KPMIsActive("autolike")){
			$services[]["autolike"]="autolike/schedule_run";
		}

		if(KPMIsActive("join_groups")){
			$services[]["join_groups"]="join_groups/schedule_run";
		}

		if(KPMIsActive("invite_join_groups")){
			$services[]["invite_join_groups"]="invite_join_groups/schedule_run";
		}

		$services = implode(',', $this->input->get('services'));
		foreach ($services as $service) {
			$ch = curl_init();
			curl_setopt($ch, CURLOPT_URL, base_url($services[$service])); 
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
			curl_setopt($ch, CURLOPT_TIMEOUT, 1);
			echo curl_exec($ch);
			curl_close($ch);
		}
	}
}

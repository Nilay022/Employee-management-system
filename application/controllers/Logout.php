<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Logout extends CI_Controller {
	
		public function __construct()
	{
		parent::__construct();
		$this->load->helper('cookie');
		$this->load->model('Work');
		date_default_timezone_set('Asia/Kolkata');
	}


	public function logout()
	{
		$data = $this->session->userdata('user');
		$id = $data['eid'];
		$name = $data['name'];
		$log['description'] = 'Employee has been logged out [ id ='.$id. ']';
		$log['name'] = $name;
		$log['date'] = date("Y-m-d H:i:s");
		$res = $this->Work->inputdata('activity_log',$log);
		if($res == true){	
		$this->session->unset_userdata('user');
		header('location: index');
		delete_cookie('email');
		delete_cookie('password');
		}
	}

	public function logouthr()
	{
		$this->session->unset_userdata('hr');
		header('location: admin');

	}

}
?>
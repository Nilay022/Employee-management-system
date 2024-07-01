<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('cookie');
		$this->load->model('Work');
	}

    public function hrpanel()
	{
		if(!$this->session->userdata('hr'))
		{
		 	header('Location: admin');
		}
		else
		{
		$data['employee'] = $this->Work->visitor_count('employee_detail');
		$data['total'] = $this->Work->visitor_count('leave_record');
		$data['approve'] = $this->Work->visitor_count1('leave_record','status = 1');
		$data['pending'] = $this->Work->visitor_count1('leave_record','status = 0');
		$data['note'] = $this->Work->visitor_count1('notification','status = 0');	
		$data['des'] = $this->Work->dataget('notification',"status = 0");
		$data['emp'] = $this->Work->dataget('employee_detail',"emp_status = 1");
		$data['task'] = $this->Work->tasklistemp('status = 0 and task_assigner.create_id != task_assigner.assign_id');		
		$data['massage'] = $this->Work->messagehr();	
		$this->load->view('hrpanel',$data);
		}
	}

	public function home()
	{
		if(!$this->session->userdata('user'))
		{
		 	$this->load->view('emp_login');
		}
		else
		{
		$users=$this->session->userdata('user');
		$id = $users['eid'];
		$data['total']=$this->Work->visitor_count2('total_leave','employee_detail',"eid=$id");
		$data['remaining']=$this->Work->visitor_count2('remaining_leave','employee_detail',"eid=$id");
		$data['approve'] = $this->Work->visitor_count1('leave_record',"status = 1 and eid=$id");
		$data['pending'] = $this->Work->visitor_count1('leave_record',"status = 0 and eid=$id");
		$data['attendance'] = $this->Work->visitor_count1('attendance',"eid=$id and present = 1 and date like '".date('Y-m')."%'");
		$data['detail'] =$this->Work->emp_data("eid=$id");
		$data['massage'] = $this->Work->joinmessage("eid=$id");
		$this->load->view('home',$data);
		
		}
	}

	public function read()
	{
		$this->Work->read("notification");
		header('Location:'.base_url().'hrpanel');
	}

	public function unread()
	{
		header('Location:'.base_url().'hrpanel');
	}

	public function readed($nid)
	{
		$nid =  $this->uri->segment(2);
		$res = $this->Work->status('status','1',"nid=$nid",'notification');
		if($res == true)
		{
		header('Location:'.base_url().'leave_list');
		}
	}

}
?>

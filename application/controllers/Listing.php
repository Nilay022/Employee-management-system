<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Listing extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Work');
	}

	public function emp_list()
	{
		if($this->session->userdata('user')){

			if($this->session->userdata('user')['mid'] == 1 && $this->session->userdata('user')['view_id'] == 1)
			{
				$data['details']=$this->Work->dept_list();
		    	$this->load->view('emp_list',$data);	
			}
			else{
				header('Location: index');
			}
		}
			elseif($this->session->userdata('hr'))
			{
				
				$data['details']=$this->Work->dept_list();
			    $this->load->view('emp_list',$data);
			}

		else
		{
			$this->load->view('emp_login');
		}
	}

	public function leave()
	{
		if(!$this->session->userdata('hr'))
		{
		 	$this->load->view('hr_login');
		}
		else
		{
			$data['record']=$this->Work->getdata('leave_record');
			$data['leave']=$this->Work->joinc();
			$this->load->view('leave_list',$data);
		}
	}

	public function leaveemp()
	{
		if(!$this->session->userdata('user'))
		{
		 	$this->load->view('hr_login');
		}
		else
		{
			$users=$this->session->userdata('user');
			$id = $users['eid'];
			// $data['leave']=$this->Work->getdata('leave_type');
			$data['emply']=$this->Work->join("eid = $id");
			$this->load->view('list_leave_emp',$data);
	    }
	}

	public function dept_list()
	{
		if($this->session->userdata('user')){

			if($this->session->userdata('user')['mid'] == 2 && $this->session->userdata('user')['view_id'] == 1)
			{
				 $data['dept'] = $this->Work->dept_list();
				 $data['department'] = $this->Work->getdata('department');
				 $this->load->view('department_list',$data);
			}
			else
			{	
				header('Location: index');
			}

		} 
			elseif($this->session->userdata('hr'))
				 {
				 	 $data['dept'] = $this->Work->dept_list();
					 $data['department'] = $this->Work->getdata('department');
					 $this->load->view('department_list',$data);
				 }
		else
		{
			header('Location: emp_login');
		}
	}

	public function activity_log()
	{
		$data['record'] = $this->Work->getdata('activity_log');
		$this->load->view('record',$data);
	}



}
?>
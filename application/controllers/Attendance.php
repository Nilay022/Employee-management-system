<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Attendance extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Work');
		date_default_timezone_set('Asia/Kolkata');
	}

	public function attendance_page()
	{
		if($this->session->userdata('hr'))
		{
		$data['emp'] = $this->Work->getdata('employee_detail');
		$this->load->view('attendance_page',$data);
		}
		else
		{
			header('Location: admin');
		}
	}

	public function attendance_add()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules('date','date','required|is_unique[attendance.date]');
		if($this->form_validation->run() === FALSE)
 	 	{ 
 	 		$dat['data'] = array(
				'date' => $this->input->post('date',true));
			    $this->load->view('attendance_page', $dat);
 	 	}
		
		$date = $this->input->post('date');
		$eid = $this->input->post('eid');
		$value = $this->input->post('present');	
		for ($i=0; $i < count($eid); $i++) { 
			if(in_array($eid[$i] ,$value)){
				$data = 1;
			}
			else{
				$data = 0;
			}
			$response  = array(
				'eid' => $eid[$i],
				'present' => $data,
				'date' => $date,		
			);
			// print_r($response); 
			$res = $this->Work->inputdata('attendance',$response);  		                   
		} 
		if ($res == true) {
			header('location: attendance_view');
		}
	}

	public function attendance_viewpage()
	{ 
		if($this->session->userdata('hr'))
		{
			if($date = $this->input->post('date')){
				$data['date'] = $this->input->post('date');
				// $data['attendance'] = $this->Work->visitor_count1('attendance',"present = 1 and date like '".date('Y-m')."%'");
				$data['record'] = $this->Work->getdata('employee_detail');
				$data['attendance'] = $this->Work->attendance_search($date);
				$this->load->view('attendance_viewpage',$data);

			}
			else
			{	$data['date'] = date('Y-m');
				$data['attendance'] = $this->Work->getdata('attendance');
				$data['record'] = $this->Work->getdata('employee_detail');
				$this->load->view('attendance_viewpage',$data);
			}
		}
		else
		{
			header('Location: admin');
		}

	}
}
?>
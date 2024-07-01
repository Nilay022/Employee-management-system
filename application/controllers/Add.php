<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Add extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('cookie');
		$this->load->model('Work');
		date_default_timezone_set('Asia/Kolkata');
	}


	public function addemployee()

	{  
         $this->load->library('form_validation');
		 $this->form_validation->set_rules('name','full name','required');
 	   	 $this->form_validation->set_rules('number','Mobile no.','required|alpha_numeric');
	 	 $this->form_validation->set_rules('password','password','required|min_length[5]');
	 	 $this->form_validation->set_rules('email','email','required|valid_email|is_unique[employee_detail.email]');
 	 	 $this->form_validation->set_rules('education','education','required');
 	 	 $this->form_validation->set_rules('total_lv','leave No','required');
 	 	 $this->form_validation->set_rules('remain_lv','remaining leave No','required|alpha_numeric');
 	 	 $this->form_validation->set_rules('skill','skill','required');
 		 $this->form_validation->set_rules('address','Address','required');
 	     // $this->form_validation->set_rules('image','profile photo','required');
 		 								
 	 	if($this->form_validation->run() === FALSE)
 	 	{ 

			    $dat['empl'] = array(
				'name' => $this->input->post('name',true),
				'dept' => $this->input->post('dept',true),
				'role' => $this->input->post('role',true),								
				'email'=>$this->input->post('email',true),
				'password'=>$this->input->post('password',true),
				'number'=>$this->input->post('number',true),
				'education'=>$this->input->post('education',true),
				'total_lv'=>$this->input->post('total_lv',true),
				'remain_lv'=>$this->input->post('remain_lv',true),
				'skill'=>$this->input->post('skill',true),
				'address'=>$this->input->post('address',true),
				 'image'=>$this->input->post('image'),
				$upload_data = $this->input->post('image',true), 
  				'image' => $upload_data['file_name']
				 );

			     $this->load->view('employee', $dat);
		}
			
			else
			{
				$config['allowed_types'] = 'jpg|png|gif|TIFF';
		        $config['upload_path'] = './image/';
		        $this->load->library('upload',$config);
				if(!$this->upload->do_upload('image'))
				{
				$error = array('error' => $this->upload->display_errors());
				$this->load->view('employee', $error);

				}	
				$data['name']=$this->input->post('name',true);
				$data['department']=$this->input->post('dept',true);
				$data['emp_role']=$this->input->post('role',true);								
				$data['email']=$this->input->post('email',true);
				$data['password']=$this->input->post('password',true); 
				$data['number']=$this->input->post('number',true);
				$data['education']=$this->input->post('education',true); 
				$data['total_leave']=$this->input->post('total_lv',true); 
				$data['remaining_leave']=$this->input->post('remain_lv',true); 
				$data['skill']=$this->input->post('skill',true); 
				$data['address']=$this->input->post('address',true); 
			    $data['image']=$this->upload->data('file_name');
				$var=$this->Work->inputdata('employee_detail',$data);	
				if($var==true)
				{
					header('location: listing');
				}
				else{
					echo "not uploaded";
				}
		 }
	}

	public function leaveadd()
	{
		 $this->load->library('form_validation');
		 $this->form_validation->set_rules('leave','leave type','required');
 	   	 $this->form_validation->set_rules('reason','reason','required');
 		 $this->form_validation->set_rules('from_date','from date','required');
 		 $this->form_validation->set_rules('to_date','to date','required');
 		 $this->form_validation->set_rules('massage','massage','required');

 	 	if($this->form_validation->run() === FALSE)
 	 	{ 

			    $dat['empl'] = array(
				'leave' => $this->input->post('leave',true),
				'desc'=>$this->input->post('reason',true),
				'd_from'=>$this->input->post('from_date',true),
				'd_to'=>$this->input->post('to_date',true),
				 );
			    $users=$this->session->userdata('user');
				$id = $users['eid'];
			    $dat['detail']=$this->Work->dataget('employee_detail',"eid=$id");
			    $dat['leave']=$this->Work->getdata('leave_type');
				$this->load->view('add_leave', $dat);
		}
			
			else
			{	
				$data['eid']=$this->input->post('eid',true);
				$data['type']=$this->input->post('leave',true);
				$data['desc']=$this->input->post('reason',true);
				$data['d_from']=$this->input->post('from_date',true); 
				$data['d_to']=$this->input->post('to_date',true);
				$data['sub_date']=$this->input->post('sub_date',true);
				$massage = $this->input->post('massage');	
				$to = $this->input->post('to_date');
				$from = $this->input->post('from_date');
				$day = $this->Work->totalday($to,$from);
				$data['total_day'] = array_shift($day);
				$res=$this->Work->inputdata('leave_record',$data);


		 	
				if($res == true)
				{
					$users=$this->session->userdata('user');
				    $id = $users['eid'];
				    $name = $this->input->post('name');
				    $summery['notification'] = "New message from ".$name;
				    $data1['description'] = 'New leave added by Employee [ id='.$id.']';
				    $data1['date'] = date("Y-m-d H:i:s");
				    $data1['name'] = $name;
			        $res1 = $this->Work->inputdata('notification',$summery);
			        $res2 = $this->Work->inputdata('activity_log',$data1);
					if($res1 == true && $res2 == true){
					header('location: leave_list_emp');
					}
					else
					{
						echo "msg not send";
					}
				}
				else{
					 echo "error";
				}
		}
	
	}

	public function employee()
	{
		if($this->session->userdata('user'))
		{
			if($this->session->userdata('user')['mid'] == 1 && $this->session->userdata('user')['add_id'] == 1)
			{
			$data['dept'] = $this->Work->dataget('department',"dept_status = 1");
			$data['role'] = $this->Work->getdata('role');
			$this->load->view('employee',$data);
			}
			else
			{
				header('Location: index');
			}
		}
			elseif($this->session->userdata('hr'))
			{
			$data['dept'] = $this->Work->dataget('department',"dept_status = 1");
			$data['role'] = $this->Work->getdata('role');
			$this->load->view('employee',$data);	
			}
		else
		{
			header('Location: emp_login');
		}
	}

	public function addleave()
	{   
		if(!$this->session->userdata('user'))
		{
			header('Location: index');
		}
		else
		{
		$users=$this->session->userdata('user');
		$id = $users['eid'];
		$data['detail'] =$this->Work->dataget('employee_detail',"eid=$id");
		$data['leave']=$this->Work->getdata('leave_type');
		$this->load->view('add_leave',$data);
		}
	}

	public function addmessage()
	{
		
		$hid = $this->session->userdata('hr');
		$data['message']=$this->input->post('message');
		$data['date']=$this->input->post('date');
		$data['hid']=$hid;
		$mid = $this->Work->inputmessage('message',$data);	

		if($mid == true){
			$eid = $this->input->post('employee');
				for ($i = 0; $i < count($eid); $i++)
				{
					 $receiver[$i] = array(
					 'eid' => $eid[$i],
					 'mid' => $mid,
					 'hid' => $data['hid']
					 );
				$res = $this->Work->inputdata('message_reciver',$receiver[$i]);
				}

				if ($res == true) {
					header('Location: hrpanel');
				}
		}
	
	}
}
?>
		

		


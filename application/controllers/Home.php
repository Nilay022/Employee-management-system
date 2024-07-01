<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('cookie');
		$this->load->model('Work');
		date_default_timezone_set('Asia/Kolkata');
	}

	public function update()
	{
		$this->load->library('form_validation');
 		$this->form_validation->set_rules('name','full name','required');
 		$this->form_validation->set_rules('number','Mobile no.','required');
 		$this->form_validation->set_rules('password','password','required');
 		$this->form_validation->set_rules('skill','skill','required');
		$this->form_validation->set_rules('education','education','required');
		$this->form_validation->set_rules('total_lv','Leave No.','required');
		$this->form_validation->set_rules('remain_lv','Remaining Leave No.','required');
 		$this->form_validation->set_rules('email','email','required');
 		$this->form_validation->set_rules('address','Address','required');
 		
	 	// 	if($this->form_validation->run() === FALSE)
	 	// 	{ 
			// 		$dat['empl'] = array(
			// 		'name' => $this->input->post('name',true),
			// 		'email'=>$this->input->post('email',true),
			// 		'password'=>$this->input->post('password',true),
			// 		'number'=>$this->input->post('number',true),
			// 		'education'=>$this->input->post('education',true),
			// 		'total_lv'=>$this->input->post('total_lv',true),
			// 		'remain_lv'=>$this->input->post('remain_lv',true),
			// 		'skill'=>$this->input->post('skill',true),
			// 		'address'=>$this->input->post('address',true),
			// 		'image'=>$this->input->post('image'),
			// 		// $upload_data = $this->input->post('image',true), 
	  //   //             'image' => $upload_data['file_name']

			// 	);
			// 	$this->load->view('employee', $dat);
			// }
 		if($this->form_validation->run() === FALSE)
 		{ 

		    $this->editdata($id);

		}
			
			
			// else
			// {
			    if ($this->input->post('eid')) 
			    {
					$uid=$this->input->post('eid');
			    	$data['name']=$this->input->post('name');
					$data['address']=$this->input->post('address');
			     	$data['email']=$this->input->post('email');
			     	$data['education']=$this->input->post('education'); 
			     	$data['total_leave']=$this->input->post('total_lv'); 
			     	$data['remaining_leave']=$this->input->post('remain_lv'); 
					$data['skill']=$this->input->post('skill'); 
				    $data['number']=$this->input->post('number'); 
					$data['password']=$this->input->post('password');
					$res=$this->Work->updata('employee_detail',$data,"eid=$uid");

						if($res == true)
						{
							header('Location: listing');
				
						}
				}	
  			// }
	}

	public function updateemp()
	{
		$this->load->library('form_validation');
 		$this->form_validation->set_rules('name','full name','required');
 		$this->form_validation->set_rules('number','Mobile no.','required');
 		$this->form_validation->set_rules('password','password','required');
 		$this->form_validation->set_rules('skill','skill','required');
		$this->form_validation->set_rules('education','education','required');
 		$this->form_validation->set_rules('address','Address','required');
 		
 		if($this->form_validation->run() === FALSE)
 		{ 

		    $this->editdata();

		}
			
		else
		{
			if ($this->input->post('eid')) 
			{
				$uid=$this->input->post('eid');
				$name = $this->input->post('name');
		    	$data['name']=$name;
				$data['address']=$this->input->post('address');
		     	$data['education']=$this->input->post('education'); 
				$data['skill']=$this->input->post('skill'); 
			    $data['number']=$this->input->post('number'); 
				$data['password']=$this->input->post('password');
				$res=$this->Work->updata('employee_detail',$data,"eid=$uid");


					if($res == true)
					{
						$log['description'] = 'Profile has been updated by Employee [ id='.$uid.']';
					    $log['date'] = date("Y-m-d H:i:s");
					    $log['name'] = $name;
						$this->Work->inputdata('activity_log',$log);
						header('Location: home');
			
					}	
			}	
		 }
	}

	public function del_emp($id)
	{
        $res=$this->Work->deletedata('employee_detail',"eid=$id");
		if ($res == true) {
			 header('Location: '.base_url().'listing');
		}
		else
		{
			echo "error";
		}
	}

	public function editdata($id)
	{
		
		 $data['res']=$this->Work->dataget('employee_detail',"eid=$id");
		 $this->load->view('edit_emp',$data);
	}

	public function editemp($id)
	{
		
			$data['res']=$this->Work->dataget('employee_detail',"eid=$id");
			$this->load->view('editemp',$data);
		
	}

	public function edit_department()
	{

        $id = $this->input->post('eid');
		$data =$this->Work->emp_data("eid=$id");
		echo json_encode($data);
	}

	public function update_department()
	{
		if ($this->input->post('eid')) 
		{
			$uid=$this->input->post('eid');
		    $data['department']=$this->input->post('dept');
		    $res =  $this->Work->updata('employee_detail',$data,"eid=$uid");
		    if($res == true)
		    {
		   		header('Location: department');
		    }
		}
	}

	public function active_emp($eid)
	{
		$res = $this->Work->status('emp_status','1',"eid=$eid",'employee_detail');
		
			if($res == true)
			{
				header('Location: '.base_url().'department');
			}
		
	}

	public function unacitve_emp($eid)
	{
		 $res = $this->Work->status('emp_status','0',"eid=$eid",'employee_detail');
		 		
			if($res == true)
			{
				header('Location: '.base_url().'department');
			}
	}

	public function unacitve_dept($id)
	{
		
		 $res = $this->Work->status('dept_status','0',"dp_id=$id",'department');
	
			if($res == true)
			{
				$res1 = $this->Work->status('emp_status','0',"department=$id",'employee_detail');
				if($res1 == true)
				{
					 header('Location: '.base_url().'department');
				}
			}
	}

	public function acitve_dept($id)
	{
		 $res = $this->Work->status('dept_status','1',"dp_id=$id",'department');
		 		
			if($res == true)
			{
				$res1 = $this->Work->status('emp_status','1',"department=$id",'employee_detail');
				if($res1 == true)
				{
					 header('Location: '.base_url().'department');
				}			}
	}

	public function del_message($id)
	{
        $res=$this->Work->deletedata('message',"mid=$id");
		if ($res == true) {
			 header('Location: '.base_url().'hrpanel');
		}
		else
		{
			echo "error";
		}
	}
}
	
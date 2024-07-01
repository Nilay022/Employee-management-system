<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('cookie');
		$this->load->model('Work');
		date_default_timezone_set('Asia/Kolkata');
	}

	public function index()
	{ 
		if (get_cookie('email')!="" && get_cookie('password')!="") {
			// print_r(get_cookie('email')); die;
			
		    	$results=$this->Work->login('employee_detail',get_cookie('email'),get_cookie('password'));
		    	$id = $results[0]->eid;
		    	$datas['detail'] =$this->Work->dataget('employee_detail',"eid = $id"); 
					$this->session->set_userdata('user', $id);
					$this->load->view('home', $datas);
					$this->load->view('emp_login');   
					$data['email'] = get_cookie('email');
					$data['password'] = get_cookie('password');
					$this->load->view('emp_login',$data);
            
	}
		else
		{
			$this->load->view('emp_login');
	    }
	}

    public function logindata()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules('password','password','required');
 		$this->form_validation->set_rules('email','email','required');
 		if($this->form_validation->run() === FALSE)
 		{ 
 			$this->index();
		}
		else
	    {
			$email=$this->input->post('email');
		    $pass=$this->input->post('password');
		    $res = $this->Work->login('hr_details',$email,$pass);
				 if($res == true)
				 {
					$hid = $res[0]->hid;
					$this->session->set_userdata('hr', $hid);
					header('location: hrpanel');
				 }
			 
				  	else
				    {
					$item = array('message' => 'Invalid Email or Password');
					$this->session->set_tempdata('item', $item, 10);
					header("location: ".base_url()."admin");
				    }
		}    	
	}

	public function emp_login()
	{		
			// if(get_cookie('email')!="" && get_cookie('password')!= "")
			// {     
				
			// 	$datas['detail'] =$this->Work->dataget('employee_detail',"email =".get_cookie('email'));
			// 	$this->session->set_userdata('user', get_cookie('email'));
			// 	$this->load->view('home', $datas);   
			
				$this->load->library('form_validation');
				$this->form_validation->set_rules('password','password','required');
		 		$this->form_validation->set_rules('email','email','required');

		 		if($this->form_validation->run() === FALSE)   
		 		{ 


					// echo validation_errors();
		 			$this->index();      
				}
			    
				else
		        {
					 $email=$this->input->post('email');		
					 $pass=$this->input->post('password');
					 $remember=$this->input->post('remember');
					 $results=$this->Work->login('employee_detail',$email,$pass);
					 $emails = $results[0]->email;

							if($results == true){

								$id = $results[0]->eid;
								$name = $results[0]->name;
								$image = $results[0]->image;

								$res = $this->Work->permission_list_emp("employee_detail.eid=$id");
								if(empty($res))
								 {
									$datas  = array('eid' => $id,
										'name' => $name,
										'image' => $image,
										'pid' => 0,
									    'mid' => 0,
									    'view_id' => 0,
									    'add_id' => 0,
									    'edit_id' => 0,
									    'delete_id' => 0,
											);
								}
								else{
								
								$datas = array('eid' => $id,
											   'pid' => $res[0]->pid,
											   'name' => $res[0]->name,
											   'image' => $res[0]->image,
											   'mid' => $res[0]->md_id,
											   'view_id' => $res[0]->permission_view,
											   'add_id' => $res[0]->permission_add,
											   'edit_id' => $res[0]->permission_edit,
											   'delete_id' => $res[0]->permission_delete,
											   );
								}
								
								$sess = $this->session->set_userdata('user', $datas);
								$log['description'] = "Employee has been logged in successfully.[id = ".$id."]";
								$log['name'] = $name;
								$log['date'] = date("Y-m-d H:i:s");

									if($sess = true)
									{
										$this->Work->inputdata('activity_log',$log);
										header('location: home');
									}

									if($remember != NULL)
									{
										setcookie('email',$emails,time() + (86400 * 30 ), "/");
										setcookie('password',$pass,time() + (86400 * 30 ), "/");
										
									}
							    }

							else
							{
								$item = array('message' => 'Invalid Email or Password');
								$this->session->set_tempdata('emp', $item, 10);
								header("location: ".base_url());
							}
			    }
		// }
	}

	public function login()
	{
		$this->load->view('hr_login');
	}

	
	public function lo()
	{
		$this->session->unset_tempdata('item');
		header("location: ".base_url());
	}


}
?>

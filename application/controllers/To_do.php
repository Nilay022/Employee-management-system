<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class To_do extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('cookie');
		$this->load->model('Work');
		date_default_timezone_set('Asia/Kolkata');
	}


	public function todo_task()
	{
		if(!$this->session->userdata('hr'))
		{
		 	$this->load->view('hr_login');
		}
		else
		{
		$data['emp'] = $this->Work->dataget('employee_detail',"emp_status = 1");
		$this->load->view('add_task',$data);
		}
	}

	public function addtask()
	{	

	     $this->load->library('form_validation');
		 $this->form_validation->set_rules('task','task','required');
	 	 $this->form_validation->set_rules('due_date','due date','required');
	 	 $this->form_validation->set_rules('start_date','start date','required');


 	 	if($this->form_validation->run() === FALSE)
 	 	{
				$dat['emp'] = $this->Work->getdata('employee_detail');
				$this->load->view('add_task', $dat);
		}

			else
			{
				$id=$this->session->userdata('hr');
				$data['task']=$this->input->post('task',true);
				$data['create_id']=$id;
				$data['due_date']=$this->input->post('due_date',true);
				$data['start_date']=$this->input->post('start_date',true);
				$tid = $this->Work->inputmessage('task_record',$data);		

				if($tid==true)
				{
					$assign_id=$this->input->post('assign',true);
					for ($i = 0; $i < count($assign_id); $i++)
				{
					 $receiver[$i] = array(
					 'assign_id' => $assign_id[$i],
					 'tid' => $tid,
					 'create_id' => $data['create_id']
					 );
				$res = $this->Work->inputdata('task_assigner',$receiver[$i]);
				}

				if ($res == true) {
					header('Location: task_list');
				}

		    }
			    else
			    {
			    	echo "error";
			    }
     	}
    }

	public function task()
	{
		if(!$this->session->userdata('hr'))
		{
		 	$this->load->view('hr_login');
		}
		else
		{
		$data['task']=$this->Work->tasklist();
		$this->load->view('task_list',$data	);
		}
	}

	public function delete()
	{
		$id = $this->uri->segment(2);
		$trid = $this->uri->segment(3);
		$res = $this->Work->deletedata('task_assigner',"tr_id = $trid");
		if($res == true)
		{

				Redirect(base_url().'task_list');
		}

	}

	public function edit()
	{
		$id = $this->uri->segment(2);
		$data['task'] = $this->Work->dataget('task_record',"tid = $id");
		$data['emp'] = $this->Work->dataget('employee_detail',"emp_status = 1");
		$this->load->view('edit_task',$data);
	}

	public function update()
	{

		 $this->load->library('form_validation');
		 $this->form_validation->set_rules('task','task','required');
 	   	 $this->form_validation->set_rules('employee','employee','required');
	 	 $this->form_validation->set_rules('due_date','due date','required');
	 	 $this->form_validation->set_rules('start_date','start date','required');


			
 		if($this->form_validation->run() === FALSE)
 		{

			 //    $this->load->model('Work');
				// $dat['emp'] = $this->Work->getdata('employee_detail');
				// $this->load->view('add_task', $dat);
		    $this->edit($create_id);

		}


			// else
			// {
			    if ($this->input->post('tid'))
			    {
					$tid=$this->input->post('tid');
				    $data['task']=$this->input->post('task',true);
					$data['start_date']=$this->input->post('start_date',true);
					$data['due_date']=$this->input->post('due_date',true);
								$res=$this->Work->updata('task_record',$data,"tid=$tid");

						if($res == true)
						{
							header('Location: task_list');

						}
				}
  			// }
	}
	public function addtaskemp()
	{
		 $this->load->library('form_validation');
		 $this->form_validation->set_rules('task','task','required');
	 	 $this->form_validation->set_rules('due_date','due date','required');
	 	 $this->form_validation->set_rules('start_date','start date','required');


 	 	if($this->form_validation->run() === FALSE)
 	 	{

			    $dat['empl'] = array(
				'task' => $this->input->post('task',true),
				'due_date'=>$this->input->post('due_date',true),
				'start_date'=>$this->input->post('start_date',true),

				 );
			    $this->load->model('Work');
				$this->load->view('add_task_emp', $dat);
		}

			else
			{
				$data['task']=$this->input->post('task',true);
				$data['create_id']=$this->input->post('create',true);
				$data['due_date']=$this->input->post('due_date',true);
				$data['start_date']=$this->input->post('start_date',true);

						$tid=$this->Work->inputmessage('task_record',$data);


				if($tid==true)
				{
					$assign_id=$this->input->post('assign',true);

					 $receiver[$i] = array(
					 'assign_id' => $assign_id,
					 'tid' => $tid,
					 'create_id' => $data['create_id'],
					);

				$res = $this->Work->inputdata('task_assigner',$receiver[$i]);
				}

				if ($res == true) {
				    $users=$this->session->userdata('user');
				    $id = $users['eid'];
					$log['description'] = 'New Task added by Employee [ id='.$id.']';
				    $log['date'] = date("Y-m-d H:i:s");
					$name = $users['name'];
				    $log['name'] = $name;
					$res2 = $this->Work->inputdata('activity_log',$log);
					header('Location: to_do_emp');
				}
		}

	}
	public function updatetask()
	{

		$response = array('status' => 0, 'message' => '', 'data'=> array() );
		$tid = $this->input->post('tid');
		$res = $this->Work->status("status","1","tid=$tid",'task_assigner');
	    $users=$this->session->userdata('user');
	    $id = $users['eid'];
		$data['description'] = 'Task has been completed by Employee [ id='.$id.'], [ task_id ='.$tid.']';
	    $data['date'] = date("Y-m-d H:i:s");
		$name = $users['name'];
	    $data['name'] = $name;
	    $res1 = $this->Work->inputdata('activity_log',$data);
		if($res == true && $res1 == true)
		{
			$response['status'] = 1;
			$response['data'] = array('tid' => $tid);
			$response['message'] = "Task completed";
		}
		else
		{
			$response['status'] = 0;
			$response['message'] = "Sorry something went wrong";
		}
		echo json_encode($response);
		exit;

	}

	public function edittask()
	{
		$id = $this->uri->segment(2);
		$data['task'] = $this->Work->dataget('task_record',"tid = $id");
		$this->load->view('edit_task_emp',$data);

	}
	public function updatetaskemp()
	{

		 $this->load->library('form_validation');
		 $this->form_validation->set_rules('task','task','required');
	 	 $this->form_validation->set_rules('due_date','due date','required');
	 	 $this->form_validation->set_rules('start_date','start date','required');


 		if($this->form_validation->run() === FALSE)
 		{

		    $this->edit($id);

		}


			// else
			// {
			    if ($this->input->post('tid'))
			    {
					$uid=$this->input->post('tid');
				    $data['task']=$this->input->post('task',true);
					$data['due_date']=$this->input->post('due_date',true);
					$data['start_date']=$this->input->post('start_date',true);
								$res=$this->Work->updata('task_record',$data,"tid=$uid");

						if($res == true)
						{
							$data['description'] = 'Task has been updated by Employee [ id='.$id.']';
						    $data['date'] = date("Y-m-d H:i:s");
						    $users=$this->session->userdata('user');
							$name = $users['name'];
						    $data['name'] = $name;
							$res2 = $this->Work->inputdata('activity_log',$data);
							header('Location: to_do_emp');

						}
				}
  			// }
	}

	public function deletetask()
	{
		$id = $this->uri->segment(2);
		$res = $this->Work->deletedata('task_assigner',"tid = $id");
		if($res == true)
		{
			$data['description'] = 'Task has been deleted by Employee [ id='.$id.']';
		    $data['date'] = date("Y-m-d H:i:s");
		    $users=$this->session->userdata('user');
			$name = $users['name'];
		    $data['name'] = $name;
			$res2 = $this->Work->inputdata('activity_log',$data);
			header('location: '.base_url().'to_do_emp');
		}
		else
		echo 'error';
	}

	public function todo_emp()
	{
		if(!$this->session->userdata('user'))
		{
		 	header('Location: index');
		}
		 else
		 {
		 $users=$this->session->userdata('user');
		 $id = $users['eid'];
		 $this->load->model('Work');
		 $data['detail'] = $this->Work->dataget('employee_detail',"eid=$id");
		 $data['assign'] = $this->Work->tasklistemp("status = 0 and task_assigner.assign_id != task_assigner.create_id and task_assigner.assign_id = $id");
		 $data['complete'] = $this->Work->tasklistemp("status = 1 and task_assigner.assign_id = $id");
		 $data['mytask'] = $this->Work->tasklistemp("status = 0 and task_assigner.assign_id = task_assigner.create_id and task_assigner.assign_id = $id");
	   	 $this->load->view('to_do_emp',$data);

	    }
	}
}
						
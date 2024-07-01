<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Permission extends CI_Controller {

	public function permission_page()
	{
		if(!$this->session->userdata('hr'))
		{
		 	$this->load->view('hr_login');
		}
		else
		{
		$this->load->model('Work');
		$data['emp'] = $this->Work->dataget('employee_detail',"emp_status = 1");
		$data['module'] = $this->Work->getdata('module');
		$data['list'] = $this->Work->permission_list();
		$this->load->view('permission',$data);
		}
	}

	public function permission_add()
	{
		$data['eid'] = $this->input->post('employee');
		$data['module'] = $this->input->post('module');

		$view = $this->input->post('view');
		$data['permission_view'] = ($view == FALSE) ? 0 : 1;

		$add = $this->input->post('add');
		$data['permission_add'] = ($add == FALSE) ? 0 : 1;

		$edit = $this->input->post('edit');
		$data['permission_edit'] = ($edit == FALSE) ? 0 : 1;

		$delete = $this->input->post('delete');
		$data['permission_delete'] = ($delete == FALSE) ? 0 : 1;

		$this->load->model('Work');
		$res = $this->Work->inputdata('permission',$data);	
		//set session for the nav bar
		

		if($res == true)
		{
			header('Location: permission');
		}
	}

	public function delete_permission($id)
	{
		$this->load->model('Work');
        $res=$this->Work->deletedata('permission',"pid=$id");
		if ($res == true) {
			 header('Location: '.base_url().'permission');
		}
		else
		{
			echo "error";
		}
	}

	public function edit_permission()
	{
		$id = $this->input->post('pid');
		$this->load->model('Work');
		$data =$this->Work->permission_list_emp("pid=$id");
		echo json_encode($data);

	}

	public function update_permission()
	{
		$id=$this->input->post('pid');
		$data['eid'] = $this->input->post('eid');
		$data['module'] = $this->input->post('module');

		$view = $this->input->post('view');
		$data['permission_view'] = ($view == FALSE) ? 0 : 1;

		$add = $this->input->post('add');
		$data['permission_add'] = ($add == FALSE) ? 0 : 1;

		$edit = $this->input->post('edit');
		$data['permission_edit'] = ($edit == FALSE) ? 0 : 1;

		$delete = $this->input->post('delete');
		$data['permission_delete'] = ($delete == FALSE) ? 0 : 1;

		$this->load->model('Work');
		$res = $this->Work->updata('permission',$data,"pid=$id");
		if($res == true)
		{
			header('Location: permission');
		}
		else
		{
			echo "error";
		}
	}

}
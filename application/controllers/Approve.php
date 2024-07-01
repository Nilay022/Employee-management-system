<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Approve extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Work');
		date_default_timezone_set('Asia/Kolkata');

	}

	public function status()     
	{
        $lid = $this->uri->segment(2);
        $tid = $this->uri->segment(3);
        $total_day = $this->uri->segment(4);
        $id = $this->uri->segment(5);

			switch ($tid) {
				case '1':
						$data = $this->Work->dataget('employee_detail',"eid=$id");
						$leave = $data[0]->remaining_leave;
						if($leave >= $total_day)
						{	
									
							$res = $this->Work->status('status','1',"le_id=$lid",'leave_record');
		     		        $res1 = $this->Work->remain_leave("eid=$id",$total_day);
		     		        if ($res == true && $res1 == true) {
		     		        	header('Location:'.base_url().'leave_list');
		     		           }
							}
						else
						{
							$this->statusrej($lid);
						}
					break;

				case '2':
						$data = $this->Work->dataget('employee_detail',"eid=$id");
						$leave = $data[0]->remaining_leave;
						if($leave >= $total_day)
						{
							$res = $this->Work->status('status','1',"le_id=$lid",'leave_record');
		     		        $res1 = $this->Work->remain_leave("eid=$id",$total_day);
		     		        if ($res == true && $res1 == true) 
		     		        {
								  header('Location:'.base_url().'leave_list');
		     		        }
	     		        }
						else
						{
							$this->statusrej($lid);
						}
					break;

				case '3':
						$data = $this->Work->dataget('employee_detail',"eid=$id");
						$leave = $data[0]->remaining_leave;
						if($leave >= $total_day)
						{
							$res = $this->Work->status('status','1',"le_id=$lid",'leave_record');
		     		        $res1 = $this->Work->remain_leave("eid=$id",$total_day);
		     		        if ($res == true && $res1 == true)
		     		        {
								  header('Location:'.base_url().'leave_list');
		     		        }
	     		         }
						else
						{
							$this->statusrej($lid);
						}  
					break;

				case '4':
						$data = $this->Work->dataget('employee_detail',"eid=$id");
						$leave = $data[0]->remaining_leave;
						if($leave >= $total_day)
						{
							$res = $this->Work->status('status','1',"le_id=$lid",'leave_record');
							$res2 = $this->Work->remaining_leave($id,$tid);
		     		        if ($res == true && $res2 == true)
		     		        {
								  header('Location:'.base_url().'leave_list');
		     		        }
	     		        }
						else
						{
							$this->statusrej($lid);
						}
	     		     break;

	     		 case '6':
	     		 		$data = $this->Work->dataget('employee_detail',"eid=$id");
						$leave = $data[0]->remaining_leave;
						if($leave >= $total_day)
						{
							$res = $this->Work->status('status','1',"le_id=$lid",'leave_record');
		     		        $res1 = $this->Work->remain_leave("eid=$id",$total_day);
		     		        if ($res == true && $res1 == true) 
		     		        {
								  header('Location:'.base_url().'leave_list');
		     		        }
	     		         }
						else
						{
							$this->statusrej($lid);
						}
	     		    break;
	     		  case '9':
	     		  		$data = $this->Work->dataget('employee_detail',"eid=$id");
						$leave = $data[0]->remaining_leave;
						if($leave >= $total_day)
						{
							$res = $this->Work->status('status','1',"le_id=$lid",'leave_record');
		     		        $res1 = $this->Work->remain_leave("eid=$id",$total_day);
		     		        if ($res == true && $res1 == true)
		     		        {
								  header('Location:'.base_url().'leave_list');
		     		        }
		     		    }
						else
						{
							$this->statusrej($lid);
						}
	     		    break;

	     		   case '8':
	     		   		$data = $this->Work->dataget('employee_detail',"eid=$id");
						$leave = $data[0]->remaining_leave;
						if($leave >= $total_day)
						{
							$res = $this->Work->status('status','1',"le_id=$lid",'leave_record');
		     		        $res1 = $this->Work->remain_leave("eid=$id",$total_day);
		     		        if ($res == true && $res1 == true) 
		     		        {
								  header('Location:'.base_url().'leave_list');
		     		        }
	     		    	}
						else
						{
							$this->statusrej($lid);
						}
	     		    break;
			
			}
	}

	public function statusrej($lid)
	{
		$res = $this->Work->status('status','2',"le_id = $lid",'leave_record');
			if($res == true)
			{
				  header('Location: '.base_url().'leave_list');

			}
	}

	public function cancellv($lid)
	{
		$res = $this->Work->status('status','3',"le_id = $lid",'leave_record');
			if($res == true)
			{	
			    $users=$this->session->userdata('user');
				$id = $users['eid'];
				$data['description'] = 'leave has been canceled by Employee [ id='.$id.'],[ leave_id = '.$lid.']';
			    $data['date'] = date("Y-m-d H:i:s");
				$name = $users['name'];
			    $data['name'] = $name;
			    $this->Work->inputdata('activity_log',$data);
				header('Location: '.base_url().'leave_list_emp');
			}
	}
}
?>
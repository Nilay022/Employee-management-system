<?php    
defined('BASEPATH') OR exit('No direct script access allowed');

Class Work extends CI_Model
    {
      
        public function inputdata($table,$data)
        {
            $query = $this->db->insert($table,$data);
              if ($this->db->affected_rows() == '1')
                  {
                    return TRUE;
                  }
                  else
                  {
                    return FALSE;
                  } 
            return $query;
        }

        public function inputmessage($table,$data)
        {
            $this->db->insert($table,$data);
            $id = $this->db->insert_id();   
            return $id;
        }

        public function login($table,$email,$pass)
        {
            $this->db->select('*')->from($table)->where("email",$email)->where("password",$pass);
            $query=$this->db->get();
            return $query->result();
        }

         
        public function getdata($table)
        {
            $query=$this->db->get($table);
            return $query->result();
        }
        
        public function deletedata($table,$id)
        {
            $query = $this->db->where($id)->delete($table);
            return $query;
            
        }


        public function dataget($table,$where)
        {
            $query=$this->db->select('*')->from($table)->where($where)->get();
            return $query->result();
        }


        public function updata($table,$data,$where)
        {
            $query=$this->db->set($data)->where($where)->update($table);
            return $query;
        }


        public function visitor_count($table) 
        {
            $query = $this->db->query("SELECT COUNT('*') c FROM ".$table);
            return $query->row_array();
        }

        public function joinc()
        {
           $query =  $this->db->distinct()->select('*')->from('employee_detail')->join('leave_record','employee_detail.eid = leave_record.eid')->join('leave_type','leave_type.lid = leave_record.type')->get();
           return $query->result();
        }

        public function join($where)
        {
            $query =  $this->db->distinct()->select('*')->from('leave_type')->join('leave_record','leave_type.lid = leave_record.type')->where($where)->get();
            return $query->result();
        }

        public function dept_list()
        {
            $query =  $this->db->distinct()->select('*')->from('employee_detail')->join('department','employee_detail.department = department.dp_id')->get();
            return $query->result();
        }

         public function emp_data($where)
        {
            $query =  $this->db->select('*')->from('employee_detail')->join('department','employee_detail.department = department.dp_id')->where($where)->get();
            return $query->result();
        }


        public function status($set,$value,$where,$table)
        {
            $query =  $this->db->set($set,$value)->where($where)->update($table);
            return $query;
        }

        public function remain_leave($where,$total_day)
        {
          $query =  $this->db->query("UPDATE employee_detail SET remaining_leave = remaining_leave - ".$total_day." 
            WHERE ".$where);
            return $query;
        }


        public function visitor_count1($table,$where) 
        {
                $query = $this->db->query("SELECT COUNT('*') c FROM ".$table." WHERE ". $where);
                return $query->row_array();
        }

        public function visitor_count2($req,$table,$where)
        {
             $query = $this->db->query("SELECT ".$req." c FROM ".$table." WHERE ". $where);
             return $query->row_array();
        }

        public function remaining_leave($id,$tid)
        {
         
            $query = $this->db->query("UPDATE employee_detail em JOIN leave_record lr ON em.eid = lr.eid JOIN leave_type lt on lr.type = lt.lid SET em.remaining_leave = em.remaining_leave - 0.5 WHERE em.eid = ".$id." AND lr.type = ".$tid);
            return $query;
        }

            
        public function totalday($to,$from)
        {          
              $sql = 'SELECT  DATEDIFF("'.$to. '" , "'.$from.' " )';
              $query = $this->db->query($sql);
              return $query->row_array();
        }

        public function read($table)
        {
             $query =  $this->db->set('status','1',FALSE)->update($table);
             return $query;
        }

         
        public function messagehr()
        {
             $query =  $this->db->distinct()->select('*')->from('message')->join('hr_details','hr_details.hid =
             message.hid')->get();
             return $query->result();
        }

        public function joinmessage($where)
        { 
            
            $query = $this->db->select('*')->from('message')->join('message_reciver','message_reciver.mid = message.mid')->join('hr_details','message_reciver.hid = hr_details.hid')->where($where)->get();
            return $query->result();
        }

        public function tasklist()
        {
           $query =  $this->db->select('*')->from('employee_detail')->join('task_assigner','employee_detail.eid = task_assigner.assign_id')->join('task_record','task_assigner.tid = task_record.tid')->get();
           return $query->result();
        }
        
        public function tasklistemp($where)
        {
           $query =  $this->db->select('*')->from('employee_detail')->join('task_assigner','employee_detail.eid = task_assigner.assign_id')->join('task_record','task_assigner.tid = task_record.tid')->where($where)->get();
           return $query->result();
        }

        public function permission_list()
        {
           $query =  $this->db->select('*')->from('employee_detail')->join('permission','employee_detail.eid = permission.eid')->join('module','module.md_id = permission.module')->get();
           return $query->result();
        }

         public function permission_list_emp($where)
        {
           $query =  $this->db->select('*')->from('employee_detail')->join('permission','employee_detail.eid = permission.eid')->join('module','module.md_id = permission.module')->where($where)->get();
           return $query->result();
        }

        public function attendance_list()
        {
           $query =  $this->db->select('*')->from('employee_detail')->join('attendance','employee_detail.eid = attendance.eid')->get();
           return $query->result();
        }

        public function attendance_search($date)
        {
           $query = $this->db->select('*')->from('attendance')->where("date LIKE '".$date."%'")->get();
           return $query->result();
        }

}
?>
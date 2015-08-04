<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class User_model extends CI_Model {
public function __construct()
{
parent::__construct();
$this->load->library('session');
$this->load->database();
}

public function login($email,$password)
{
  $this->db->where("email",$email);
  $this->db->where("password",$password);
  $query=$this->db->get("admin");
  if($query->num_rows()>0)
  {
   foreach($query->result() as $rows)
   {
      //print($rows->Admin_name);
      //die;
    //add all data to session
    $newdata = array(
      'admin_id'  => $rows->admin_id,
      'admin_name'  => $rows->Admin_name,
      'admin_email'    => $rows->email,
      'logged_in'  => TRUE,
    );
    $this->session->set_userdata($newdata);
    return true;
   }
  }
  else
  {
   $this->db->where("email",$email);
   $this->db->where("password",$password);
   $query=$this->db->get("users");
   if($query->num_rows()>0)
   {
    foreach($query->result() as $rows)
    {
    //add all data to session
      //print($rows->username);
      //die;
     $newdata = array(
      'user_id'  => $rows->user_id,
      'user_name'  => $rows->username,
      'user_email'    => $rows->email,
      'logged_in'  => TRUE,
     );
     $this->session->set_userdata($newdata);
    return true;
    }
    return false;
   }
  }
}
//public function;
public function add_user()
{
$data=array(
'username'=>$this->input->post('username'),
'mobile_no'=>$this->input->post('mobile'),
'email'=>$this->input->post('email'),
'Address'=>$this->input->post('address'),
'password'=>md5($this->input->post('password')),
'gender'=>$this->input->post('gender'),
'registered'=>time()
);
$this->db->insert('users',$data);
return true;
}
public function do_editprofile()
{
  $u_id=$this->session->userdata('user_id');
$data = array(
               'username' => $this->input->post('name'),
               'mobile_no' => $this->input->post('mobile'),
               'Address' => $this->input->post('address')
            );
$this->db->where('user_id', $u_id);
$this->db->update('users', $data);
return true;

/*
  $name=$this->input->post('name');
  $mobile=$this->input->post('mobile');
  $address=$this->input->post('address');
  $query=$this->db->query("update");
  */
}
public function editprofile()
{
  $u_id=$this->session->userdata('user_id');
  $this->db->where("user_id",$u_id);
  $query=$this->db->get("users");
  return $query->result(); 

}
public function delete($user_id)
{
  $this->db->where("user_id",$user_id);
  $this->db->delete('users');
  return true;

}
public function add_attendance()
{
$data=array(
'user_id'=>$this->session->userdata('user_id'),
'user_name'=>$this->session->userdata('user_name'),
'attendance'=>$this->input->post('attendance'),
'Date'=>$this->input->post('date')
  );
$this->db->insert('attendance',$data);
return true;
}
public function get_attendence()
{
     $u_id=$this->session->userdata('user_id');
    $this->db->where("user_id",$u_id);
    $query = $this->db->get('attendance');  
    return $query;  

}
public function attendance()

{
  $u_id=$this->session->userdata('user_id');
  $this->db->where("user_id",$u_id);
  $query=$this->db->get("attendance");

  foreach ($query->result_array() as $row)
  {
   
    $olddate=$row['date'];
    
 }
   
   $date=date('Y-m-d',time());

  if(!$olddate==$date)
  {
        $data=array(
        'user_id'=>$this->session->userdata('user_id'),
        'username'=>$this->session->userdata('user_name'),
        'date'=>$date);
        $this->db->insert('attendance',$data);
       return true;

  }
  return false;
}

public function add_file($rename)
{
   $u_id=$this->session->userdata('user_id');
  $arr=array("file_1","file_2","file_3","file_4","file_5");
  $document1= base_url().'application/upload/'.$rename[0];
  $document2= base_url().'application/upload/'.$rename[1];
  $document3= base_url().'application/upload/'.$rename[2];
  $document4= base_url().'application/upload/'.$rename[3];
  $document5= base_url().'application/upload/'.$rename[4];
  $data=array(
    'document_1'=>$document1,
    'document_2'=>$document2,
    'document_3'=>$document3,
    'document_4'=>$document4,
    'document_5'=>$document5
    );
    $this->db->where('user_id', $u_id);
    $this->db->update('users', $data);

    //$this->db->insert('users',$data);
    return true;
}

public function add_employee($rename)
{
  $arr=array("file_1","file_2","file_3","file_4","file_5");
  $document1= base_url().'application/upload/'.$rename[0];
  $document2= base_url().'application/upload/'.$rename[1];
  $document3= base_url().'application/upload/'.$rename[2];
  $document4= base_url().'application/upload/'.$rename[3];
  $document5= base_url().'application/upload/'.$rename[4];
  $data=array(
'username'=>$this->input->post('name'),
'mobile_no'=>$this->input->post('mobile'),
'email'=>$this->input->post('email'),
'Address'=>$this->input->post('address'),
'password'=>md5($this->input->post('password')),
'gender'=>$this->input->post('gender'),
'Document_1'=>$document1,
'Document_2'=>$document2,
'Document_3'=>$document3,
'Document_4'=>$document4,
'Document_5'=>$document5,
'registered'=>time()
);
$this->db->insert('users',$data);
return true;
}
public function select()  
  {  
    //data is retrive from this query  
    $query = $this->db->get('users');  
    return $query;  
  }
  public function search_attendance()
  {
    $startdate=$this->input->post('startdate');
    $enddate=$this->input->post('enddate');
    //$this->db->where("Date BETWEEN $startdate AND $enddate");
    $query=$this->db->query("select * from attendance where Date between '$startdate' and '$enddate'");
    return $query; 
  }
  
  public function select_attendence()
  {
    $query = $this->db->get('attendance');  
    return $query;  
  }
  public function select_emp()
  {
    $query = $this->db->get('users');
    return $query;
  }

public function leave()
{
  $user_id=$this->session->userdata('user_id');
  $name=$this->session->userdata('user_name');
  $startdate=$this->input->post('date1');
  $enddate=$this->input->post('date2');
  $reason=$this->input->post('reason');
  $status='Pending';
  $data=array(
    'user_id'=>$user_id,
    'name'=>$name,
    'startdate'=>$startdate,
    'enddate'=>$enddate,
    'reason'=>$reason,
    'status'=>$status
    );
  $this->db->insert('leave',$data);
  return true;

}

public function viewleave()
{
   $user_id=$this->session->userdata('user_id');
   $this->db->where('user_id',$user_id);
   $query=$this->db->get('leave');
   return $query;
}

  public function ch_pwd()
{

    if($this->session->userdata('user_id')!="")
    {
    if($this->db->get_where('users', array('user_id' => $this->session->userdata('user_id'), 'password' => $cur_pwd =md5($this->input->post('old_password')))))
    {
      $this->db->where(array('email'=>$this->input->post('email'),'password'=>$cur_pwd));
      $this->db->update('users', array('password' => md5($this->input->post('new_password'))));
       if($this->db->affected_rows()==1){
        return true; 
      }return false;
    }
   }
  else
  {
      if($this->db->get_where('admin', array('admin_id' => $this->session->userdata('admin_id'), 'password' => $cur_pwd =md5($this->input->post('old_password')))))
      {
        $this->db->where(array('email'=>$this->input->post('email'),'password'=>$cur_pwd));
        $this->db->update('admin', array('password' => md5($this->input->post('new_password'))));
      {
        if($this->db->affected_rows()==1){
        return true;
        }return false;
      }return false;
    }
  }
}

}
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
//error_reporting(0);
class admin extends CI_Controller {
 public function __construct()
 {
  parent::__construct();
  $this->load->model('user_model');
  $this->load->model('menu');
  $this->load->model('admin_model');
  $this->load->helper(array('form','url'));
 }
 public function delete($user_id)
{
  $this->load->database(); 
  $this->user_model->delete($user_id);
  $data['h']=$this->user_model->select();
  $this->load->view('templates/header.php');
    $this->load->view('templates/adminmenu.php');
    $this->load->view('Admin/viewpage.php', $data);
    $this->load->view('templates/footer.php');
  //redirect('viewpage',$data);
}

public function viewuser()
{
  $this->load->database(); 
  $data['h']=$this->user_model->select();
 $this->load->view('templates/header.php');
    $this->load->view('templates/adminmenu.php');
    $this->load->view('Admin/viewpage.php', $data);
    $this->load->view('templates/footer.php');
  

}
public function viewattendance()
{
  $this->load->database(); 
  $data['menu']=$this->menu->create_menu();
  $data['h']=$this->user_model->select_attendence();
  $this->load->view('templates/header.php');
    $this->load->view('templates/menu.php',$data);
    $this->load->view('Admin/viewattendance.php', $data);
    $this->load->view('templates/footer.php');
}

public function verify($id)
{
  if($this->admin_model->verify($id))
  {
    $this->load->view('Admin/verify.php');     
    //return true;
  }
    
    
}

public function addemp()
{
   $data['menu']=$this->menu->create_menu();
  $this->load->view('templates/header.php');
    $this->load->view('templates/menu.php',$data);
    $this->load->view('Admin/addemployee');
    $this->load->view('templates/footer.php');
}
public function addemployee()
{
$this->load->model('user_model');
$config['upload_path'] = APPPATH.'/upload/'; 
  //APPPATH .'uploads/';
//echo APPPATH;
//die;
  $config['allowed_types'] = 'pdf';
  $config['max_size'] = '1024';
  $this->load->library('upload',$config);
  $c=count($_FILES);
  $arr=array("file_1","file_2","file_3","file_4","file_5");
  $rename=array('','','','','');
  //echo $_FILES[$arr[0]]['name'];
  $i=0;
  $f=0;
  //$v=APPPATH.'/upload/'.$_FILES[$arr[0]]['name'];
  //$rename=time().$_FILES[$arr[0]]['name'];
  //echo $rename;
  foreach ($_FILES as $k => $v)  //k is the form field name
  {
    if (!empty($v['name']))
    {
        $this->upload->initialize($config);
        $rename[$i]=time().$_FILES[$arr[$i]]['name'];
        $_FILES[$arr[$i]]['name']=$rename[$i];
        if ($this->upload->do_upload( $arr[$i])==False)
        {
           $f=2;
        }
        else
        {
          //echo "upload successfully";
          $f=1;

             // Code After Files Upload Success GOES HERE
        }
    }
    $i++;
  }
  if($f==1)
  {
    if($this->user_model->add_employee($rename))
    {
    //echo "Record  Inserted";
    //redirect("addemployee.php");
      echo "Record inserted and document uploaded successfully!";
      //redirect(base_url().'User/login/','refresh');
    }
    else
    {
    echo "Record Not Inserted !.";
    }  
  }
  else
  {
    echo "document uoload error";
  }
}
public function searchattendance()
{
  $data['h']=$this->admin_model->searchattendance();
  //var_dump($data['h']);
  //die;
  $data['menu']=$this->menu->create_menu();
  $this->load->view('templates/header.php');
    $this->load->view('templates/menu.php',$data);
    $this->load->view('admin/viewattendance.php', $data);
    $this->load->view('templates/footer.php');

}

public function leaveapproove($id)
{
  if($this->admin_model->leaveapproove($id))
  {
    redirect(base_url().'admin/viewleave/','refresh');     
  }
}

public function viewleave()
{
  $this->load->database();
  $data['h']=$this->admin_model->viewleave();
  $data['menu']=$this->menu->create_menu();
  $this->load->view('templates/header.php');
  $this->load->view('templates/menu.php',$data);
  $this->load->view('admin/viewleaverequest.php',$data);
  $this->load->view('templates/footer.php');
}

public function viewemp()
 {
  $this->load->database(); 
   $data['menu']=$this->menu->create_menu();
  $data['h']=$this->user_model->select_emp();
  $this->load->view('templates/header.php');
    $this->load->view('templates/menu.php',$data);
     $this->load->view('Admin/viewemployee', $data);
    $this->load->view('templates/footer.php');
 }
 }
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
//error_reporting(0);
class User extends CI_Controller {
 public function __construct()
 {
  parent::__construct();
  $this->load->model('user_model');
  $this->load->model('admin_model');
  $this->load->model('menu');
  $prefs = array (
               'show_next_prev'  => TRUE
               //'next_prev_url'   => 'http://example/index.php/calendar/show/'
             );
  $this->load->library('calendar',$prefs);
  $this->load->helper(array('form','url'));
 }
public function index()
{
  if(($this->session->userdata('admin_name')!=""))
  {
    $this->welcome();
  }
  else if(($this->session->userdata('user_name')!=""))
  {
   $this->welcome();
  }
  else{
 
    $this->load->view("pages/home.php");
  }
}
public function forgot_password()
{
  $this->load->view("pages/forgot.php");
}
public function welcome()
{
  $data['title']= 'Welcome';
  $data['menu']=$this->menu->create_menu();
  if($this->session->userdata('admin_name')!="")
  {
    $data['count']=$this->admin_model->count();
    $data['loggeduser']=$this->admin_model->loggedcount();
    /*echo "<pre/>";
    print_r($data['count']);*/
    $this->load->view('templates/header.php');
    $this->load->view('templates/menu.php',$data);
    $this->load->view('Admin/index.php', $data);
    $this->load->view('templates/footer.php');

    //$this->load->view('Admin/viewpage.php');
  }
  else
  {
    $this->load->view('templates/header.php');
    $this->load->view('templates/menu.php',$data);
    $this->load->view('pages/userpage.php', $data);
    $this->load->view('templates/footer.php');
  }
}
public function upload_document()
{
   $data['menu']=$this->menu->create_menu();
   $this->load->view('templates/header.php');
    $this->load->view('templates/menu.php',$data);
    $this->load->view('pages/uploaddocument.php', $data);
    $this->load->view('templates/footer.php');

}

public function do_upload_document()
{
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
 // var_dump($_FILES);
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
    if($this->user_model->add_file($rename))
    {
    //echo "Record  Inserted";
    //redirect("addemployee.php");
      //echo "uploaded successfully!";
      redirect(base_url().'User/login/','refresh');
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


public function leave()
{
  $this->load->database();
  $data['menu']=$this->menu->create_menu();
  $this->load->view('templates/header.php');
  $this->load->view('templates/menu.php',$data);
  $this->load->view('pages/leave_form.php',$data);
  $this->load->view('templates/footer.php');  
}
public function do_leave()
{
  $this->load->database();
  if($this->user_model->leave())
  {
    redirect(base_url().'User/login/','refresh');
  }
  else
  {
    echo "unable to submit details";
  }
}

public function viewleave()
{
  $this->load->database();
  $data['h']=$this->user_model->viewleave();
  $data['menu']=$this->menu->create_menu();
  $this->load->view('templates/header.php');
  $this->load->view('templates/menu.php',$data);
  $this->load->view('pages/viewleave.php',$data);
  $this->load->view('templates/footer.php');
}

public function login()
{

  if($this->session->userdata('admin_name')!="")
  {
    $data['menu']=$this->menu->create_menu();
    $data['loggeduser']=$this->admin_model->loggedcount();
    $data['count']=$this->admin_model->count();
    $this->load->view('templates/header.php');
    $this->load->view('templates/menu.php',$data);
    $this->load->view('Admin/index.php');
    $this->load->view('templates/footer.php');
  }
  else if($this->session->userdata('user_name')!="")
  {
    $data['menu']=$this->menu->create_menu();
    $this->load->view('templates/header.php');
    $this->load->view('templates/menu.php',$data);
    $this->load->view('pages/userpage.php');
    $this->load->view('templates/footer.php');
  }
  else{
  $this->load->view('pages/home.php');
   }

}

public function register()
{
  $this->load->view('pages/registration_view.php');//loads the register_view.php file in views folder
}
public function editprofile()
{

  $this->load->database();
  $data['h']=$this->user_model->editprofile();
  $data['menu']=$this->menu->create_menu();
  $this->load->view('templates/header.php');
  $this->load->view('templates/menu.php',$data);
  $this->load->view('pages/editprofile.php',$data);
  $this->load->view('templates/footer.php');
}

public function do_editprofile()
{
  $data['msg']="Successfully updated your profile";
  $this->load->database();
  if($this->user_model->do_editprofile())
  {
    $data['menu']=$this->menu->create_menu();
    $this->load->view('templates/header.php');
    $this->load->view('templates/menu.php',$data);
    $this->load->view('pages/userpage.php',$data);
    $this->load->view('templates/footer.php');
  }
  else{
    echo "record not updated";
  }

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
public function fillattendance()
{
  $data['menu']=$this->menu->create_menu();
  $this->load->view('templates/header.php');
  $this->load->view('templates/menu.php',$data);
  $this->load->view('pages/fillattendence.php');
  $this->load->view('templates/footer.php');
}

public function do_attendance()
{
 
 if($this->user_model->add_attendance())
{
    $this->login();
}
else
{

  $data['menu']=$this->menu->create_menu();
   $this->load->view('templates/header.php');
    $this->load->view('templates/menu.php',$data);
    $this->load->view('pages/fillattendence.php');
    $this->load->view('templates/footer.php');
}
}


public function view_attendance()
{
  $this->load->database(); 
  $data['h']=$this->user_model->get_attendence();
  $data['menu']=$this->menu->create_menu();
  $this->load->view('templates/header.php');
    $this->load->view('templates/menu.php',$data);
    $this->load->view('pages/view_attendance.php', $data);
    $this->load->view('templates/footer.php');

}

public function search_attendance()
{
   $data['h']=$this->user_model->search_attendance();
  $data['menu']=$this->menu->create_menu();
  $this->load->view('templates/header.php');
    $this->load->view('templates/menu.php',$data);
    $this->load->view('pages/view_attendance.php', $data);
    $this->load->view('templates/footer.php');
}

public function do_login()
{

  $email=$this->input->post('email');
  $password=md5($this->input->post('password'));
  $result=$this->user_model->login($email,$password);
  if($result) $this->welcome();
  else        $this->index();
}
public function do_register()
{

$this->load->model('user_model');//loads the user_model.php file in models folder
if($this->user_model->add_user())
{

$this->load->library('email');
                           // Enable verbose debug output

$this->email->from('javed@weboforce.com', 'JavedAhamad');
$this->email->to('javedahamad4@gmail.com');
$this->email->subject('New Usre Registered');
$this->email->message('Testing the email class.');
if($this->email->send()){
  $data['msg']="Registration Successfully";
 $this->load->view('pages/home.php',$data);
}
              /*                 // TCP port to connect to
$mail->From = 'javed@weboforce.com';
$mail->FromName = 'Javed';
$mail->addAddress($_REQUEST['address'], 'javed');     // Add a recipient
//$mail->addAddress('ellen@example.com');               // Name is optional
//$mail->addReplyTo('info@example.com', 'Information');
//$mail->addCC('cc@example.com');
//$mail->addBCC('bcc@example.com');
//$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
//$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
$mail->isHTML(true);                                  // Set email format to HTML
$mail->Subject = $_REQUEST['subject'];
$mail->Body    = $_REQUEST['body'];
//$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    header("location:index.php?msg=messege sent");
}


*/

   
}
else
{
echo "Registration failed";
}
}


public function logout()
{
  $newdata = array(
  'user_id'   =>'',
  'user_name'  =>'',
  'user_email'     => '',
  'logged_in' => FALSE,
  );
  //$this->session->unset_userdata($newdata );
  $this->session->sess_destroy();
  //redirect($this->input->get('last_url/login_view'));
  //$this->index();
  redirect(base_url());
  //echo site_url("index.php/login_view");
}
 
 public function change_password()
  {

  $data['menu']=$this->menu->create_menu();
    $this->load->view('templates/header.php');
    $this->load->view('templates/menu.php',$data);
     $this->load->view('pages/change_password');
    $this->load->view('templates/footer.php');
    
    
  }
  public function do_change_password()
  {
    $result=$this->user_model->ch_pwd();
    if($result==true){
      redirect(base_url().'User/login',$data);
    }else
    {
      $data['menu']=$this->menu->create_menu();
      $this->load->view('templates/header.php');
      $this->load->view('templates/menu.php',$data);
     $this->load->view('pages/change_password');
      $this->load->view('templates/footer.php');
    }
}
}
?>
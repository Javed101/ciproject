<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class User extends CI_Controller {
public function index()
{
$this->load->view('register_view');

}
public function register()
{
$this->load->view('register_view');//loads the register_view.php file in views folder
}
public function do_register()
{

if($this->input->post('register'))//$_POST["register"];
{
  $this->load->helper('url');

$this->load->model('user_model');//loads the user_model.php file in models folder
if($this->user_model->add_user())
{
echo "hi ".$this->input->post('username')." Registred successfully" ;
}
else
{
echo "Registration failed";
}
}
}
 
}
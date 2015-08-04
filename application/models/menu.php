<?php
class Menu extends CI_Model {
function __construct()
{
	parent::__construct();
	$this->load->library('session');
	$this->load->model(array('user_model'));
}
function create_menu(){
	$menu_common = array(
	'Home' => base_url().'User/login'
	);

	$admin_logged = array(
	'View Employee' => base_url().'admin/viewemp/',
	'Add Employee' => base_url().'admin/addemp/',
	'View Attendance' => base_url().'admin/viewattendance/',
	'setting' => base_url().'User/change_password/'
	);

	$user_logged = array(
	'Attendance Mark' => base_url().'User/fillattendance/',
	'Upload Document' => base_url().'User/upload_document/',
	'Edit Profile' => base_url().'User/editprofile/',
	'View Attendance' => base_url().'User/view_attendance/',
	'Apply Leave' => base_url().'User/leave', 
	'setting' => base_url().'User/change_password/'
	);

	if($this->session->userdata('admin_id')!='')
	{
	   $menu = array_merge($menu_common,$admin_logged);
	}
	else
	{
		$menu = array_merge($menu_common,$user_logged);
	}
	return $menu;
	}
}
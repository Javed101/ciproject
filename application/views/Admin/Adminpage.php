<div>
  <h2>Welcome Back, <?php echo $this->session->userdata('admin_name'); ?>!</h2>
  <p>This section represents the area that only Admin can access.</p>
 <b><a href="<?php echo base_url().'User/login'; ?>">Home</a></b>&nbsp;&nbsp;
 <b><a href="<?=(base_url().'User/viewuser')?>"> View User</a></b>&nbsp;&nbsp;
 <b><a href="<?=(base_url().'User/viewattendance')?>"> View Attendance</a></b>&nbsp;&nbsp;
 <b><a href="<?=(base_url().'User/addemp')?>"> Add Employee</a></b>&nbsp;&nbsp;
 <b><a href="<?=(base_url().'User/viewemp')?>"> View Employee</a></b>&nbsp;&nbsp;
  <b><a href="<?=(base_url().'User/logout')?>">Logout</a></b>&nbsp;&nbsp;
</div><!--<div class="content">-->
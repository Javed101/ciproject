<b><a href="<?php echo base_url().'User/login'; ?>">Home</a></b>&nbsp;&nbsp;
 <b><a href="<?=(base_url().'User/viewuser')?>"> View User</a></b>&nbsp;&nbsp;
 <b><a href="<?=(base_url().'User/viewattendance')?>"> View Attendance</a></b>&nbsp;&nbsp;
 <b><a href="<?=(base_url().'User/addemp')?>"> Add Employee</a></b>&nbsp;&nbsp;
 <b><a href="<?=(base_url().'User/viewemp')?>"> View Employee</a></b>&nbsp;&nbsp;
  <b><a href="<?=(base_url().'User/logout')?>">Logout</a></b>&nbsp;&nbsp;<br /><br /><br /><br />


<h4>List of Users</h4>
<table border="1" width="80%" align="center">
<tr>
<td><b>Name</b></td>
<td><b>Email</b></td>
<td><b>password</b></td>
<td><b>Gender</b></td>
<td><b>Action</b></td>

</tr>
<?php
foreach ($h->result() as $row)  
         {  
            ?><tr>  
            <td><?php echo $row->username;?></td>  
            <td><?php echo $row->email;?></td>  
            <td><?php echo $row->password;?></td> 
            <td><?php echo $row->gender;?></td>
            <td><b><a href=" <?php echo base_url().'User/delete/'.$row->user_id; ?>" >Delete</a></b></td>  
            </tr>  
         <?php } ?> 
</table>
<?php// echo $calender; ?>
<script>
/*function delrecord(user_id)
{
   //Javascript:delrecord(<?php echo $row->user_id;?>)
	if(confirm("Do you want to delete.! "))
	window.location="delete/user_id";
}*/
</script>
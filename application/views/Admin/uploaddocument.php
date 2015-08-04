<html>
<body>
	<a href="<?php echo base_url().'User/login'; ?>">Home</a>
<div>
<center>
<!--<form name ="documentupload" action="<?=('')?>" enctype="multipart/form-data" method="post">-->
<?php echo form_open_multipart(base_url().'user/uploaddocument');?>
               <span><h1>
                   Upload Document </h1>
               </span>
<table border="">
  <tr>
    <td>Document 1</td>
    <td><input type="file" name="file_1" /></td>
  </tr>
  <tr>
    <td>Document 2</td>
    <td><input type="file" name="file_2" id="file_2" /></td>
  </tr>
  <tr>
    <td>Document 3</td>
    <td><input type="file" name="file_3" id="file_1" /></td>
  </tr>
  <tr>
    <td>Document 4</td>
    <td><input type="file" name="file_4" id="file_2" /></td>
  </tr>
  <tr>
    <td>Document 5</td>
    <td><input type="file" name="file_5" id="file_1" /></td>
  </tr>
  <tr>
    <td>Document 6</td>
    <td><input type="file" name="file_6" id="file_2" /></td>
  </tr>
  <tr>
    <td>Document 7</td>
    <td><input type="file" name="file_7" id="file_1" /></td>
  </tr>
  <tr>
    <td>Document 8</td>
    <td><input type="file" name="file_8" id="file_2" /></td>
  </tr>
  <tr>
    <td>Document 9</td>
    <td><input type="file" name="file_9" id="file_1" /></td>
  </tr>
  <tr>
    <td>Document 10</td>
    <td><input type="file" name="file_10" id="file_2" /></td>
  </tr>
  <tr><td colspan="2" align="center">
	<input type="submit" name="upload" value="upload" />
	 </td>
    </tr>
</table>
</form>
</center>
</div>
</body>
</html>
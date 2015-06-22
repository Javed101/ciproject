<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"></head>
<body>
<div class="container">
<form action="<?=site_url('user/do_register')?>" method="post" name="myform">
<label for="username">User Name</label>
<input type="text" name="username"/>
<label for="email">Email</label>
<input type="text" name="email"/>
<label for="password">Password</label>
<input type="password" name="password"/><label for="gender">Gender</label>
<input type="radio" name="gender" value="male"/>male
<input type="radio" name="gender" value="female"/>female
<input type="submit" value="Sign up" name="register"/>
</form>
</div>
</body>
</html>
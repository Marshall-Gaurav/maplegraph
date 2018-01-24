<?php
include('../connection.php');
  
if(isset($_POST['submit']))
{
	$un = $_POST['u'];
	$up = $_POST['p'];
	$sel = " SELECT * from admin where uname = '$un' AND pass = '$up' ";
	$exe = mysqli_query($conn,$sel);
	$tot = mysqli_num_rows($exe);
	if($tot == 1)
	{
		$fetch = mysqli_fetch_array($exe);
		session_start();
		$_SESSION['id'] = $fetch['id'];
		echo '<script>window.location="home.php?cat=all"</script>';
	}
	else
	{
		echo 'Invalid Username And Password';
	}	
}
?>
<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Login Form</title>
  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
  <link rel="stylesheet" href="login.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>

</head>
<body>
  <div class="login">
	<h1>Login</h1>
    <form method="POST" enctype="multipart/form-data">
    	<input type="text" name="u" placeholder="Username is admin" required="required" />
        <input type="password" name="p" placeholder="Password is password" required="required" />
        <button type="submit" class="btn btn-primary btn-block btn-large" name="submit">Let me in.</button>
    </form>
</div>
</body>
</html>

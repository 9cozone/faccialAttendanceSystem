<?php
session_start();
require('php_includes/connect.php');
$username = mysqli_real_escape_string($con,$_POST['username']);
$password = mysqli_real_escape_string($con,$_POST['password']);

$query = mysqli_query($con,"select * from students where username='$username' and password='$password'");
if(mysqli_num_rows($query)>0){
	$_SESSION['username'] = $username;
	$_SESSION['id'] = session_id();
	$_SESSION['login_type'] = "students";
	
	echo '<script>alert("Login Success.");window.location.assign("attendance.php");</script>';
	
}
else{
	echo '<script>alert("username or password is worng.");window.location.assign("login.php");</script>';
}

?>
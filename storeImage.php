 <?php
include('php_includes/connect.php');
include('php_includes/check-login.php');
 $username = $_SESSION['username'];



?>  
<!DOCTYPE HTML>
<html>
<head>
<title>Login</title>
<?php
 include('php_includes/meta.php');

?>
</head>
<body>
	<!----- start-header---->
			<div id="home" class="header two">
				<div class="top-header two">	
							<div class="container">
						<div class="logo">
							<a href="index.html"><img src="images/logo.gif"/>  <h1>ESUT  <span>TAMS  </span></h1></a>
						</div>
										
<?php
 include('php_includes/navi.php');

?>
<!-- script-for-menu -->
								<script>
									$("span.menu").click(function(){
										$(".top-menu ul").slideToggle("slow" , function(){
										});
									});
								</script>
								<!-- script-for-menu -->
							<div class="clearfix"> </div>
					</div>
			</div>
			    <div class="clearfix"> </div>
		</div>
		<!----- //End-slider---->
	<!--/contact-->
 
	
<?php

 
$img = $_POST['image'];
$today_date = date('Y-M-D');
$today_time = time();
$username = $_SESSION['username'];
$query = mysqli_query($con, "select * from students where username ='$username'");
$raw =mysqli_fetch_array($query);
$com_dept= $raw['department'];
$com_reg= $raw['reg_number'];
$department = $_POST['department'];
$course_title = $_POST['course_title'];
$course_code = $_POST['course_code'];
$lecturer_name = $_POST['lecturer_name'];
$reg_number = $_POST['reg_number'];
$level = $_POST['level'];
 


	if ($com_dept !== $department){
		
echo   '<script>alert("Your are not a member of this Department");window.location.assign("attendance.php");</script>';
	}elseif($com_reg !== $reg_number){
		echo   '<script>alert("Incorrect Reg. Number. You are not a member of this department.");window.location.assign("attendance.php");</script>';

}else{
	

    $folderPath = "upload/";

  

    $image_parts = explode(";base64,", $img);

    $image_type_aux = explode("image/", $image_parts[0]);

    $image_type = $image_type_aux[1];

  

    $image_base64 = base64_decode($image_parts[1]);

    $fileName = uniqid() . '.png';

  

    $file = $folderPath . $fileName;

    file_put_contents($file, $image_base64);
	
$first = mysqli_query($con,"INSERT into  captures (`date`,`time`,`username`,`department`,`course_title`,`course_code`,`lecturer_name`,`reg_number`,`level`,`image`)

			values('$today_date','$today_time','$username','$department','$course_title','$course_code','$lecturer_name','$reg_number','$level','$fileName')");

			

  
//$query = mysqli_query($con,"insert into  webcam (`image`) values('$fileName')");

if ($first){
	echo   '<script>alert("Your Attendance  was taken successfully");window.location.assign("index.php");</script>';

}else{
		echo   '<script>alert("Your Attendance  was not successful, please try again");window.location.assign("attendance.php");</script>';

}
}

 




   
 
  

?>	<?php
 include('php_includes/footer.php');

?>
</body>
</html>



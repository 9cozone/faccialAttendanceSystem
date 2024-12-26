 
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
	 <div class="contact">
	 	<div class="container">
					<div class="contact-head">
							<h3>Login</h3>
							<p>Student Login Page</p>
					 </div>
		<div class="contact-top">
		   	 <div class="col-md-8 contact-form">
						<form method="POST" action="pro_log.php">
						<input type="text" class="textbox" name="username"  placeholder="Enter Your Username" >
							<input type="password" class="textbox"   name="password" placeholder="Enter Your Password">
 							<input type="submit" value="Login">
						</form>
				</div>
			  <div class="clearfix"></div>
		</div>
	</div>
	 

</div>
	<!--address-->
	<?php
 include('php_includes/footer.php');

?>
</body>
</html>
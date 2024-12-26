
<?php


include('php_includes/connect.php');

?>


<?php //User cliced on join
if(isset($_GET['register'])){
 
 	$surname = mysqli_real_escape_string($con,$_GET['surname']);
	$firstname = mysqli_real_escape_string($con,$_GET['firstname']);
	$lastname = mysqli_real_escape_string($con,$_GET['lastname']);
	$state = mysqli_real_escape_string($con,$_GET['state']);
	$username = mysqli_real_escape_string($con,$_GET['username']);
	$email = mysqli_real_escape_string($con,$_GET['email']);
	$phone_number = mysqli_real_escape_string($con,$_GET['phone_number']);
	$password = mysqli_real_escape_string($con,$_GET['password']);
	$comfirm_password = mysqli_real_escape_string($con,$_GET['comfirm_password']);
	$address = mysqli_real_escape_string($con,$_GET['address']);
	$department = mysqli_real_escape_string($con,$_GET['department']);
	$reg_number = mysqli_real_escape_string($con,$_GET['reg_number']);
	$sex = mysqli_real_escape_string($con,$_GET['sex']);
	$level = mysqli_real_escape_string($con,$_GET['level']);
  	
	$flag = 0;
	
	if($surname!='' && $firstname!='' && $lastname!=''&& $state!='' && $address!='' && 
	
	$email!=''  && $phone_number!='' && $level!=''&& $reg_number!='' && $department!='' && 
	  $password!='' && $comfirm_password!='' && $sex!=''){
		//User filled all the fields.
		 
			if(email_check($email)){
				//Email is ok
				if(username_check($username)){
					if($password==$comfirm_password){
					 
						$flag=1;
					 
				}else{
					
				   echo '<script>alert("The password does not match");</script>';

					
				}
				}
				else{
					//check under userid
					echo '<script>alert("The username has already been taken.");</script>';
				}
			}
			else{
				//check email
				echo '<script>alert("This email address has already taken.");</script>';
			}
		 
	}
	else{
		//check all fields are fill
		echo '<script>alert("Please fill all the fields.");</script>';
	}
	
	//Now we are heree
	//It means all the information is correct
	//Now we will save all the information
	if($flag==1){
		
		//Insert into User profile
		$query = mysqli_query($con,"insert into students(`surname`,`firstname`,`lastname`
		,`username`,`email`,`phone_number`,`password`,`sex`,`state`,`department`
		,`level`, `address`, `reg_number`) values('$surname','$firstname','$lastname','$username',
		'$email','$phone_number','$password','$sex','$state','$department','$level', '$address', '$reg_number')");
		
		//Insert into Tree
		//So that later on we can view tree.
	$query = mysqli_query($con,"insert into report(`username`) values('$username')");
		
		    
			
			  
			
	 
		
		 
		
		
		echo mysqli_error($con);
		
		echo '<script>alert("Your Course Registeration was succesfull, You can now login");window.location.assign("login.php");</script>';
	 
	}
	
}
?><!--/join user-->
<?php 
//functions
 
function email_check($email){
	global $con;
	
	$query =mysqli_query($con,"select * from students where email='$email'");
	if(mysqli_num_rows($query)>0){
		return false;
	}
	else{
		return true;
	}
}
 
function username_check($username){
	global $con;
	
	$query =mysqli_query($con,"select * from students where username='$username'");
	if(mysqli_num_rows($query)>0){
		return false;
	}
	else{
		return true;
	}
}
 
 
 
 
 
?>
<!DOCTYPE HTML>
<html>
<head>
<title>Registeration</title>
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
							<h3>Registeration </h3>
							<p>Ensure You Fill Your Correct Data    </p>
					 </div>
		<div class="contact-top">
		   	
			
			  	 <div class="col-md-6 contact-form">
			 
				<form method "GET"><br><br><h2  >Personal Information</h2><br><br>
					<div class="single-grid">
						
						<div class="col-md-12 single-us">
							<input type="text" class="textbox" required name ="surname" placeholder="Enter SurName"   >
						</div>
					<div class="col-md-12 single-us">
							<input type="text" class="textbox" required name ="firstname" placeholder="Enter Firstname"   >
						</div>
						<div class="col-md-12 single-us">
							<input type="text"  class="textbox" required name ="lastname" placeholder="Enter LastName">
						</div>
						<div class="col-md-12 single-us">
							<input type="text"    class="textbox" name ="username" required placeholder="Enter Your Username">
						</div><br>
					 
							<select   name ="state" class="textbox" required >
								<option> Enugu</option>
								<option> Anambra</option>
								<option> Benue</option>
								<option> Ebonyi</option>
								<option> kano</option>
								<option> lagos</option>
								<option> ibandan</option>
								<option> osun</option>
								<option> kogi</option>
								</select>
						 
						 
						 <br>
						  
							<select   name ="sex" class="textbox" required>
								<option> Male</option>
								<option> Female</option>
								<option> Others</option>
 								</select>
						 
						 
					</div>
					</div>
						 <div class="col-md-6 contact-form">
 					
 						 
						
					<br>
					<br>
					<h2  >Course Information</h2><br>
						 
				  <br>
				  <div class="col-md-12 single-us">
							<input type="text" class="textbox" required name ="reg_number" placeholder="Enter Registeration Number"   >
						</div>
							<select   name ="department" class="textbox" required>
								<option> ACCIDENT & EMERGENCY</option>
								<option> ACCOUNTANCY</option>
								<option>  ADULT & CONTINUING EDUCATION</option>
								<option> AGRICULTURAL & BIORESOURCE ENGINEERING</option>
								<option> AGRICULTURE ECONOMICS & EXTENSION</option>
								<option>  AGRONOMY & ECOLOGICAL MANAGEMENT </option>
								<option>  ANAESTHOLOGY</option>
								<option> ANATOMY</option>
								<option> ANIMAL/FISHERIES SCIENCE & MANAGEMENT</option>
								<option> APPLIED BIOCHEMISTRY</option>
								<option>  APPLIED BIOLOGY & BIOTECHNOLOGY</option>
								<option> APPLIED MICROBIOLOGY & BREWING</option>
								<option>  BANKING & FINANCE</option>
								<option>  BUILDING</option>
								<option> BUSINESS ADMINISTRATION</option>
								<option>  BUSINESS LAW</option>
								<option> CHEMICAL ENGINEERING</option>
								<option>  CIVIL ENGINEERING</option>
								<option> CLINICAL PHARMACY & BIOPHARMACEUTICS</option>
								<option> COMMUNITY MEDICINE</option>
								<option>  COMPUTER ENGINEERING</option>
								<option>  COMPUTER SCIENCE</option>
								<option>  COORPERATIVE & RURAL DEVELOPMENT</option>
								<option> ECONOMICS</option>
								<option>  EDUCATION FOUNDATION</option>
								<option>  EDUCATION MANAGEMENT</option>
								<option>  ELECTRICAL & ELECTRONICS ENGINEERING</option>
								<option>  ESTATE MANAGEMENT</option>
								<option>  FOOD SCIENCE & TECHNOLOGY</option>
								<option>  GEOGRAPHY & METEOROLOGY</option>
								<option>  GEOLOGY & MINING</option>
								<option>  GUIDANCE & COUNSELLING</option>
								<option> HAEMATOLOGY/IMMUNOLOGY</option>
								<option> HEALTH & PHYSICAL EDUCATION</option>
								<option>  HISTOPATHOLOGY</option>
								<option>  HUMAN PHYSIOLOGY</option>
								<option>  INDUSTRIAL CHEMISTRY</option>
								<option>  INDUSTRIAL MATHEMATICS & APPLIED STATISTICS</option>
								<option> INDUSTRIAL PHYSICS</option>
								<option>  INSURANCE & RISK MANAGEMENT</option>
								<option>  INTERNAL MEDICINE</option>
								<option>  INTERNATIONAL LAW & JURISPRUDENCE</option>
								<option> LIBRARY & INFORMATION SCIENCE</option>
								<option>  MARKETING</option>
								<option>  MASS COMMUNICATION</option>
								<option> MATHEMATICS & COMPUTER EDUCATION</option>
								<option> MECHANICAL & PRODUCTION ENGINEERING</option>
								<option>  MEDICAL BIOCHEMISTRY</option>
								<option>  MEDICAL LABORATORY SCIENCES</option>
								<option>  OBSTETRICS & GYNAECOLOGY</option>
								<option>  OPHTHALMOLOGY</option>
								<option>  ORTOLARYNGOLOGY</option>
								<option> PAEDIATRICS</option>
								<option>  PATHOLOGY</option>
								<option>  PHARMACEUTICAL CHEMISTRY</option>
								<option> PHARMACEUTICS & PHARMACEUTICAL TECHNOLOGY</option>
								<option>  PHARMACOGNOSY</option>
								<option>  PHARMACOLOGY</option>
								<option>  PHARMACOLOGY & THERAPEUTICS</option>
								<option>  POLITICAL SCIENCE</option>
								<option>  PRIVATE & PROPERTY LAW</option>
								<option> PSYCHOLOGY</option>
								<option>  PUBLIC ADMINISTRATION</option>
								<option>  PUBLIC LAW</option>
								<option>  QUANTITY SURVEYING</option>
								<option>  RADIOLOGY</option>
								<option>  SCIENCE & COMPUTER EDUCATION</option>
								<option>  SOCIOLOGY & ANTHROPOLOGY</option>
								<option> SURGERY</option>
								<option> SURVEYING & GEOINFORMATICS</option>
								<option>  TECHNOLOGY & VOCATIONAL EDUCATION</option>
								<option> URBAN & REGIONAL PLANNING</option>
								 
 								</select>	
								
					<br>
							<select   name ="level" class="textbox" required>
								<option> Year 1</option>
								<option> Year 2</option>
								<option> Year 3</option>
								<option> Year 4</option>
								<option> Year 5</option>
								<option> Year 6</option>
								<option> Year 7</option>
								</select>						</div>
						
						 
					 
				 
					 	 <div class="col-md-6 contact-form">
					 
					  <br><br>
					  <h2  >Contact Infomation</h2><br>
						<div class="col-md-12 single-us">
							<input type="text"    class="textbox" name ="email" required placeholder="Enter Your Email Address">
						</div>
						
						
						<div class="col-md-12 single-us">
							<input type="text"    class="textbox" name ="phone_number" required placeholder="Enter Your phone number">
						</div>
						 <div class="col-md-12 single-us">
							<input type="password"    class="textbox" name ="password" required placeholder="Password">
						</div>
						 <div class="col-md-12 single-us">
							<input type="password"    class="textbox" name ="comfirm_password" required placeholder="Comfirm Password">
						</div>
						<div class="col-md-12 single-us">
							<input type="text"    class="textbox" name ="address" required placeholder="Enter Your Resident Address">
						</div>
					 
						<div class="clearfix"> </div>
				
				 
					
				 
							<input style="width:100%;" type="submit"  width="100%"   name ="register" value=" Register"     >
										<p>After completion of course registration login to attend classes</p>

						</div>
			 
					
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
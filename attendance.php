 <?php
include('php_includes/check-login.php');
include('php_includes/connect.php');
$username = $_SESSION['username'];

?> 
<!DOCTYPE HTML  >
<html>
<head>
<title>Attendance</title>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

 <script src="https://cdnjs.cloudflare.com/ajax/libs/webcamjs/1.0.25/webcam.min.js"></script>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" />

<?php
 include('php_includes/meta.php');

?>

<link href="https://getbootstrap.com/dist/css/bootstrap.min.css" rel="stylesheet">
     <link href="https://getbootstrap.com/examples/jumbotron-narrow/jumbotron-narrow.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
   

 <style type="text/css">

        #results { padding:20px; border:1px solid; background:#ccc; }

    </style>
   
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
							<h3>
      Facial  Attendance/Authentication System </h3>
 		 
		 
	 

<div class="container">
      

   

    <form method="POST" action="storeImage.php">

        <div class="row">

            <div class="col-md-6">

                <div id="my_camera"></div>

                <br/>  <br/>

                <input Style = "width:150px; height:50px;" type=button value="CAPTURE" onClick="take_snapshot()">

                
</div>				
<input type="hidden" name="image" class="image-tag">
				
           

           <div class="col-md-6">

                <div id="results">Your captured image will appear here...</div>

            </div>
			 </div>
			 <br/> <br/>
				
					 
						  <br/> <br/>
<div class="col-md-12">

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
   <input type="text" class="textbox"   name ="course_title" placeholder="Enter Course Title"   > 
				   <input type="text" class="textbox"   name ="course_code" placeholder="Enter Course code"   >
				 <input type="text" class="textbox"   name ="lecturer_name" placeholder="Enter Lectures Nmae"   >
			 <input type="text" class="textbox"   name ="reg_number" placeholder="Enter Reg Number"   > 

					 
						
							<select   name ="level" class="textbox"  >
								<option> Year 1</option>
								<option> Year 2</option>
								<option> Year 3</option>
								<option> Year 4</option>
								<option> Year 5</option>
								<option> Year 6</option>
								<option> Year 7</option>
								</select>						</div>
						

				
				



               <br/><br/> <button style="width:100%;height:50px;" class="btn btn-success">SUBMIT</button>

            </div>
            </div>

        </div>

    </form>

</div>

  

<!-- Configure a few settings and attach camera -->

<script language="JavaScript">

    Webcam.set({

        width: 490,

        height: 390,

        image_format: 'jpeg',

        jpeg_quality: 90

    });

  

    Webcam.attach( '#my_camera' );

  

    function take_snapshot() {

        Webcam.snap( function(data_uri) {

            $(".image-tag").val(data_uri);

            document.getElementById('results').innerHTML = '<img src="'+data_uri+'"/>';

        } );

    }

</script>

 	 
		 
		 
		 
		 
		 </div>
	 

</div>
	<!--address-->
	<?php
 include('php_includes/footer.php');

?>
</body>
</html>
 
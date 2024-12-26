 
<!DOCTYPE HTML>
<html>
<head>
<title>Esut TMAS</title>
<?php
 include('php_includes/meta.php');

?>
</head>
<body>
	<!----- start-header---->
			<div id="home" class="header">
					<div class="top-header">
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
<!--- banner Slider starts Here --->
	  			<script src="js/responsiveslides.min.js"></script>
			 <script>
			    // You can also use "$(window).load(function() {"
			    $(function () {
			      // Slideshow 4
			      $("#slider4").responsiveSlides({
			        auto: true,
			        pager: true,
			          nav:false,
			        speed: 500,
			        namespace: "callbacks",
			        before: function () {
			          $('.events').append("<li>before event fired.</li>");
			        },
			        after: function () {
			          $('.events').append("<li>after event fired.</li>");
			        }
			      });
			
			    });
			  </script>
			<!----//End-slider-script---->
			<!-- Slideshow 4 -->
			    <div  id="top" class="callbacks_container">
			      <ul class="rslides" id="slider4">
			        <li>
			          <div class="slider-top">
			          		<h2>Knowledge is Power</h2>
							<p>Knowledge is power. You can't begin a career, for that matter even a relationship, unless you know everything there is to know about it  You can't begin a career, for that matter even a relationship, unless you know everything there is to know about it..</p>
							<h6>Welcoming for every Student of Esut</h6>
			          </div>
			        </li>
			        <li>
			        <div class="slider-top">
			          		<h2>Time is Life </h2>
							<p> Everything we do here on earth is revolving around time
							Time wasted is life wasted, time wasted is money wasted
							Time management is very crucial in every sector of life
							Especially in the Educational sector</p>
							<h6>Be time conscious.</h6>
			          </div>
			        </li>
			        <li>
			           <div class="slider-top">
			          		<h2>School Education</h2>
							<p> Buy wisdom and sell it not, the root of very success of men and 
							women are traced in the path of Education,
							Don't go to school and see all the four corners of the 
							school and return home empty.
							Let the aim of school be in the consistenc of making every day count in 
							your life.
							</p>
							<h6>Attend Lectures always</h6>
			          </div>
			        </li>
					<li>
			           <div class="slider-top">
			          	    <h2>Perfect Education</h2>
							<p> There is a adage that "no one is perfect" it might seem
							true but this is my conclusion, "Right practice make better" 
							In other words if you keep practicing the right acts, you will
							definately become a better person of your dream.</p>
							<h6>Make Each time count</h6>
			          </div>
			        </li>
			      </ul>
			    </div>
			    <div class="clearfix"> </div>
		</div>
		<!----- //End-slider---->

	<!----start-slide-bottom--->
		<div class="slide-bottom">
			<div class="slide-bottom-grids">
				 <div class="container">
					 <div class="col-md-6 slide-bottom-grid">
							<h3>Welcome!</h3>
							<p>The Enugu State University of Science 
							and Technology (ESUT) was originally founded as ASUTECH on July 30, 1980.

						The University was conceived with the aim to establish an institution
						 that must be closely related to society, its industry and above all,
						 serve as a catalyst in the technological advancement of the people, 
						 hence the University’s motto remains, "Technology for Service".

						 </p>
					 </div>
					 <div class="col-md-6 slide-bottom-grid">
					       <h3>Our Mission</h3>
						   <p>To revitalize the right standard of Education
						   .</p> 
						   <p>Proper Time mamagement system
						    </p>
							<p>Student Time and Attendance Management system
						    </p>		
							<p>Generation of student attendance Report
						    </p>
					 </div>
					   <div class="clearfix"></div>
				 </div>
			 </div>
		</div>
<!--services-->
	 
	 
	 
	 
	 <!--address-->
	<?php
 include('php_includes/footer.php');

?>
</body>
</html>
 <?php
include('php_includes/check-login.php');
include('php_includes/connect.php');
$username = $_SESSION['username'];

?> 
<!DOCTYPE HTML>
<html>
<head>
<title>Report</title>
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
							<h3>Student Report</h3>
							<p>Attendance Analysis</p>
					 </div>
		<div class="contact-top">
		
		<div class="history-faq-grids">
				<div class="col-md-12 history-faq-grid">
					 
					<div class="sap_tabs">	
						<div id="horizontalTab" style="display: block; width: 100%; margin: 0px;">
							  <ul class="resp-tabs-list">
								  <li class="resp-tab-item grid1" aria-controls="tab_item-1" role="tab"><span>Year one</span></li>
								  <li class="resp-tab-item grid2" aria-controls="tab_item-2" role="tab"><span>Year Two</span></li>
								  <li class="resp-tab-item grid3" aria-controls="tab_item-3" role="tab"><span>Year Three</span></li>
								  <li class="resp-tab-item grid4" aria-controls="tab_item-4" role="tab"><span>Year Four</span></li>
								  <li class="resp-tab-item grid5" aria-controls="tab_item-5" role="tab"><span>Year Five</span></li>
								  <li class="resp-tab-item grid5" aria-controls="tab_item-6" role="tab"><span>Year Six</span></li>
								  <li class="resp-tab-item grid5" aria-controls="tab_item-7" role="tab"><span>Year Seven</span></li>
 								  <div class="clear"></div>
							  </ul>				  	 
								<div class="resp-tabs-container">
								 	<div class="tab-1 resp-tab-content" aria-labelledby="tab_item-1">
									 
												  	<table class="table table-bordered table-striped">
                        	<tr>
                            	<th>S.n.</th>
                                <th>Course Title</th>
                                <th>Course Code</th>
                                <th>lecturer</th>
                                <th>Date</th>
                                <th>Time  </th>
                                <th>Capture  </th>
                                <th>Status  </th>
                            </tr>
                            <?php 
							$i=1;
							$query = mysqli_query($con,"select * from captures where username='$username' and level='Year 1'");
							if($query){
								while($row=mysqli_fetch_array($query)){
									$id = $row['id'];
									$course = $row['course_title'];
									$course_code = $row['course_code'];
									$lecturer = $row['lecturer_name'];
									$date = $row['date'];
									$time = $row['time'];
									$capture = $row['image'];
						
									$status = $row['status'];
								?>
                                	<tr>
                                    	<td><?php echo $i; ?></td>
                                        <td><?php echo $course; ?></td>
                                        <td><?php echo $course_code; ?></td>
                                        <td><?php echo $lecturer; ?></td>
                                        <td><?php echo $date; ?></td>
										 <td><?php echo $time; ?></td>
                                        <td>
											
										 <img src="upload/<?php echo $capture;?> " width="100" height ="100" alt="image" />
								 
										</td>
                                      
										<?php 
										if ($status =="checked"){
										?>
										<td style="background-color:green; color:white ;text-align:center;"><?php echo $status; ?></td>
										<?php
										}else{
										?>
										<td style="background-color:red; color:white; text-align:center;"><?php echo $status; ?></td>
										<?php
										}
										?>
                                    </tr>
                                <?php
									$i++;
								}
							}
							else{
							?>
                            	<tr>
                                	<td colspan="4">You have not attended any class yet</td>
                                </tr>
                            <?php
							}
							?>
                        </table>
                 
										
									 </div>
									
									
									<!--this is for the first year in school-->
									<div class="tab-1 resp-tab-content" aria-labelledby="tab_item-2">
								
										  	<table class="table table-bordered table-striped">
                        	<tr>
                            	<th>S.n.</th>
                                <th>Course Title</th>
                                <th>Course Code</th>
                                <th>lecturer</th>
								 <th>Date</th>
                                <th>Time  </th>
                                <th>Capture  </th>
                                <th>Status  </th>
                             </tr>
                            <?php 
							$i=1;
							$query = mysqli_query($con,"select * from captures where username='$username' and level='Year 2' ");
							if($query){
								while($row=mysqli_fetch_array($query)){
									$course = $row['course_title'];
									$course_code = $row['course_code'];
									$lecturer = $row['lecturer_name'];
									$date = $row['date'];
									$time = $row['time'];
									$status = $row['status'];
								?>
                                	<tr>
                                    	<td><?php echo $i; ?></td>
                                        <td><?php echo $course; ?></td>
                                        <td><?php echo $course_code; ?></td>
                                        <td><?php echo $lecturer; ?></td>
                                        <td><?php echo $date; ?></td>
                                        <td><?php echo $time; ?></td>
                                       		 <td>
											
										 <img src="upload/<?php echo $capture;?> " width="100" height ="100" alt="image" />
								 
										</td>							
																		<?php 
										if ($status =="checked"){
										?>
										<td style="background-color:green; color:white ;text-align:center;"><?php echo $status; ?></td>
										<?php
										}else{
										?>
										<td style="background-color:red; color:white; text-align:center;"><?php echo $status; ?></td>
										<?php
										}
										?>
                                    </tr>
                                <?php
									$i++;
								}
							}
							else{
							?>
                            	<tr>
                                	<td colspan="4">You have not attended any class yet</td>
                                </tr>
                            <?php
							}
							?>
                        </table>
                 
								
								
									</div>
									<div class="tab-1 resp-tab-content" aria-labelledby="tab_item-3">
													  	<table class="table table-bordered table-striped">
                        	<tr>
                            	<th>S.n.</th>
                                <th>Course Title</th>
                                <th>Course Code</th>
                                <th>lecturer</th>
                                <th> Date</th>
                                <th>Time  </th>
                                <th>Capture  </th>
                                <th>Status  </th>
                            </tr>
                            <?php 
							$i=1;
							$query = mysqli_query($con,"select * from captures where username='$username' and level='Year 3' ");
							if($query){
								while($row=mysqli_fetch_array($query)){
									$course = $row['course_title'];
									$course_code = $row['course_code'];
									$lecturer = $row['lecturer_name'];
									$date = $row['date'];
									$time = $row['time'];
									$status = $row['status'];
								?>
                                	<tr>
                                    	<td><?php echo $i; ?></td>
                                        <td><?php echo $course; ?></td>
                                        <td><?php echo $course_code; ?></td>
                                        <td><?php echo $lecturer; ?></td>
                                        <td><?php echo $date; ?></td>
                                        <td><?php echo $time; ?></td>
                                       	 <td>
											
										 <img src="upload/<?php echo $capture;?> " width="100" height ="100" alt="image" />
								 
										</td>									<?php 
										if ($status =="checked"){
										?>
										<td style="background-color:green; color:white ;text-align:center;"><?php echo $status; ?></td>
										<?php
										}else{
										?>
										<td style="background-color:red; color:white; text-align:center;"><?php echo $status; ?></td>
										<?php
										}
										?>
                                    </tr>
                                <?php
									$i++;
								}
							}
							else{
							?>
                            	<tr>
                                	<td colspan="4">You have not attended any class yet</td>
                                </tr>
                            <?php
							}
							?>
                        </table>
                 
									 
									 
									 
									 
									 </div>
									<div class="tab-1 resp-tab-content" aria-labelledby="tab_item-4">
									 
													  	<table class="table table-bordered table-striped">
                        	<tr>
                            	<th>S.n.</th>
                                <th>Course Title</th>
                                <th>Course Code</th>
                                <th>lecturer</th>
                                <th>  Date</th>
                                <th>Time  </th>
                                <th>Capture  </th>
                                <th>Status  </th>
                            </tr>
                            <?php 
							$i=1;
							$query = mysqli_query($con,"select * from captures where username='$username' and level='Year 4' ");
							if($query){
								while($row=mysqli_fetch_array($query)){
									$course = $row['course_title'];
									$course_code = $row['course_code'];
									$lecturer = $row['lecturer_name'];
									$date = $row['date'];
									$time = $row['time'];
									$status = $row['status'];
								?>
                                	<tr>
                                    	<td><?php echo $i; ?></td>
                                        <td><?php echo $course; ?></td>
                                        <td><?php echo $course_code; ?></td>
                                        <td><?php echo $lecturer; ?></td>
                                        <td><?php echo $date; ?></td>
                                        <td><?php echo $time; ?></td>
                                         <td>
											
										 <img src="upload/<?php echo $capture;?> " width="100" height ="100" alt="image" />
								 
										</td>										<?php 
										if ($status =="checked"){
										?>
										<td style="background-color:green; color:white ;text-align:center;"><?php echo $status; ?></td>
										<?php
										}else{
										?>
										<td style="background-color:red; color:white; text-align:center;"><?php echo $status; ?></td>
										<?php
										}
										?>
                                    </tr>
                                <?php
									$i++;
								}
							}
							else{
							?>
                            	<tr>
                                	<td colspan="4">You have not attended any class yet</td>
                                </tr>
                            <?php
							}
							?>
                        </table>
                 


									 </div>
								<div class="tab-1 resp-tab-content" aria-labelledby="tab_item-5">
									 
													  	<table class="table table-bordered table-striped">
                        	<tr>
                            	<th>S.n.</th>
                                <th>Course Title</th>
                                <th>Course Code</th>
                                <th>lecturer</th>
                                <th> Date</th>
                                <th>Time  </th>
                                <th>Capture  </th>
                                <th>Status  </th>
                            </tr>
                            <?php 
							$i=1;
							$query = mysqli_query($con,"select * from captures where username='$username' and level='Year 5' ");
							if($query){
								while($row=mysqli_fetch_array($query)){
								$course = $row['course_title'];
									$course_code = $row['course_code'];
									$lecturer = $row['lecturer_name'];
									$date = $row['date'];
									$time = $row['time'];
									$status = $row['status'];
								?>
                                	<tr>
                                    	<td><?php echo $i; ?></td>
                                        <td><?php echo $course; ?></td>
                                        <td><?php echo $course_code; ?></td>
                                        <td><?php echo $lecturer; ?></td>
                                        <td><?php echo $date; ?></td>
                                        <td><?php echo $time; ?></td>
                                         <td>
											
										 <img src="upload/<?php echo $capture;?> " width="100" height ="100" alt="image" />
								 
										</td>										<?php 
										if ($status =="checked"){
										?>
										<td style="background-color:green; color:white ;text-align:center;"><?php echo $status; ?></td>
										<?php
										}else{
										?>
										<td style="background-color:red; color:white; text-align:center;"><?php echo $status; ?></td>
										<?php
										}
										?>
                                    </tr>
                                <?php
									$i++;
								}
							}
							else{
							?>
                            	<tr>
                                	<td colspan="4">You have not attended any class yet</td>
                                </tr>
                            <?php
							}
							?>
                        </table>
                 


									 </div>
								<div class="tab-1 resp-tab-content" aria-labelledby="tab_item-6">
									 
													  	<table class="table table-bordered table-striped">
                        	<tr>
                            	<th>S.n.</th>
                                <th>Course Title</th>
                                <th>Course Code</th>
                                <th>lecturer</th>
                                <th>  Date</th>
                                <th>Time  </th>
                                <th>Capture  </th>
                                <th>Status  </th>
                            </tr>
                            <?php 
							$i=1;
							$query = mysqli_query($con,"select * from captures where username='$username' and level='Year 6' ");
							if($query){
								while($row=mysqli_fetch_array($query)){
								$course = $row['course_title'];
									$course_code = $row['course_code'];
									$lecturer = $row['lecturer_name'];
									$date = $row['date'];
									$time = $row['time'];
									$status = $row['status'];
								?>
                                	<tr>
                                    	<td><?php echo $i; ?></td>
                                        <td><?php echo $course; ?></td>
                                        <td><?php echo $course_code; ?></td>
                                        <td><?php echo $lecturer; ?></td>
                                        <td><?php echo $date; ?></td>
                                        <td><?php echo $time; ?></td>
                                         <td>
											
										 <img src="upload/<?php echo $capture;?> " width="100" height ="100" alt="image" />
								 
										</td>										<?php 
										if ($status =="checked"){
										?>
										<td style="background-color:green; color:white ;text-align:center;"><?php echo $status; ?></td>
										<?php
										}else{
										?>
										<td style="background-color:red; color:white; text-align:center;"><?php echo $status; ?></td>
										<?php
										}
										?>
                                    </tr>
                                <?php
									$i++;
								}
							}
							else{
							?>
                            	<tr>
                                	<td colspan="4">You have not attended any class yet</td>
                                </tr>
                            <?php
							}
							?>
                        </table>
                 


									 </div>
								<div class="tab-1 resp-tab-content" aria-labelledby="tab_item-7">
									 
													  	<table class="table table-bordered table-striped">
                        	<tr>
                            	<th>S.n.</th>
                                <th>Course</th>
                                <th>Course Code</th>
                                <th>lecturer</th>
                                <th> Date</th>
                                <th>Time  </th>
                                <th>Capture  </th>
                                <th>Status  </th>
                            </tr>
                            <?php 
							$i=1;
							$query = mysqli_query($con,"select * from captures where username='$username' and level='Year 7'");
							if($query){
								while($row=mysqli_fetch_array($query)){
									$course = $row['course_title'];
									$course_code = $row['course_code'];
									$lecturer = $row['lecturer_name'];
									$date = $row['date'];
									$time = $row['time'];
									$status = $row['status'];
								?>
                                	<tr>
                                    	<td><?php echo $i; ?></td>
                                        <td><?php echo $course; ?></td>
                                        <td><?php echo $course_code; ?></td>
                                        <td><?php echo $lecturer; ?></td>
                                        <td><?php echo $date; ?></td>
                                        <td><?php echo $time; ?></td>
                                         <td>
											
										 <img src="upload/<?php echo $capture;?> " width="100" height ="100" alt="image" />
								 
										</td>										<?php 
										if ($status =="checked"){
										?>
										<td style="background-color:green; color:white ;text-align:center;"><?php echo $status; ?></td>
										<?php
										}else{
										?>
										<td style="background-color:red; color:white; text-align:center;"><?php echo $status; ?></td>
										<?php
										}
										?>
                                    </tr>
                                <?php
									$i++;
								}
							}
							else{
							?>
                            	<tr>
                                	<td colspan="4">You have not attended any class yet</td>
                                </tr>
                            <?php
							}
							?>
                        </table>
                 


									 </div>
								
								
								
								
								</div>
						</div>
					</div>

				</div>
				 <div class="clearfix"> </div>
				 <div class="clearfix"> </div>
				 <div class="clearfix"> </div><br><br><br>
			</div>
			<div class="history-faq-grids">
				<div class="col-md-12 history-faq-grid">
 					<div class="sap_tabs">	
						<div id="horizontalTab" style="display: block; width: 100%; margin: 0px;">
							  	 
							     <div class="row">
                	 <?php
						$query = mysqli_query($con,"select * from captures where username='$username'");
						$result = mysqli_fetch_array($query);
					?>
                	<div class="col-lg-3">
                    	<div class="panel panel-info">
                        	<div class="panel-heading">
                            	<h4 style="color:black; class="panel-title">Number of Attendance</h4>
                            </div>
                            <div class="panel-body">
                            	<h3><?php 
								echo  mysqli_num_rows(mysqli_query($con,"select * from captures where username='$username'"));
								?></h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                    	<div class="panel panel-success">
                        	<div class="panel-heading">
                            	<h4 style="color:black; class="panel-title"> Verified Attendance</h4>
                            </div>
                            <div class="panel-body">
                            	<h3><?php 
								echo  mysqli_num_rows(mysqli_query($con,"select * from captures where username='$username' and status='checked'"));
								?></h3>
                            </div>
                        </div>
						  
                    </div>
					
					 	<div class="col-lg-3">
                    	<div class="panel panel-info">
                        	<div class="panel-heading">
                            	<h4 style="color:black; class="panel-title"> Unapproved Attendance</h4>
                            </div>
                            <div class="panel-body">
                            	<h3><?php 
								echo  mysqli_num_rows(mysqli_query($con,"select * from captures where username='$username' and status='unchecked'"));
								?></h3>
                            </div>
                        </div>
                    </div>
              
					
					</div>
          	 
								 
								 
						</div>
					</div>

				</div>
				 <div class="clearfix"> </div><br><br> 
				 
				 
				 
			</div>
	
	 
		
		
		 <script src="js/easyResponsiveTabs.js" type="text/javascript"></script>
	<script type="text/javascript">
		$(document).ready(function () {
			$('#horizontalTab').easyResponsiveTabs({
				type: 'default', //Types: default, vertical, accordion           
				width: 'auto', //auto or any width like 600px
				fit: true   // 100% fit in a container
			});
		});
	   </script>
		
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
<?php
 session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Programs - Medical Hospital</title>
	<link rel="stylesheet" href="css/style.css" type="text/css">
</head>
<body>
	<div class="background">
		<div class="page">
			<a href="index.php" id="logo">3BHK HOSPITAL</a>
			<div class="sidebar">
				<ul>
					<li>
						<a href="index.php">Home</a>
					</li>
                     <li>
                        <?php if(isset($_SESSION['admin'])){
                             echo '<a href="logout.php">Logout</a>';
                          }
                           else{
                               
                            echo '<a href="login.php">Login</a>';
                           }
                        ?>
                    </li>
					<li class="selected">
						<a href="programs.php">Programs</a>
					</li>
					<li>
						<a href="about.php">About</a>
					</li>
					<li>
						<a href="services.php">Services</a>
					</li>
					<li>
						<a href="blog.php">Blog</a>
					</li>
					<li>
						<a href="contact.php">Contact</a>
					</li>
                     <?php if(isset($_SESSION['admin'])){
                             echo '<li><a href="../hospital/alist.php">Appointment </a><li>';
                          }
                    ?>
				</ul>
				<div class="first">
					<div>
						<h3>WELCOME TO THE 3BHK</h3>
						<img src="images/a%20(2).jpg" alt="">
						<p>
							WE CURE BECAUSE WE CARE
						</p>
					</div>
				</div>
			</div>
			<div class="body">
				<div class="programs">
					<div>
						<div>
							<div>
								<h4>PROGRAMS</h4>
								<ul>
									<li>
										<p>
											Emergency Service
										</p>
									</li>
									<li>
										<p>
											Ambulance Service with Mobile ICU
										</p>
									</li>
									<li>
										<p>
											Trauma Centre
										</p>
									</li>
									<li>
										<p>
											Radiology & Imaging
										</p>
									</li>
									<li>
										<p>
										Rehabilitation Centre
										</p>
									</li>
									<li>
										<p>
								Dialysis
										</p>
									</li>
								</ul>
							</div>
							<div class="featured">
								<img src="images/sharing.jpg" alt="">
								<p>
									For any queries related to health problems or to fix an appointment in our Hospital, feel free to contact us
								</p>
								<span><a href="contact.php">Contact Us</a></span>
							</div>
							<div class="section">
								<h4>Therapy</h4>
								<ul>
									<li>
										<h3>General orthopedic therapy</h3>
										<p>
											 Comprehensive treatment of musculoskeletal injuries and conditions using manual therapy, therapeutic exercise and other methods
										</p>
									</li>
									<li>
										<h3>Sports therapy</h3>
										<p>
											Activity-specific rehabilitation for recreational or competitive athletes
										</p>
									</li>
									<li>
										<h3>Post-surgical rehabilitation</h3>
										<p>
											Patients recovering from a variety of surgeries, including those of the extremities or spine, arthroscopy, total joint replacement, ACL reconstruction or rotator cuff repair
										</p>
									</li>
									<li>
										<h3>Neurologic rehabilitation</h3>
										<p>
											Geared towards gaining the greatest amount of functional independence possible using therapeutic exercise
										</p>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="footer">
				<div>
					<div>
						<h4>Blog</h4>
						<a href="blog.php">Go To Blog</a>
					</div>
					<div>
						<h4>Links</h4>
						<ul>
							<li>
								<a href="index.php">Home</a>
							</li>
							<li>
								<a href="programs.php">Programs</a>
							</li>
							<li>
								<a href="about.php">About</a>
							</li>
							<li>
								<a href="services.php">Services</a>
							</li>
							<li>
								<a href="blog.php">Blog</a>
							</li>
							<li>
								<a href="contact.php">Contact</a>
							</li>
						</ul>
					</div>
					<div class="connect">
						<h4>Keep In Touch</h4>
								<a href="http://3BHK_Hospital.com/go/twitter/" id="twitter">twitter</a> 
                        <a href="http://3BHK_Hospital.com/go/facebook/" id="facebook">facebook</a> 
                        <a href="http://3BHK_Hospital.com/go/googleplus/" id="googleplus">google+</a>
					</div>
				</div>
				<p>
					&#169; Copyright 2012. All rights reserved
				</p>
			</div>
		</div>
	</div>
</body>
</html>
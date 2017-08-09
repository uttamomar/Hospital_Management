<?php
 session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Services - Medical Hospital </title>
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
					<li>
						<a href="programs.php">Programs</a>
					</li>
					<li>
						<a href="about.php">About</a>
					</li>
					<li class="selected">
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
						<h3>WELCOME TO THE 3BHK </h3>
						<img src="images/a%20(2).jpg" alt="">
						<p>
							WE CURE BECAUSE WE CARE
						</p>
					</div>
				</div>
			</div>
			<div class="body">
				<div class="services">
					<div>
						<div>
							<div>
								<h4>PATIENT CARE & SERVICES</h4>
								<ul>
									<li>
										<p>
											Admission Process
										</p>
									</li>
									<li>
										<p>
											Discharge Process
										</p>
									</li>
									<li>
										<p>
											Guidelines for Visitors
										</p>
									</li>
									<li>
										<p>
											Patient & Attendent Responsibilities
										</p>
									</li>
                                </ul>
							</div>
							<div>
								<div>
									<h4>ADMISSION PROCESS</h4>
									<img src="images/services2.jpg" alt="">
									<p>
										<br>The front office staff at the reception will assist you during the admission process. They will generate a Unique Identification Number (UID) for the patient and all the medical records will be maintained and stored by the hospital for all future reference. They will also draw out an estimate and guide you for selecting the relevant category of room.</br>

                                <br>In addition, you will be required to make an advance payment. The advance shall be adjusted against the final bill at the time of discharge. Those seeking the cashless route would have to visit the insurance desk / TPA desk for the hospitalisation of the patient. The staff will escort the patient to the allotted room/bed and make you feel comfortable.</br>
									</p>
									<span><a href="about.php">Learn More About The Company</a></span>
								</div>
								<div>
									<h4>DISCHARGE PROCESS</h4>
									<ul>
										<li>
											<p>
												Your nurse will assist you in the discharge process which may take few hours to complete the process. Once your final bill is generated, you are expected to clear your dues by paying cash or by a credit/debit card. The nurse will hand over your discharge summary and belongings (like thermometer, urinal bedpan, etc. - used during the course of your stay). She will also explain the medications you need to continue after your discharge and any other follow-up instructions. In case you need a medical ambulance to drop you at your home, then please inform your nurse and she will make the necessary arrangement.


											</p>
                                        </li>
				
									</ul>
								</div>
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
<?php
 session_start();
?>
<!DOCTYPE html>

<html>
<head>
	<meta charset="UTF-8">
	<title>Contact - Medical Hospital </title>
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
					<li>
						<a href="services.php">Services</a>
					</li>
					<li>
						<a href="blog.php">Blog</a>
					</li>
					<li class="selected">
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
				<div class="contact">
					<div>
						<div>
							<div>
								<h4>CONTACT</h4>
								<table>
									<tr>
										<td><span>LOCATION</span>
											<p>
												DURGAPUR , WEST BENGAL , INDIA
											</p></td>
										<td><span>CARDIOLOGY</span>
											<p>
												(222) 987 65 43 2100 <br> (687) 123 45 67 8900
											</p></td>
										<td><span>NEUROLOGY</span>
											<p>
												(123) 456 789 00 <br> (987) 654 321 00
											</p></td>
									</tr>
									<tr>
										<td><span>EMAIL</span>
											<p>
												<a href="3BHKHOSPITAL@GMAIL.COM/">3BHKHOSPITAL@GMAIL.COM</a> <br>
											</p></td>
										<td><span>EMERGENCY</span>
											<p>
												(123) 456 789 00 <br> (987) 654 321 00
											</p></td>
										<td><span>APPOINTMENT</span>
											<p>
												(222) 987 65 43 2100 <br> (687) 123 45 67 8900
											</p></td>
									</tr>
								</table>
							</div>
							<div>
								<div>
									<h4>Send a message</h4>
									<form action="index.php">
										<label for="name">Your Name:</label>
										<input type="text" id="name">
										<label for="email">Email Address:</label>
										<input type="text" id="email">
										<label for="message">Message:</label>
										<textarea name="message" id="message" cols="30" rows="10"></textarea>
										<span>
										<input type="submit" value="Send">
										</span>
									</form>
								</div>
								<div>
									<div>
										<h4>Programs</h4>
										<span><a href="programs.php">Learn More</a></span>
									</div>
									<div>
										<h4>Services</h4>
										<span><a href="services.php">Learn More</a></span>
									</div>
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
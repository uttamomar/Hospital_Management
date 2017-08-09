<?php
 session_start();
?>
<!DOCTYPE html>

<html>
<head>
	<meta charset="UTF-8">
	<title>Medical Hospital </title>
	<link rel="stylesheet" href="css/style.css" type="text/css">
</head>
<body>
	<div class="background">
		<div class="page">
			<a href="index.php" id="logo">3BHK HOSPITAL</a>
			<div class="sidebar">
				<ul>
					<li class="selected">
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
				<div class="home">
					<div class="featured">
						<img src="images/doctors.jpg" alt="">
						<div>
							<p>
								3BHK Hospital is one of the best hospitals in India, providing advanced healthcare services in over 30 specialties including cardiac surgery, cardiology, bone surgery, liver transplantation,etc.
							</p>
						</div>
					</div>
					<div>
						<div>
							<div>
								<h4>Programs</h4>
								<p>
									3BHK Hospital provides programs that enable patients to receive immediate care have proven effective in reducing complications while cutting the cost of care by 30 percent or more, leading to entrepreneurial efforts to promote their use. <a href="programs.php"><img src="images/programs.jpg" alt=""></a>.In addition,we have 3BHK Medical College which provides quality medical education recognized by the Medical Council of India, to students from all over India getting admission on an all India quota both in the undergraduate (M.B.B.S) and post graduate medical courses (M.D/M.S).  
								</p>
								<span><a href="programs.php">Learn More</a></span>
							</div>
							<div>
								<h4>Therapy</h4>
								<ul>
									<li>General orthopedic therapy</li>
									<li>Sports therapy</li>
									<li>Neurologic rehabilitation</li>
									<li>Post-surgical rehabilitation</li>
								</ul>
								<span><a href="programs.php">Learn More</a></span>
							</div>
						</div>
						<div>
							<h4>Services</h4>
							<a href="services.php"><img src="images/services.jpg" alt=""></a>
							<ul>
								<li>
									<a href="services.php">Admission Process</a>
								</li>
								<li>
									<a href="services.php">Discharge Process</a>
								</li>
								<li>
									<a href="services.php">Guidelines for Visitors</a>
								</li>
								<li>
									<a href="services.php">Patient & Attendent Responsibilities</a>
								</li>
							</ul>
							<span><a href="programs.php">Learn More</a></span>
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
					&#169; 
				</p>
			</div>
		</div>
	</div>
</body>
</html>
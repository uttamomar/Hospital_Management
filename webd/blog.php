<?php
 session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Blog - Medical Hospital </title>
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
					<li class="selected">
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
				<div class="blog">
					<div>
						<div>
							<div>
								<span id="part1">July 12, 2016| Matt</span>
								<h3>Obesity and Kidney Diseases.</h3>
								<p>
									<br>Kidney Disease is often thought to be a rare occurrence and one can really not see it coming as in most of the cases 90% of the kidney function is already lost by the time any significant symptoms appear. It is also assumed that kidney disease manifests primarily in the old age. It is important to know that these are serious myths about kidney disease that need to be addressed. Especially when one has a pre-existing condition that increases the risk of developing kidney disease. Some of the major risk factor to look out for include:</br>
								</p>
								<img src="images/man-with-dog.jpg" alt="">
								<p>
                                    <br>1. Diabetes</br>
                    <br>2. Hypertension</br>
                <br>3. Obesity and overweight</br>
            <br>4. Family history of kidney diseases</br>
        <br>5. Habits like cigarette smoking</br>
    <br>6. Other kidney problem like – recurrent urinary tract infections, stones and tumors, etc.</br>
								</p>
<span id="part2">December 06, 2016| Micheal</span>
<h3>Management of High Risk Pregancy</h3>
<p><br>It is important to regulate the blood pressure during pregnancy which can be done by making some changes in the high blood pressure medication. Certain diet and lifestyle changes may also be recommended to keep the blood pressure under control.</br></p>

								<span id="part3">March 17, 2017| Andrew</span>
<h3>Get Closer to Your Baby’s Life Inside the Womb</h3>
								<p><br>Fetal medicine is a specialty that provides a holistic approach towards fetal care and works in sync with Obstetrics and Gynecology to ensure a safe and healthy delivery. All kinds of specialized diagnostic and fetal screening tests necessary for monitoring the developing fetus are performed to ensure timely prenatal diagnosis and thus improved prognosis before and after birth.</br></p>
							</div>
							<div>
								<div>
									<h4>Recent Post</h4>
									<ul>
										<li>
											<p>
                                                <a href="#part1" <br> Obesity and Kidney Diseases</br></a>
											</p>
										</li>
										<li>
											<p>
                                                <a href="#part2"
                                                   <br>Management of High Risk Pregnancy</br></a>
											</p>
										</li>
										<li>
											<p>
                                                <a href="#part3"<br>Get Closer to Your Baby’s Life Inside the Womb</br></a>
											</p>
										</li>
									</ul>
								</div>
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
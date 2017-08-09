<?php
 session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>About - Medical Hospital </title>
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
					<li class="selected">
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
				<div class="about">
					<div>
						<div>
							<div>
								<h3>Mission</h3>
								<p>
									The Vision of this institute is “ Leadership in Health Care in India” .

                                    <br>This hospital respect the  values of every person by -</br>

                            <br>1.       Providing exemplary medical care for each of our patients  with continued commitment to the care of the poor and those most in need with the provision of highly specialized services to a community.</br>

                        <br>2.       Building a work environment where each person is valued, respected and has an opportunity for personal and professional growth.</br>

                    <br>3.       “Together we can do great things” for people in need. One team, with one goal - to be one Great Health System, Always. We are a "can do" team. Through positive energy we can, and we will, meet the needs of those we serve. We are here to better the lives of others and we are profoundly aware of the value of each human being. We wait for opportunity where we are learning every time and share our past experiences which are beneficial to our patients.</br>

                <br>4.        Dedicated Service, team work, respect  to patient, can do  attitude and setting  standards of health care is the success of our mission</br>

            <br>You will love to visit this institute as it is serving patients with every things possible, love ,compassion, dignity and respectful  quality services.</br>

        <br>We hope you will help us in completing our mission and reaching to our Vision.</br>
								</p>
							</div>
						</div>
						<div>
							<div>
								<h3>Introduction</h3>
								<p>
									<br>3BHK Hospital, formerly known as Willingdon Hospital, was established by the British for their staff and had only 54 beds. After independence, its control was shifted to New Delhi Municipal Committee.</br>

                            <br>In 1954, its control was again transferred to the Central Government of Independent India.</br>

<br>The hospital has grown over the years and is currently having about 1216 beds, spread over in 30 acres of land. It caters to the population of New Delhi and Central District, apart from patients from other areas and even from out side Delhi. It is having 71 beds in a Nursing Home for the C.G.H.S beneficiaries, including Maternity Nursing Home.</br>

<br>It is fully funded by the Government of India (Ministry of Health Family Welfare). No Emergency Patients are Refused treatment in this Hospital.</br>

<br>A non-invasive Cardiac Lab and a Cardiac Cath Lab exists in this hospital, in which facility for TMT, Echo-Cardiography, Coronary Angiography and Pace Maker implantation are available. Cardiothoracic and Vascular Surgery, Neuro Surgery facilities are available in the Hospital.</br>

<br>This hospital has round the clock emergency services in Medicine, Surgery, Orthopedics and Paediatrics. The facilities in other specialties are also available on call basis. All supportive services like laboratory, X - Ray, CT-Scan, Ultrasound, Blood Bank and Ambulances are available round the clock. A Coronary Care Unit and an Intensive Care Unit exists in the hospital for serious Cardiac and Non-Cardiac patients. The hospital has laid down disaster action plan & disaster beds, which are made operational in case of mass casualties and disaster.</br>

<br>In a year hospital provides services to about 18 lakhs patients as OPD cases, admits about 67000 patients in Indoor and about 3 lakhs patients are attended in the Emergency. About 10000 yellow fever vaccination and 915 delivery cases. Similarly about 5,000 CT Scan, 1.70 lakhs X-Ray cases, 28 lakhs laboratory tests and about 17,000 Ultrasound are done. Hospital conducts about 9,000 Major and 40,000 Minor operations during a year.</br>

<br>Hospital has two Incinerators, one Micro Wave Machine and two Plastic Shredders for sound hospital waste disposal system.</br>

<br>With the growth and expansion of medical facilities in the hospital, the establishment of the hospital administration has also increased to 3164. With this expansion of establishment, the administrative work has also increased.</br>




								</p>
							</div>
						</div>
						<div>
							<div>
								<h3>Departments</h3>
								<p>
                                    <br>1.Blood Bank</br>
                            <br>2.Anaesthesia & Intensive Care</br>

<br>3.Cardiology</br>
<br>4.Dermatology</br>
<br>5.Endocrinology</br>
<br>6.ENT</br>
<br>7.Ophthalmology</br>
<br>8.Gastroenterology</br>
<br>9.Gynaecology</br>
<br>10.Neurology</br>
<br>11.Orthopaedics</br>
								</p>
							</div>
						</div>
						<div>
							<div>
								<h3>Awards & Accolades</h3>
								<p>
									

                                    <br>1.Apollo Hospitals Enterprise Limited Corporate Social Responsibility - Billion Hearts Beating</br> <br>2.Apollo Speciality Hospitals, Chennai Customer Service - Kaizen Approach - Striving for Continual improvement</br> <br>3.Apollo Speciality Hospitals, Chennai Nursing Excellence - WIG-LAG-LEAD Strategy for Continuous Nursing Quality Improvement</br> <br>4.Apollo Gleneagles Hospitals, Kolkata Bio Medical Facilities Improvement - Project SOIL: Sustainability Oriented Innovation & Leadership for Enabling Environment-friendly Facility Management</br> <br>5.Apollo Gleneagles Hospitals, Kolkata Innovations in Hospital Management and Governance - Project PROMISE: Sustainability Oriented Innovation & Leadership for Facility Management and Governance</br> <br>6.Apollo Gleneagles Hospitals, Kolkata Physician Leadership Programme - Project EOLC: X Teams - Team Advocacy to Improve Care Coordination in End of Life Care</br> <br>7.Indraprastha Apollo Hospitals, Delhi Human Resource Development - Transforming Skills into Perfection</br>
								</p>
							</div>
						</div>
						<div class="section">
							<div>
								<img src="images/man.png" alt="">
									<span><a href="programs.php">Programs</a></span>
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
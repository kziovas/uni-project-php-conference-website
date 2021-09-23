<!DOCTYPE html>
<html>
<head>
<title>Home Page</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="Keywords" content="SSEA,Space,Education,Science,UK,Leicester,Conference,ESA"> 
<meta charset="UTF-8">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="CSS/navBar.css">
<link rel="stylesheet" type="text/css" href="CSS/indexText.css">
<link rel="stylesheet" type="text/css" href="CSS/footer.css">
<style>

</style>
</head>
<body>

	<?php
		session_start(); 
		// remove all session variables
		session_unset(); 

		// destroy the session 
		session_destroy();

	?>
	<img  src="Images/rocketgray.jpg" alt="" /> <!-- the image -->
		<div class="row">
			<div class="menu">
				<ul class="col-7">
					<li id="textcontent1"><h1>About: Symposium on Space Educational Activities</h1>
							<p>The<em> Symposium on Space Educational Activities (SSEA)</em> provides an international stage for students and 
							academics to discuss current and future Space Educational Activities in Europe and beyond, focusing on 
							university level activities as well as opportunities for learners and educators at high school.
							Talks will showcase <em>student projects</em>, some involving <em>real missions</em> in which students design and build  
							satellites which are launched and operated in space. Other topics include: technologies for training the  
							next generation of space engineers and scientists; how universities and employers can work together so 
							that graduates have the skills needed by industry, and improving the representation of women in the sector. </p></li>
					
					<li id="textcontent2"><h1>Organisers</h1>
						<p>The 3rd Symposium is hosted in the UK by the <em><a href="https://le.ac.uk/">University of Leicester</a></em>, alongside <em><a href="https://ukseds.org/">UKSEDS</a></em> and the 
						<em><a href="https://nationalspaceacademy.org/">National Space Academy (NSA)</a></em> and is sponsored by the <em><a href="http://www.esa.int/ESA">European Space Agency (ESA)</a></em>.
						NSA is a not-for-profit organisation created with the goals of using space science contexts 
						in curriculum education to boost student attainment and enhance teacher effectiveness space society;
						it runs space projects, hosts conferences, workshops and careers events, and delivers outreach activities across the country. </p></li>
					
					<li id="textcontent3"><h1>Venue</h1>
						<p>The University of Leicester is a world class institution with a long and distinguished 
						record of discovery in space science.The conference will be held at the University's 
						<em><a href="https://stamfordcourt.com/">Stamford Court Conference Centre</a></em>. The address is: <em>Manor Road, Oadby, Leicester, LE2 2LH</em>.
						Stamford Court is situated in a leafy suburb of Leicester, approximately 3 miles (~50 minutes walk)
						from the City Centre, and 2 miles (~40 minutes walk) from the University of Leicester campus.
						We offer <em>accommodation on-site</em> at Stamford Court for maximum convenience. Delegates who prefer to
						stay in hotels or guest houses closer to the city may wish or need to take a bus or taxi to the conference centre.</p></li>
					
					<li id="textcontent4"><h1>Key Dates</h1>
						<p>Registration and abstract submission opens:	<u class="dates"> 4th June 2019 </u><br>
						<hr>
						Abstract submission deadline: <u class="dates"> 19th August 2019 </u><br>
						<hr>
						Notification of acceptance:	<u class="dates"> 7th September 2019</u><br>
						<hr>
						Early bird registration deadline: <u class="dates"> 1st September 2019</u> <br>
						<hr>
						Paper submission deadline:	<u class="dates"> 30th October 2019</u><br>
						<hr>
						Symposium:	<u class="dates"> 6-12th December 2019</u><br>
						<hr>
						Publication of proceedings (electronic): <u class="dates"> To be announced (early 2020)</u></p></li>
				</ul>
			</div>

		
		<!--Navigation bar-->
		<h2  id="navbar" class="navigation sticky"></h2>
		<!--End of Navigation bar-->
		
				<!--Footer Begins-->
			  <footer>

					
						<div >
							<p>Email: hello@unipiproject.com</p>
							<p>Phone: +30 21052365896</p>
							<p>Made by Konstantinos Ziovas & Ioanna Kassara</p>
							<p>&copy; 2019 Unipi Project </p>
							
						</div>
					
					
				</footer>

		<!--Footer Ends-->
		

 
</body>
</html>

<script src="JavaScript/correctViewLink.js"></script>
<script src="JavaScript/navBar.js"></script>

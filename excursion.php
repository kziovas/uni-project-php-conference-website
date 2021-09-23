<!DOCTYPE html>
<html>
<head>
<title>Excursion Page</title>
<meta name="Keywords" content="SSEA,Space,Education,Science,UK,Leicester,Conference,ESA,Excursion"> 
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="UTF-8">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="CSS/navBar.css">
<link rel="stylesheet" type="text/css" href="CSS/indexText.css">
<link rel="stylesheet" type="text/css" href="CSS/excursion.css">
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
	<img  src="Images/launchpad.jpg" alt="" /> <!-- the image -->
		<div class="row">
			<div class="menu">
				<ul class="col-7">
					<li id="textcontent1">
						<h1>Leicester Science Trips-National Space Centre</h1>
							<p>This expert survey is part of <em>Science-MINQ</em>, a research project that focuses on the potential role of scientific inquiry in framing young people’s interactions with science centres.

								A key challenge for science centres is to enable their visitors to be <em>'minds-on' as well as 'hands-on'</em> as they explore the exhibits. This research aims to use the structure provided by <em>inquiry-based learning</em> to harness the engagement power of interactive exhibits in science centres.

								To achieve this aim, we are working with science centre educators, science teachers and young visitors (aged 11-16) to co-design a suitable <em>pedagogical framework</em> and a <em>mobile app</em> for use on school trips to science centres.<span id="dots" style="display:inline;">...</span><span id="more" style="display:none;"><br>
								<br><em>DESTINATION:</em> National Space Centre, Leicester <br><em>DATE:</em> Wednesday Octomber 3rd, 2019<br><em>DEPARTING TIME:</em>  7.30AM<br><em>MEETING POINT:</em> To be confirmed<br><em>DURATION:</em> Approx. 10 hours (including trips)<br><em>COST:</em> € 65.00 per person<br><em>SERVICES INCLUDED:</em> Transfer from/to Leicester and excursion guides <br><em>LUNCH:</em> Lunch pack provided <br><em>WALKING TIME:</em> Approx. 2hours<br><em>OTHER INFO:</em> Sportswear and sneakers suggested<br><em>EXCURSION COORDINATOR:</em> Dr Stamatina Anastopoulou, EU Marie Sklodowska-Curie Research Fellow, University of Leicester <br><em></span>
							</p>
							<button style="background-color: #FEDF00; padding: 10 30 10 30px; font-family: Agency FB, serif; font-size: 2vw;" onclick="myFunction()" id="myBtn">Read more</button>
						</h1>
					<li id="textcontent2">
						<h1>Slideshow Gallery.</h1>
							<div class="slide_container" style="margin-top: 50px;">
							  <div class="mySlides">
								<div class="numbertext">1 / 6</div>
								<img class="img_gallery" src="Images/slide_1.jpg" style="width:100%">
							  </div>

							  <div class="mySlides">
								<div class="numbertext">2 / 6</div>
								<img class="img_gallery" src="Images/slide_2.jpg" style="width:100%">
							  </div>

							  <div class="mySlides">
								<div class="numbertext">3 / 6</div>
								<img class="img_gallery" src="Images/slide_3.jpg" style="width:100%">
							  </div>
								
							  <div class="mySlides">
								<div class="numbertext">4 / 6</div>
								<img class="img_gallery" src="Images/slide_4.jpg" style="width:100%">
							  </div>

							  <div class="mySlides">
								<div class="numbertext">5 / 6</div>
								<img class="img_gallery" src="Images/slide_5.jpg" style="width:100%">
							  </div>
								
							  <div class="mySlides">
								<div class="numbertext">6 / 6</div>
								<img class="img_gallery" src="Images/slide_6.jpg" style="width:100%">
							  </div>
						
							  <a class="prev" onclick="plusSlides(-1)">❮</a>
							  <a class="next" onclick="plusSlides(1)">❯</a>

							  <div class="caption-container">
								<p id="caption"></p>
							  </div>

								<div class="slide_row">
									<div class="slide_column">
									  <img class="demo cursor" src="Images/slide_1.jpg" style="width:100%" onclick="currentSlide(1)" alt="Celestial Globe">
									</div>
									<div class="slide_column">
									  <img class="demo cursor" src="Images/slide_2.jpg" style="width:100%" onclick="currentSlide(2)" alt="Astronaut">
									</div>
									<div class="slide_column">
									  <img class="demo cursor" src="Images/slide_3.jpg" style="width:100%" onclick="currentSlide(3)" alt="Satelite Dish">
									</div>
									<div class="slide_column">
									  <img class="demo cursor" src="Images/slide_4.jpg" style="width:100%" onclick="currentSlide(4)" alt="Radio Telescope">
									</div>
									<div class="slide_column">
									  <img class="demo cursor" src="Images/slide_5.jpg" style="width:100%" onclick="currentSlide(5)" alt="USA from Space">
									</div>    
									<div class="slide_column">
									  <img class="demo cursor" src="Images/slide_6.jpg" style="width:100%" onclick="currentSlide(6)" alt="Satelite">
									</div>
								</div>

							</div>
							<!--end of gallery-->
						
					</li>
					
					<li id="textcontent3"><h1>Leicester National Space Center Tours</h1>

						<p> <em>The National Space Centre </em>is a museum and educational resource covering the fields of <em>space science and astronomy</em>. Many of the exhibits, are housed in a tower with a semi-transparent cladding of ETFE 'pillows' which has become one of Leicester's most recognisable landmarks.</p>

						

						<iframe class="multmedia" src="https://www.youtube.com/embed/D2SQ07syeAU" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
					</li>
					
					
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
<script src="JavaScript/excursions.js"></script>

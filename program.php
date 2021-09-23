<!DOCTYPE html>
<html>
<head>
<title>Program Page</title>
<meta name="Keywords" content="SSEA,Space,Education,Science,UK,Leicester,Conference,ESA,Program"> 
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="UTF-8">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="CSS/navBar.css">
<link rel="stylesheet" type="text/css" href="CSS/indexText.css">
<link rel="stylesheet" type="text/css" href="CSS/program.css">
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
	<img  src="Images/celestial.jpg" alt="" /> <!-- the image -->
		<div class="row">
			<div class="menu">
				<ul class="col-7">
					<li id="textcontent1">
						<h1>Cultural Tours Program 2019/20 </h1>
							<p>All cultural tours are designed and delivered by Proscenium Tours/ Somewherenew. The University of Leicester is acting as an introduction agent in relation to the collection of fees. As such, the University has no authority or ability to negotiate or vary the services or the terms of the services.</p>

							<br>
							
							<p class="title">London Orientation:</p><p class="subtitle">Thursday 19th September - Saturday 21st September 2019</p><img class ="tourPhotos" src="Images/london 4.jpg">
							<br>
							<p class="description" >This tour will include transportation from London to Leicester.

								Three days in London that pack in the top sites and give you a chance to explore. After your arrival at London Heathrow, visit the Tower of London to hear the secrets of the Bloody Tower, before being dazzled by the Crown Jewels. We also enjoy a cruise down the Tames, starting Tower Bridge and finishing at Westminster.

								Day two explores Westminster in depth including Buckingham Palace, Parliament Square, Whitehall and Horseguards. In the afternoon, we visit the British Museum. In the evening, we retrace the steps of the infamous Jack the Ripper and see if you can solve the mystery!

								On the final day of your tour, we explore Shakespeare's neighbourhood and the home of Elizabethan entertainment, Southwark, as well as one of the yummiest markets in the world - Borough market.

								Includes coach transfers from Heathrow and to Leicester, accommodations, boat cruise, tour and guided entry to Tower of London, exhibition and tour of the Globe Theatre and services of a Blue Badge Guide.
							</p>
							
						</li>	
						
						<li id="textcontent2">
						

								<p class="title">Stonehenge and Salisbury Cathedral</p><p class="subtitle">Saturday 19th October 2019</p><img class ="tourPhotos" src="Images/Salisbury.png">
								<br>
								<p class="description">Visit the enigmatic Stonehenge, where your guide will separate fact from fiction and myth from reality as you gaze upon these mysterious stones. Magic, mysticism, and even the legend of King Arthur; all from part of the story of this magical place, a 5,000 year old World Heritage Site. From there we travel to Salisbury, home to one of Britain's most beautiful cathedrals. Its sublime spire is the highest in England and in its chapter house you will see one of the four surviving copies of Magna Carta.

								Includes coach, Blue Badge Guide and entry to Stonehenge and Salisbury Cathedral.
								</p>
							

			
						</li>
						
						<li id="textcontent3">

								<p class="title">Edinburgh Weekend Trip</p><p class="subtitle"> Saturday 23rd and Sunday 24th November 2019</p><img class ="tourPhotos" src="Images/Edimb.png"></td>
								<br><br>
								<p class="description">Travel by coach to Edinburgh, the volcanic Scottish capital known as the Athens of the North. On arrival, enjoy a walking tour that includes the Royal Mile and other Scottish gems, with your local guide. In the evening, enjoy a ghostly tour in the underground vaults of one of Britain's most haunted cities.

								On Sunday visit Edinburgh Castle, a medieval fortress built upon the site of an extinct volcano, and enjoy breath-taking, panoramic views of Edinburgh. In the afternoon, free time to climb Arthur's seat, go to the Scotch Whiskey Experience or have tea at the cafe where JK Rowling began the Harry Potter books before returning to Leicester.
								</p>
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

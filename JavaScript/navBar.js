
	//This js code creates the navbar
	document.getElementById("navbar").innerHTML= `<ul>
				<div class="dropdown">
					<li ><a class="active" href="index.php">SSEA 2019</a></li>
					<div class="dropdown-content col-7">
						<a href="index.php#textcontent1" onclick="delayedOffset()"><i class="fa fa-home"></i> About</a>
						<a href="index.php#textcontent2" onclick="delayedOffset()"><i class="fas fa-users"></i> Organizers</a>
						<a href="index.php#textcontent3" onclick="delayedOffset()"><i class="fas fa-map-marked-alt"></i> Venue</a>
						<a href="index.php#textcontent4" onclick="delayedOffset()"><i class="fas fa-calendar-alt"></i> Key Dates</a>
					</div>
				</div>
				<li ><a href="program.php">Program</a></li>
				<li><a href="registerform.php">Registration</a></li>
				<li><a href="excursion.php">Excursions</a></li>
				<li><a href="contact.php">Contact</a></li>
			</ul>`
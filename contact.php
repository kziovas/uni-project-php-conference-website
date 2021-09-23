<!DOCTYPE html>
<html>
<head>
<title>Contact Page</title>
<meta name="Keywords" content="SSEA,Space,Education,Science,UK,Leicester,Conference,ESA,Contact"> 
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="UTF-8">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="CSS/navBar.css">
<link rel="stylesheet" type="text/css" href="CSS/registrationForm.css">
<link rel="stylesheet" type="text/css" href="CSS/contact.css">
<link rel="stylesheet" type="text/css" href="CSS/footer.css">
</head>
<body>
 
	<?php
		session_start(); 
		// remove all session variables
		session_unset(); 

		// destroy the session 
		session_destroy();

	?>
	


	<img src="Images/satelite_disk.jpg" alt="" /> <!-- the image -->
		<div class="container col-4">

			<form action="" method="post">
				<table>
					<tr><td colspan="2" ><p class="form_head">Contact Form</p></td></tr>
					<tr><td colspan="2" ><hr class="reg_hr"></td></tr>
		
					<tr><td><label class="reg_labels" for="firstName"><b>First Name</b></label></td>
					<td><input type="text" name="firstName" placeholder="Your name.." id="firstName" required></td></tr>
					
					<tr><td><label class="reg_labels" for="lastName"><b>Last Name</b></label></td>
					<td><input type="text" name="lastName" placeholder="Your last name.." id="lastName"  required></td></tr>
					
					<tr><td colspan="2" ><hr class="reg_hr"></td></tr>
			  
					<tr><td td colspan="2"><label class="form_head" for="Email"><b>Your Message</b></label></td></tr>
					<tr><td td colspan="2"><textarea rows="4" class="message" placeholder="Write something.." name="message" id="message" required></textarea></td></tr>
					
					<tr><td colspan="2" ><button type="submit"  name="submit" id="submit" class="reg_btn">Send Now!</button></tr></td>
					
					<tr><td colspan="2" ><hr class="reg_hr"></td></tr>
					
					<tr><td td colspan="2"><label class="form_head" for="Email"><b>Telephone Numbers</b></label></td></tr>
					<tr><td td colspan="2"><p>University of Leicester: +44 116 252 2522</p></td></tr>
					<tr><td td colspan="2"><p>National Space Center: +44 116 261 0261</p></td></tr>
					
					<tr><td colspan="2" ><hr class="reg_hr"></td></tr>
					
					<tr><td colspan="2" class="map_td" >
					
						<div class="maprouter">
							<iframe class="gmap_canvas" id="gmap_canvas" src="https://maps.google.com/maps?q=%20leicester&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0">
							</iframe>
						</div>
					</td></tr>
				</table>
			</form>

			<!--end of form-->
		
		

			
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
		
		
	<?php 

		if(isset($_POST['submit'])){
	
			$to = "k_ziovas@yahoo.gr"; // this is your Email address
			
			$first_name=  $_POST['firstName'];
			$last_name=  $_POST['lastName'];
			$info=  $_POST['message'];

			
			$from = "kziovas.work@gmail.com"; // this is the sender's Email address
			$subject = "Contact Form";
			$message = $first_name . " " . $last_name . " wrote the following:" . "\n\n" . $info;
			

			$headers = "From:" . $from;

			mail($to,$subject,$message,$headers);
			echo '<script language="javascript">';
			echo 'alert("Mail Sent. Thank you ")';
			echo '</script>';
			//echo "Mail Sent. Thank you " . $first_name . ", we will contact you shortly.";
			// You can also use header('Location: thank_you.php'); to redirect to another page.
			// You cannot use header and echo together. It's one or the other.
		}
	?>
 
</body>
</html>



<script src="JavaScript/correctViewLink.js"></script>

<script src="JavaScript/navBar.js"></script>
<!DOCTYPE html>
<html>
<head>
<title>Registration Page</title>
<meta name="Keywords" content="SSEA,Space,Education,Science,UK,Leicester,Conference,ESA,Register"> 
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="UTF-8">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="CSS/navBar.css">
<link rel="stylesheet" type="text/css" href="CSS/registrationForm.css">
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
	<img src="Images/astronaut.jpg" alt="" /> <!-- the image -->
		<div class="container col-4">
			<form  action="register.php" method="post"  enctype="multipart/form-data">
				
				<table>
					<tr><td colspan="2" ><p class="form_head">Registration Form</p></td></tr>
					<tr><td colspan="2" ><hr class="reg_hr"></td></tr>
		
					<tr><td><label class="reg_labels" for="firstName"><b>First Name</b></label></td>
					<td><input type="text" placeholder="First Name" name="firstName" required></td></tr>
					
					<tr><td><label class="reg_labels" for="lastName"><b>Last Name</b></label></td>
					<td><input type="text" placeholder="Last Name" name="lastName" required></td></tr>
					
					<tr><td><label class="reg_labels" for="Institute"><b>Institution</b></label></td>
					<td><input type="text" placeholder="Institution" name="Institute" required></td></tr>
		
					<tr><td><label class="reg_labels" for="Email"><b>Email</b></label></td>
					<td><input type="email" placeholder="Enter Email" name="Email" required></td></tr>
		
					<tr><td><label class="reg_labels" for="psw"><b>Password</b></label></td>
					<td><input type="password" placeholder="Enter Password" name="psw" required></td></tr>

					<tr><td><label class="reg_labels" for="psw-repeat"><b>Repeat Password</b></label></td>
					<td><input type="password" placeholder="Repeat Password" name="psw-repeat" required></td></tr>
					
					<tr><td colspan="2" ><hr class="reg_hr"></td></tr>
		
					<tr><td colspan="2" ><p>By creating an account you agree to our <a href="#">Terms & Privacy</a></p></tr></td>

					<tr><td colspan="2" ><button type="submit"  class="reg_btn">Register Now</button></tr></td>
					
					<tr><td colspan="2" ><p>Already have an account? <a href="signinform.php">Sign in</a></p></tr></td>
				</table>
				
	  
			</form>
			
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

<script>
function gotoPayment() {
  location.replace("pay.html")
}
</script>


<script src="JavaScript/correctViewLink.js"></script>

<script src="JavaScript/navBar.js"></script>
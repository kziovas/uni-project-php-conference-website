<!DOCTYPE html>
<html>
<head>
<title>Error Page</title>
<meta name="Keywords" content="SSEA,Space,Education,Science,UK,Leicester,Conference,ESA"> 
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="UTF-8">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="CSS/error.css">
<link rel="stylesheet" type="text/css" href="CSS/footer.css">
<style>

</style>
</head>
<body>

	<img  src="Images/spacex_land.jpg" alt="" /> <!-- the image -->
		<div class="row">
			<div class="menu">
				<ul class="col-7">
					<li id="textcontent1"><h1>Unfortunatelly there was an error!</h1>
						<br>
						<h3><?php 
						session_start(); 

						if(isset($_SESSION["error"]) ){
							$errortype=$_SESSION["error"];
							
							if($errortype=="EmailExists"){
								echo "This email has already been registered.<br> Try signing in or register with a different email";
								echo "<br> Please follow the link: <a href='registerform.php' >Registration Form</a>";
								// remove all session variables
								session_unset(); 

								// destroy the session 
								session_destroy();
							}
							elseif($errortype=="PswError"){
								echo "The passwords you provided do not match. Try typing them again.";
								echo "<br> Please follow the link: <a href='registerform.php' >Registration Form</a>";
								// remove all session variables
								session_unset(); 

								// destroy the session 
								session_destroy();
							}
							elseif($errortype=="DataError"){
								echo "The registration data you provided are not valid. Try typing them again.";
								echo "<br> Please follow the link: <a href='registerform.php' >Registration Form</a>";
								// remove all session variables
								session_unset(); 

								// destroy the session 
								session_destroy();
							}
							elseif($errortype=="WrongPass"){
								echo "The password you provided is wrong. Try typing it again.";
								echo "<br> Please follow the link: <a href='signinform.php' >SignIn Form</a>";
								// remove all session variables
								session_unset(); 

								// destroy the session 
								session_destroy();
							}
							elseif($errortype=="WrongEmail"){
								echo "The email you provided is wrong. Try typing it again.";
								echo "<br> Please follow the link: <a href='signinform.php' >SignIn Form</a>";
								// remove all session variables
								session_unset(); 

								// destroy the session 
								session_destroy();
							}
							elseif($errortype=="WrongCard"){
								echo "<p>The bank details you provided were wrong. Try again. </p>
									<p>Please follow the link to pay now:</p>
									<h2><a href='payform.php' >Pay Form</a></h2>
									<p>Or return to the main page and pay later:</p>
									<h2><a href='index.php' >Main Page</a></h2>";
							}
							elseif($errortype=="UploadError"){
								echo "<p>There was an error during uploading. Try again. </p>
									<p>Please follow the link to submit a paper:</p>
									<h2><a href='upload.php' >Upload Paper</a></h2>
									<p>Or return to the main page and pay later:</p>
									<h2><a href='index.php' >Main Page</a></h2>";
							}
							elseif($errortype=="ExpiredUpload"){
								echo "<p>The deadline for paper submission has passed! </p>
									<p>Please follow the link to confirmation page:</p>
									<h2><a href='confirmation.php' >Confirmation Page</a></h2>
									<p>Or return to the main page and pay later:</p>
									<h2><a href='index.php' >Main Page</a></h2>";
							}
						}
						else{
							echo "The registration session has expired.";
							echo "<br> Please follow the link: <a href='registerform.php' >Registration Form</a>";
							// remove all session variables
							session_unset(); 

							// destroy the session 
							session_destroy();
						}						
						?></h3>
					</li>
				</ul>
			</div>
			
					
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


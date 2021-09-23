<!DOCTYPE html>
<html>
<head>
<title>Confirmation Page</title>
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
					<li id="textcontent1"><h1>Your information has been stored succesfully!</h1>
					<p style="background-color:#FEDF00;"> Your conference membership ID is: <?php session_start(); 
						if(isset($_SESSION["attendeeId"]) ){
							echo $_SESSION["attendeeId"];
						}
						else{
							// remove all session variables
							session_unset(); 

							// destroy the session 
							session_destroy();  
							header ('Location: regError.php');
							exit;
						}
					?></p>

					<br>
					<p>Please save this number for your reference</p>
					<?php 
						if($_SESSION["payid"]!=0 and $_SESSION["paper"]!=='0'){							
							echo "<p>You have already paid your fee and submitted your paper! Your <em>registration is complete!</em></p>";
							echo "<p>Please follow the link to return to the main page:</p>
								<h2><a href='index.php' >Main Page</a></h2>";
								
							// remove all session variables
							session_unset(); 

							// destroy the session 
							session_destroy();  
						}
						elseif($_SESSION["payid"]==0 and $_SESSION["paper"]!='0'){
							echo "<p>To <em>complete your registration</em> you need to pay the attendance fee. </p>
								<p>Please follow the link below to complete your payment now:</p>
								<h2><a href='payform.php' >Payment</a></h2>
								<p>Or return to the main page and pay later:</p>
								<h2><a href='index.php' >Main Page</a></h2>";
						}
						elseif($_SESSION["payid"]!=0 and $_SESSION["paper"]=='0'){
							echo "<p>You have already paid the attendance fee. </p>
								<p>Please follow the link below to <em>upload a paper</em> now:</p>
								<h2><a href='upload.php' >Upload Paper</a></h2>
								<p>Or return to the main page and uload it later:</p>
								<h2><a href='index.php' >Main Page</a></h2>";
						}
						elseif($_SESSION["payid"]==0 and $_SESSION["paper"]=='0'){
							echo "<p>To <em>complete your registration</em> you need to pay the attendance fee. </p>
							    <p>Please follow the link below to complete your payment now:</p>
								<h2><a href='payform.php' >Payment</a></h2>
								<p>Or follow the link below to <em>upload a paper</em> now:</p>
								<h2><a href='upload.php' >Upload Paper</a></h2>
								<p>Or return to the main page and upload it later:</p>
								<h2><a href='index.php' >Main Page</a></h2>";
						}
						
					?></p>
					

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


<!DOCTYPE html>
<html>
<head>
<title>Paying Form Page</title>
<meta name="Keywords" content="SSEA,Space,Education,Science,UK,Leicester,Conference,ESA,Payment"> 
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="UTF-8">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="CSS/navBar.css">
<link rel="stylesheet" type="text/css" href="CSS/pay.css">
<link rel="stylesheet" type="text/css" href="CSS/footer.css">
<style>

</style>
</head>
<body>
 
 	<?php
		session_start(); 
		if(!isset($_SESSION["email"])){
			// remove all session variables
			session_unset(); 

			// destroy the session 
			session_destroy();
			header ('Location: regError.php');
			exit;
		}
	
		$host="localhost";
		$dbusername="root";
		$dbpassword="";
		$dbname="ssea";

		$memberemail=$_SESSION["email"];

		//create connection with MySQL
		$conn= new mysqli($host,$dbusername,$dbpassword,$dbname);

		if(mysqli_connect_error()){
			die('Connect Error('.mysqli_connect_errno().')'.mysqli_connect_error());
		}
		else{
			$sql="SELECT * FROM members WHERE email='$memberemail'";
			
			if($conn->query($sql)){
				$query1 = mysqli_query($conn,$sql);
				$memberinfo=mysqli_fetch_assoc($query1);
				$_SESSION["payid"]=$memberinfo['payid'];
				if($_SESSION["payid"] !=0){
					// remove all session variables
					session_unset(); 

					// destroy the session 
					session_destroy();
					header ('Location: regError.php');
					exit;
				}
			}
		}	
	?>

	<img src="Images/shuttle.jpg" alt="" /> <!-- the image -->
		<div class="container col-4">
			<form  action="pay.php" method="post" >
				<table>
					<tr><td colspan="2" ><p class="form_head">Payment Form</p></td></tr>
					<tr><td colspan="2" ><hr class="reg_hr"></td></tr>
					
					<tr><td colspan="2"><label class="subHead"><b>Payment</b></label></td></tr>
					<tr><td colspan="2" ><label class="reg_labels" for="cards"><b>Accepted Cards</b></label></td></tr>
					<tr><td colspan="2" ><div class="cards">
						  <i class="fa fa-cc-visa" style="color:navy;"></i>
						  <i class="fa fa-cc-amex" style="color:blue;"></i>
						  <i class="fa fa-cc-mastercard" style="color:red;"></i>
						  <i class="fa fa-cc-discover" style="color:orange;"></i>
						</div>
					</td></tr>
		
					<tr><td colspan="2"><label class="reg_labels" for="cardName"><b>Name on Card</b></label></td>
					<tr><td colspan="2"><input class="reg_input" type="text" placeholder="Name Surname" name="cardName" required></td></tr>
					
					<tr><td colspan="2"><label class="reg_labels" for="cardNumber"><b>Card Number</b></label></td>
					<tr><td colspan="2"><input class="reg_input" type="text" placeholder="122333" name="cardNumber" required></td></tr>
					
					<tr><td colspan="2"><label class="reg_labels" for="cardDate"><b>Expiration Date</b></label></td>
					<tr><td colspan="2"><input class="reg_input" type="text" placeholder="01-2035" name="cardDate" required></td></tr>
		
					<tr><td colspan="2"><label class="reg_labels" for="cardCVV"><b>CVV</b></label></td>
					<tr><td colspan="2"><input class="reg_input" type="text" placeholder="123" name="cardCVV" required></td></tr>
		
				
					<tr><td colspan="2" ><hr class="reg_hr"></td></tr>
					

					<tr><td colspan="2" ><button type="submit" class="conf_btn">Confirm Payment</button></tr></td>
					
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



<script src="JavaScript/correctViewLink.js"></script>
<script src="JavaScript/navBar.js"></script>
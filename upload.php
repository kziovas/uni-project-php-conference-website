<!DOCTYPE html>
<html>
<head>
<title>Upload Page</title>
<meta name="Keywords" content="SSEA,Space,Education,Science,UK,Leicester,Conference,ESA"> 
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
 

	<img src="Images/lab.jpg" alt="" /> <!-- the image -->
		<div class="container col-4">
			<form  action="submit.php" method="post"  enctype="multipart/form-data">
				
				<table>
					<tr><td colspan="2" ><p class="form_head">Paper Submission</p></td></tr>
					<tr><td colspan="2" ><hr class="reg_hr"></td></tr>
										
					<tr><td><label class="reg_labels" for="pdfUpload"><b>Submit Paper</b></label></td>
					<td><input class="browse_btn" type="file" name="pdfUpload" id="pdfUpload" accept="application/pdf"></td></tr>
					<br>
					<tr><td colspan="2" ><input class="submit_btn" type="submit" value="Submit"></td></tr>
		
					<?php 
					session_start();
					$exprdate="2019-10-30";
					$today=date("Y-m-d");
					if($today>$exprdate){
						$_SESSION["error"] = "ExpiredUpload";
						header ('Location: regError.php');
						exit;
					
					}
					
					if($_SESSION["payid"]==0){
						echo "<tr><td colspan='2' ><hr class='reg_hr'></td></tr>".
					
						"<tr><td colspan='2' ><p class='form_head'>Payment</p></td></tr>".
								
						"<tr><td colspan='2' ><p>Go to payment first?<a href='../pay.html'> Pay now</a></p></tr></td>";
					
					}
					else{
					
						echo "<tr><td colspan='2' ><hr class='reg_hr'></td></tr>".
					
						"<tr><td colspan='2' ><p class='form_head'>Payment</p></td></tr>".
								
						"<tr><td colspan='2' ><p>Go to payment first?<a href='confirmation.php'> Pay now</a></p></tr></td>";
					
					}
					
					?>
					
					
				</table>
				
	  
			</form>
			
		</div>
		<!--Navigation bar-->
		<h2  id="navbar" class="navigation sticky"></h2>
		<!--End of Navigation bar-->
		
				
				<!--Footer Begins-->
			  <footer>

					<div class="container" style="background-color: #FEDF00; ">
						<div class="textcontent1">
							<p>Email: hello@unipiproject.com</p>
							<p>Phone: +30 21052365896</p>
							<p>Made by Konstantinos Ziovas & Ioanna Kassara</p>
							<p>&copy; 2019 Unipi Project </p>
							
						</div>
					</div>

					
				</footer>

		<!--Footer Ends-->

 
</body>
</html>



<script src="JavaScript/correctViewLink.js"></script>

<script src="JavaScript/navBar.js"></script>
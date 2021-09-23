<?php
// remove all session variables
session_unset(); 

// destroy the session 
session_destroy();
session_start();


$email= filter_input(INPUT_POST,'Email');
$password= filter_input(INPUT_POST,'psw');






$host="localhost";
$dbusername="root";
$dbpassword="";
$dbname="ssea";

//create connection with MySQL
$conn= new mysqli($host,$dbusername,$dbpassword,$dbname);
if(mysqli_connect_error()){
	die('Connect Error('.mysqli_connect_errno().')'.mysqli_connect_error());
}
else{
	$sql="SELECT * FROM members WHERE email='$email'";
	$query = mysqli_query($conn,$sql);
	$memberinfo = mysqli_fetch_assoc($query);
	if($memberinfo!=null){
			$_SESSION["psw"]=$memberinfo['password'];
			if($password==$_SESSION["psw"]){
				$_SESSION["email"] = $email;
				$_SESSION["attendeeId"]=$memberinfo['memberid'];
				$_SESSION["payid"]=$memberinfo['payid'];
				$_SESSION["paper"]=$memberinfo['paper'];
				header ('Location: confirmation.php');
				exit;
				
			}
			else{
				$_SESSION["error"] = "WrongPass";
				header ('Location: regError.php');
				exit;
			}

	}
	else{
		$_SESSION["error"] = "WrongEmail";
		header ('Location: regError.php');
		exit;
	}
	
}


?>
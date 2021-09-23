<?php
session_start();
// remove all session variables
session_unset(); 

// destroy the session 
session_destroy();
session_start();

$firstname= filter_input(INPUT_POST,'firstName');
$lastname= filter_input(INPUT_POST,'lastName');
$institute= filter_input(INPUT_POST,'Institute');
$email= filter_input(INPUT_POST,'Email');
$password= filter_input(INPUT_POST,'psw');
$repassword= filter_input(INPUT_POST,'psw-repeat');


if($password == $repassword){
	
	$_SESSION["firstname"] = $firstname;
	$_SESSION["lastname"] = $lastname;
	$_SESSION["email"] = $email;
	$memberemail=$_SESSION["email"];
	
	
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
		$sql3="SELECT * FROM members WHERE email='$memberemail'";
		$query3 = mysqli_query($conn,$sql3);
		$memberinfo = mysqli_fetch_assoc($query3);
		if($memberinfo!=null){
			$_SESSION["error"] = "EmailExists";
			header ('Location: regError.php');
			exit;
			
		}
		else{
			$sql="INSERT INTO ssea.members (firstname,lastname,email,password,institute,payid,paper)
		      values ('$firstname','$lastname','$email','$password','$institute',0,'0')";
			if($conn->query($sql)){
			
				$sql2="SELECT * FROM members WHERE email='$memberemail'";
				$query2 = mysqli_query($conn,$sql2);
				$memberinfo = mysqli_fetch_assoc($query2);
				$_SESSION["attendeeId"]=$memberinfo['memberid'];
				$_SESSION["payid"]=$memberinfo['payid'];
				$_SESSION["paper"]=$memberinfo['paper'];
				if(isset($_SESSION["attendeeId"]) and isset($_SESSION["payid"]) and isset($_SESSION["paper"])){
					header ('Location: confirmation.php');
					exit;
				}
				else{
					echo "variables are not set";
				}
			}
			else{
				$_SESSION["error"] = "DataError";
				header ('Location: regError.php');
				exit;
			}
			$conn->close();
		}
		
	}

}
else{
	$_SESSION["error"] = "PswError";
	header ('Location: regError.php');
	exit;
}

?>
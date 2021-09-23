<?php

session_start();

$cardname= filter_input(INPUT_POST,'cardName');
$cardnumber= filter_input(INPUT_POST,'cardNumber');
$carddate= filter_input(INPUT_POST,'cardDate');
$cardcvv= filter_input(INPUT_POST,'cardCVV');



//add month to expiration card date so it cna be easily processed
$carddate='01-'.$carddate;
$carddate=date('d-m-Y', strtotime($carddate));

	
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
	$sql="SELECT * FROM ssea.bank WHERE cardname= '$cardname' AND cardnumber= '$cardnumber' AND cvv='$cardcvv' AND expiration=STR_TO_DATE('$carddate', '%d-%m-%Y')";
	//(cardname,cardnumber,expiration,cvv,fullname,email,address,city,country)
	//values ('$cardname','$cardnumber',STR_TO_DATE('$carddate', '%d-%m-%Y'),'$cardcvv','$billname','$billemail','$billaddress','$billcity','$billcountry')";
	
	if($conn->query($sql)){
		$query1 = mysqli_query($conn,$sql);
		$cardinfo=mysqli_fetch_assoc($query1);
		$_SESSION["payid"]=$cardinfo['payid'];
		$payid=$cardinfo['payid'];
		if($payid !=0){
			$sql="UPDATE members SET payid=$payid WHERE email='$memberemail'";
			if(mysqli_query($conn, $sql)){
				echo "Records were updated successfully.";
			} 
			else {
				echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
			}
			$sql2="SELECT memberid FROM members WHERE email='$memberemail'";
			$query2 = mysqli_query($conn,$sql2);
			$memberinfo = mysqli_fetch_assoc($query2);
			$_SESSION["attendeeId"]=$memberinfo['memberid'];
			header ('Location: confirmation.php');
			exit;
		}
		else{
			$_SESSION["error"] = "WrongCard";
			header ('Location: regError.php');
			exit;
		}	
	}
	
	else{
		
		// remove all session variables
		session_unset(); 

		// destroy the session 
		session_destroy(); 
		header ('Location: ../regError.html');
		exit;
	}
	$conn->close();
}

?>




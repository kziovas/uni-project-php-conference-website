<?php
$target_dir = "uploads/";

$uploadOk = 1;

// Check if file already exists
if (file_exists($target_file)) {
	session_start();
	$_SESSION["error"] = "UploadError";
	header ('Location: regError.php');
    $uploadOk = 0;
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
	session_start();
	$_SESSION["error"] = "UploadError";
	header ('Location: regError.php');
	exit;
					
// if everything is ok, try to upload file
} 
else {
	session_start();
	$target_file = $target_dir .$_SESSION["email"]. basename($_FILES["pdfUpload"]["name"]);
    if (move_uploaded_file($_FILES["pdfUpload"]["tmp_name"],$target_file)) {
        echo "The file ". basename( $_FILES["pdfUpload"]["name"]). " has been uploaded.";

		session_start();
	
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
			$sql="SELECT * FROM ssea.members WHERE email= '$memberemail'";
			
			
			if($conn->query($sql)){
				$query1 = mysqli_query($conn,$sql);
				$memberinfo=mysqli_fetch_assoc($query1);
				$_SESSION["paper"]=$memberinfo['paper'];
				$paper=$memberinfo['paper'];
				if($paper =='0'){
					$paper=$_SESSION["email"]. basename($_FILES["pdfUpload"]["name"]);
					$sql="UPDATE members SET paper='$paper' WHERE email='$memberemail'";
					if(mysqli_query($conn, $sql)){
						echo "Records were updated successfully.";
					} 
					else {
						echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
					}
					$sql2="SELECT paper FROM members WHERE email='$memberemail'";
					$query2 = mysqli_query($conn,$sql2);
					$memberinfo = mysqli_fetch_assoc($query2);
					$_SESSION["paper"]=$memberinfo['paper'];
					$paper=$memberinfo['paper'];
					echo $paper;
					header ('Location: confirmation.php');
					exit;
				}
				else{
					echo "Sorry, you have already submitted a paper.";
					exit;
					$_SESSION["error"] = "UploadError";
					header ('Location: regError.php');
					exit;
				}	
			}
			
			else{
				echo "Sorry, ther query failed.";
				exit;
				session_start();
				$_SESSION["error"] = "UploadError";
				header ('Location: regError.php');
				exit;
			}
			$conn->close();
		}

		
		
    } 
	else {
        echo "Sorry, there was an error uploading your file.";
		session_start();
		$_SESSION["error"] = "UploadError";
		header ('Location: regError.php');
		exit;
    }
}
?>
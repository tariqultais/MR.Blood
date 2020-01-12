<?php
error_reporting();
$con=mysqli_connect('localhost','root','');
 if ($con) {
 	$dbselect=mysqli_select_db($con,'donor');

 	if ($dbselect) {
 		if (isset($_POST['btn'])) 
 		{
 		
 		$name=$_POST['name'];
 		$email=$_POST['email'];
 		$message=$_POST['Message'];

 			
 				
 		$sql="INSERT INTO message(name,email,message)VALUES('$name','$email','$message');";
 			$query=mysqli_query($con,$sql);
			
 		if ($query) {
 			echo "Save Successfull";
 		}
 		else{
 			echo "Save Failed";
 		}

 		}

 		
 	}
 else{
 		echo " Database Not Selected";
 	}
 }

 else{
 	die();
 }

header("refresh:0.1 contact.php");
?>
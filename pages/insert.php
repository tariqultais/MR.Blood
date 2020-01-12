<?php
error_reporting();
$con=mysqli_connect('localhost','root','');
 if ($con) {
 	$dbselect=mysqli_select_db($con,'donor');

 	if ($dbselect) {
 		if (isset($_POST['btn'])) 
 		{
 		
 		$name=$_POST['name'];
 		$blood=$_POST['blood'];
 		$district=$_POST['district'];
 		$email=$_POST['email'];
 		$contact=$_POST['contact'];

 			
 				
 		$sql="INSERT INTO info(name,blood,district,email,contact)VALUES('$name','$blood','$district','$email','$contact');";
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

header("refresh:0.1 admin.php");
?>
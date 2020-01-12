
<head>
<meta charset="utf-8">
<title>Login | Donor Management System</title>
<link rel="stylesheet" type="text/css" href="cpanel.css">

<link rel="shortcut icon" type="img/png" href="img/logo.png">
</head>
<body>

<table  style="width: 100; margin-top: 5%; padding: 100px; background:rgba(42,42,42,0.6);" align="center">
<tr>
<form name="" method="post">
<td>
<table style="background: #9ACC3D; padding: 40px;box-shadow: 0px 0px 10px 0px #000;" width="100%" " bgcolor="#FFFFFF">
<tr>
<td colspan="3" align="center"><strong style="font-size: 30px; ">Sign UP</strong></td>
</tr>
<tr>
<td width="78">Username</td>
<td width="6">:</td>
<td width="294"><input name="username" type="text" id="username" placeholder="User Name " required="required"></td>
</tr >
<td width="78">Email</td>
<td width="6">:</td>
<td width="294"><input name="email" type="email" id="email" placeholder="Enter Your Email " required="required"></td>
</tr >
<tr>
<td>Password</td>
<td>:</td>
<td><input name="password" type="password" id="password" placeholder="Password" required="required"></td>
</tr>
<tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td><button style="margin-left: 80px;" type="submit" name="btn">Submit</button>
	  <tr><td><a  style=" color: #000;" href="cpanel.php">Login</a></td></tr>
	  
 

</form>
</tr>
</table>
</td>

</tr>
</table>
</body>
</html>
    
<?php
error_reporting();
$con=mysqli_connect('localhost','root','');
 if ($con) {
 	$dbselect=mysqli_select_db($con,'donor');

 	if ($dbselect) {
 		if (isset($_POST['btn'])) 
 		{
 		
 		$username=$_POST['username'];
		$email=$_POST['email'];
		$password=$_POST['password'];
		
		

 			
 				
 		$sql="INSERT INTO login(username,email,password)VALUES('$username','$email','$password');";
 			$query=mysqli_query($con,$sql);
			
 		if ($query) {
 			echo "<script language='javascript' type='text/javascript'> location.href='cpanel.php' </script>";	
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

?>
						

     

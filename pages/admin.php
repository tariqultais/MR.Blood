<?php 
session_start();
?>
<html>
<head>
	<meta charset="utf-8">
	<title>Admin | Donar info</title>
	<link rel="stylesheet" type="text/css" href="admin.css">

	<link rel="shortcut icon" type="img/png" href="img/logo.png">

</head>
<body>
	<div class="wrapper">
		<div class="header"><tr><td><a href="../index.php"><img style="height: 80px; margin-top: 10px;" src="img/logo.png"></td><td><img style="height: 80px; margin-top: 10px;" src="img/banner.png"></a></td></tr>
		</div>

		<div class="nabbar">
			<ul>
				<li><a href="why.php">Why Donate Blood?</a></li>
				<li><a href="donate.php">💲 Financial Donation</a></li>
				<li><a href="refer.php">Refer a Friend</a></li>
				<li><a href="message.php">Message</a></li>
				<li><a  style="border-right:none;" href="logout.php">Log Out</a></li>
			
				
		</ul>
	</div>
		<div class="container">
			<div id="sub"><h2 align="center"><br>Welcome 
 <?php 
if (isset(	$_SESSION['login_user'])) {
	echo 	$_SESSION['login_user']['username'];
}if (!$_SESSION['login_user']){
	$_SESSION['req']="plz login";
	header('Location:cpanel.php');
}

?>
<br>
<a style="color: #000;" href="logout.php"> Logout </a></h2>
									<hr width="75%" align="center">
							<form method="post" action="insert.php">
								<table>
									<tr>
										<td><b>Name :</b></td>
										<td><input type="text" name="name" required="required" placeholder="Donor Name"></td>
									</tr>

									<tr>
										<td><b>Group :</b></td>
										
	<td>
		<select name="blood" required="required">
	<option selected value="N/A">👉 Select Blood Group 👈</option>
  	<option value="A+">A+</option>
  	<option value="A-">A-</option>
 	<option value="B+">B+</option>
  	<option value="B-">B-</option>
 	<option value="AB+">AB+</option>
 	<option value="AB-">AB-</option>
  	<option value="O+">O+</option>
  	<option value="O-">O-</option>
</select></td>
									</tr>

									<tr><td><b>District :</b></td><td>
		<select name="district" required="required">
	<option selected value="N/A">👉 Select Your District 👈</option>
  	<option value="Dhaka">Dhaka</option>
  	<option value="Chitagong">Chitagong</option>
 	<option value="Barisal">Barisal</option>
  	<option value="Rangpur">Rangpur</option>
 	<option value="Shilet">Shilet</option>
 	<option value="Rajshai">Rajshai</option>
  	<option value="Khulna">Khulna</option>
  	
</select></td>
</tr>
						<tr>
							<td><b>E-mail :</b></td>
							<td><input type="text" name="email" placeholder="mail@address.com"></td>
									</tr>		
										



									<tr>
										<td><b>Contact No :</b></td>
									<td><input type="text" required="required"  name="contact" placeholder="+8801*******54"></td>
									</tr>		
															
								</table>
			<div id="bn"><ul><li><div id="back"><a href="view.php"> Edit</a></div></li><li><button name="btn" >SUBMIT</button></li></ul>
	</div>
								
						</form>

						

				</div>
			
		</div>
		<div class="footer">All Reserved by © TAIS Foundation || 2018</div>
		








	</div>

</body>
</html>


<html>
<head>
	<meta charset="utf-8">
	<title>Admin | Donar info</title>
	<link rel="stylesheet" type="text/css" href="edit.css">

	<link rel="shortcut icon" type="img/png" href="img/logo.png">
</head>
<body>
	<div class="wrapper">
		<div class="header"><tr><td><a href="../index.php"><img style="height: 80px; margin-top: 10px;" src="img/logo.png"></td><td><img style="height: 80px; margin-top: 10px;" src="img/banner.png"></a></td></tr>
		</div>

		<div class="nabbar">
			<ul>
				<li><a href="admin.php">Register Free</a></li>
				<li><a href="why.php">Why Donate Blood?</a></li>
				<li><a href="donate.php">💲 Financial Donation</a></li>
				<li><a href="refer.php">Refer a Friend</a></li>
				<li style="border-right:none;"><a href="#">Contact Us</a></li>
			
				
		</ul>
	</div>
		<div class="container">
			<div id="sub"><h2 align="center"><br>Contact</h2>
									<hr width="75%" align="center">
							

				<?php
				error_reporting(0);
				$con=mysqli_connect('localhost','root','');

				if ($con) {
					$dbselect=mysqli_select_db($con,'donor');
					if ($dbselect) {
						echo "";
					}
					else{
						echo "Select database Failed <br>";
					}
				}
				else{
					die();
				}
		$name=$_POST['name'];
 		$blood=$_POST['blood'];
 		$district=$_POST['district'];
 		$email=$_POST['email'];
 		$contact=$_POST['contact'];

				if (!empty($name) and !empty($blood) and !empty($district)and !empty($email) and !empty($contact)) {
				$sql="insert into info(name,blood,district,email,contact)Values('$name','$blood','$district','$email','$contact')";


				$query=mysqli_query($con,$sql);
				if ($query) {
					echo "Data Inserted  <br>";
				}
				else{
					echo "Failed To Save <br>";
				}
				}
				else{
					echo "Failed is Empty <br>";
				}


				?>

				<?php
				error_reporting();
				$con=mysqli_connect('localhost','root','');

				if ($con) {
					$dbselect=mysqli_select_db($con,'donor');
					if ($dbselect) {
						//echo "Database Selected";
					}
					else{
						echo "Select database Failed <br>";
					}
				}
				else{
					die();
				}
						$sql="SELECT * FROM info";
						$query=mysqli_query($con,$sql);

						?>

		<table border="2" style="margin-left:auto;margin-right: auto;border:1px solid #444;">
			<tr>
				<td>Name<td>Blood Group</td><td>District</td><td>Email</td><td>Contact</td><td>Edit Info</td>
			</tr>

			<?php
		
		while ($rows=mysqli_fetch_assoc($query)) {
		
	
	?>
<tr>
	
						<td><?php echo $rows['name'];?></td>
						<td><?php echo $rows['blood'];?></td>
						<td><?php echo $rows['district'];?></td>
						<td><?php echo $rows['email'];?></td>
						<td><?php echo $rows['contact'];?></td>

	<td><a href="editheader.php?id=
		<?php echo $rows['id'];?>">Edit</a></td>

		
		</tr>
		<?php
		}
	?>
	</table>



							
</div>
			
			
		</div>
		<div class="footer">All Reserved by © TAIS Foundation || 2018</div>
		








	</div>

</body>
</html>
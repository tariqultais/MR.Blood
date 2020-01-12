<html>
<head>
	<meta charset="utf-8">
	<title>Admin | Donar info</title>
	<link rel="stylesheet" type="text/css" href="view.css">
	<link rel="shortcut icon" type="img/png" href="img/logo.png">
</head>
<body>
	<div class="wrapper">
		<div class="header"><tr><td><a href="../index.php"><img style="height: 80px; margin-top: 10px;" src="img/logo.png"></td><td><img style="height: 80px; margin-top: 10px;" src="img/banner.png"></a></td></tr>
		</div>

		<div class="nabbar">
			<ul>
				<li><a href="admin.php">Register Free</a></li>
				<li><a href="#">Why Donate Blood?</a></li>
				<li><a href="donate.php">💲 Financial Donation</a></li>
				<li><a href="contact.php">Refer a Friend</a></li>
				<li><a style="border-right:none;" href="#">Contact Us</a></li>
			
				
		</ul>
	</div>
		<div class="container">
			<div id="sub"><h2 align="center"><br>Donar List</h2>
									<hr width="50%">
				<div id="View" align="center">
							
								<table>
													<h3>Active Donar List Near You </h3>
													<hr width="75%">
				<?php
				$con=mysqli_connect('localhost','root','');
				if ($con) {
					$db=mysqli_select_db($con,'donor');
					if ($db) {
						//echo "Database Selected";
						$sql="SELECT * FROM info";
						$query=mysqli_query($con,$sql);
						?>
						<table border="1">
							<th>
								Id<td>Name<td>Blood Group</td><td>District</td><td>Email</td><td>Contact</td><td>Edit Info</td>
							</th>
						<?php
						if ($query) {
							$i=0;
						while ($rows=mysqli_fetch_assoc($query)) {
						$i++;
						?>
					<tr>
						<td> <?php echo $i;?></td>
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
						<?php	
						}
						else{
							die("Failed To View Data");
						}
					}
					else{
						die("Database Not Selected");
					}

				}
				else{
					die("Connection Failed");
				}

				?>
		</table>

			<tr><td><div id="back"><a href="admin.php">Back</a></div></td></tr>	
								
						</form>
</div>
						

				</div>
			

						
		</div>
		<div class="footer">All Reserved by © TAIS Foundation || 2018</div>
		








	</div>

</body> 
</html>
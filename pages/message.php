<html>
<head>
	<meta charset="utf-8">
	<title>Admin | Donar info</title>
	<link rel="stylesheet" type="text/css" href="admin.css">
	<link rel="shortcut icon" type="img/png" href="img/logo.png">
</head>
<body>
				<style type="text/css">
 
#share-buttons img {
width: 35px;
padding: 5px;
border: 0;
box-shadow: 0;
display: inline;
}
 
</style>
	<div class="wrapper">
		<div class="header"><tr><td><a href="../index.php"><img style="height: 80px; margin-top: 10px;" src="img/logo.png"></td><td><img style="height: 80px; margin-top: 10px;" src="img/banner.png"></a></td></tr>
		</div>

		<div class="nabbar">
			<ul>
		<li><a href="why.php">Why Donate Blood?</a></li>
				<li><a href="donate.php">💲 Financial Donation</a></li>
				<li><a href="refer.php">Refer a Friend</a></li>
				<li><a href="contact.php">Contact Us</a></li>
				<li style="border-right:none;"><a href="cpanel.php">Log in</a></li>
			
				
			
				
		</ul>
	</div>
		<div class="container" style="font-family: Arial Rounded MT Bold;">


		
		<h2 align="center"><br>Message</h2>
									<hr width="75%">
				<div id="View" align="center">
							
								<table>
													
												
				<?php
				$con=mysqli_connect('localhost','root','');
				if ($con) {
					$db=mysqli_select_db($con,'donor');
					if ($db) {
						//echo "Database Selected";
						$sql="SELECT * FROM message";
						$query=mysqli_query($con,$sql);
						?>
						<table border="1">
							<th>
								id<td>Name</td><td>Email</td><td>Message</td>
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
						<td><?php echo $rows['email'];?></td>
						<td><?php echo $rows['Message'];?></td>
						
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

			<tr><td><div id="back" style="margin-left: 230px;"><a href="admin.php">Back</a></div></td></tr>	
								
						</form>
</div>
						

				</div>




				


			</div>




		
		<div class="footer">All Reserved by © TAIS Foundation || 2018</div>
		


 





	</div>

</body>
</html>
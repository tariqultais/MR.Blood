
<html>
<head>
	<meta charset="utf-8">
	<title>Admin | Donar info</title>
	<meta name="description" content="A Community of Voluntary Blood Donors of Bangladesh. List of Bangladeshi blood donors profile and list of current blood request.">
	<meta name="keyword" content=" blood donors club bangladesh, bangladeshi blood donors profile, blood request, blood bank, a+ blood,  a- blood,  ab+ blood,  ab- blood,  b+ blood,  b- blood,  o+ blood,  o- blood ">
	<link rel="stylesheet" type="text/css" href="pages/view.css">
	<link rel="shortcut icon" type="img/png" href="img/logo.png">
</head>
<body>
	<div class="wrapper">
		<div class="header"><tr><td><a href="index.php"><img style="height: 80px; margin-top: 10px;" src="pages/img/logo.png"></a></td><td><img style="height: 80px; margin-top: 10px;" src="pages/img/banner.png"></td></tr>
		</div>

		<div class="nabbar">
			<ul>
				<li><a href="pages/why.php">Why Donate Blood?</a></li>
				<li><a href="pages/donate.php">💲 Financial Donation</a></li>
				<li><a href="pages/refer.php">Refer a Friend</a></li>
				<li><a href="pages/contact.php">Contact Us</a></li>
				<li><a  style="border-right:none;" href="pages/cpanel.php">Log in</a></li>
				
		</ul>
	</div>
		<div class="container">
			<div id="sub"><h2 align="center"><br>Donar List</h2>
									<hr width="50%">
				<div id="View" align="center">
							
								<table>
													<h3>Active Donar List Near You </h3>
													<hr width="75%"><br>
				<?php
				$con=mysqli_connect('localhost','root','');

				$blood=$_POST['blood'];
				$district=$_POST['district'];

				if ($con) {
					$db=mysqli_select_db($con,'donor');
					if ($db) {
						//echo "Database Selected";
						
						$sql="SELECT * FROM info where district='$district' AND blood='$blood'";
						$query=mysqli_query($con,$sql);
						?>
						<table style="border: 1px solid #444;" border="1">
							<th>
								Id<td>Name<td>Blood Group</td><td>District</td><td>Email</td><td>Contact</td>
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
						<!--<td><a href="editheader.php?id=
		<?php echo $rows['id'];?>">Edit</a></td>-->
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

			<tr><td><div id="back"><a href="index.php">Back</a></div></td></tr>	
								
						</form>
</div>
						

				</div>
			

						
		</div>
		<div class="footer">All Reserved by © TAIS Foundation || 2018</div>
		








	</div> <SCRIPT LANGUAGE="JavaScript">
        <!-- Disable
        function disableselect(e) {
            return false
        }
        function reEnable() {
            return true
        }
        //if IE4+
        document.onselectstart = new Function("return false")
        document.oncontextmenu = new Function("return false")
        //if NS6
        if (window.sidebar) {
            document.onmousedown = disableselect
            document.onclick = reEnable
         } //-->
    </script>

</body>
</html>
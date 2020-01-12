<?php
error_reporting(1);
$con=mysqli_connect('localhost','root','');

if ($con) {
	$dbselect=mysqli_select_db($con,'donor');
	if ($dbselect) {
		echo "";
	}
	else{
		echo "Select database Failed";
	}
}
else{
	die();
}		$id=$_GET['id'];
		$sql="SELECT * FROM  info where id=$id";
		$query=mysqli_query($con,$sql);
		$i=0;
?>

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
				<li style="border-right:none;"><a href="contact.php">Contact Us</a></li>
			
				
		</ul>
	</div>
		<div class="container">
		<div id="sub"><h2 align="center"><br>Contact</h2>
									<hr width="75%" align="center">
									<br>
<form method="POST">
	<table style="border:1px solid #444;" border="1px solid #000">
				<th>
					Name<td>Blood Group</td><td>District</td><td>Email</td><td>Contact</td><td>Edit Info</td><td>Delete</td>
				</th> 

<?php
while ($rows=mysqli_fetch_assoc($query)) {
$i++; 

?>
<tr>
			<td><input type="text" name="name" required="required" value="<?php echo $rows['name']; ?>"></td>
			<td><input type="text" name="blood" required="required" value="<?php echo $rows['blood']; ?>"></td>
			<td><input type="text" name="district" required="required" value="<?php echo $rows['district']; ?>"></td>
			<td><input type="text" name="email" required="required" value="<?php echo $rows['email']; ?>"></td>
			<td><input type="text" name="contact" required="required" value="<?php echo $rows['contact']; ?>"></td>
			<td><input type="submit" name="btn" value="Update"></td>
			<td><input type="submit" name="Delete" value="Delete"></td>
		</tr>
	
	</table>
	
</form>

<?php
if (isset($_POST['btn'])) {
		if ($_GET['id']) {
		$id = $_GET['id'];

		$name=$_POST['name'];
 		$blood=$_POST['blood'];
 		$district=$_POST['district'];
 		$email=$_POST['email'];
 		$contact=$_POST['contact'];
		

		$sql = "UPDATE info SET 
		name='$name',blood='$blood',district='$district',email='$email',contact='$contact' WHERE id='$id' ";
		$query =  mysqli_query($con,$sql);
		if ($query) {
			$msg='<p style="color:green;font-size:18px;">UPDATE.</p>';
					header("refresh:0.1 add_header.php");
		} else {
				$msg='<p style="color:red;font-size:18px;">Update failed.</p>';
		} 
		}
	}

echo $msg;

}
?>
<?php
if (isset($_POST['Delete'])) {
		if ($_GET['id']) {
		$id = $_GET['id'];

		$name=$_POST['name'];
 		$blood=$_POST['blood'];
 		$district=$_POST['district'];
 		$email=$_POST['email'];
 		$contact=$_POST['contact'];
		

		$sql = "DELETE FROM  info WHERE id='$id' ";
		$query =  mysqli_query($con,$sql);
		if ($query) {
			$msg='<p style="color:green;font-size:18px;">Data Deleted.</p>';
					header("refresh:0.1 add_header.php");
		} else {
				$msg='<p style="color:red;font-size:18px;">Update failed.</p>';
		} 
		}
	}

echo $msg;


?>
</div></div>
		<div class="footer">All Reserved by © TAIS Foundation || 2018</div>
		




 



	</div>

</body>
</html>
<?php
session_start();
include('config.php');
if (isset($_POST['submit'])){
	
	$username=$_POST['username'];
	$email=$_POST['email'];
	$password=$_POST['password'];
 
$query ="SELECT * FROM login WHERE username='$username' and email='$email' and password='$password'";
$row=mysqli_query($db,$query);
$result=mysqli_fetch_assoc($row);

 if ($result)
{
	$_SESSION['login_user']=$result;
	header('location:admin.php');
  }

  else
  {
	$_SESSION['fail_msg']='login fail';
	header('location:cpanel.php');
}

}
    
?>
	
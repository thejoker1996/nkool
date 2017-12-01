<?php 
session_start();
$fname=$_POST['fname'];
$femail=$_POST['femail'];
require('dbcontroller.php');
$sql="SELECT username,uemail FROM user_info WHERE username='$fname' AND uemail='$femail' ";
$result=$conn->query($sql);
if($result->num_rows>=0){
	$_SESSION['fname']=$fname;
	$_SESSION['femail']=$femail;
	header('Location: changepassword.php');
}else{
	session_destroy();
	header('Location: forgot.html');
}
$conn->close();
?>
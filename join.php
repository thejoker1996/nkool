<?php 
session_start();
require 'dbcontroller.php';
$uname=$_POST['uname'];
$_SESSION["uid"]=$_POST['uname'];
$uemail=$_POST['uemail'];
$pass=$_POST['pass'];
$number=$_POST['number'];
$state=$_POST['state'];
$city=$_POST['city'];
$zip=$_POST['postal'];
$add=$_POST['addr'];
$servername="localhost";
$dbname="website";
$username="root";
$password="";
if(!empty($uname) && !empty($uemail) && !empty($pass) && !empty($number) && !empty($state) && !empty($city) && !empty($zip) && !empty($add)){
require('dbcontroller.php');

$sql2="SELECT username FROM user_info WHERE username='$uname'";
$result=$conn->query($sql2);
if($result->num_rows>0){
	
			
				header('Location:join.html');
			
				
			
	}

$sql="INSERT INTO user_info (username,uemail,upassword,unumber,ustate,ucity,uzip,uaddress) VALUES ('$uname','$uemail','$pass','$number','$state','$city','$zip','$add')";

if($conn->query($sql)===TRUE){

header('Location:userprofile.php');
}else{
	die("error");
}

$conn->close();
}else{
	header('Location:join.html');
}
?>
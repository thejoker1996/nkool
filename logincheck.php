<?php 
session_start();
require 'dbcontroller.php';

$uname = $_GET['uname'];
$upass = $_GET['up'];

$sql="SELECT username,upassword FROM user_info WHERE user_id='1'";
$result=$conn->query($sql);
if($result->num_rows>0){
	while($row=$result->fetch_assoc()){
		
			if( $row['username']==$uname){
				$_SESSION['uid']=$uname;
				header('Location: userprofile.php');
			}
			
		
	}
}

?>
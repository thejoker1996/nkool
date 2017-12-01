<?php 
$u=$_GET["q"];
require('dbcontroller.php');
$sql="SELECT username FROM user_info WHERE username='".$u."'";
$result=$conn->query($sql);
if($result->num_rows>0){
	echo"username not available";
}else{
	echo"username available";
}


?>
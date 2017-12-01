<?php 
$servername="localhost";
$dbname="website";
$username="root";
$password="";

$conn = new mysqli($servername,$username,$password,$dbname);
if($conn->connect_error){die("error");}

?>
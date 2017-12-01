<?php 
session_start();
if(isset($_SESSION['productid'])){
	echo"welcome ".$_SESSION['productid'];
}
?>
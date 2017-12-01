


<?php 
session_start();
if(isset($_SESSION['uid'])){
	echo"good";
}else{
	header('Location:login.html');
}
$u=$_SESSION['uid'];
echo'
<html>
<head>
<link rel="stylesheet" type="text/css" href="frontcss.css">

<meta name="viewport" content="width=device-width,initial-scale=1.0">
</head>
<body style="background-color:lavender;">
<div class="nav-bar">

<ul>
<li><img src="logo.jpg"></li>
<li><a href="news.html" id="link"><strong>HOME</strong></a></li>
<li><a href="Gallery.php" id="link"><strong>GALLERY</strong></a></li>
<li ><a href="home.html" id="link"><strong>NEWS</strong></a></li>
<div class="cart"><a href="cart.php"><strong>CART</strong></a></div>
<div class="login"><a href="logout.php"><strong>LOGOUT</strong></a></div>


</ul>
</div>
<h1 style="color:black;">welcome' .$u.'</h1>
</body>
</html>';
?>
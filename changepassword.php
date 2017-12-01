<?php 
session_start();
if(isset($_SESSION['fname']) && isset($_SESSION['femail'])){
	echo'
	<html>
<head>
<link rel="stylesheet" type="text/css" href="frontcss.css">

<meta name="viewport" content="width=device-width,initial-scale=1.0">
</head>
<body style="background-color:lavender;">

<div class="main" style="margin-top:20%;margin-left:40%;border:2px lavender;">
<form action="changepassword.php" method="POST">
<label>Change password</label><br>
<br>

<input style="border:1px solid black;border-top:none;border-left:none;border-right:none;border-radius:2px;height:50px;background-color:lavender;width:auto;" type="password" name="npass" placeholder="newpassword"><br><br>
<input style="border:1px solid black;border-top:none;border-left:none;border-right:none;border-radius:2px;height:50px;background-color:lavender;width:auto;" type="password" name="ncpass" placeholder="confirm password"><br><br>
<input  style="border:1px solid black;border-radius:5px;height:50px;width:100px;"type="submit" name="login" value="Submit">
</form>

</div>

</body>
</html>';
if(isset($_POST['npass']) && isset($_POST['ncpass'])){
	$p=$_POST['npass'];
	$cp=$_POST['ncpass'];
	if($p===$cp){
		require('dbcontroller.php');
		$sql="UPDATE user_info SET upassword='$p' WHERE username='".$_SESSION['fname']."'";
		$result=$conn->query($sql);
		header('Location: login.html');
	}
	
}
}else{
	header('Location: forgot.html');
}

?>

<?php 
session_start();
$user_id="";
$name="";
$balance="";
$pay="";
if(isset($_POST['submit'])){
	if(isset($_POST['pay'])){
		$name=$_SESSION['sess_name'];
		$user_id=$_SESSION['sess_user_id'];
		$balance=$_SESSION['sess_payment'];
		$pay=$_POST["pay"];
		if((int)$balance<(int)$pay){
			echo"YOU HAVE NOT SUFICENT BALANCE";
		}
		else{
			$pay=(int)$balance-(int)$pay;
		}
	}
}
?>

<!doctype html>
<html>
<head>
<title>User Profile </title>
<style>
.profile{
	width:530px;
	margin:50px auto;
	font:Cambria, "Hoefler Text", "Liberation Serif", Times, "Times New Roman", serif;
	border-radius:10px;
	border:2px solid #ccc;
	padding:20px 40px 25px;
	margin-top:0px; 
}
input[type=submit]{
	width:50px;
	background-color:#009;
	color:#fff;
	margin-left:10px;
	border:2px solid #06F;
	padding:5px;
	font-size:15px;
	cursor:pointer;
	border-radius:5px;
}
</style>
</head>
<body>
<form action="">
<div class = "profile">
<h1><center>User Profile</center></h1>
<table>
<tr><td>User Name</td><td><input type="text" name="username"value="<?php echo ($name);?>"></td></tr>
<tr><td>User Id</td><td><input type="number" name="name"value="<?php echo ($user_id);?>"/></td></tr>
<tr><td>Balance</td><td><input type="number" name="total"value="<?php echo ($balance);?>"/></td></tr>
<tr><td>I want to pay</td><td><input type="number" name="pay"value="<?php echo ($pay);?>"/></td>
<td><input type="submit" type="submit" value="Pay"/></td></tr>
</table>
<div></div>
</form></br>
<table><center>
<br><tr><th><b>Year</b></th><th><b>Submitted</b></th><th><b>Verification</b></th></tr></br>
<tr><td>2018-2019</td><td>YES</td><td><a href="certificate.php"><b>certificate</b></a></td></tr>
<tr><td><input value="2017-2018"/></td><td><input value="YES"/></td><td><input value=""/></td></tr>
<tr><td><input value="2016-2017"/></td><td><input value="YES"/></td><td><input value=""/></td></tr>
<tr><td><input value="2015-2016"/></td><td><input value="YES"/></td><td><input value=""/></td></tr>
<tr><td><input value="2014-2015"/></td><td><input value="YES"/></td><td><input value=""/></td></tr>
<tr><td><input value="2013-2014"/></td><td><input value="YES"/></td><td><input value=""/></td></tr>
<tr><td><input value="2012-2013"/></td><td><input value="YES"/></td><td><input value=""/></td></tr>
<tr><td><input value="2011-2012"/></td><td><input value="YES"/></td><td><input value=""/></td></tr>
<tr><td><input value="2010-2011"/></td><td><input value="YES"/></td><td><input value=""/></td></tr>
<tr><td><input value="2009-2010"/></td><td><input value="YES"/></td><td><input value=""/></td></tr>
<tr><td><input value="2008-2009"/></td><td><input value="YES"/></td><td><input value=""/></td></tr>
</center></table>
<div><a href="home.php"><b>back</b></a>
<a href="logout.php"><b>logout</b></a></div>
</div>
</body>
</html>
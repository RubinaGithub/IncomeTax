<?php 
session_start();
$name="";
$TIN="";
$old_tin="";
$circle="";
$zone="";
$total="";
$amount_payable="";
$amount_paid="";
$start_year="";
$end_year="";
$start_year="";
$_SESSION['sess_start_year'];
$end_year=$_SESSION['sess_end_year'];
$name=$_SESSION['sess_name'];
		$TIN=$_SESSION['sess_tin'];
		$old_tin=$_SESSION['sess_old_tin'];
		$circle=$_SESSION['sess_circle'];
		$zone=$_SESSION['sess_zone'];
		$total=$_SESSION['sess_total'];
		$amount_payable=$_SESSION['sess_total_payable'];
		$amount_paid=$_SESSION['sess_total_paid'];

?>
<!doctype html>
<html>
<head>
<title>Recipt</title>
<style>
.recipt{
	width:550px;
	margin:50px auto;
	font:Cambria, "Hoefler Text", "Liberation Serif", Times, "Times New Roman", serif;
	border-radius:10px;
	border:2px solid #ccc;
	padding:20px 40px 25px;
	margin-top:150px; 
}
</style>	
</head>
<body>
<div class=recipt>
<h3><center>ACKNOWLEDGEMENT RECEIPT OF  RETURN OF INCOME </center></h3>
<form action="" method="POST">
<table>
<tr><td>Assesment Year</td><td><input type="date"  value="<?php echo ($start_year);?>"/>
<input type="date" value="<?php echo ($end_year);?>"/></td></tr>
<tr><td>Name of the Assessee</td><td><input value="<?php echo ($name);?>"/></td></tr>
<tr><td>Twelve-digit TIN </td><td><input value="<?php echo ($TIN);?>"></td></tr>
<tr><td>Old TIN</td><td><input value="<?php echo ($old_tin);?>"></td></tr>
<tr><td>Circle</td><td><input value="<?php echo ($circle);?>"></td></tr>
<tr><td>Taxes Zone </td><td><input value="<?php echo ($zone);?>"></td></tr>
<tr><td>Total income </td><td><input value="<?php echo ($total);?>"></td></tr>
<tr><td>Amount payable </td><td><input value="<?php echo ($amount_payable);?>"></td></tr>
<tr><td>Amount paid and adjusted</td><td><input value="<?php echo ($amount_paid);?>"></td></tr>
</table>
<div><a href="home.php"><b>Home</b></a>
<a href="profile.php"><b>Profile</b></a>
<a href="logout.php"><b>Logout</b></a></div>
</form>
</div>
</body>
</html>
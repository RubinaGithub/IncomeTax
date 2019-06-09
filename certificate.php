<?php 
session_start();
$name="";
$TIN="";
$father_name="";
$present_address="";
$permanent_address="";
$bid="";
$circle="";
$circle=$_SESSION['sess_circle'];
$name=$_SESSION['sess_name'];
$TIN=$_SESSION['sess_tin'];
$father_name=$_SESSION['sess_father_name'];
$present_address=$_SESSION['sess_present_address'];
$permanent_address=$_SESSION['sess_permanent_address'];
$bid=$_SESSION['sess_bid'];
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
<h2><center>GOVERNMENT OF THE PEOPLE REPUBLIC OF BANGLADESH NATIONAL BOARD OF REVENUE TAXES DEPERTMENT</center></h2>
<h3><center>Income Tax Certificate </center></h3>
<h4>Details of Assessee:</h4>
<form action="" method="POST">
<table>
<tr><td>Name of the Assessee</td><td><input value="<?php echo ($name);?>"/></td></tr>
<tr><td>Twelve-digit TIN </td><td><input value="<?php echo ($TIN);?>"></td></tr>
<tr><td>Father's Name</td><td><input type="text" name="father_name"value="<?php echo ($father_name);?>"/></td></tr>
<tr><td>Present Address</td><td><input type="text" name="present_address"value="<?php echo ($present_address);?>"/></td></tr>
<tr><td>Permanent Address</td><td><input type="text" name="permanent_address"value="<?php echo ($permanent_address);?>"/></td></tr>
<tr><td>Business Identification Number</td><td><input type="text" name="bid "value="<?php echo ($bid);?>" /></td></tr>  
<tr><td>Status</td><td><input type="text" value="Indivisual" /></td></tr>  
</table>
<p>This is the Certify that <?php echo ($TIN);?>,is an assessee of Taxes circle<?php echo ($circle);?>,Taxes Zone-<?php echo ($zone);?>,Dhaka.</p>
<p>His/Her Assessment has been complete for the Assesseement year <?php echo ($start_year);?>-<?php echo ($end_year);?>under section 82 BB 
of Tax Ordinance 1984 and tax paid in full.###</p>
<div><a href="home.php"><b>Home</b></a>
<a href="profile.php"><b>Profile</b></a>
<a href="logout.php"><b>Logout</b></a></div>
</form>
</div>
</body>
</html>
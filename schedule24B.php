<?php
session_start();
$TIN="";
$address_property_3A="";
$total_area_3B="";
$share_asessee_3C="";
$annual_value="";
$repair_5A="";
$local_5B="";
$land_5C="";
$interest_5D="";
$insurance_5E="";
$vacancy_5F="";
$other_5G="";
$deductions="";
$income_house_property="";
$share_income="";
$start_year="";
$end_year="";
//if(isset($_POST['submit'])){
	if(isset($_POST['income_house_property'])){
		$TIN=$_POST['TIN'];
		$start_year=$_POST['start_year'];
		$end_year=$_POST['end_year'];
		$address_property_3A=$_POST['address_property_3A'];
		$total_area_3B=$_POST['total_area_3B'];
		$share_asessee_3C=$_POST['share_asessee_3C'];
		$annual_value=(int)($_POST['annual_value']);
		$repair_5A=((int)$annual_value)* 0.25;
		$local_5B=(int)($_POST['local_5B']);
		$land_5C=(int)($_POST['land_5C']);
		$interest_5D=(int)($_POST['interest_5D']);
		$insurance_5E=(int)($_POST['insurance_5E']);
		$vacancy_5F=(int)($_POST['vacancy_5F']);
		$other_5G=(int)($_POST['other_5G']);
		$deductions=((int)$repair_5A)+((int)$local_5B)+((int)$land_5C)+((int)$interest_5D)+((int)$insurance_5E)+((int)$vacancy_5F)+((int)$other_5G);
		$income_house_property=((int)$annual_value)-((int)$deductions);
		$share_income=(int)($_POST['share_income']);
		//session_start();
		$_SESSION['sess_income_house_property']=$income_house_property;
		
		$conn =mysqli_connect('localhost', 'root', '','incometax');
		$sql = "INSERT INTO schedule24b(start_year,end_year,TIN,address_property_3A,total_area_3B,share_asessee_3C,annual_value,deductions,repair_5A,local_5B,land_5C,interest_5D,
		insurance_5E,vacancy_5F,other_5G,income_house_property,share_income)
		VALUES('$start_year','$end_year','$TIN','$address_property_3A','$total_area_3B','$share_asessee_3C','$annual_value','$deductions','$repair_5A','$local_5B','$land_5C',
		'$interest_5D','$insurance_5E','$vacancy_5F','$other_5G','$income_house_property','$share_income')";
	mysqli_query($conn, $sql);	
	}	
//}
?>
<!doctype html>
<html>
<head>
<title>24B</title>
<style>
.income{
	width:550px;
	margin:50px auto;
	font:Cambria, "Hoefler Text", "Liberation Serif", Times, "Times New Roman", serif;
	border-radius:10px;
	border:2px solid #ccc;
	padding:20px 40px 25px;
	margin-top:0px; 
}
input[type=submit]{
	width:15%;
	background-color:#009;
	color:#fff;
	margin-top:10px;
	margin-left:500px;
	border:2px solname #06F;
	padding:10px;
	font-size:15px;
	cursor:pointer;
	border-radius:5px;
}
</style>	
</head>
<body>
<div class=income>
<h2><center>Schedule 24B</center></h2>
<h4><center>Particulars of income from house property</center></h4>
<h5><center>Annex this Schedule to return of income if you have income from house property</center></h5></br>
<form action="schedule24B.php" method="POST">
01.&nbsp;&nbsp;Assesment Year&nbsp;<input type="date" name="start_year">&nbsp;to&nbsp;<input type="date" name="end_year"></br></br>
02.&nbsp;&nbsp;TIN<input name="TIN" value="<?php echo ($TIN);?>" required/></br></br></br>
<table><caption>Descriptions of the house property</caption>
<tr><td>03A.Address of the property</td><td><input name="address_property_3A" value="<?php echo ($address_property_3A);?>"></td></tr>
<tr><td>03B.Total area</td><td><input name="total_area_3B" value="<?php echo ($total_area_3B);?>"></td></tr>
<tr><td>03C.Share of the assesses(%)</td><td><input name="share_asessee_3C" value="<?php echo ($share_asessee_3C);?>"></td></tr></table></br></br>
<table><tr><th></th><th><input value="Amount($)"/></th></tr>
<tr><td>04.Annual vanue</td><td><input name="annual_value" value="<?php echo ($annual_value);?>"/></td></tr>
<tr><td>05.Deductions</td><td><input name="deductions" value="<?php echo ($deductions);?>"/></td></tr>
<tr><td>05A.Repair, Collection, etc. </td><td><input name="repair_5A" value="<?php echo ($repair_5A);?>"/></td></tr>
<tr><td>05B.Municipal or Local Tax </td><td><input name="local_5B" value="<?php echo ($local_5B);?>"/></td></tr>
<tr><td>05C.Land Revenue </td><td><input name="land_5C" value="<?php echo ($land_5C);?>"/></td></tr>
<tr><td>05D.Interest on Loan/Mortgage/Capital Charge </td><td><input name="interest_5D" value="<?php echo ($interest_5D);?>"/></td></tr>
<tr><td>05E.Insurance Premium </td><td><input name="insurance_5E" value="<?php echo ($insurance_5E);?>"/></td></tr>
<tr><td>05F.Vacancy Allowance </td><td><input name="vacancy_5F" value="<?php echo ($vacancy_5F);?>"/></td></tr>
<tr><td>05G.Other, if any </td><td><input name="other_5G" value="<?php echo ($other_5G);?>"/></td></tr>
<tr><td>06.Income from house property</td><td><input name="income_house_property" value="<?php echo ($income_house_property);?>"/></td></tr>
<tr><td>07.Increase of partial ownership,the share o income</td><td><input name="share_income" value="<?php echo ($share_income);?>"/> </td></tr></table>
<input type="submit" value="Done"/>
<div><a href="income.php"><b>BACK</b></a></div>
</form>
</div>
</body>
</html>
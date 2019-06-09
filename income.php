<?php
session_start();
$interest_on_secuirity= "";
$agriculture= "";
$capital= "";
$other_source= "";
$shares= "";
$spouse="";
$foreigns= "";
$TIN="";
$salary="";
$house_property="";
$business="";
$total="";
//session_start();

//$_SESSION['sess_totalC'];
//$_SESSION['sess_income_house_property'];
//$_SESSION['sess_total_capital_liabilities'];
//$_SESSION['sess_total'];
//$_SESSION['sess_totalC'];
//$_SESSION['sess_income_house_property'];
//$_SESSION['sess_total_capital_liabilities'];
//$_SESSION['sess_total'];

	if(!empty($_POST['salary'])||!empty($_POST['interest_on_secuirity'])||!empty($_POST['house_property'])||!empty($_POST['agriculture'])||
	!empty($_POST['business'])||!empty($_POST['capital'])||!empty($_POST['other_source'])||!empty($_POST['shares'])||!empty($_POST['spouse'])||!empty($_POST['foreigns'])){
		$interest_on_secuirity= (int)$_POST['interest_on_secuirity'];
		$agriculture= (int)$_POST['agriculture'];
		$capital= (int)$_POST['capital'];
		$other_source= (int)$_POST['other_source'];
		$shares= (int)$_POST['shares'];
		$spouse=(int)$_POST['spouse'];
		$foreigns= (int)$_POST['foreigns'];
		$TIN=$_POST['TIN'];
		$salary=$_SESSION['sess_totalC'];//schedule 24A
		$house_property=$_SESSION['sess_income_house_property'];//schedule 24B
		$business=$_SESSION['sess_total_capital_liabilities'];//schedule 24C
		$total=(int)$salary+(int)$interest_on_secuirity+(int)$house_property+(int)$agriculture+(int)$business+(int)$capital+
		(int)$other_source+(int)$shares+(int)$spouse+(int)$foreigns;
		$_SESSION['sess_total']=$total;
		
		$conn = mysqli_connect('localhost', 'root', '','incometax');  	
		$sql = "INSERT INTO income(salary,interest_on_secuirity,house_property,agriculture,business,capital,other_source,shares,spouse,foreigns,total,TIN)
		VALUES('$salary','$interest_on_secuirity','$house_property','$agriculture','$business','$capital','$other_source','$shares','$spouse','$foreigns','$total','$TIN')";
		mysqli_query($conn, $sql);	
	}
?>
<!doctype html>
<html>
<head>
<title>Part 2 Income</title>
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
button[type=submit]{
	width:15%;
	background-color:#009;
	color:#fff;
	margin-left:480px;
	margin-top:25px;
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
<h2><center>PART 2</center></h2>
<h3><center>Particulars of Income</center></h4>
<form action="" method="POST">
<center>TIN&nbsp;&nbsp;<input name="TIN" value="<?php echo ($TIN);?>"required/></center></br>
<table><caption><b>Particulars of Total Income</b></caption>
<tr><th></th><th><input value="Amount($)"/></th></tr>
<tr><td>24. Salaries <a href="schedule24A.php">(annex schedule 24 A)</a></td><td><input name="salary" value="<?php echo ($salary);?>"/></td></tr>
<tr><td>25. Interest on securities</td><td><input name="interest_on_secuirity" value="<?php echo ($interest_on_secuirity);?>"/></td></tr>
<tr><td>26. Income from house property<a href="schedule24B.php">(annex schedule 24 B)</a></td><td><input name="house_property" value="<?php echo ($house_property);?>"/></td></tr>
<tr><td>27. Agriculture Income:</td><td><input name="agriculture" value="<?php echo ($agriculture);?>"/></td></tr>
<tr><td>28. Income from business or proffesion<a href="schedule24C.php">(annex schedule 24 C)</a></td><td><input name="business" value="<?php echo ($business);?>"/></td></tr>
<tr><td>29. Capital Gains</td><td><input name="capital" value="<?php echo ($capital);?>"/></td></tr>
<tr><td>30. Income from other sources</td><td><input name="other_source" value="<?php echo ($other_source);?>"/></td></tr>
<tr><td>31. Share Income from firm or AOP</td><td><input name="shares" value="<?php echo ($shares);?>"/></td></tr>
<tr><td>32. Income of minor or spouse</td><td><input name="spouse" value="<?php echo ($spouse);?>"/></td></tr>
<tr><td>33. Foreign Income</td><td><input name="foreigns" value="<?php echo ($foreigns);?>"/></td></tr>
<tr><td>34. Total Income</td><td><input name="other" value="<?php echo ($total);?>"/></td></tr></table>
<div><button type="submit" value=""/>Done</button></div>
<div><b><a href="tax.php">Next</a></b></div>
</form>
</div>
</body>
</html>

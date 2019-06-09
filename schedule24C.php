<?php
session_start();
$TIN="";
		$start_year="";
		$end_year="";
		$type_main_business_profession="";
		$name_business_profession="";
		$address="";
		$sales_turnover_receipts="";
		$gross_profit="";
		$general_administrative_selling_other_expenses="";
		$net_profit9="";
		$cash_hand_bank="";
		$inventories="";
		$fixed_assets="";
		$other_assests="";
		$total_assests="";
		$opening_capital="";
		$net_profit16="";
		$withdrawals="";
		$closing_capital="";
		$liabilities="";
		$total_capital_liabilities="";
//if(isset($_POST['submit'])){
	if(isset($_POST['total_capital_liabilities'])){
		$TIN=$_POST['TIN'];
		$start_year=$_POST['start_year'];
		$end_year=$_POST['end_year'];
		$type_main_business_profession=$_POST['type_main_business_profession'];
		$name_business_profession=$_POST['name_business_profession'];
		$address=$_POST['address'];
		$sales_turnover_receipts=(int)($_POST['sales_turnover_receipts']);
		$gross_profit=(int)($_POST['gross_profit']);
		$general_administrative_selling_other_expenses=(int)($_POST['general_administrative_selling_other_expenses']);
		$net_profit9=((int)$gross_profit)-((int)$general_administrative_selling_other_expenses);
		$cash_hand_bank=(int)($_POST['cash_hand_bank']);
		$inventories=(int)($_POST['inventories']);
		$fixed_assets=(int)($_POST['fixed_assets']);
		$other_assests=(int)($_POST['other_assests']);
		$total_assests=((int)$cash_hand_bank)+((int)$fixed_assets)+((int)$other_assests)+((int)$other_assests);
		$opening_capital=(int)($_POST['opening_capital']);
		$net_profit16=(int)($_POST['net_profit16']);
		$withdrawals=(int)($_POST['withdrawals']);
		$closing_capital=((int)$opening_capital)+((int)$net_profit16)+((int)$withdrawals);
		$liabilities=(int)($_POST['liabilities']);
		$total_capital_liabilities=((int)$closing_capital)+((int)$liabilities);
		//session_start();
		$_SESSION['sess_total_capital_liabilities']=$total_capital_liabilities;
		
		$conn =mysqli_connect('localhost', 'root', '','incometax');
		$sql = "INSERT INTO schudule24c(start_year,end_year,TIN,type_main_business_profession,name_business_profession,address,sales_turnover_receipts,gross_profit,
		general_administrative_selling_other_expenses,net_profit9,cash_hand_bank,inventories,fixed_assets,other_assests,total_assests,opening_capital,net_profit16,withdrawals,
		closing_capital,liabilities,total_capital_liabilities)
		VALUES('$start_year','$end_year','$TIN','$type_main_business_profession','$name_business_profession','$address','$sales_turnover_receipts','$gross_profit',
		'$general_administrative_selling_other_expenses','$net_profit9,cash_hand_bank','$inventories','$fixed_assets','$other_assests','$total_assests','$opening_capital',
		'$net_profit16','$withdrawals','$closing_capital','$liabilities','$total_capital_liabilities')";
		 mysqli_query($conn, $sql);	
	}
//}
?>

<!doctype html>
<html>
<head>
<title>24C</title>
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
<h2><center>Schedule 24C</center></h2>
<h4><center>Summary of income from business or profession</center></h4>
<h5><center>To be annexed to return by an assessee having income from business or profession</center></h5></br>
<form action="" method="POST">
01.Assesment Year &nbsp;&nbsp;<input type="date" name="start_year">&nbsp;to&nbsp;<input type="date" name="end_year"></br></br>
02.TIN&nbsp;&nbsp;<input name="TIN" value="<?php echo ($TIN);?>"required /></br></br></br>
<table><tr><td>03.Type of main business or profession </td><td><input name="type_main_business_profession" value="<?php echo ($type_main_business_profession);?>"></td></tr>
<tr><td>04.Name of the business or profession</td><td><input name="name_business_profession" value="<?php echo ($name_business_profession);?>"></td></tr>
<tr><td>05.Address</td><td><input name="address" value="<?php echo ($address);?>"></td></tr></table></br></br></br></br>

<table><caption><b>Summary of Income</b></caption>
<tr><th></th><th><input value="Amount($)"/></th></tr>
<tr><td>06.Sales/ Turnover/ Receipts </td><td><input name="sales_turnover_receipts" value="<?php echo ($sales_turnover_receipts);?>"/></td></tr>
<tr><td>07.Gross Profit </td><td><input name="gross_profit" value="<?php echo ($gross_profit);?>"/></td></tr>
<tr><td>08.General, administrative, selling and other expenses </td><td><input name="general_administrative_selling_other_expenses" value="<?php echo ($general_administrative_selling_other_expenses);?>"/></td></tr>
<tr><td>09.Net Profit </td><td><input name="net_profit9" value="<?php echo ($net_profit9);?>"/></td></tr></table></br></br></br></br>

<table><caption><b>Summary of Balance Sheet</b></caption>
<tr><th></th><th><input value="Amount($)"/></th></tr>
<tr><td>10.Cash in hand and at bank </td><td><input name="cash_hand_bank" value="<?php echo ($cash_hand_bank);?>"/></td></tr>
<tr><td>11.Inventories </td><td><input name="inventories" value="<?php echo ($inventories);?>"/></td></tr>
<tr><td>12.Fixed assets </td><td><input name="fixed_assets" value="<?php echo ($fixed_assets);?>"/></td></tr>
<tr><td>13.Other assets </td><td><input name="other_assests" value="<?php echo ($other_assests);?>"/></td></tr>
<tr><td>14.Total assets </td><td><input name="total_assests" value="<?php echo ($total_assests);?>"/></td></tr>
<tr><td>15.Opening capital  </td><td><input name="opening_capital" value="<?php echo ($opening_capital);?>"/></td></tr>
<tr><td>16.Net profit  </td><td><input name="net_profit16" value="<?php echo ($net_profit16);?>"/></td></tr>
<tr><td>17.Withdrawals in the income year  </td><td><input name="withdrawals" value="<?php echo ($withdrawals);?>"/></td></tr>
<tr><td>18.Closing capital</td><td><input name="closing_capital" value="<?php echo ($closing_capital);?>"/></td></tr>
<tr><td>19.Liabilities </td><td><input name="liabilities" value="<?php echo ($liabilities);?>"/></td></tr>
<tr><td>20.Total capital and liabilities </td><td><input name="total_capital_liabilities" value="<?php echo ($total_capital_liabilities);?>"/></td></tr></table>
<button type="submit" value=""/>Done</button>
<div><a href="income.php"><b>BACK</b></a></div>
</form>
</div>
</body>
</html>
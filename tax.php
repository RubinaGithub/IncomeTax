<?php
session_start();
$TIN="";
$rebate="";
$gross_before_rebate="";;
$net_after_rebate="";;
$minimum="";;
$net_wealth_surcharge="";;
$total_payable="";
$interest_under_ordinance="";
$deducted_or_collected="";
$advance_paid="";
$adjustment_refund="";
$amount_paid_return="";
$total_paid="";
$deficit_or_excess="";
$exempted_income="";
$_SESSION['sess_amount_tax_rebate'];
//if(isset($_POST['submit'])){
	if(isset($_POST['total_payable'])){
		$rebate=$_SESSION['sess_amount_tax_rebate'];
		$TIN=$_POST['TIN'];
		$gross_before_rebate=(int)$_POST['gross_before_rebate'];
		$net_after_rebate=(int)$_POST['net_after_rebate'];
		$minimum=(int)$_POST['minimum'];
		$net_wealth_surcharge=(int)$_POST['net_wealth_surcharge'];
		$total_payable=((int)$rebate)+((int)$gross_before_rebate)+((int)$net_after_rebate)+((int)$minimum)+((int)$net_wealth_surcharge)+((int)$rebate);
		$interest_under_ordinance=(int)$_POST['interest_under_ordinance'];
		$deducted_or_collected=(int)$_POST['deducted_or_collected'];
		$advance_paid=(int)$_POST['advance_paid'];
		$adjustment_refund=(int)$_POST['adjustment_refund'];
		$amount_paid_return=(int)$_POST['amount_paid_return'];
		$total_paid=((int)$interest_under_ordinance)+((int)$deducted_or_collected)+((int)$advance_paid)+((int)$amount_paid_return);
		$deficit_or_excess=((int)$total_payable)-((int)$total_paid);
		$exempted_income=(int)$_POST['exempted_income'];	
		$_SESSION['sess_total_payable']=$total_payable;	
		$_SESSION['sess_total_paid']=$total_paid;			
		$conn =mysqli_connect('localhost', 'root', '','incometax'); 
		$sql = "INSERT INTO tax(TIN,gross_before_rebate,rebate,net_after_rebate,minimum,net_wealth_surcharge,interest_under_ordinance,
		total_payable,deducted_or_collected,advance_paid,adjustment_refund,amount_paid_return,total_paid,deficit_or_excess,exempted_income)
		VALUES('$TIN','$gross_before_rebate','$rebate','$net_after_rebate','$minimum','$net_wealth_surcharge','$interest_under_ordinance',
		'$total_payable','$deducted_or_collected','$advance_paid','$adjustment_refund','$amount_paid_return','$total_paid','$deficit_or_excess','$exempted_income')";
		mysqli_query($conn, $sql);
	}
//}
?>
<!doctype html>
<html>
<head>
<title>Part 2 Tax</title>
<style>
.tax{
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
<div class=tax>
<h2><center>PART 2</center></h2>
<h4><center>Particulars of TAX</center></h4>
<form action="" method="POST">
<center>TIN&nbsp;&nbsp;<input name="TIN" value="<?php echo ($TIN);?>" required /></center>
<table><caption>Tax Computation and Payment</caption></br>
<tr><th></th><th><input value="Amount($)"/></th></tr>
<tr><td>35. Gross tax before tax rebate<a href="schedule24D.php">(annex schedule 24 D)</a></td><td><input name="gross_before_rebate" value="<?php echo ($gross_before_rebate);?>"/></td></tr>
<tr><td>36. Tax rebate</td><td><input name="rebate" value="<?php echo ($rebate);?>"/></td></tr>
<tr><td>37. Net tax after rebate</td><td><input name="net_after_rebate" value="<?php echo ($net_after_rebate);?>" /></td></tr>
<tr><td>38. Minimum Tax</td><td><input name="minimum" value="<?php echo ($minimum);?>"/></td></tr>
<tr><td>39. Net wealth surcharge</td><td><input name="net_wealth_surcharge" value="<?php echo ($net_wealth_surcharge);?>"/></td></tr>
<tr><td>40. Interset or any other income under ordinance</td><td><input name="interest_under_ordinance" value="<?php echo ($interest_under_ordinance);?>" /></td></tr>
<tr><td>41. Total amoun payable</td><td><input name="total_payable" value="<?php echo ($total_payable);?>" /></td></tr>
<tr><td>42. Tax deducted or collected at source</td><td><input name="deducted_or_collected" value="<?php echo ($deducted_or_collected);?>" /></td></tr>
<tr><td>43. Advanced tax name</td><td><input name="advance_paid" value="<?php echo ($advance_paid);?>"/></td></tr>
<tr><td>44. Adjusment of tax refund</td><td><input name="adjustment_refund" value="<?php echo ($adjustment_refund);?>"/></td></tr>    
<tr><td>45. Amount paid with return</td><td><input name="amount_paid_return" value="<?php echo ($amount_paid_return);?>" /></td></tr>
<tr><td>46. Total amount paid and adjusted</td><td><input name="total_paid" value="<?php echo ($total_paid);?>" /></td></tr>
<tr><td>47. Deficit or excess</td><td><input name="deficit_or_excess" value="<?php echo ($deficit_or_excess);?>"/></td></tr>
<tr><td>48. Tax exempted income</td><td><input name="exempted_income" value="<?php echo ($exempted_income);?>"/></td></tr></table>
<div><button type="submit" value=""/>Done</button></div>
<div><a href="verification.php"><b>Next</b></a></div> 
</form>
</div>
</body>
</html>
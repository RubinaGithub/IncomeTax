<?php
session_start();
$start_year="";
$end_year="";
$TIN="";
$life_insu="";
$deposit_pension="";
$approved_savings="";
$approved_debenture="";
$provnameent_fund="";
$self_employers_contribution="";
$super_annuation_fund="";
$benevolentFu_groupIn="";
$zakat_fund="";
$others="";
$total_allowable_invest_contribution="";
$rebate_14A="";
$rebate_14B="";
$rebate_14C="";
$eligible_rebate="";
$amount_tax_rebate="";

//if(isset($_Post['submit'])){
	if(isset($_POST['amount_tax_rebate'])){
		$TIN=$_POST['TIN'];
		$start_year=$_POST['start_year'];
		$end_year=$_POST['end_year'];
		$life_insu=(int)($_POST['life_insu']);
		$deposit_pension=(int)($_POST['deposit_pension']);
		$approved_savings=(int)($_POST['approved_savings']);
		$approved_debenture=(int)($_POST['approved_debenture']);
		$provnameent_fund=(int)($_POST['provnameent_fund']);
		$self_employers_contribution=(int)($_POST['self_employers_contribution']);
		$super_annuation_fund=(int)($_POST['super_annuation_fund']);
		$benevolentFu_groupIn=(int)($_POST['benevolentFu_groupIn']);
		$zakat_fund=(int)($_POST['zakat_fund']);
		$others=(int)($_POST['others']);
		$total_allowable_invest_contribution=$life_insu+$deposit_pension+$approved_debenture+$approved_savings+$provnameent_fund+$self_employers_contribution+$super_annuation_fund+$benevolentFu_groupIn+$zakat_fund+$others;
		$rebate_14A=$total_allowable_invest_contribution;
		$rebate_14B=((int)$_SESSION['sess_totalC'])*0.25;
		$rebate_14C=15000000;
		if(($rebate_14A<$rebate_14C)&&($rebate_14A<$rebate_14B)){
			$eligible_rebate=(int)$rebate_14A;
		}
		else if(($rebate_14B<$rebate_14C)&&($rebate_14B<$rebate_14A)){
			$eligible_rebate=(int)$rebate_14B;
		}
		else {
			$eligible_rebate=(int)$rebate_14C;
		}
		
		if(((int)$eligible_rebate)<1000000)
			$temp_rebate=((int)$eligible_rebate)*0.15;
		else if((((int)$eligible_rebate)>1000000) &&(((int)$eligible_rebate)<=3000000))
			$temp_rebate=(250000*0.15)+(((int)$eligible_rebate)-250000)*0.12;
		else 
			$temp_rebate=(250000*0.15)+(500000*0.12)+(((int)$eligible_rebate)-750000)*0.10;
		
		$tempSalary=$_SESSION['sess_total'];//income
		if(((int)$tempSalary)<=250000){
			$tempTax=0;
		}
		else{		
			$tempSalary=((int)$tempSalary)-250000;
			if(((int)$tempSalary)<=400000){
				$tempTax+=((int)$tempSalary)*0.10;
			}
			else{
				$tempSalary=((int)$tempSalary)-400000;
				if(((int)$tempSalary)<=500000){
					$tempTax+=((int)$tempSalary)*0.15;
				}
				else{
					$tempSalary=((int)$tempSalary)-500000;
					if(((int)$tempSalary)<=600000){
						$tempTax+=((int)$tempSalary)*0.20;
					}
					else{
						$tempSalary=((int)$tempSalary)-600000;
						if(((int)$tempSalary)<=3000000){
							$tempTax+=((int)$tempSalary)*0.25;	
						}
						else{
							$tempSalary=((int)$tempSalary)-3000000;
							if(((int)$tempSalary)<=250000){
								$tempTax+=((int)$tempSalary)*0.30;
							}
						}
					}
				}
			}
		}
		$amount_tax_rebate=((int)$tempTax)-((int)$temp_rebate);
		$_SESSION['sess_amount_tax_rebate']=$amount_tax_rebate;	
		$conn =mysqli_connect('localhost', 'root', '','incometax');
		$sql = "INSERT INTO schudule24d(start_year,end_year,TIN,life_insu,deposit_pension,approved_savings,approved_debenture,
		provident_fund,self_employers_contribution,super_annuation_fund,benevolentFu_groupIn,zakat_fund,others,total_allowable_invest_contribution,
		rebate_14A,rebate_14B,rebate_14C,eligible_rebate,amount_tax_rebate)
		VALUES('$start_year','$end_year','$TIN','$life_insu','$deposit_pension','$approved_savings',
		'$approved_debenture','provnameent_fund','$self_employers_contribution','$super_annuation_fund',
		'$benevolentFu_groupIn','$zakat_fund','$others','$total_allowable_invest_contribution','$rebate_14A',
		'$rebate_14B','$rebate_14C','$eligible_rebate','$amount_tax_rebate')";
		mysqli_query($conn, $sql);	
	}
//}
?>
<!doctype html>
<html>
<head>
<title>24D</title>
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
<h2><center>Schedule 24D</center></h2>
<h4><center>Particulars of tax credit/rebate </center></h4>
<h5><center>To be annexed to return by an assessee claiming investment tax credit </center></h5></br>
<form action="" method="POST">
01. Assesment Year &nbsp;&nbsp;<input type="date" name="start_year">&nbsp;to&nbsp;<input type="date" name="end_year"></br></br>
02. TIN&nbsp;&nbsp;<input name="TIN" value="<?php echo ($TIN);?>"required   /></br></br></br>
<table><caption><b>Particulars of rebatable investment, contribution, etc</b></caption>
<tr><th></th><th><input value="Amount($)"/></th></tr>
<tr><td>03. Life insurance premium  </td><td><input name="life_insu" value="<?php echo ($life_insu);?>"/></td></tr>
<tr><td>04. Contribution to deposit pension scheme </td><td><input name="deposit_pension" value="<?php echo ($deposit_pension);?>"/></td></tr>
<tr><td>05. Investment in approved savings certificate  </td><td><input name="approved_savings" value="<?php echo ($approved_savings);?>"/></td></tr>
<tr><td>06. Investment in approved debenture or debenture stock, Stock or Shares  </td><td><input name="approved_debenture" value="<?php echo ($approved_debenture);?>"/></td></tr>
<tr><td>07. Contribution to provident fund to which provident Fund  Act</td><td><input name="provnameent_fund" value="<?php echo ($provnameent_fund);?>"/></td></tr>
<tr><td>08. Self contribution and employer's contribution to Recognized provident Fund   </td><td><input name="self_employers_contribution" value="<?php echo ($self_employers_contribution);?>"/></td></tr>
<tr><td>09. Contribution to Super Annuation Fund   </td><td><input name="super_annuation_fund" value="<?php echo ($super_annuation_fund);?>"/></td></tr>
<tr><td>10. Contribution to Benevolent Fund and Group Insurance Premium</td><td><input name="benevolentFu_groupIn" value="<?php echo ($benevolentFu_groupIn);?>"/></td></tr>
<tr><td>11. Contribution to Zakat Fund </td><td><input name="zakat_fund" value="<?php echo ($zakat_fund);?>"/></td></tr>
<tr><td>12. Others, if any </td><td><input name="others" value="<?php echo ($others);?>"/></td></tr>
<tr><td>13. Total allowable investment, contribution etc. </td><td><input name="total_allowable_invest_contribution" value="<?php echo ($total_allowable_invest_contribution);?>"/></td></tr>
<tr><td>14. Eligible amount for rebate (the lesser of 14A, 14B or 14C) </td><td><input name="eligible_rebate" value="<?php echo ($eligible_rebate);?>"/></td></tr>
<tr><td>14A. Total allowable investment, contribution, etc.</td><td><input name="rebate_14A" value="<?php echo ($rebate_14A);?>"/></td></tr>
<tr><td>14B. 25% of the total income</td><td><input name="rebate_14B" value="<?php echo ($rebate_14B);?>"/></td></tr>
<tr><td>14C. 1.5 crore </td><td><input name="rebate_14C" value="<?php echo ($rebate_14C);?>"/></td></tr>
<tr><td>15. Amount of tax rebate calculated on eligible amount </td><td><input name="amount_tax_rebate" value="<?php echo ($amount_tax_rebate);?>"/></td></tr></table>
<div><button type="submit" value=""/>Done</button></div>
<div><a href="tax.php"><b>BACK</b></a></div>
</form>
</div>
</body>
</html>

<?php
session_start();
$TIN="";
$basic_payA="";
$special_payA="";
$arrear_payA="";
//$dearness_allowanceA="";
$house_rent_allowanceA="";
$medical_allowanceA="";
$conveyance_allowanceA="";
$festival_allowanceA="";
$allowance_support_staffA="";
$leave_allowanceA="";
$honorarium_reward_FeeA="";
$overtime_allowanceA="";
$bonus_exgratiaA="";
$other_allowanceA="";
$employer_contribution_recognized_provident_fundA="";
$interest_accrued_recognized_provident_fundA="";
$deemed_income_transport_facilityA="";
$deemed_income_free_furnished_unfurnised_accommodationA="";
$otherA="";
$totalA="";

$basic_payB="";
$special_payB="";
$arrear_payB="";
//$dearness_allowanceB="";
$house_rent_allowanceB="";
$medical_allowanceB="";
$conveyance_allowanceB="";
$festival_allowanceB="";
$allowance_support_staffB="";
$leave_allowanceB="";
$honorarium_reward_FeeB="";
$overtime_allowanceB="";
$bonus_exgratiaB="";
$other_allowanceB="";
$employer_contribution_recognized_provident_fundB="";
$interest_accrued_recognized_provident_fundB="";
$deemed_income_transport_facilityB="";
$deemed_income_free_furnished_unfurnished_accommodationB="";
$otherB="";
$totalB="";

$basic_payC="";
$special_payC="";
$arrear_payC="";
//$dearness_allowanceC="";
$house_rent_allowanceC="";
$medical_allowanceC="";
$conveyance_allowanceC="";
$festival_allowanceC="";
$allowance_support_staffC="";
$leave_allowanceC="";
$honorarium_reward_FeeC="";
$overtime_allowanceC="";
$bonus_exgratiaC="";
$other_allowanceC="";
$employer_contribution_recognized_provident_fundC="";
$interest_accrued_recognized_provident_fundC="";
$deemed_income_transport_facilityC="";
$deemed_income_free_furnished_unfurnished_accommodationC="";
$otherC="";
$totalC=""; 
if(isset($_POST['submit'])){
	if(isset($_POST['basic_payA'])){
		$start_year=$_POST['start_year'];
		$end_year=$_POST['end_year'];
		$TIN=$_POST['TIN'];
		$basic_payA=(int)($_POST['basic_payA']);
		$special_payA=(int)($_POST['special_payA']);
		$arrear_payA=(int)($_POST['arrear_payA']);
		//$dearness_allowanceA =(int)($_POST['dearness_allowanceA ']);
		$house_rent_allowanceA=(int)($_POST['house_rent_allowanceA']);
		$medical_allowanceA=(int)($_POST['medical_allowanceA']);
		$conveyance_allowanceA=(int)($_POST['conveyance_allowanceA']);
		$festival_allowanceA=(int)($_POST['festival_allowanceA']);
		$allowance_support_staffA=(int)($_POST['allowance_support_staffA']);
		$leave_allowanceA=(int)($_POST['leave_allowanceA']);
		$honorarium_reward_FeeA=(int)($_POST['honorarium_reward_FeeA']);
		$overtime_allowanceA =(int)($_POST['overtime_allowanceA']);
		$bonus_exgratiaA =(int)($_POST['bonus_exgratiaA']);
		$other_allowanceA=(int)($_POST['other_allowanceA']);
		$employer_contribution_recognized_provident_fundA=(int)($_POST['employer_contribution_recognized_provident_fundA']);
		$deemed_income_transport_facilityA=(int)($_POST['deemed_income_transport_facilityA']);
		$interest_accrued_recognized_provident_fundA=(int)($_POST['interest_accrued_recognized_provident_fundA']);
		$deemed_income_free_furnished_unfurnised_accommodationA=(int)($_POST['deemed_income_free_furnished_unfurnised_accommodationA']);
		$otherA =(int)($_POST['other_allowanceA']);
		
		$basic_payB=0;
		$special_payB=0;
		$arrear_payB=0;
		$house_rent_allowanceB=((int)basic_payA)*(0.5);
		$medical_allowanceB=36000;
		$conveyance_allowanceB=30000;
		$festival_allowanceB=0;
		$allowance_support_staffB=0;
		$leave_allowanceB=0;
		$honorarium_reward_FeeB=0;
		$overtime_allowanceB=0;
		$bonus_exgratiaB=0;
		$other_allowanceB=0;
		$employer_contribution_recognized_provident_fundB=0;
		$interest_accrued_recognized_provident_fundB=30000;
		$deemed_income_transport_facilityB=0;
		$deemedincome_free_furnished_unfurnished_accommodationB=0;
		$otherB=0;
		
		//A-B
		$basic_payC=((int)$basic_payA)-((int)$basic_payB);
		$special_payC=((int)$special_payA)-((int)special_payB);
		$arrear_payC=((int)$arrear_payA)-((int)$arrear_payB);
		//$dearness_allowanceC=((int)$dearness_allowanceA)-((int)$dearness_allowanceB);
		$house_rent_allowanceC=((int)$house_rent_allowanceA)-((int)$house_rent_allowanceB);
		if(((int)$medical_allowanceA)<((int)$medical_allowanceB))
			$medical_allowanceC=0;
		else
			$medical_allowanceC=((int)$medical_allowanceA)-((int)$medical_allowanceB);
		if(((int)$conveyance_allowanceA)<((int)$conveyance_allowanceB))
			$conveyance_allowanceC=0;
		else
			$conveyance_allowanceC=((int)conveyance_allowanceA)-((int)conveyance_allowanceB);
		$festival_allowanceC=((int)$festival_allowanceA)-((int)$festival_allowanceB);
		$allowance_support_staffC=((int)$allowance_support_staffA)-((int)$allowance_support_staffA);
		$leave_allowanceC=((int)$leave_allowanceA)-((int)$leave_allowanceB);
		$honorarium_reward_FeeC=((int)$honorarium_reward_FeeA)-((int)$honorarium_reward_FeeB);
		$overtime_allowanceC=((int)$basic_payA)-((int)$basic_payB);
		$bonus_exgratiaC=((int)$bonus_exgratiaA)-((int)$honorarium_reward_FeeB);
		$other_allowanceC=((int)$other_allowanceA)-((int)$other_allowanceB);
		$employer_contribution_recognized_provident_fundC=((int)$employer_contribution_recognized_provident_fundA)-((int)$employer_contribution_recognized_provident_fundB);
		
		if(((int)$interest_accrued_recognized_provident_fundA)<((int)$interest_accrued_recognized_provident_fundB))
			$interest_accrued_recognized_provident_fundC=0;
		else
			$interest_accrued_recognized_provident_fundC=((int)$interest_accrued_recognized_provident_fundA)<((int)$interest_accrued_recognized_provident_fundB);
		$deemed_income_transport_facilityC=((int)$deemed_income_transport_facilityA)-((int)$deemed_income_transport_facilityB);
		$deemedincome_free_furnished_unfurnished_accommodationC=((int)$deemed_income_free_furnished_unfurnised_accommodationA)-((int)$deemed_income_free_furnished_unfurnished_accommodationB);
		$otherC=((int)$otherA)-((int)$otherB);
		
		$totalA = (int)$basic_payA+(int)$special_payA+(int)$arrear_payA+(int)$house_rent_allowanceA+
		(int)$medical_allowanceA+(int)$conveyance_allowanceA+(int)$festival_allowanceA+(int)$allowance_support_staffA+(int)$leave_allowanceA+
		(int)$honorarium_reward_FeeA+(int)$overtime_allowanceA+(int)$bonus_exgratiaA+(int)$other_allowanceA+
		(int)$employer_contribution_recognized_provident_fundA+(int)$interest_accrued_recognized_provident_fundA+
		(int)$deemed_income_transport_facilityA+(int)$deemed_income_free_furnished_unfurnised_accommodationA+(int)$otherA;
		
		$totalB = (int)$basic_payB+(int)$special_payB+(int)$arrear_payB+(int)$house_rent_allowanceB+
		(int)$medical_allowanceB+(int)$conveyance_allowanceB+(int)$festival_allowanceB+(int)$allowance_support_staffB+(int)$leave_allowanceB+
		(int)$honorarium_reward_FeeB+(int)$overtime_allowanceB+(int)$bonus_exgratiaB+(int)$other_allowanceB+
		(int)$employer_contribution_recognized_provident_fundB+(int)$interest_accrued_recognized_provident_fundB+
		(int)$deemed_income_transport_facilityB+(int)$deemedincome_free_furnished_unfurnished_accommodationB+(int)$otherB;
		
		$totalC = (int)$basic_payC+(int)$special_payC+(int)$arrear_payC+(int)$house_rent_allowanceC+
		(int)$medical_allowanceC+(int)$conveyance_allowanceC+(int)$festival_allowanceC+(int)$allowance_support_staffC+(int)$leave_allowanceC+
		(int)$honorarium_reward_FeeC+(int)$overtime_allowanceC+(int)$bonus_exgratiaC+(int)$other_allowanceC+
		(int)$employer_contribution_recognized_provident_fundC+(int)$interest_accrued_recognized_provident_fundC+
		(int)$deemed_income_transport_facilityC+(int)$deemedincome_free_furnished_unfurnished_accommodationC+(int)$otherC;
		
		$_SESSION['sess_totalC']=$totalC;
		
		$conn =mysqli_connect('localhost', 'root', '','incometax') ; 		
		$sql = "INSERT INTO schedule24a(TIN,start_year,end_year,basic_payA,basic_payB ,basic_payC,special_payA,special_payB,special_payC,
arrear_payA,arrear_payB,arrear_payC,
		house_rent_allowanceA,house_rent_allowanceB,house_rent_allowanceC,medical_allowanceA,medical_allowanceB,
                        medical_allowanceC,
		conveyance_allowanceA,conveyance_allowanceB,conveyance_allowanceC,festival_allowanceA ,festival_allowanceB ,
                        festival_allowanceC,
	allowance_support_staffA,allowance_support_staffB,allowance_support_staffC,leave_allowanceA,leave_allowanceB,
                        leave_allowanceC,
honorarium_reward_FeeA,honorarium_reward_FeeB,honorarium_reward_FeeC,overtime_allowanceA,overtime_allowanceB,
                        overtime_allowanceC,
		bonus_exgratiaA,bonus_exgratiaB,bonus_exgratiaC,other_allowanceA,other_allowanceB ,other_allowanceC,	employer_contribution_recognized_provident_fundA ,employer_contribution_recognized_provident_fundB ,
                        employer_contribution_recognized_provident_fundC,
		interest_accrued_recognized_provident_fundA,interest_accrued_recognized_provident_fundB,
                        interest_accrued_recognized_provident_fundC,
		deemed_income_transport_facilityA ,deemed_income_transport_facilityB ,deemed_income_transport_facilityC ,
		deemed_income_free_furnished_unfurnised_accommodationA,deemed_income_free_furnished_unfurnished_accommodationB ,
		deemed_income_free_furnished_unfurnished_accommodationC,otherA ,otherB ,otherC ,totalA ,totalB , totalC )
		
		VALUES('$TIN','$start_year','$end_year','$basic_payA','$basic_payB','$basic_payC','$special_payA','$special_payB' ,'$special_payC',
		'$arrear_payA','$arrear_payB','$arrear_payC',
		'$house_rent_allowanceA','$house_rent_allowanceB','$house_rent_allowanceC','$medical_allowanceA','$medical_allowanceB','$medical_allowanceC',
		'$conveyance_allowanceA','$conveyance_allowanceB','$conveyance_allowanceC','$festival_allowanceA','$festival_allowanceB','$festival_allowanceC',
		'$allowance_support_staffA','$allowance_support_staffB','$allowance_support_staffC','$leave_allowanceA','$leave_allowanceB','$leave_allowanceC',
		'$honorarium_reward_FeeA','$honorarium_reward_FeeB','$honorarium_reward_FeeC','$overtime_allowanceA','$overtime_allowanceB','$overtime_allowanceC',
		'$bonus_exgratiaA','$bonus_exgratiaB','$bonus_exgratiaC','$other_allowanceA','$other_allowanceB','$other_allowanceC',
		'$employer_contribution_recognized_provident_fundA','$employer_contribution_recognized_provident_fundB',
               '$employer_contribution_recognized_provident_fundC',
		'$interest_accrued_recognized_provident_fundA','$interest_accrued_recognized_provident_fundB','$interest_accrued_recognized_provident_fundC',
		'$deemed_income_transport_facilityA','$deemed_income_transport_facilityB','$deemed_income_transport_facilityC',
		'$deemed_income_free_furnished_unfurnised_accommodationA','$deemed_income_free_furnished_unfurnished_accommodationB',
		'$deemed_income_free_furnished_unfurnished_accommodationC','$otherA','$otherB','$otherC','$totalA','$totalB','$totalC')";
		mysqli_query($conn, $sql);
		mysqli_close($conn); 
	}
	else{
		?>
		<script>alert('Fill up minimum one fields');</script>
		<?php
	}
}?>
<!doctype html>
<html>
<head>
<title>24A</title>
<style>
.income{
	width:850px;
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
	margin-left:750px;
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
<h2><center>Schedule 24A</center></h2>
<h4><center>Particulars of income from Salaries</center></h4>
<h5><center>Annex this Schedule to return of income if you have income from Salaries</center></h5></br>
<form action="" method="POST">

01.Assesment Year&nbsp;&nbsp;<input type="date" name="start_year">&nbsp;to&nbsp;<input type="date" name="end_year">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
02.TIN&nbsp;&nbsp;<input name="TIN" value="<?php echo ($TIN);?>"required/></br></br></br>

<table><tr><th></th><th><input value="Amount(A)"/></th><th><center><input value="Tax Exempted(B)"/></th><th><input value="Taxable(C=A-B)"/></th></tr>
<tr><td>03.Basic Salary</td>
<td><input name="basic_payA" value="<?php echo ($basic_payA);?>"/></td>
<td><input name="basic_payB" value="<?php echo ($basic_payB);?>"/></td>
<td><input name="basic_payC" value="<?php echo ($basic_payC);?>"/></td></tr>
<tr><td>04.Special Pay</td>
<td><input name="special_payA" value="<?php echo ($special_payA);?>"/></td>
<td><input name="special_payB" value="<?php echo ($special_payB);?>"/></td>
<td><input name="special_payC" value="<?php echo ($special_payC);?>"/></td></tr>
<tr><td>05.Arrear pay</td>
<td><input name="arrear_payA" value="<?php echo ($arrear_payA);?>"/></td>
<td><input name="arrear_payB" value="<?php echo ($arrear_payB);?>"/></td>
<td><input name="arrear_payC" value="<?php echo ($arrear_payC);?>"/></td></tr>

<tr><td>07.House rent allowance</td>
					<td><input name="house_rent_allowanceA" value="<?php echo ($house_rent_allowanceA);?>"/> </td>
					<td><input name="house_rent_allowanceB" value="<?php echo ($house_rent_allowanceA);?>"/> </td>
					<td><input name="house_rent_allowanceC" value="<?php echo ($house_rent_allowanceC);?>"/> </td></tr>
				<tr><td>08.Medical Allowance</td>
<td>					<input name="medical_allowanceA" value="<?php echo ($medical_allowanceA);?>"/> </td>
	<td>				<input name="medical_allowanceB" value="<?php echo ($medical_allowanceB);?>"/> </td>
		<td>			<input name="medical_allowanceC" value="<?php echo ($medical_allowanceC);?>"/> </td></tr>
				<tr><td>09.Conveyance allowance</td>
					<td><input name="conveyance_allowanceA" value="<?php echo ($conveyance_allowanceA);?>"/></td> 
	<td>				<input name="conveyance_allowanceB" value="<?php echo ($conveyance_allowanceB);?>"/> </td>
		<td>			<input name="conveyance_allowanceC" value="<?php echo ($conveyance_allowanceC);?>"/> </tr>
				<tr><td>10.Festival Allowance</td>
					<td><input name="festival_allowanceA" value="<?php echo ($festival_allowanceA);?>"/></td> 
	<td>				<input name="festival_allowanceB" value="<?php echo ($festival_allowanceB);?>"/> </td>
		<td>			<input name="festival_allowanceC" value="<?php echo ($festival_allowanceC);?>"/> </td></tr>
				<tr><td>11.Allowance for support staff </td>
<td>					<input name="allowance_support_staffA" value="<?php echo ($allowance_support_staffA);?>"/> </td>
	<td>				<input name="allowance_support_staffB" value="<?php echo ($allowance_support_staffB);?>"/> </td>
		<td>			<input name="allowance_support_staffC" value="<?php echo ($allowance_support_staffC);?>"/> </td></tr>
				<tr><td>12.Leave allowance </td>
					<td><input name="leave_allowanceA" value="<?php echo ($leave_allowanceA);?>"/> </td>
			<td>		<input name="leave_allowanceB" value="<?php echo ($leave_allowanceB);?>"/> </td>
				<td>	<input name="leave_allowanceC" value="<?php echo ($leave_allowanceC);?>"/> </td></tr>
				<tr><td>13.Honorarium/ Reward/Fee </td>
		<td>			<input name="honorarium_reward_FeeA" value="<?php echo ($honorarium_reward_FeeA);?>"/></td> 
			<td>		<input name="honorarium_reward_FeeB" value="<?php echo ($honorarium_reward_FeeB);?>"/> </td>
				<td>	<input name="honorarium_reward_FeeC" value="<?php echo ($honorarium_reward_FeeC);?>"/></td></tr> 
				<tr><td>14.Overtime allowance </td>
		<td>			<input name="overtime_allowanceA" value="<?php echo ($overtime_allowanceA);?>"/> </td>
			<td>		<input name="overtime_allowanceB" value="<?php echo ($overtime_allowanceB);?>"/> </td>
				<td>	<input name="overtime_allowanceC" value="<?php echo ($overtime_allowanceC);?>"/> </td></tr>
				<tr><td>15.Bonus / Ex-gratia </td>
	<td>				<input name="bonus_exgratiaA" value="<?php echo ($bonus_exgratiaA);?>"/> </td>
			<td>		<input name="bonus_exgratiaB" value="<?php echo ($bonus_exgratiaB);?>"/> </td>
				<td>	<input name="bonus_exgratiaC" value="<?php echo ($bonus_exgratiaC);?>"/> </td></tr>
				<tr><td>16.Other allowances </td>
		<td>			<input name="other_allowanceA" value="<?php echo ($other_allowanceA);?>"/> </td>
			<td>		<input name="other_allowanceB" value="<?php echo ($other_allowanceB);?>"/> </td>
				<td>	<input name="other_allowanceC" value="<?php echo ($other_allowanceC);?>"/> </td></tr>
				<tr><td>17.Employer's contribution to a recognized provident fund </td>
	<td>				<input name="employer_contribution_recognized_provident_fundA" value="<?php echo ($employer_contribution_recognized_provident_fundA);?>"/> </td>
		<td>			<input name="employer_contribution_recognized_provident_fundB" value="<?php echo ($employer_contribution_recognized_provident_fundB);?>"/> </td>
			<td>		<input name="employer_contribution_recognized_provident_fundC" value="<?php echo ($employer_contribution_recognized_provident_fundC);?>"/> </td></tr>
				<tr><td>18.Interest accrued on a recognized provnameent fund </td>
		<td>			<input name="interest_accrued_recognized_provident_fundA" value="<?php echo ($interest_accrued_recognized_provident_fundA);?>"/> </td>
			<td>		<input name="interest_accrued_recognized_provident_fundB" value="<?php echo ($interest_accrued_recognized_provident_fundB);?>"/> </td>
				<td>	<input name="interest_accrued_recognized_provident_fundC" value="<?php echo ($interest_accrued_recognized_provident_fundC);?>"/> </td></tr>
				<tr><td>19.Deemed income for transport facility </td>
		<td>			<input name="deemed_income_transport_facilityA" value="<?php echo ($deemed_income_transport_facilityA);?>"/> </td>
			<td>		<input name="deemed_income_transport_facilityB" value="<?php echo ($deemed_income_transport_facilityB);?>"/> </td>
				<td>	<input name="deemed_income_transport_facility" value="<?php echo ($deemed_income_transport_facilityC);?>"/> </td></tr>
				<tr><td>20.Deemed income for free accommodation </td>
		<td>			<input name="deemed_income_free_furnished_unfurnised_accommodationA" value="<?php echo ($deemed_income_free_furnished_unfurnised_accommodationA);?>"/> </td>
			<td>		<input name="deemed_income_free_furnished_unfurnished_accommodationB" value="<?php echo ($deemed_income_free_furnished_unfurnished_accommodationB);?>"/> </td>
				<td>	<input name="deemed_income_free_furnished_unfurnished_accommodationC" value="<?php echo ($deemed_income_free_furnished_unfurnished_accommodationC);?>"/> </td></tr>
				<tr><td>21.Other </td>
	<td>				<input name="otherA" value="<?php echo ($otherA);?>"/> </td>
		<td>			<input name="otherB" value="<?php echo ($otherB);?>"/> </td>
			<td>		<input name="otherC" value="<?php echo ($otherC);?>"/> </td></tr>
				<tr><td>22.Total</td>
			<td>		<input name="totalA" value="<?php echo ($totalA);?>"/> </td>
				<td>	<input name="totalB" value="<?php echo ($totalB);?>"/> </td>
					<td><input name="totalC" value="<?php echo ($totalC);?>"/> </td></tr>
</table>
				<div><input type="submit" name="submit" value="DONE"/></div>
				<div><a href="income.php"><b>BACK</b></a></div>
				</form>
		</div>
		</body>
	</html>
	

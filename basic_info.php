<?php
session_start();
$start_year="";
$end_year="";
		$section82BB="";
		$name= "";
		$gender=  "";
		$TIN=  "";
		$old_tin= "";
		$circle="";
		$zone= "";
		$resident_status="";
		$part10="";
		$date_of_birth=  "";
		$income_start_year=  "";
		$income_end_year= "";
		$employer_name= "";
		$spouse_name="";
		$spouse_tin="";
		$father_name="";
		$mother_name= "";
		$present_address="";
		$permanent_address=  "";
		$contact_no="" ;
		$email="";
		$nid= "";
		$bid="";
?>

<!doctype html>
<html>
<head>
<title>Basic Informations</title>
<style>
.basicInfo{
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
<div class=basicInfo>
<h2><center>RETURN OF INCOME</center></h2>
<h3><center>For an Individual Assessee</center></h3>
<caption><center>The following schedules shall be the integral part of this return and must</center></caption>
<caption><center> be annexed to return in the following cases</center></caption>
<br><table>
<tr><td></td><td>Schedule 24A </td><td></td><td>if you have income from Salaries </td></tr>
<tr><td></td><td>Schedule 24B </td><td></td><td>if you have income from house property</td></tr>
<tr><td></td><td>Schedule 24C </td><td></td><td>if you have income from business or profession </td></tr>
<tr><td></td><td>Schedule 24D </td><td></td><td>if you claim tax rebate </td></tr>
</table></br>
<h3><center>PART 1</center></h3>
<h4><center>Basic Information</center></h4>
<form action="" method="POST">
<div class="form-input">
<table>
<tr><td>1. Assesment Year</td><td><input type="date" name="start_year" required />to<input type="date" name="end_year" required/></td></tr>
<tr><td>2 .Return submitted under section 82BB?</td>
<td> <input type="radio" name="section82BB" value="Yes"checked> Yes 
<input type="radio" name="section82BB" value="NO"/> NO</td></tr>
<tr><td>3. Name of Assessee</td><td><input type="text" name="name"required/></td></tr>
<tr><td>4. Gender</td><td><input type="radio"	name="gender"  value="MALE"checked>MALE
<input type="radio" name="gender"  value="FEMALE"/>FEMALE</td></tr>
<tr><td>5. TIN</td><td><input type="text" name="TIN" required/></td></tr>
<tr><td>6. OLD TIN</td><td><input type="text" name="old_tin"/></td></tr>
<tr><td>7. Circle</td><td><input type="text" name="circle" required/></td></tr>
<tr><td>8. Zone</td><td><input type="text" name="zone" required/></td></tr>
<tr><td>9. Resident Status</td>
<td><input type="radio"  name="resident_status" value="resident"checked>Resident
<input type="radio"  name="resident_status"value="non-resident"/>Non-Resident</td></tr>
<tr><td>10. Tick One of the box(es)</td>
<td><input type="radio" name="part10 " value="a gazzetted war wounded freedom fighter"checked>a gazzeted war wounded freedom fighter </td></tr>
<tr><td></td><td><input type="radio" name="part10 " value="aged 65 years or more"/>aged 64 or more</td></tr>
<tr><td></td><td><input type="radio" name="part10 " value="A person with disability"/>A person with disability</td></tr>
<tr><td></td><td><input type="radio" name="part10 " value="A parent/legal gurdian of a person with diability">A parent/legal gurdian of a person with diability</td></tr>
<tr><td>11.Date of Birth</td><td><input type="date" name="date_of_birth"  required/></td></tr>
<tr><td>12.Income Year</td><td><input type="date" name="income_start_year " required/> to
<input type="date" name="income_end_year" required /></td></tr>
<tr><td>13.IF Employed Employees Name</td><td><input type="text" name="employer_name" /></td></tr>
<tr><td>14.Spouse Name</td><td><input type="text" name="spouse_name"  /></td></tr>
<tr><td>15.Spouse TIN</td><td><input type="text" name="spouse_tin"/></td></tr>
<tr><td>16.Father's Name</td><td><input type="text" name="father_name"required></td></tr>
<tr><td>17.Mother's Name</td><td><input type="text" name="mother_name"required/></td></tr>
<tr><td>18.Present Address</td><td><input type="text" name="present_address"required/></td></tr>
<tr><td>19.Permanent Address</td><td><input type="text" name="permanent_address"required/></td></tr>
<tr><td>20.Contact No</td><td><input type="text" name="contact_no"required/></td></tr>
<tr><td>21.Email</td><td><input type="email" name="email"required /></td></tr>						
<tr><td>22.National Identification Number</td><td><input type="text" name="nid" required/></td></tr> 
<tr><td>23.Business Identification Number</td><td><input type="text" name="bid " /></td></tr>                 
</table></div></br>
<div><input type="submit" value="Done" name="submit"/></div>
<div><a href="income.php"><b>Next</b></a></div>
</form>
</div>
</body>
</html>

<?php 
if(isset(  $_POST['submit'])){
	if(isset($_POST['TIN'])){
		$start_year=$_POST['start_year'];
		$end_year=$_POST['end_year'];
		$section82BB=$_POST['section82BB'];
		$name=  $_POST['name'];
		
		$gender=  $_POST['gender'];
		$TIN=  $_POST['TIN'];
		$old_tin=  $_POST[' old_tin'];
		$circle=  $_POST['circle'];
		$zone=  $_POST[' zone'];
		$resident_status=  $_POST['resident_status'];
		$part10=  $_POST[' part10'];
		$date_of_birth=  $_POST[' date_of_birth'];
		$income_start_year=  $_POST['income_start_year '];
		$income_end_year=  $_POST[' income_end_year'];
		$employer_name=  $_POST[' employer_name'];
		$spouse_name=  $_POST['spouse_name '];
		$spouse_tin=  $_POST['spouse_tin '];
		$father_name=  $_POST['father_name '];
		$mother_name=  $_POST[' mother_name'];
		$present_address=  $_POST[' present_address'];
		$permanent_address=  $_POST[' permanent_address'];
		$contact_no=  $_POST[' contact_no'];
		$email=  $_POST[' email'];
		$nid=  $_POST[' nid'];
		$bid=  $_POST[' bid'];

		$user_id=$_SESSION['sess_user_id'];
		$_SESSION['sess_start_year']=$start_year;
		$_SESSION['sess_end_year']=$end_year;
		$_SESSION['sess_name']=$name;
		$_SESSION['sess_tin']=$TIN;
		$_SESSION['sess_old_tin']=$old_tin;
		$_SESSION['sess_circle']=$circle;
		$_SESSION['sess_zone']=$zone;
		$_SESSION['sess_father_name']=$father_name;
$_SESSION['sess_present_address']=$present_address;
$_SESSION['sess_permanent_address']=$permanent_address;
$_SESSION['sess_bid']=$bid;

		
		$conn =mysqli_connect('localhost', 'root', '','incometax') ; 				
		$sql = "INSERT INTO basicinformation(TIN,start_year,end_year,section82BB,name,gender,old_tin,circle,zone,resident_status,part10 ,date_of_birth,income_start_year,
		income_end_year,employer_name,spouse_name,spouse_tin,father_name,mother_name,present_address,permanent_address,contact_no,email,nid,bid,user_id)
		VALUES('$TIN','$start_year','$end_year','$section82BB','$name','$gender','$old_tin','$circle','$zone','$resident_status','$part10 ','$date_of_birth','$income_start_year',
		'$income_end_year','$employer_name','$spouse_name','$spouse_tin','$father_name','$mother_name','$present_address','$permanent_address','$contact_no','$email','$nid','$bid','$user_id')";
		mysqli_query($conn, $sql);
		mysqli_close($conn); 
	}
}
?>
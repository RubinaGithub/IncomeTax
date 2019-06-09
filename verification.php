<!doctype html>
<html>
<head>
<title>Part 3</title>
<style>
.last{
	width:550px;
	margin:50px auto;
	font:Cambria, "Hoefler Text", "Liberation Serif", Times, "Times New Roman", serif;
	border-radius:10px;
	border:2px solid #ccc;
	padding:20px 40px 25px;
	margin-top:10px; 
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
<div class=last>
<form action="" method="post">
<h2><center>Instruction,Enclosures and Verification</center></h2>
<div><center>TIN&nbsp;&nbsp;<input type="text" name="TIN" required/></center></div>
<h4>1.Statement of assests,liabilities and expenses(IT10B2016)and statement of life style expense(IT10BB2016) must be furnished with the returnunless you are excempted from furnishing such statements under section 80 
2.Proof of payments of tax including advance tax and with holding tax and the proof of invesment for tax rebate must be provided alongwith  return  
3.Attach amount statements and other documents where applicable</h4>

<div>49.If you are a parent of a person with disability,has your spouse aviled the extended tax exemption thershold()tick one </br>
<input type="radio" name="part49" value="Yes"> yes
<input type="radio" name="part49" value="NO"> no</br></br>
50.Are you required to submit a statement of assets,liabilities and expenses(IT10B2016) under section 80(1)(tick one)</br>
<input type="radio" name="part50" value="Yes"> Yes
<input type="radio" name="part50" value="NO"> No</br></br>
51.Scedule annexed </br>
<input type="radio" name="schedules" value="IT10B2016">IT10B2016
<input type="radio" name="schedules" value="IT10BB2016">IT01BB2016</br></br>
52.statements annexed </br>
<input type="checkbox" name="statement" value="24A">24A
<input type="checkbox" name="statement" value="24B">24B
<input type="checkbox" name="statement" value="24C">24C
<input type="checkbox" name="statement" value="24D">24D
</div> 
<div><input type="submit" value="Submit" name="submit"/></div>
<a href="receipt.php"><b>RECEIPT</b></a></div>
</form>
</div>
</body>
</html>
<?php
session_start();
$TIN= "";
$part49= "";
		$part50="";
		$schedules= "";
		$statement="";	
if(isset($_POST['submit'])){
	
		$TIN= $_POST['TIN'];
		$part49= $_POST['part49'];
		$part50=$_POST['part50'];
		$schedules= $_POST['schedules'];
		$statement=$_POST['statement'];				
		$conn = mysqli_connect('localhost', 'root', '','incometax');  			
		$sql = "INSERT INTO verification(TIN,part49,part50,schedules,statement)
		VALUES('$TIN','$part49','$part50','$schedules','$statement')";
		mysqli_query($conn, $sql);
	
}
		
?>
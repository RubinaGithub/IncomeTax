<?php
if(isset($_POST['submit'])){
	if(!empty($_POST['name']) &&!empty($_POST['admin_id']) && !empty($_POST['NID']) && !empty($_POST['contact_no']) && !empty($_POST['email']) && !empty($_POST['passwords']) && !empty($_POST['designation'])&&!empty($_POST['gender'])){
		$name  = $_POST['name'];
		$admin_id  = $_POST['admin_id'];
		$NID   = $_POST['NID'];
		$contact_no  = $_POST['contact_no'];
		$email = $_POST['email'];
		$passwords  = $_POST['passwords'];
		$designation   = $_POST['designation'];
		$gender= $_POST['gender'];
		session_start();
		$_SESSION['sess_admin_id']=$admin_id;
		$conn  = new mysqli('localhost', 'root', '', 'incometax') ;
		$sql = "INSERT INTO admin(name,admin_id,NID,contact_no,email,passwords,designation,gender)
		VALUES('$name','$admin_id','$NID','$contact_no','$email','$passwords','$designation','$gender')";
		$result=mysqli_query($conn, $sql);
		if($result){
			?><script>alert('Your Account Created Successfully');</script><?php
		}
	}
}?>
<!doctype html>
<html>
<head>
<title>Admin Registration</title>
<style>
.admin{
	width:400px;
	margin:50px auto;
	font:Cambria, "Hoefler Text", "Liberation Serif", Times, "Times New Roman", serif;
	border-radius:10px;
	border:2px solid #ccc;
	padding:20px 40px 25px;
	margin-top:30px; 
}
input[type=text], input[type=password],input[type=email], input[type=number]{
	width:90%;
	padding:10px;
	margin-top:8px;
	border:1px solid #ccc;
	padding-left:20px;
	font-size:14px;
	font-family:Cambria, "Hoefler Text", "Liberation Serif", Times, "Times New Roman", serif; 
}
input[type=submit]{
	width:30%;
	background-color:#009;
	color:#fff;
	margin-top:8px;
	margin-left:270px;
	border:2px solid #06F;
	padding:10px;
	font-size:20px;
	cursor:pointer;
	border-radius:5px;
	margin-bottom:15px; 
}
</style>	
</head>
<body>
<div class=admin>
<h1 align="center">Admin Registration</h1>
<form action="" method="post">
<div class="form-input">
<input type="text"     name="name"        placeholder="Name"  required/>	<br>
<input type="number"   name="admin_id"    placeholder="Employ ID"required/><br>
<input type="number"   name="NID"         placeholder="NID"required/><br>
<input type="number"   name="contact_no"  placeholder="Contact No"required/><br>
<input type="email"    name="email"       placeholder="Email address"required/><br>
<input type="password" name="passwords"   placeholder="Password"required/><br>
<input type="text"     name="designation" placeholder="Designation"required/><br>
<input type="text"     name="gender"      placeholder="Gender"required/><br>
</div> 
<div><input type="submit" value="Done" name="submit"/></div>
<div><a href="login_admin.php">Login</a></div>
</form>
</div>
</body>
</html>
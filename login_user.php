<?php
	$error=''; 
	if(isset($_POST['submit'])){
		if(!empty($_POST['user_id']) && !empty($_POST['passwords'])){
			$user_id= $_POST['user_id'];
			$passwords= $_POST['passwords'];
			$conn =mysqli_connect('localhost', 'root', '', 'incometax') ; 
			$query= mysqli_query($conn, "SELECT * FROM users WHERE passwords='$passwords' AND user_id='$user_id'");
			$rows= mysqli_num_rows($query);
			if($rows != 0){
				while($row = mysqli_fetch_assoc($query)){
					$dbusername=$row['user_id'];
					$dbpassword=$row['passwords'];
				}
				if($user_id == $dbusername && $passwords == $dbpassword){
					session_start();
					$_SESSION['sess_user']=$user_id;
						header("Location:home.php");
				}
			}
			else{
				$error = "ID of Password is Incorrect";
			}
			mysqli_close($conn); 
		}
	}
 ?>
<!doctype html>
<html>
<head>
<title>Login</title>
<style>
.login{
width:400px;
length:500px;
margin:50px auto;
font:Cambria, "Hoefler Text", "Liberation Serif", Times, "Times New Roman", serif;
border-radius:10px;
border:2px solid #ccc;
padding:10px 40px 25px;
margin-top:150px; 
}
input[type=text], input[type=password]{
width:90%;
padding:10px;
margin-top:8px;
border:1px solid #ccc;
padding-left:5px;
font-size:16px;
font-family:Cambria, "Hoefler Text", "Liberation Serif", Times, "Times New Roman", serif; 
}
input[type=submit]{
width:95%;
background-color:#009;
color:#fff;
border:2px solid #06F;
padding:10px;
font-size:20px;
cursor:pointer;
border-radius:5px;
margin-bottom:15px; 
}
</style>
</head>
<body >
<div class="login">
<h1 align="center">Income Tax</h1>
<form action="" method="POST" style="text-align:center;">
<input type="text" placeholder="Enter Your ID"  name='user_id'required><br/><br/>
<input type="password" placeholder="Password" name="passwords"required><br/><br/>
<input type="submit" value="Login" name="submit">
<span><?php echo $error; ?></span>
<p>Not yet a member? <a href="users.php"><b>Sign up</b></a></p>
</form>
</div>
</body>
</html>
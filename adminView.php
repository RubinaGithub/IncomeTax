<?php 
$conn =mysqli_connect('localhost', 'root', '', 'incometax') ; 
$sql= mysqli_query($conn, "SELECT * FROM basicinformation");
//$result= mysqli_query($conn, $sql);

?>
<!DOCTYPE html>
<html>
	<head>
        <title>Admin View</title>
			<style>
				.adminView{
					width:700px;
					margin:50px auto;
					font:Cambria, "Hoefler Text", "Liberation Serif", Times, "Times New Roman", serif;
					border-radius:10px;
					border:2px solid #ccc;
					padding:20px 40px 25px;
					margin-top:30px; 
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
				table {
					font-family: arial, sans-serif;
					border-collapse: collapse;
					width: 100%;
				}
				td, th {
					border: 1px solid #dddddd;
					text-align: left;
					padding: 8px;
				}
				tr:nth-child(even) {
					background-color: #dddddd;
				}
			</style>
			</style>
		</head>
		<body>

<div class=adminView>
<form>
	Year&nbsp;&nbsp;<input type="date" name="start_year"> &nbsp; to &nbsp;<input type="date" name="end_year">
</form></br></br>

<table>
  <tr><th>Name</th><th>ID</th><th>Details</th></tr>
  <tr><td></td><td></td><td></td></tr>
  <tr><td></td><td></td><td></td></tr>
  <tr><td></td><td></td><td></td></tr>
  <tr><td></td><td></td><td></td></tr>
  <tr><td></td><td></td><td></td></tr>
  <tr><td></td><td></td><td></td></tr>
  <tr><td></td><td></td><td></td></tr>
  <tr><td></td><td></td><td></td></tr>
  <tr><td></td><td></td><td></td></tr>
  <tr><td></td><td></td><td></td></tr>
  <tr><td></td><td></td><td></td></tr>
  <tr><td></td><td></td><td></td></tr>
  <tr><td></td><td></td><td></td></tr>
  <tr><td></td><td></td><td></td></tr>
  <tr><td></td><td></td><td></td></tr>
  <tr><td></td><td></td><td></td></tr>
  <tr><td></td><td></td><td></td></tr>
  <tr><td></td><td></td><td></td></tr>
  <tr><td></td><td></td><td></td></tr>
  <tr><td></td><td></td><td></td></tr>
  <tr><td></td><td></td><td></td></tr>
  <tr><td></td><td></td><td></td></tr>
  <tr><td></td><td></td><td></td></tr>
  <tr><td></td><td></td><td></td></tr>
  <tr><td></td><td></td><td></td></tr>
  <tr><td></td><td></td><td></td></tr>
 </table>
 <div><a href="logout.php">Logout</a></div>
 </div>
</body>
</html>

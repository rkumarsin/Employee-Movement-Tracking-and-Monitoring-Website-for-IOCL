<!DOCTYPE html>

<html>

<head>

	<title>Admin panel</title>

</head>
<style>

	body {

		margin: 0px;

		border: 0px;

	}

	#header {

		width: 100%;

		height: 120px;

		background: black;

		color: white;

	}

	#mainbar {

		width: 100%;

		height: 450px;

		background: lightblue;

	}

	#admin_logo {

		height: 70px;

		border-radius: 50px;

	}
	table, tr{
		border: none;
		border-collapse: collapse;
		
	}
	th,td{
		padding: 15px;
		text-align: center;
	}
	.button{
        color: white;
        background-color: #C70039;
        box-shadow: inset 0 3px 5px rgba(0, 0, 0, .125);
        padding: 10px 12px;
        font-size: 18px;
        border-radius: 6px;
	}
	.button1 {
  background: #ededed;
  border: 1px solid #ccc;
  padding: 10px 30px;
  border-radius: 3px;
  cursor: pointer;
}

.button1:focus {
  background: #e5e5e5;
  outline: none;
  -webkit-box-shadow: inset 0px 0px 5px #c1c1c1;
     -moz-box-shadow: inset 0px 0px 5px #c1c1c1;
          box-shadow: inset 0px 0px 5px #c1c1c1;
}
	#foot {

	background-color: #000080;

	color: gray;

	text-align: center;

	font-family: Arial;

	padding: 20px;

	clear: both;

}

</style>
<body style="background-color:#EFB2F5">

<div id="header">

	<center><img src="img/adm.jpg" alt="admin_logo" id="admin_logo"><br>This is Admin Panel of IOCL. Please proceed with caution!

	</center>

	

</div>
<div>
<?php
$username=$_REQUEST["username"];
$password=$_REQUEST["password"];
if($username && $password){
$con=mysqli_connect("localhost", "root", "","iocl","3308");
$query="select * from admin where admin_username='$username' AND password='$password' ";

$result=mysqli_query($con,$query);

if($result) {
	$flag=0;
	while ($row=mysqli_fetch_array($result))
				 {
					$dbusername=$row['admin_username'];
					$dbpassword=$row['password'];
					$flag=1;
					break;
				 }
	if($flag==0)
	{
		?>
		<center><br><br><br><br><br><br><br>
		<h1 style="color:red"><b>INCORRECT USER ID OR PASSWORD!</b></h1>
		<br><br>
		<a style="font-size: 22px;" href="admin_login.php">Back to Main Menu?</a>
		<br><br><br><br>
		</center>
		<?php
	}
	else{
		?>
	<br><br>
		<center>
		<h2 style="margin-top:27px"><u>MONITOR EMPLOYEE MOVEMENT</u></h2><br>
		<form action="attendance.php" method="POST" autocomplete="off">
		<table>
		<tr>
		<td style="text-align: left;">Enter employee id:</td>
		<td><input type="text" name="id" required></td>
		</tr>
		<tr>
		<td style="text-align: left;">Enter date:</td>
		<td><input type="date" name="date1" required></td>
		</tr>
		<input type="hidden" name="username" value="<?php echo $username ?>">
        <input type="hidden" name="password" value="<?php echo $password ?>">      
		<tr>
		<td colspan="2" align="center">
		<input type="submit" name="submit" value="submit" class="button"></td>
		<tr>
		</table>
		</form><br>
		</center>
		<a href="admin_login.php"><button class="button1" style="background-color: green;border-radius: 6px;box-shadow: inset 0 3px 5px rgba(0, 0, 0, 0.50);color: white;padding: 15px 45px;text-align: center;font-size: 14px;border:none;margin: 4px 10px;float:right;margin-right:50px">log out</button></a>
		<?php
	}
}
else 
{
	echo "error";
}
}
else{
	header("location:index.php");
}
?>
</div>

<div id="foot"  style="margin-top:123px">

        Copyright &copy; www.iocl.com

</div>

</body>

</html></html>

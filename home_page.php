<!DOCTYPE html>
<head>
	<title>Indian Oil Corporation Limited</title>
    <meta charset="UTF-8">
  
	<link rel="stylesheet" type="text/css" href="1.css">
</head>
<body style="background-color: #E7BDF1 ">
     <div id="head">
         <img src="img/index.jpeg" alt="admin_logo" id="admin_logo" width="170" height="120" style="float:left;"><br>IOCL Employee Movement Tracking System

     </div> 
    <div>
        <?php
$id=$_REQUEST["id"];
$password=$_REQUEST["password"];
if($id && $password){
$con=mysqli_connect("localhost", "root", "","iocl","3308");
$query="select * from employee_record where id='$id' AND password='$password' ";

$result=mysqli_query($con,$query);

if($result) {
	$flag=0;
	while ($row=mysqli_fetch_array($result))
				 {
					$dbid=$row['id'];
					$dbpassword=$row['password'];
					$dbname=$row['name'];
					$flag=1;
					break;
				 }
	if($flag==0)
	{
		?>
                 <center><br><br><br><br><br><br><br>
		<h1 style="color:red"><b>INCORRECT USER ID OR PASSWORD!</b></h1>
		<br><br>
                <a style="font-size: 22px;" href="employee_login.php">Back to Main Menu?</a>
		<br><br><br><br>
		</center>   
                <?php
	}
	else
	{?> <style>
	table{
		border: 1px solid white;
		border-collapse: collapse;
	}
	td{
		padding: 15px;
		text-align: center;
	}
        .button{
        color: #fff;
        background-color: #008CBA;
        box-shadow: inset 0 3px 5px rgba(0, 0, 0, .125);
        padding: 10px 16px;
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
	</style>
		<center><br><br><br><h2>
		<?php
		echo "Hi $dbname";
		?>
		</h2></center>
		<?php
		$date1=date("Y/m/d");
		$query1 ="select * from record where emp_id='$id' AND date1='$date1' order by 1 desc";
		$result1=mysqli_query($con,$query1);

		if($result1) {
		$flag1=0;
		$entry = "ENTRY";
		$exit = "EXIT";
		while ($row=mysqli_fetch_array($result1))
				 {
					$dbid1=$row['id'];
					$dbemp_id=$row['emp_id'];
					$dbdate1=$row['date1'];
					$dbtimestamp1=$row['timestamp1'];
					$dbtype=$row['type'];
					$dbblock=$row['block'];
					$dboffice_room=$row['office_room'];
					if($dbtype==$entry)
					{
						$flag1 = 1;
					}
					break;
				 }
		if($flag1==0)
		{
			?>
		<center>
		<form action="update.php" method="POST">
                    <table style="border:none">
		<tr>
		<td>Select Block:</td>
		<td><select name="block">
			<option value="1st Block">1st Block</option>
			<option value="2nd Block">2nd Block</option>
			<option value="3rd Block">3rd Block</option>    
				</select>
		</td>
		</tr>
		<tr>
		<td>Select Office Room:</td>
		<td><select name="room">
				<option value="Room No 1">Room No 1</option>
				<option value="Room No 2">Room No 2</option>
				<option value="Room No 3">Room No 3</option>
			</select></td>
		</tr>
		<input type="hidden" name="emp_id" value="<?php echo $dbid ?>">
        <input type="hidden" name="type" value="<?php echo $entry ?>"> 
		<tr>
			<td colspan="2" align="center">
                            <input type="submit" name="submit" class="button" value="click here to enter room"></td>
		</tr>
		</table>
		</form><br><br>
                <a href="employee_login.php"><button class="button1" style="background-color: green;border-radius: 6px;box-shadow: inset 0 3px 5px rgba(0, 0, 0, 0.50);color: white;padding: 15px 45px;text-align: center;font-size: 14px;border:none;margin: 4px 10px;float:right;margin-right:50px">log out</button></a>
		
		</center>
		<?php
		}
		else{
			?><center>
                            <h3 style="color:darkslategrey">You are now in <?php echo "$dbblock , $dboffice_room";?></h3>
			<form action="update.php" method="POST">
                            <table style="border:none">
				<input type="hidden" name="emp_id" value="<?php echo $dbid ?>">
				<input type="hidden" name="type" value="<?php echo $exit ?>">
				<input type="hidden" name="block" value="<?php echo $dbblock ?>">
                <input type="hidden" name="room" value="<?php echo $dboffice_room ?>">
                
		<tr>
			<td colspan="2" align="center">
                            <input type="submit" name="submit" class="button" value="click here to exit room"></td>
		</tr>
		</table>
		</form>
		<br><br><br>
                <a href="employee_login.php"><button class="button1" style="background-color: green;border-radius: 6px;box-shadow: inset 0 3px 5px rgba(0, 0, 0, 0.50);color: white;padding: 15px 45px;text-align: center;font-size: 14px;border:none;margin: 4px 10px;float:right;margin-right:50px">log out</button></a>
                <br><br>	<?php
		}
	}
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
    <div id="foot" style="margin-top: 115px;">
     	Copyright &copy; www.iocl.com
     </div>
    </body>
</html>
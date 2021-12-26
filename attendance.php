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
table, th, td{
		border: 1px solid black;
		border-collapse: collapse;
	}
	th,td{
		padding: 15px;
		text-align: left;
	}
        #customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}
#customers tr:nth-child(odd){background-color: wheat;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #04AA6D;
  color: white;
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
<body style="background-color:#BAE65C ">

<div id="header">

	<center><img src="img/adm.jpg" alt="admin_logo" id="admin_logo"><br>This is Admin Panel of IOCL. Please proceed with caution!

	</center>

	

</div>
<div>
<?php
$id=$_REQUEST["id"];
$date1=$_REQUEST["date1"];
$username=$_REQUEST["username"];
$password=$_REQUEST["password"];

$time = strtotime($date1);
$date1 = date('Y/m/d',$time);

if($username && $password){
$con=mysqli_connect("localhost", "root", "","iocl","3308");
$query="select * from record where emp_id='$id' AND date1='$date1' order by 1 desc ";

$result=mysqli_query($con,$query);

if($result) {
	$flag=0;
	?>
	<center><br>
	<h2><u>Attendance Details</u></h2><br>
	<table style="width:50%" id="customers">
	<?php
	date_default_timezone_set('Asia/Calcutta'); 
	$now = date('Y-m-d H:i:s');
	$date2 = strtotime($now);
	$diff = abs($date2 - $date2);
	$exit = "EXIT";
	$entry = "ENTRY";
	echo "Current Time: $now";
	while ($row=mysqli_fetch_array($result))
				 {
					$dbid=$row['emp_id'];
					$dbdate1=$row['date1'];
					$dbtimestamp1=$row['timestamp1'];
					$dbtype=$row['type'];
					$dbblock=$row['block'];
					$dboffice_room=$row['office_room'];
					$flag+=1;
					if($dbtype == $entry && $flag == 1){
							date_default_timezone_set('Asia/Calcutta'); 
							$now = date('Y-m-d H:i:s');
							$date2 = strtotime($now);
							$date1 = strtotime($dbtimestamp1);
							$diff = abs($date2 - $date1); 
					}
					else if($dbtype == $entry && $flag>1){
						$date1 = strtotime($dbtimestamp1);
						$diff2 = abs($diff1 - $date1);  
						$diff = abs($diff + $diff2);
						
					}else if($dbtype == $exit){
						$diff1 = strtotime($dbtimestamp1);
						
					}
					if($flag==1)
					{
						?>	
						<pre><h3 style="font-size : 20px;">Employee ID: <?php echo "$dbid"?>		Attendance Date: <?php echo date('d/m/y',$time);?></h3></pre>
						<tr>
						<th>Block</th>
						<th>Office Room</th>
						<th>Type (descending)</th>
						<th>Timestamp</th>
						</tr>		
					<?php
					}
					?>
					<tr>
					<td><?php echo "$dbblock" ?></td>
					<td><?php echo "$dboffice_room" ?></td>
					<td><?php echo "$dbtype" ?></td>
					<td><?php echo "$dbtimestamp1" ?></td>
					</tr>
					<?php
				 }
				 ?>
				 </table><br><br>
				
				<h3><?php 
				$years = floor($diff / (365*60*60*24)); 
  
  
// To get the month, subtract it with years and
// divide the resultant date into
// total seconds in a month (30*60*60*24)
$months = floor(($diff - $years * 365*60*60*24)
                               / (30*60*60*24)); 
  
  
// To get the day, subtract it with years and 
// months and divide the resultant date into
// total seconds in a days (60*60*24)
$days = floor(($diff - $years * 365*60*60*24 - 
             $months*30*60*60*24)/ (60*60*24));
  
							$hours = floor(($diff - $years * 365*60*60*24 
       - $months*30*60*60*24 - $days*60*60*24)
                                   / (60*60)); 
  
  
// To get the minutes, subtract it with years,
// months, seconds and hours and divide the 
// resultant date into total seconds i.e. 60
$minutes = floor(($diff - $years * 365*60*60*24 
         - $months*30*60*60*24 - $days*60*60*24 
                          - $hours*60*60)/ 60); 
  
  
// To get the minutes, subtract it with years,
// months, seconds, hours and minutes 
$seconds = floor(($diff - $years * 365*60*60*24 
         - $months*30*60*60*24 - $days*60*60*24
                - $hours*60*60 - $minutes*60)); 
				if($flag>0){
				printf(" The employee was present in office for %d hours, "
				. "%d minutes, %d seconds", $hours, $minutes, $seconds);}
				 ?></h3>
				
				 <?php
	if($flag==0)
	{
	?><h2><?php echo "No record found for employee-id:$id on date:$date1"; }
		?></h2>
		<form action="admin_transaction.php" method="POST">
			
					<input type="hidden" name="username" value="<?php echo $username ?>">
					<input type="hidden" name="password" value="<?php echo $password ?>"> 
					<input type="submit" style="background:yellow;margin-top:16px; padding: 12px" name="submit" value="Check onether employee's attendance?">
					
				</form>
				<br><br><br><br><br>
		</center>
		<?php
	
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
<div id="foot"  style="margin-top:100px">

        Copyright &copy; www.iocl.com

</div>

</body>

</html>
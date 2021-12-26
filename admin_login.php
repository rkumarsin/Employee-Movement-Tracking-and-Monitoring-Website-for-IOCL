<!DOCTYPE html>
<head>
	<title>Indian Oil Corporation Limited</title>
    <meta charset="UTF-8">
  
	<link rel="stylesheet" type="text/css" href="1.css">
</head>
<body>
     <div id="head">
         <img src="img/index.jpeg" alt="admin_logo" id="admin_logo" width="170" height="120" style="float:left;"><br>IOCL Employee Movement Tracking System

     </div> 
     <div id="menu"> 
     	<ul>
            <li><a class="t" href="employee_login.php">Employee Login</a></li>
            <li><a class="t" href="#" style="background-color: gray;color: white;">Admin Login</a></li>
     		<li><a class="t" href="contact.php">Contact</a></li>
                <li><a class="t" href="index.php">Home</a></li>
     	</ul>
     </div>
    <div id="hero" style="background-color: #F9BB8A">
        <!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        
    
		<center><br><br><br><br>
<style>
	table{
		border: 1px solid black;
		border-collapse: collapse;
	}
	th,td{
		padding: 10px;
	}
	#admin_logo1 {
		height: 70px;
		border-radius: 50px;
	}
	.button{
        color: #fff;
        background-color: #008CBA;
        box-shadow: inset 0 3px 5px rgba(0, 0, 0, .125);
        padding: 10px 16px;
        font-size: 18px;
        border-radius: 6px;
	}
	</style>
<form action="admin_transaction.php" method="POST" autocomplete="off">
<table style="width:40%;border:none;background-color: #dddddd;height: 150px;">
<caption style="background-color: #0099cc;color:white; height: 110px;border-collapse: collapse;font-size: 20px;padding-top: 10px" ><center><img src="img/adm.jpg" alt="admin_logo" id="admin_logo1"></center>Indian Oil Corporation Limited - Admin Login</caption>
                
<tr>
<td>Enter username:</td>
<td><input type="text" name="username" required></td>
</tr>
<tr>
<td>Enter password:</td>
<td><input type="password" name="password" id="myInput" required></td>
</tr>
<tr>
<td colspan="2" style="text-align: right;">  
<input type="checkbox" onclick="myFunction()">Show Password
</td>
</tr>
<tr>
	<td colspan="2" align="center">
<input type="submit" name="submit" value="login" class="button"></td>
<tr>
</table>
</form><br>
<script>
function myFunction() {
  var x = document.getElementById("myInput");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
</script>


</center>

            
    
     
     <div id="foot" style="margin-top:187px">
     	Copyright &copy; www.iocl.com
     </div>
    </body>
</html>
     

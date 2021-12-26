<!DOCTYPE html>
<head>
	<title>Indian Oil Corporation Limited</title>
    <meta charset="UTF-8">
  
	<link rel="stylesheet" type="text/css" href="1.css">
</head>
<body style="background-color: #4BCF99">
     <div id="head">
         <img src="img/index.jpeg" alt="admin_logo" id="admin_logo" width="170" height="120" style="float:left;"><br>IOCL Employee Movement Tracking System

     </div> 
     <div id="menu"> 
     	<ul>
            <li><a class="t" href="#" style="background-color: gray;color: white;">Employee Login</a></li>
            <li><a class="t" href="admin_login.php">Admin Login</a></li>
     		<li><a class="t" href="contact.php">Contact</a></li>
                <li><a class="t" href="index.php">Home</a></li>
     	</ul>
     </div>
    <div id="hero">
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
        
    
<center>
<style>
	table{
                border: 1px solid blue;
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
	</style>
	<br><br><br><br><br>
        
        <form action="home_page.php" method="POST" autocomplete="off">
<table style="width:33%;border:none;background-color: #dddddd">
    <caption style="background-color:#0099cc;color:white; height: 40px;border-collapse: collapse;font-size: 20px;padding-top: 10px" >EMPLOYEE LOGIN</caption>
          
<tr>
<td style="text-align: left;">Enter your employee-id:</td>
<td><input type="text" name="id" required></td>
</tr>
<tr>
<td style="text-align: left;">Enter your password:</td>
<td><input type="password" name="password" id="myInput" required></td>
</tr>
<tr>
<td colspan="2" style="text-align: right;">
<input type="checkbox" onclick="myFunction()">Show Password
</td>
</tr>
<tr>
    <td colspan="2" align="center" >
        <input type="submit" name="submit" value="login" class="button"></td>
<tr>
</table>
</form>
            </div>
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

            
    
     
     <div id="foot">
     	Copyright &copy; www.iocl.com
     </div>
    </body>
</html>
     

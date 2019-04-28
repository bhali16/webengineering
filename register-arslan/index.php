<?php
include "class.php";
if($obj->loggedin()!="")
{
	$obj->url("home.php");
}
?>



<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>login and registration using oops</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<center><h1>Login and Registration System <u>Using oops concept in php</u></h1></center>
		<div id="login_container">
			<br>
			
			<center>
			<form  method="post" action="login_submit.php">
				<h2>Login Form</h2>
				<?php
				if(isset($_GET['err']))
				{
					echo "<p>Your email or password may be wrong</p>";
				}
				
				?>
				<br>
				<br>
				<input type="email"  name="e" placeholder="Enter Your email"/><br><br>
				<input type="password"  name="p" placeholder="Enter Your Password" /><br><br><br>
				<input type="submit"  name="login" value="Submit"/>
			</form>	
			</center>
			<br>
			<br>
			<br>
		</div>
		<div id="register_container">
			
			<br>
			<br>
			<center>
			<form method="post"  enctype="multipart/form-data" action="regis_submit.php">
				<h2>Registration Form</h2>
				<?php if(isset($_GET['msg']))
				{
					echo "<p>Your registration is  successfully done</>";
				}
				?>
				<br>

				<br>
				<input type="text"  name="n" placeholder="Enter Your name"/><br><br>
				<input type="email"  name="e" placeholder="Enter Your email"/><br><br>
				<input type="number"  name="nm" placeholder="Enter Your mobile number"/><br><br>
				<input type="password"  name="p" placeholder="Enter Your Password" /><br><br>
				Uploade your image&emsp;<input type="file"  name="img"  /><br><br>
				<tr><td rowspan="2">Gender</td>
            <td><input type="radio" name="r" value="Male"/>Male
                  || 
         <input type="radio" name="r" value="Female"/>Female
            </td>
            </tr>
			<label>Select list</label>
             <select name = "list">
               <option name="list" value = "one">one</option>
               <option name="list" value = "two">two</option>
               
             </select>
				<input type="submit"  name="submit" value="Submit"/>
			</form>
			</center>
			<br>
			<br>
		</div>
</body>
</html>
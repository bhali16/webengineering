<?php
include "class.php";
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">
		<link rel="stylesheet" type="text/css" href="style.css">
		<link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700" rel="stylesheet">
		<title>Registration Page</title>
	</head>
	<body>
		<header>
			<h1>Registration Page</h1>
		</header>
		<section>
			<div class="form-div">
				<h3>Register</h3>
				<p>New Account</p>
				<form id="signup-form" method="post"  enctype="multipart/form-data" action="regis_submit.php">
					<?php if(isset($_GET['msg']))
					{
					echo "<p>Your registration is  successfully done</>";
							}
						?>
						<input type="text"  name="name" placeholder="Enter Your name"/>
						<input type="email"  name="email" placeholder="Enter Your email"/>
						<input type="number"  name="mobilenumber" placeholder="Enter Your mobile number"/>
						<input type="password"  name="pass" placeholder="Enter Your Password"/>
						<label>Gender</label>

						
						<input type="radio" name="gender" value="Male"/>Male
						<input type="radio" name="gender" value="Female"/>Female<br>

						<label>Select Type</label>
						<select name = "role">
							<option name="role" value = "Student">Student</option>
							<option name="role" value = "Teacher">Teacher</option>
						</select>
						<input type="submit"  name="submit" value="Submit"/>
					</form>
				</div>
			</section>
			<footer>
				<p>Copyrights 2019</p>
			</footer>
		</body>
	</html>
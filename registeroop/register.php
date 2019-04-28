
<!DOCTYPE html>
<html>
<head>
		<link rel="stylesheet" type="text/css" href="style.css">
		<link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700" rel="stylesheet">
	<title>Registration System</title>
</head>
<body>

	<div class ="form-div">
		<h3>Register</h3>
		<p>New Account</p>
		<form action="process.php" method="post">
			
			<label for="username">Username</label>
			<input type="text" name="username" placeholder="Username" required="required">

			<label for="email">Email</label>
			<input type="email" name="email" placeholder="Email" required="required">

			<label for="email">Phone</label>
			<input type="number"  name="phonenumber" placeholder="Phone Number"/>

			<label for="pass">Password</label>
			<input type="password" name="pass" placeholder="Password" required="required">

			<label>Gender</label><br>
			<div style="display: flex">
				<input type="radio" name="gender" value="Male"/>Male
				<input type="radio" name="gender" value="Female"/>Female
			</div>
			

			<label>Account Type</label>
			<select name = "role">
				<option name="role" value = "Student">Student</option>
				<option name="role" value = "Teacher">Teacher</option>
			</select>

			<button type="submit" name="submit">Submit</button>
		</form>
	</div>

<footer>

</footer>
</body>
</html>
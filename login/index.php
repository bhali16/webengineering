<?php

	include 'includes/dbh.inc.php';
	include 'includes/register.inc.php';
	include 'includes/adduser.inc.php';

?>
<!DOCTYPE html>
<html>
<head>
	<title>Registration System</title>
</head>
<body>
	<?php 

	$users = new register();
	$users->registerUser();

	?>
	<div id="form">
		<form action="includes/register.inc.php" method="post">
			
			<label for="username">Username</label>
			<input type="text" name="username" placeholder="Username" required="required">

			<label for="email">Email</label>
			<input type="email" name="email" placeholder="Email" required="required">

			<label for="pass">Password</label>
			<input type="password" name="pass" placeholder="Password" required="required">

			<input type="submit" name="submit" value="Submit">
		</form>
	</div>
</body>
</html>
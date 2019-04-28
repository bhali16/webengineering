

<!DOCTYPE html>
<html>
<head>
		<link rel="stylesheet" type="text/css" href="style.css">
		<link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700" rel="stylesheet">
	<title>Registration System - Status</title>
</head>
<body>

	<div class ="form-div">
	
	<?php
	
	include 'dbh.php';
	$db = new db();

	if(isset($_POST['submit'])) {

		$user = $_POST['username'];
		$email = $_POST['email'];
		$phone = $_POST['phonenumber'];
		$pass = $_POST['pass'];
		$gender = $_POST['gender'];
		$role = $_POST['role'];
		$query = "INSERT INTO users (name,email,phone,password,gender,role) VALUES ('$user','$email','$phone','$pass','$gender','$role')";
	}

	$db->insert($query);

				echo '<button><a href="login.php">Login</a></button>';

	?>

	</div>

<footer>

</footer>
</body>
</html>
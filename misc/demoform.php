<!DOCTYPE html>
<html>
<head>
	<title>Form in PHP</title>
	<style>

		.form{
			margin: 30px;
			display: flex;
			justify-content: center;
			align-items: center;
		}

		input{
			width: 300px;
			display: block;
			border-radius: 15px;
			margin-bottom: 5px;
			border: 1px solid gray;
			padding: 5px;
		}

		button{
			width: 300px;
			border-radius: 15px;
			margin-bottom: 5px;
			border: 1px solid gray;
			padding: 5px;
		}
	</style>
</head>
<body>
	<div class="form">
		<form action="process_form.php" method="POST">
		<input type="text" name="username" placeholder="Name">
		<input type="email" name="useremail" placeholder="Email">
		<input type="password" name="userpass" placeholder="Password">
		<button type="submit" name="submit">Submit</button>
	</form>
	</div>
	

</body>
</html>
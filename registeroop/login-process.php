	<?php
	
	include 'dbh.php';
	$db = new db();

	if(isset($_POST['submit'])) {

		$email = $_POST['email'];
		$pass = $_POST['pass'];
		$query = "SELECT * users where (email = '$email' && password = '$pass')";

		

		if($login=$db->select($query))
	{
		echo "Loggdf";
	}else{
		echo "dljglf";
	}

		if($login->num_rows>0)
		{
				echo "Loggedin";
		}
		else
		{
				echo "No User found.";
		}

	}

	?>
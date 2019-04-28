<?php
	
	class register extends dbh
	{
		public $user;
		public $email;
		public $pass;

		public function registerUser()
		{
					$user = $_POST['username'];
					$this->email = $_POST['email'];
					$this->pass = $_POST['pass'];

			$sql = "INSERT INTO users (user_name,user_email,user_pass)".
							" VALUES ('$this->users','$this->email','$this->pass')";
			
			mysqli_query($conn, $sql);
			}
		}

		$obj = new dbh();

		extract($_POST);
		if(isset($save)){
			$obj->registerUser();
			echo "Success";
		}
		



		// protected function registerUser()
		// {
		// 	$sql = "SELECT * FROM users";
		// 	$result = $this->connect()->query($sql);
		// 	$numRows = $result->num_rows;
		// 	if ($numRows > 0) {
		// 		while ($row = $result->fetch_assoc()) {
		// 			$data[] = $row;
		// 		}
		// 		return $data;
		// 	}
		// }

?>


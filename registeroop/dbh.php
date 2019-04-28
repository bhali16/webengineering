<?php
	
	class db {
		public $servername = "localhost";
		public $username ="root";
		public $password = "";
		public $dbname = "oops_login";

		public $link;
		public $error;

		public function __construct(){
			$this->connect();
		}

		private function connect(){

			$this->link = new mysqli($this->servername, $this->username, $this->password, $this->dbname);

			if(!$this->link) {
			$this->error = "Connection Failed: " . $this->link->connect_error;
			}
		}

		public function insert($query) {
			$result  = $this->link->query($query);

			if($result) {
				
				echo "Registration Successfull";
			} else {
				echo "Registration Failed";
			}
		}

		public function select($query) {
			$result  = $this->link->query($query);

			if($result) {
				
				echo "Login Successfull";
			} else {
				echo "Login Failed";
			}
		}
	}

?>
<?php
session_start();
class user{
	
	public $host="localhost";
	public $username="root";
	public $password="";
	public $dbname="oops_login";
	public $run;
	
	
	public function __construct()
	{
		$this->run=new mysqli($this->host,$this->username,$this->password,$this->dbname);
		if(mysqli_connect_errno())
		{
			echo "database connection failed";
			exit;
		}
	}
	// regiatration function
	public function insert($data)
	{
		$name=$this->run->query($data);
		if($name)
		{
			return true;
		}
		else
		{
			return false;
		}
	}
	
	public function login($data)
	{
		$log=$this->run->query($data);
		//var_dump($log->num_rows);
		if($log->num_rows>0)
		{
			return true;
		}
		else
		{
			return false;
		}
	}
	public function profile($profile)
	{
		$ft=$this->run->query($profile);// mysql_fetch_array
		$value=$ft->fetch_object();
		//echo "<pre>";
		//print_r($value);
		$this->val[]=$value;
		return $this->val;
	}

	public function loggedin()
	{
		if(isset($_SESSION['email']))
		{
			return true;
		}
	}
	public function logout()
	{
		unset($_SESSION['email']);
		return true;
		//header("location:index.php?id=run");
	}
	public function url($url)
	{
		header("location:".$url);
	}


}
$obj=new user;


?>
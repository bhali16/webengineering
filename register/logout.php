<?php
include "class.php";



if(isset($_GET['msg']))
{
	$obj->logout();
	$obj->url("index.php");
}
	
	



?>
<?php
include "class.php";
extract($_POST);
if(isset($submit))
{
	$img=$_FILES['img']['name'];
	move_uploaded_file($_FILES['img']['tmp_name'],'image/'.$img);
	$p=password_hash($p,PASSWORD_BCRYPT);
	$inserts="insert into register values ('','$n','$e','$nm','$p','$img','$r','$list')";
	$p=password_hash($p,PASSWORD_BCRYPT);
    if($obj->insert($inserts))
	{
		$obj->url("index.php?msg=run");
	}
	else
	{
		echo "your registration is not successfull";
	}


}
?>
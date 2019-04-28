<?php 
class Database
{
	var $host="localhost";
	var $user="root";
	var $pass="";
	var $db="resturant";
	//this method is for connectivity
	public function connect()
	{
	$con=mysqli_connect($this->host,$this->user,$this->pass,$this->db); 
	return $con;
	}
	
	//create another method for save records
	//this method has three parameter one is table name and rest are data 
	
	public function saveRecords($tbName,$u,$p)
	{
	//call connectivity method first 
	$conn=$this->connect();
	
	//insert data into admin table 
	mysqli_query($conn,"insert into $tbName values('','".$u."','".$p."')");
	}
}	


//now create object of Database class

$obj=new Database();

//use extract method so no need to call $_POST again and again
extract($_POST);


//Saved Records Inside Database
if(isset($save))
{
$obj->saveRecords("admin",$userName,$Pass);
echo "Records Saved Successfully";
}


?>
<form method="post">
<table width="457" border="2" cellspacing="5" cellpadding="5">
  <tr>
    <th width="333" scope="row">Enter your user id </th>
    <td width="81"><input type="text" name="userName"/></td>
  </tr>
  <tr>
    <th scope="row">enter your password </th>
    <td><input type="text" name="Pass"/></td>
  </tr>
  
  <tr>
    <th colspan="2" scope="row">
	<input type="submit" value="save" name="save"/>
	</th>
    </tr>
</table>

</form>
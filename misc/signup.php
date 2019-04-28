<style>


	table{
		border-collapse: collapse;
	}
	table tr td{
		border: 2px solid #333;
		padding: 5px;
		width: 100px;

	}
</style>

<?php

$servername = "localhost";
$username = "root";
$password = '';
$dbname = 'data';

$con = mysqli_connect($servername, $username, $password, $dbname)
	or die('Could not connect to the database server'. mysqli_connect_error());

?>

<!DOCTYPE html>
<html>
<head>
	<title>MySQL</title>
</head>
<body>


	<h1>Welcome</h1>
	<p>Database Connected.</p>

	<?php

		$sql = "CREATE TABLE MyStudent(".
		"student_id INT NOT NULL AUTO_INCREMENT,".
		"student_name VARCHAR(100) NOT NULL,".
		"student_email VARCHAR(40) NOT NULL,".
		"PRIMARY KEY (student_id));";

		if($con->query($sql) === TRUE) {
			echo "Table MyStudent created Successfully<br>";
		} else {
			echo "Error creating table: ". $con->error. "<br>";
		}
	?>

	<?php

		$sql_Insert = "INSERT INTO MyStudent(student_name,student_email)
					VALUES ('Khan','khan@bhali.me')";

		if($con->query($sql_Insert) === TRUE) {
			echo "Record Added in MyStudent Table Successfully <br>";
		} else {
			echo "Error adding record in table: ". $con->error . "<br>";
		}
	?>
<table>
		<?php
		$sql_Select = "SELECT student_name, student_email FROM MyStudent;";
		$result = $con->query($sql_Select);

		if($result->num_rows > 0) {
			while($row = $result->fetch_assoc()){
				echo "<tr><td>Name: </td>"."<td>".$row['student_name'] ."</td></tr>";
				echo "<tr><td>Email: </td>"."<td>".$row['student_email'] ."</td></tr>";
			}
		}

	?>
</table>



</body>
</html>
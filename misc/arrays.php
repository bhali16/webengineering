<?php 
	
	$arr = array("foo" => "bar", 12 => true);
	echo "Value of foo <br/>";

	echo $arr["foo"];

	echo "<br><br> Value of 12 <br>";
	echo $arr[12];

	echo "<br><br> Print Array<br>";
	print_r($arr);


	echo "<hr>";
 
	$array = array(1,2,3,4,5);
	print_r($array);
	echo "<br><br>";
	var_dump($array);
	echo "<br><br>";

	foreach ($array as $i => $value) {
		unset($array[$i]);
	}

	$array[] = 6;
	print_r($array);
				echo "<br><br>";

		var_dump($array);


	echo "<br><br>";
	$array = array_values($array);
	$array[] = 7;

	print_r($array);
		echo "<br><br>";

	var_dump($array);

?>
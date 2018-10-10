<!DOCTYPE html>
<html>
<head>
	<title>quiz5</title>
</head>
<body>
<?php
$Firstname = array("Tayo" => "skipping", "Richard" => "cycling", "Chinazo" => "running"); //Associative arrays.

foreach ($Firstname as $t => $t_value) {
	# code...
	echo "My name is " . $t .", I love " .$t_value;
	echo "<br>";
}


?> 
</body>
</html>
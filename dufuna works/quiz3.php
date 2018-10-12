<!DOCTYPE html>
<html>
<head>
	<title>Quiz 3</title>
</head>
<body>
<?php
$s = " " ; // variable s stores the temperature for the day. Enter your desired number.
if ($s <= "20") {
	# code...
	echo "<h1> It is really cold today. </h1>";
}
elseif
 ($s >= "20" and $s < "30") {
	# code...
	echo "<h1> The weather is just perfect. </h1>";
}
elseif ($s >= "30" and $s < "40" ) {
	# code...
	echo "<h1> It is just so hot today.</h1>";
}
elseif ($s >= "40") {
	# code...
	echo "<h1> Am i in the Sahara Desert?! </h1>";

} 

?>
</body>
</html>
<!DOCTYPE html>
<html>
<head>
	<title>quiz5</title>
</head>
<body>
<?php
$Firstname = array("Tayo", "Richard", "Chinazo");
$Hobby = array("Skipping", "Gambling", "Running" );
$arrlength = count($Firstname && $Hobby);

for($x = 0; $x < $arrlength; $x++) {
    echo " My name is " . $Firstname[0] . " . " . " I love " . 
    $Hobby[0];
    echo "<br>";
    echo " My name is " . $Firstname[1] . " . " . " I love " . 
    $Hobby[1];
    echo "<br>";
    echo " My name is " . $Firstname[2] . " . " . " I love " . 
    $Hobby[2];
    echo "<br>";
}
?> 
</body>
</html>
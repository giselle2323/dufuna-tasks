<!DOCTYPE html>
<html>
<head>
	<title>quiz5</title>
</head>
<body>
<?php
$Firstname = array("Tayo", "Richard", "Chinazo");
$Hobby = array("Skipping", "Gambling", "Running" );
for ($i = 0; $i< count ($Firstname); $i++){
	
 echo " My name is " . $Firstname[$i]  . " I love " . 
    $Hobby[$i];  
    echo "<br>";
}
?> 
</body>
</html>
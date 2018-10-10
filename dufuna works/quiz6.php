<!DOCTYPE html>
<html>
<head>
	<title>Quiz 6</title>
</head>
<body>
	<?php
$k = 25; // Variables k,l,r,u declared.
$l = 78;
$r = "";
$u = "";
 function myExam() { //Function declared.
 global $k, $l, $r, $u; // Variables declared as global.
 $r = $k + $l;
 $u = $k * $l;
}
myExam();
echo "The sum of k and l is: $r";
echo "<br>";
echo "The product of a and b is: $u";
?>
</body>
</html>
<?php 
$fname = $_POST['Firstname'];
$lname = $_POST['Lastname']; 
$email = htmlspecialchars($_POST['email']);
$psw = $_POST['password'];
$cpsw = $_POST['confirm password'];
$tele = $_POST['telephone'];
$gender = $_POST['gender'];
$country = $_POST['country'];
saveToFile($fname, $lname,  $email, $psw, $cpsw, $tele, 
	$gender, $country); 
header('Location:success.html');

function saveToFile($fname, $lname, $email, $psw, $cpsw, $tele, 
	$gender, $country) {   
	$fileHandler = fopen('record.txt', 'a');   
	$string = $fname . ',' . $lname . ',' . $email. ',' . $psw . ',' . $cpsw . ',' . $tele . ',' . $gender . ',' . $country . "\n";   
	fwrite($fileHandler, $string);   
	fclose($fileHandler); 
}
function saveToDatabase($fname, $lname, $email, $psw, $cpsw, $tele, $gender, $country ) {   
$serverName = "localhost";   
$database = "registration";   
$username = "root";   
$password = "";
   //Open database connection   
$conn = mysqli_connect($serverName, $username, $password, $database);
   // Check that connection exists   
if (!$conn) {       die("Connection failed: " . mysqli_connect_error());   }     
$sql = "INSERT INTO users (Firstname, Lastname, email, password, confirm passwod, telephone, gender,country,created_date)       
VALUES ('$fname', '$lname', '$email', '$psw', '$cpsw', 
'$tele', '$gender', '$country' NOW())";   
	$result = mysqli_query($conn, $sql);
   //Check for errors   
   if (!$result) {       die("Error: " . $sql . "<br>" . mysqli_error($conn));   }   
   //Close the connection   
   mysqli_close($conn); 
}
?>
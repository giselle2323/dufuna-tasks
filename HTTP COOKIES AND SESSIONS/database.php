<?php 
$message = "";
if(isset($_POST['submit'])){ 
        $serverName = "localhost";   
        $db_name = "registration";   
        $username = "root";   
        $password = "";
 
        // connect to server and select database
        mysql_connect("$serverName", "$username", "$password")or die("cannot connect");
        mysql_select_db("$db_name")or die("cannot select database");
        //
        $email= ($_POST['email']);
        $password= ($_POST['password']);
        $sql = mysql_query("SELECT * FROM users  
        WHERE email='$email' AND 
        password='$password' 
        LIMIT 1"); 
         if(mysql_num_rows($sql) == 1){ 
        $row = mysql_fetch_assoc($sql); 
        session_start(); 
        $_SESSION['user_name'] = $row['user_name']; 
        $_SESSION['firstname'] = $row['firstname']; 
        $_SESSION['lastname'] = $row['lastname']; 
        $_SESSION['email'] = $row['email'];
        $_SESSION['telephone'] =$row['telephone'];
        $_SESSION['gender'] =$row['gender'];
        $_SESSION['country'] =$row['country'];
        $_SESSION['logged'] = TRUE; 
        
        header("Location: welcome.php"); // Modify to go to the page you would like 
        exit; 
    }
    else{ 
        header("Location: login.php"); 
        exit; 
    } 
}
else{    //If the form button wasn't submitted go to the index page, or login page 
    $message = "please enter your login credentials";     
    exit; 
} 
?> 
        

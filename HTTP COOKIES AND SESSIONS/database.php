<?php 
if(isset($_POST['submit'])){ 
        $serverName = "localhost";   
        $db_name = "registration";   
        $username = "root";   
        $password = "";
 
        // connect to server and select database
        mysql_connect("$serverName", "$username", "$password")or die("cannot connect");
        mysql_select_db("$db_name")or die("cannot select database");
        //
        $user_name= ($_POST['user_name']);
        $password= ($_POST['password']);
        $sql = mysql_query("SELECT * FROM users  
        WHERE user_name='$user_name' AND 
        password='$password' 
        LIMIT 1"); 
         if(mysql_num_rows($sql) == 1){ 
        $row = mysql_fetch_assoc($sql); 
        session_start(); 
        $_SESSION['user_name'] = $row['user_name']; 
        $_SESSION['firstname'] = $row['firstname']; 
        $_SESSION['lastname'] = $row['lastname']; 
        $_SESSION['email'] = $_row['email'];
        $_SESSION['telephone'] =$_row['telephone'];
        $_SESSION['gender'] =$_row['gender'];
        $_SESSION['country'] =$_row['country'];
        $_SESSION['logged'] = TRUE; 
        // Using cookies
        /*
        $cookie_firstname = $row['user_name'];
        $cookie_firstname =$row['firstname'];
        $cookie_email =$row['email'];
        

        //
        setcookie("user_name", $cookie_firstname, time() + (86400 + 30), "/");
        setcookie("firstname", $cookie_firstname, time() + (86400 + 30), "/");
        setcookie("lastname", $cookie_lastname, time() + (86400 + 30), "/");
        setcookie("email", $cookie_email, time() + (86400 + 30), "/"); */
        header("Location: welcome.php"); // Modify to go to the page you would like 
        exit; 
    }
    else{ 
        header("Location: login.php"); 
        exit; 
    } 
}
else{    //If the form button wasn't submitted go to the index page, or login page 
    header("Location: login.php");     
    exit; 
} 
?> 
        

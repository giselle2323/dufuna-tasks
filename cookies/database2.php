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
        // Using cookies
    
        $cookie_user_name = $row['user_name'];
        $cookie_firstname =$row['firstname'];
        $cookie_lastname =$row['lastname'];
        $cookie_email =$row['email'];
        $cookie_gender =$row['gender'];
        $cookie_telephone =$row['telephone'];
        $cookie_country =$row['country'];
        

        // setting cookies
        setcookie("user_name", $cookie_user_name, time() + (86400 + 30), "/");
        setcookie("firstname", $cookie_firstname, time() + (86400 + 30), "/");
        setcookie("lastname", $cookie_lastname, time() + (86400 + 30), "/");
        setcookie("email", $cookie_email, time() + (86400 + 30), "/");
        setcookie("country", $cookie_country, time() + (86400 + 30), "/");
        setcookie("gender", $cookie_gender, time() + (86400 + 30), "/");
        
        header("Location: welcome.php"); // Modify to go to the page you would like 
        exit; 
    }
    else{ 
        header("Location: login.php"); 
        exit; 
    } 
}
else{    //If the form button wasn't submitted go to the index page, or login page 
    $message  = "please enter your login credentials";  
    exit; 
} 
?> 
        

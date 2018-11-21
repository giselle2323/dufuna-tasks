<!DOCTYPE html>
<html>
    <head>
	    <title>user page</title>
    </head>
    <body>
    <style>
        body{
            background-color: grey;
        }
        header{
            color: green;
            text-align: center;
            font-size: 35px;
            text-decoration: underline;
        }
       a{
            text-decoration: none;
            color: #ffffff;
        }
    </style>
    <header>
        <?php 
            session_start(); 
            if(!$_SESSION['logged']){ 
                header("Location: login.php"); 
                exit; 
            } 
            echo 'Welcome to our Giselle services, '.$_SESSION['user_name'];
        ?>
    </header>
    <h2>Your details</h2>
    <li>Fullname: <?php echo $_SESSION['firstname']. " ". $_SESSION['lastname']; ?> 
    </li>
    <li>Email: <?php echo $_SESSION['email']; ?></li>
    <li>Country:<?php echo $_SESSION['country']; ?> </li>
    <li>Telephone Number:<?php echo $_SESSION['telephone']; ?> </li>
    <li>Gender:<?php echo $_SESSION['gender']; ?> </li>
    </body>
</html> 
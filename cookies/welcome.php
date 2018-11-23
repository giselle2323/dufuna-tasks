<!DOCTYPE html>
<html>
  <head>
    <title>Welcome page</title>
  </head>
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
  <body>
    <header>
      <?php 
        
        echo 'Welcome to our Giselle services, '.$_COOKIE['user_name'];
      ?>
    </header>
    <h2>Welcome <?php echo $_COOKIE['firstname']. " ". $_COOKIE['lastname']; ?> 
    </h2><a href="user.php">Readmore.......</a> 

  </body>
</html> 
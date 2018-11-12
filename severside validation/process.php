<?php
 $message = ''; 
 if (isset($_POST['submit'])) 
 {    
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];    
    $email = $_POST['email']; 
    $password = $_POST['password'];
    $confirmpassword = $_POST['confirmpassword'];    
    $telephone = $_POST['telephone'];
    $gender = $_POST['gender'];    
    $country = $_POST['country'];
    if (empty($firstname) || empty($lastname) || empty($email) || empty($password) || empty($confirmpassword) || 
    empty($telephone)|| empty($gender) || empty($country)) 
    {       
      $message = '<p class="error">All fields are required</p>';    
    }   
  } 
  if (strlen($firstname) < 3 || strlen($firstname) > 20) 
  {    
    $message .= '<p class="error">Firstname must be between 3 and 20 characters</p>'; 
  }
    if (strlen($lastname) < 3 || strlen($lastname) > 20) 
  {    
    $message .= '<p class="error">lastname must be between 3 and 20 characters</p>'; 
  }
  if ($_POST["password"]===$_POST["confirm_password"])
  {
    //success!
  }
  else
  {
    //failed:(
  }
  if (!is_numeric($telephone)) 
  {     
    $message .= '<p class="error">Phone number should be numeric</p>'; 
  }
    if (empty($message)) 
  {            
    $message = '<p class="success">All inputs are valid, thank you</p>';       
  }
?> 
<!DOCTYPE html>
  <html>
    <head>
        <title>MY form example</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="form.css">
        <style>
          .error{
            color: red;
          }
          .success{
            color: green;
          }
        </style>
    </head>
    <body>
        <div id="myform">
            <h1>  
              PLEASE SIGN UP HERE
            </h1>
            <?php echo $message; ?>
           <form method="POST" name="signupForm" action="upload.php">
                <fieldset>
                    <legend> Sign Up:</legend>
                      <label for="firstname">firstname:
                      <input type="text" name="firstname" id="fname">
                    </label>
                    <br>
                    <label for="lastname" >lastname:
                      <input type="text" name="lastname" id="lname">
                   </label>
                   <br>
                   <label for="email">Email:
                      <input type="email" name="email" id="email" >
                    </label>
                    <br>
                    <label for="password">Password:
                       <input type="password" name="password" id="password">
                    </label>
                    <br>
                    <label for="confirmpassword"> Confirm Password:
                      <input type="password" name="confirmpassword" id="password">
                    </label>
                    <br>
                    <label for="phone number"> Phone Number:
                      <input type="text" name="telephone" id="telephone">
                    </label>
                    <br>
                    <label > Gender: </label>
                    <label for="male">
                      <input type="radio" name="gender" value="male" id="male" checked> Male 
                    </label>
                    <label for="female">
                     <input type="radio" name="gender" value="female" id="female"> Female 
                    </label>
                    <br>
                    <label for="country"> Country:
                        <select name="country" id="country">
                            <option value="-1" selected> Choose one</option>
                            <option value="Nigeria">Nigeria</option>
                            <option value="South Africa">South Africa</option>
                            <option value="Kenya">Kenya</option>
                            <option value="Others">Others</option>
                        </select>   
                    </label>
                    <br>
                    <input type="submit" name="submit" value="submit">
                </fieldset>
     
            </form>
        </div>
    </body>
</html>
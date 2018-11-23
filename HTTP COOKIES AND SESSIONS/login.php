
<html>
    <head>
	    <title>Login page</title>
	    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	    <link rel="stylesheet" href="form.css">
    </head>
    <body>
        <div id="myform">
	        <h1>  
		      PLEASE ENTER YOUR LOGIN DETAILS HERE
	        </h1>
           <form method="POST" name="signinForm" action="database.php">
	            <fieldset>
		            <legend> login:</legend>
		            <label for="email" >Email:
			          <input type="email" name="email" id="email">
		           </label>
		           <br>
		           <label for="password">Password:
			          <input type="password" name="password" id="password">
		            </label>
		            <br>
		            <input type="submit" name="submit" value="login">
		        </fieldset>
		    </form>
		</div>           
    </body>
</html>
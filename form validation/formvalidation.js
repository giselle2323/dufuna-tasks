  function validateForm() {           
  
  var firstname = document.signupForm.firstname;
  if (firstname.value == "") {               
  alert("Please input your first name");               
  firstname.focus();               
  return false;           
  }
  var lastname = document.signupForm.lastname;           
  if (lastname.value == "") {               
  alert("Please input your last name");               
  lastname.focus();               
  return false;           
  }
  var email = document.forms["signupForm"]["email"];           
  if (email.value == "") {               
  	alert("Please input your email address");               
  email.focus();             
  return false; 
  }
  var password = document.signupForm.password;           
  if (password.value == "") {               
  alert("Please input your password");               
  password.focus();               
  return false;           
  }
  if (password.value.length != 11) {
       alert( "password should be exactly 11 characters.");              
        password.focus();               
       return false;
   }
  var confirmpassword = document.signupForm.confirmpassword;           
  if (confirmpassword.value == "") {               
  alert("Please input your password");               
  confirmpassword.focus();               
  return false;           
  }
  if (confirmpassword.value.length != 11) {
       alert( "password should be exactly 11 characters.");              
        confirmpassword.focus();               
	       return false;  
	   }
  function password() {
    var passoword=document.getElementById("password").value;
    var confirmpassword=document.getElementById("password").value;
    if (password!= confirmpassword){
      alert("Passwords do not match");
      return false;
    }
    return true;
    }

  var telephone = document.signupForm.telephone           
  if (telehone.value == "" || isNaN(telephone.value)) {  
  	 alert("Phone number should be numeric.");               
  	 telephone.focus();              
  	  return false;           
  	}
  if (telephone.value.length != 11) {
       alert( "Phone number should be exactly 11 digits.");              
        telephone.focus();               
       return false;
   }
    var gender = document.signupForm.gender;           
  if (gender.value == "") {               
  alert("Please input your last name");               
  gender.focus();               
  return false;           
  }
  var country = document.signupForm.country;           
  if (country.value == "-1") {               
  	alert("Please select your country");               
  	return false;           }          
  	 return true;       } 
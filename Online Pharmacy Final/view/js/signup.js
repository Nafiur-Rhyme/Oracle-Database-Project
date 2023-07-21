function validateForm() {
    

    if(document.getElementById('first_name').value==""){
        document.getElementById('first_nameError').innerHTML="This field cannot be empty";
        return false;
    }
    else if(/^[a-zA-Z]+$/.test(document.getElementById('first_name').value)==false){
        document.getElementById('first_nameError').innerHTML="First name must be letters";
        return false;
    }
    else {
        document.getElementById('first_nameError').innerHTML="";
    }

    if(document.getElementById('last_name').value==""){
        document.getElementById('last_nameError').innerHTML="This field cannot be empty";
        return false;
    }
    else if(/^[a-zA-Z]+$/.test(document.getElementById('last_name').value)==false){
        document.getElementById('last_nameError').innerHTML="Last name must be letters";
        return false;
    }
    else {
        document.getElementById('last_nameError').innerHTML="";
    }
    
    if (document.getElementById('email').value == "") {
        document.getElementById('emailError').innerHTML = "Email address cannot be empty";
        return false;
      } 

    else if (!/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(document.getElementById('email').value)) {
        document.getElementById('emailError').innerHTML = "Invalid email address";
        return false;
      }
    else {
        document.getElementById('emailError').innerHTML="";
    }
      
    if(document.getElementById('username').value==""){
        document.getElementById('usernameError').innerHTML="This field cannot be empty";
        return false;
    }

    else if(/^[a-zA-Z]+$/.test(document.getElementById('username').value)==false){
        document.getElementById('userError').innerHTML="Username must be letters";
        return false;
    }

    else {
        document.getElementById('usernameError').innerHTML="";
    }

    if (document.getElementById('mobile').value == "") {
        document.getElementById('mobileError').innerHTML = "Mobile number cannot be empty";
        return false;
    } 
    else if (!/^\d{11}$/.test(document.getElementById('mobile').value)) {
        document.getElementById('mobileError').innerHTML = "Invalid mobile number";
        return false;
    }

    else {
        document.getElementById('mobileError').innerHTML="";
    }

    if (document.getElementById('password').value == "") {
        document.getElementById('passwordError').innerHTML = "Password cannot be empty";
        return false;
    } 
    else if (document.getElementById('password').value.length < 4 || document.getElementById('password').value.length > 10) {
        document.getElementById('passwordError').innerHTML = "Password must be between 4 and 10 characters";
        return false;
    }
      
    else {
        document.getElementById('passwordError').innerHTML="";
    }

    if (document.getElementById('dob').value == "") {
        document.getElementById('dobError').innerHTML = "Date of birth cannot be empty";
        return false;
    } 
    else {
        var dob = new Date(document.getElementById('dob').value);
        var currentDate = new Date();
      
    if (dob >= currentDate) {
        document.getElementById('dobError').innerHTML = "Invalid date of birth";
        return false;
        }
    }
    
      


    if (document.getElementById('address').value == "") {
        document.getElementById('addressError').innerHTML = "Address cannot be empty";
        return false;
      }
      else {
        document.getElementById('addressError').innerHTML="";
    }     
    return true;
  } 
 
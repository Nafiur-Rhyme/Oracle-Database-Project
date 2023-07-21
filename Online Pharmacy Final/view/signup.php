<!DOCTYPE html>
<html>
  <head>
    <title>Signup Page</title>
    <script defer src="js/signup.js"></script>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
   
    <style>
    /* Add some basic styling to the page */
    
    body {
    font-family: 'Poppins', sans-serif ;
    font-weight: 900;
    color: black;
    }

    * {
    margin: 0px;
    padding-right: 2.8px;
    box-sizing: border-box;
    }

    a {
    text-decoration: none;
    cursor: pointer;
    color: black;
    }

    a:hover {
    text-decoration: underline;
    }

    
    
    label {
    font-weight: 700;
    font-size: 16px;
    display: inline-block;
    }

    input {
    width: 100%;
    padding: 10px;
    font-size: 14px;
    font-family: 'Poppins', sans-serif;
    font-weight: 300;
    display: block;
    border-radius: 5px;
    border: 1px solid black
    }
    
    /* Center the login form on the page */
    .signup-box {
    position: absolute;
    top: 65%;
    left: 50%;
    
    transform: translate(-50%, -50%);
    background-color: white;
    opacity: 0.7;
    padding: 20px;
    border-radius: 5px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
    }
    /* Style the form input fields and buttons */
    input[type=text], input[type=password] {
    width: 100%;
    padding: 5px 20px;
    margin: 0px 0;
    display: inline-block;
    border: 1px solid black;
    border-radius: 4px;
    box-sizing: border-box;
    
    }
    button {
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    width: 100%;
    }
    button:hover {
    background-color: #45a049;
    }
    /*
    img {
    border-top-right-radius: 10px;
    border-bottom-right-radius: 10px;
    border-top-left-radius: 10px;
    border-bottom-left-radius: 10px;

    }*/
    .signupimage {
    object-fit: center;

    }   
    
    
    /* Add some basic responsive design for smaller screens */
    @media screen and (max-width: 1000px) {
    .signup-box {
        width: 80%;
        
    }
    }

    p {
    text-align: center;
    color: purple;
    }

    h1 {
    text-align: center;
    }
    </style>
  </head>

<body>
    
    <div class="signupBg">
    <div class="signup-box">
        
      <h1>Signup Page</h1>
      
      <form id ="form" action="../control/signupcontrol.php" method="post" novalidate>
      <label for="first_name">First Name:</label>
      <input onchange="validateForm()" type="text" id="first_name" name="first_name" required ><br><br>
      <div id ="first_nameError"></div>

      <label for="last_name">Last Name:</label>
      <input onchange="validateForm()" type="text" id="last_name" name="last_name" required><br><br>
      <div id ="last_nameError"></div>

      <label for="email">Email:</label>
      <input onchange="validateForm()" type="text" id="email" name="email" required><br><br>
      <div id ="emailError"></div>

      <label for="username">Username:</label>
      <input onchange="validateForm()" type="text" id="username" name="username" required><br><br>
      <div id ="usernameError"></div>

      <label for="mobile">Mobile:</label>
      <input onchange="validateForm()" type="text" id="mobile" name="mobile" required ><br><br>
      <div id ="mobileError"></div>

      <label for="password">Password:</label>
      <input onchange="validateForm()" type="password" id="password" name="password" required><br><br>
      <div id ="passwordError"></div>

      <label for="dob">Date of Birth:</label>
      <input onchange="validateForm()" type="date" id="dob" name="dob" required><br><br>
      <div id ="dobError"></div>

      <fieldset class="form-group">
      <div class="row">
      <legend class="col-form-label col-sm-2 pt-0">Gender:</legend>
      <div class="col-sm-10">
        <div class="form-check">
          <input class="form-check-input" type="radio" name="gender" id="gender" value="male" >
          <label class="form-check-label" for="gender">
            Male
          </label>
        </div>
      <div class="form-check">
          <input class="form-check-input" type="radio" name="gender" id="gender" value="female">
          <label class="form-check-label" for="gender">
            Female
          </label>
      </div>
      </fieldset>
      <div id ="genderError"></div>
      
      <label for="address">Address:</label>
      
      <textarea id="address" name="address" rows="4" cols="50"></textarea><br><br>
      <div id ="addressError"></div>
      
      <input onclick= "return validateForm()" type="submit" name="submit" value="Submit">
      <p>
              Already have an account? <a href="login.php">Login</a><br>
      </p>
      <button class="btn btn-primary"><a href="home.php" class="text-light">Home</a></button>
      </form>
      </div>
      </div>
      
      
          
</body>

</html>

<?php
require("../control/logincontrol.php");
/*if(isset($_SESSION['username'])){
    header("Location: customer/dashboard.php");
}*/
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Login Page</title>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
    
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
      .login-box {
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
      padding: 12px 30px;
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
      
      img {
      border-top-right-radius: 10px;
      border-bottom-right-radius: 10px;
      border-top-left-radius: 10px;
      border-bottom-left-radius: 10px;

      }
      .loginimage {
      object-fit: center;
      }   
      
      
      @media screen and (max-width: 1000px) {
      .login-box {
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
    <div class="loginBg">
    <div class="login-box">
        
        
        <br>
        <br>
  
  </head>
  <body>
    <h1>Login Page</h1>
    <form method="post" enctype="multipart/form-data">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required><br><br>
        
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required><br><br>
        
        <input type="submit" name="submit" value="Login"><br>
        <!--<a  href="signup.php">Sign up</a>-->
        <?php if(isset($_GET['le'])){
                        echo $_GET['le'];
                    } ?>
        <p>
                Don't have an account? <a href="signup.php">Sign up</a><br>
        </p>
        <button class="btn btn-primary"><a href="home.php" class="text-light">Home</a></button>
    </form>
    </div>
    </div>
    
  </body>
</html>

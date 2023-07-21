<?php
session_start();
if(!isset($_SESSION['username'])){
    header("Location: ../login.php");
}
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Dashboard Page</title>
  </head>
  <body>
    <h1>Welcome to Online Pharmacy</h1>
    <form>
    <button class="btn btn-primary"><a href="customerprofile.php" class="text-light">Edit Profile</a></button>
    <button class="btn btn-primary"><a href="../../control/logoutcontrol.php" class="text-light">Logout</a></button>
    </form>
  </body>
</html>

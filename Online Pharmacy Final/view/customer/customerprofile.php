<?php
require("../../control/customerprofilecontrol.php");
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" >

    <title>Edit Profile</title>
    <style>
    h1 {text-align: center;}
    
    </style>
    </head>
    <body>
        <h1>Online Pharmacy</h1>


    <div class="container" my-5>
    <form method="post" action="../../control/customerupdatecontrol.php">
      <div class="form-group">
        <label>First Name</label>
        <input type="text" class="form-control" placeholder="First Name" name="firstname" autocomplete="off" value="<?php echo $row[0]; ?>">
      </div>
      
      <div class="form-group">
        <label>Last Name</label>
        <input type="text" class="form-control" placeholder="Last Name" name="lastname" autocomplete="off" value="<?php echo $row[1];?>">
      </div>

      <div class="form-group">
        <label for="email">Email:</label>
        <input type="text" class="form-control" placeholder="email" name="email" autocomplete="off" value="<?php echo $row[2];?>">
      </div>
      <div class="form-group">
        <label for="username">Username:</label>
        <input type="text" class="form-control" placeholder="username" name="username" autocomplete="off" readonly value="<?php echo $row[3];?>">
      </div>

      <div class="form-group">
        <label for="mobile">Mobile:</label>
        <input type="text" class="form-control" placeholder="mobile" name="mobile" autocomplete="off"  value="<?php echo $row[4];?>">
      </div>

      <div class="form-group">
        <label for="password">Password:</label>
        <input  type="text" placeholder="password" name="password" autocomplete="off"value="<?php echo $row[5];?>">
      </div>

      <div class="form-group">
        <label for="dob">Date of Birth:</label>
        <input  type="date" class="form-control" placeholder="dob" id="dob" name="dob" autocomplete="off" value="<?php echo date('Y-m-d', strtotime($row[6]))?>">
      </div>

      <fieldset class="form-group">
      <div class="row">
      <legend class="col-form-label col-sm-2 pt-0">Gender:</legend>
      <div class="col-sm-10">
        <div class="form-check">
          <input class="form-check-input" type="radio" name="gender" id="gender" <?=$row[7]=="male" ? "checked" : "";?> value="male" >
          <label class="form-check-label" for="gender">
            Male
          </label>
        </div>
      <div class="form-check">
          <input class="form-check-input" type="radio" name="gender" id="gender" <?=$row[7]=="female" ? "checked" : "";?> value="female">
          <label class="form-check-label" for="gender">
            Female
          </label>
      </div>
      </fieldset>

      <div class="form-group">
        <label for="address">Address:</label>
        <textarea placeholder="address" class="form-control" name="address" rows="4" cols="50"><?php echo $row[8];?></textarea>
      </div>
      <button class="btn btn-primary"><a href="dashboard.php" class="text-light">Back</a></button>
      <input class="btn btn-primary" type="submit" name="submit" value="save">
    </form>
    </div>
    
    </body>
</html>
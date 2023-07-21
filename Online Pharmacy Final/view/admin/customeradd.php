<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" >

    <title>Online Pharmacy</title>
    <style>
    h1 {text-align: center;}
    
    </style>
    </head>
    <body>
        <h1>Online Pharmacy</h1>


    <div class="container" my-5>
    <form method="post" action="../../control/customeraddcontrol.php">
      <div class="form-group">
        <label>First Name</label>
        <input type="text" class="form-control" placeholder="First Name" name="first_name" autocomplete="off" >
      </div>
      
      <div class="form-group">
        <label>Last Name</label>
        <input type="text" class="form-control" placeholder="Last Name" name="last_name" autocomplete="off">
      </div>

      <div class="form-group">
        <label for="email">Email:</label>
        <input type="text" class="form-control" placeholder="email" name="email" autocomplete="off" >
      </div>
      <div class="form-group">
        <label for="username">Username:</label>
        <input type="text" class="form-control" placeholder="username" name="username" autocomplete="off" >
      </div>

      <div class="form-group">
        <label for="mobile">Mobile:</label>
        <input type="text" class="form-control" placeholder="mobile" name="mobile" autocomplete="off"  >
      </div>

      <div class="form-group">
        <label for="password">Password:</label>
        <input  type="password" placeholder="password" name="password" autocomplete="off">
      </div>

      <div class="form-group">
        <label for="dob">Date of Birth:</label>
        <input  type="date" class="form-control" placeholder="dob" name="dob" autocomplete="off">
      </div>

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

      <div class="form-group">
        <label for="address">Address:</label>
        <textarea placeholder="address" class="form-control" name="address" rows="4" cols="50"></textarea>
      </div>
      <button class="btn btn-primary"><a href="customerlist.php" class="text-light">Back</a></button>
      <input type="submit" class="btn btn-primary" name="submit" value="Submit">
     
    </form>
    </div>
    
    </body>
</html>
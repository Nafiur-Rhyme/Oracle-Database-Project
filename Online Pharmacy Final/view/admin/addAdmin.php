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
    <form method="post" action="../../control/addadmincontrol.php">
    
    
    <div class="form-group">
    <label>First Name</label>
    <input type="text" class="form-control" placeholder="First Name" name="first_name" autocomplete="off">
    </div>
    <div class="form-group">
    <label>Last Name</label>
    <input type="text" class="form-control" placeholder="Last Name" name="last_name" autocomplete="off">
    </div>

    

      <div class="form-group">
      <label for="password">Password:</label>
      <input  type="password" placeholder="password" name="password" autocomplete="off">
      </div>
    
      <button class="btn btn-primary"><a href="admindisplay.php" class="text-light">Back</a></button>
      <input type="submit" class="btn btn-primary" name="submit" value="Submit">
     
    </form>
    </div>
    
    </body>
</html>
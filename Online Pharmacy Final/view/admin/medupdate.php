<?php
require("../../control/medprofilecontrol.php");
?>
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
    <form method="post" action="../../control/medupdatecontrol.php">
    
    <div class="form-group">
    <label>Medicine ID</label>
    <input type="text" class="form-control" placeholder="med_id" name="med_id" autocomplete="off" value="<?php echo $row[0]; ?>" readonly>
    </div>
    
    <div class="form-group">
    <label>Name</label>
    <input type="text" class="form-control" placeholder="name" name="name" autocomplete="off" value="<?php echo $row[1]; ?>">
    </div>

    <div class="form-group">
    <label for="company">company:</label>
      <input type="text" class="form-control" placeholder="company" name="company" autocomplete="off" value="<?php echo $row[2]; ?>">
      
      <div class="form-group">
      <label for="price">price:</label>
      <input type="text" class="form-control" placeholder="price" name="price" autocomplete="off" value="<?php echo $row[3]; ?>">
      </div>

      <div class="form-group">
      <label for="description">description:</label>
      <input type="text" class="form-control" placeholder="description" name="description" autocomplete="off"  value="<?php echo $row[4]; ?>">
      </div>

      <div class="form-group">
      <label for="quantity_in_stock">Quantity In Stock:</label>
      <input type="text" class="form-control" placeholder="quantity_in_stock" name="quantity_in_stock" autocomplete="off"  value="<?php echo $row[5]; ?>">
      </div>

      <div class="form-group">
      <label for="reorder">Reorder:</label>
      <input type="text" class="form-control" placeholder="reorder" name="reorder" autocomplete="off"  value="<?php echo $row[6]; ?>">
      </div>

      
      <button class="btn btn-primary"><a href="medicinelist.php" class="text-light">Back</a></button>
      <input class="btn btn-primary" type="submit" name="submit" value="save">
    
    </form>
    </div>
    
    </body>
</html>
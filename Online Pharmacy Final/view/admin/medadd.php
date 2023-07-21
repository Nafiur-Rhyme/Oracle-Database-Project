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
    <form method="post" action="../../control/medaddcontrol.php">
    
    
      <div class="form-group">
      <label>Name</label>
      <input type="text" class="form-control" placeholder="name" name="med_name" autocomplete="off" >
      </div>

      <div class="form-group">
      <label for="company">Company:</label>
      <input type="text" class="form-control" placeholder="company" name="company" autocomplete="off" >
      
      <div class="form-group">
      <label for="price">Price:</label>
      <input type="text" class="form-control" placeholder="price" name="price" autocomplete="off" >
      </div>

      <div class="form-group">
      <label for="description">Description:</label>
      <input type="text" class="form-control" placeholder="description" name="description" autocomplete="off" >
      </div>

      <div class="form-group">
      <label for="quantity_in_stock">Quantity In Stock:</label>
      <input type="text" class="form-control" placeholder="quantity_in_stock" name="quantity_in_stock" autocomplete="off" >
      </div>

      <div class="form-group">
      <label for="reorder">Reorder:</label>
      <input type="text" class="form-control" placeholder="reorder" name="reorder" autocomplete="off" >
      </div>

      
      <button class="btn btn-primary"><a href="medicinelist.php" class="text-light">Back</a></button>
      <input type="submit" class="btn btn-primary" name="submit" value="Submit">
     
    </form>
    </div>
    
    </body>
</html>
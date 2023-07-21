<?php
require("../../control/medicinedisplaycontrol.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" >
</head>
<body>
<div class="container">
<button class="btn btn-primary my-5"> <a href="medadd.php" class="text-light">Add Medicine</a></button>
<table class="table">
  <thead>
    <tr>
      <th scope="col">Medicine ID</th>
      <th scope="col">Name</th>
      <th scope="col">Company</th>
      <th scope="col">Price</th>
      <th scope="col">Description</th>
      <th scope="col">Quantity In Stock</th>
      <th scope="col">Reorder</th>

    </tr>
  </thead>
  <tbody>

  <tr>
<?php
  if(oci_execute($display)){
    while($row=oci_fetch_array($display, OCI_NUM)){
?>
      <td><?php echo $row[0]; ?></td>
      <td><?php echo $row[1]; ?></td>
      <td><?php echo $row[2]; ?></td>
      <td><?php echo $row[3]; ?></td>
      <td><?php echo $row[4]; ?></td>
      <td><?php echo $row[5]; ?></td>
      <td><?php echo $row[6]; ?></td>
      <td><a href="medupdate.php?usr=<?php echo $row[0]; ?>" class="btn btn-primary">Edit</a></td>
      <td><a href="../../control/deletecustomercontrol.php?usr=<?php echo $row[3]; ?>" class="btn btn-danger">Delete</a></td>
</tr>
<?php 
    }
  } 
?>
<td>
<button class="btn btn-primary"><a href="adminpanel.php" class="text-light">Back</a></button>

</td>
  </tbody>
</table>
</div>
</body>
</html>
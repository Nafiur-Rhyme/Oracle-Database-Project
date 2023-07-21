<?php
require("../../control/orderdisplaycontrol.php");
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

<table class="table my-5">
  <thead>
    <tr>
      <th scope="col">Order ID</th>
      <th scope="col">Medicine ID</th>
      <th scope="col">Username</th>
      <th scope="col">Order Date</th>
      <th scope="col">Quantity</th>
      <th scope="col">Total Cost</th>

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
      <td><a href="../customer/customerprofile.php?usr=<?php echo $row[3]; ?>" class="btn btn-primary">Edit</a></td>
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
<?php
session_start();
//"C:/xampp/htdocs/Online Pharmacy 19c/Online Pharmacy 19c/model/db.php");
require("../model/db.php");

$updateError = '';

if(isset($_POST['submit'])){
    $mydb = new db();
    $conobj = $mydb->openConn();
    $updateMedicine = $mydb->updateMedicince(
        $conobj,
        "MEDICINES",
        $_POST['med_id'],
        $_POST['name'],
        $_POST['company'],
        $_POST['price'],
        $_POST['description'],
        $_POST['quantity_in_stock'],
        $_POST['reorder']
        );
    if(oci_execute($updateMedicine)){
        header("Location: ../view/admin/medicinelist.php");
    }
    else{
        $updateError = "Could not update";
    }
}


?>
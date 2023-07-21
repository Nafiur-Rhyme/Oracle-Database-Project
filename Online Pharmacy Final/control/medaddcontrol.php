<?php
session_start();
include("../model/db.php");
$signupError="";
if(isset($_POST["submit"])){
    $mydb = new db();
    $conobj = $mydb->openConn();
    $signup = $mydb->addNewMedicine($conobj, "MEDICINES", $_POST['med_name'],$_POST['company'],$_POST['price'],
                                    $_POST['description'],$_POST['quantity_in_stock'],$_POST['reorder']);
    
    $result = oci_execute($signup);
    if($result){
        header("Location: ../view/admin/medicinelist.php");
    }
    else{
        $e = oci_error($signup);
        $registerError = htmlentities($e['message'], ENT_QUOTES);
    }
}

?>

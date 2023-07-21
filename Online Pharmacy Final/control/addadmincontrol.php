<?php
session_start();
include("../model/db.php");
$signupError="";
if(isset($_POST["submit"])){
    $mydb = new db();
    $conobj = $mydb->openConn();
    $signup = $mydb->addNewAdmin($conobj, "ADMIN", $_POST['first_name'],$_POST['last_name'],$_POST['password'],
                                    $_POST['description'],$_POST['quantity_in_stock'],$_POST['reorder']);
    
    $result = oci_execute($signup);
    if($result){
        header("Location: ../view/admin/admindisplay.php");
    }
    else{
        $e = oci_error($signup);
        $registerError = htmlentities($e['message'], ENT_QUOTES);
    }
}

?>
<?php
session_start();
include("../model/db.php");
$signupError="";
$date = strtotime($_POST['dob']);
$address = $_POST['address'];
if(isset($_POST["submit"])){
    $mydb = new db();
    $conobj = $mydb->openConn();
    $signup = $mydb->addNewCustomer($conobj, "CUSTOMER", $_POST['first_name'],$_POST['last_name'],$_POST['email'],$_POST['username'], $_POST['mobile'], $_POST['password'], date('d-M-y', $date), $_POST['gender'], $address);
    
    $result = oci_execute($signup);
    if($result){
        header("Location: ../view/login.php");
    }
    else{
        $e = oci_error($signup);
        $registerError = htmlentities($e['message'], ENT_QUOTES);
    }
}

?>

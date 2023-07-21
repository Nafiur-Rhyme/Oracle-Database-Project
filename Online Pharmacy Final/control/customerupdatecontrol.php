<?php
session_start();
//"C:/xampp/htdocs/Online Pharmacy 19c/Online Pharmacy 19c/model/db.php");
require("../model/db.php");

if(!isset($_SESSION['username'])){
    header("Location: ../login.php");
}
$date = strtotime($_POST['dob']);
$updateError = '';
//$username = $_SESSION['username'];

if(isset($_POST['submit'])){
    $mydb = new db();
    $conobj = $mydb->openConn();
    $updateCustomer = $mydb->updateCustomer(
        $conobj,
        "CUSTOMER",
        $_POST['firstname'],
        $_POST['lastname'],
        $_POST['email'],
        $_POST['username'],
        $_POST['mobile'],
        $_POST['password'],
        date('d-M-y', $date),
        $_POST['gender'],
        $_POST['address']
        );
    if(oci_execute($updateCustomer)){
        if($_SESSION['username']!=$_POST['username']){
            header("Location: ../view/admin/customerlist.php");
        }
        else{
        header("Location: ../view/customer/dashboard.php");
        }
    }
    else{
        $registerError = "Could not update";
    }
}


?>
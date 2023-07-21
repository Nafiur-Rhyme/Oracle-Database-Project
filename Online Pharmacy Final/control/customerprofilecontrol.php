<?php
session_start();
//"C:/xampp/htdocs/Online Pharmacy 19c/Online Pharmacy 19c/model/db.php");
require("../../model/db.php");
$updateError = '';
if(!isset($_SESSION['username'])){
    header("Location: ../login.php");
}
if(isset($_GET['usr'])){
    $username = $_GET['usr'];
}
else{
    $username = $_SESSION['username'];
}

$mydb = new db();
$conobj = $mydb->openConn();
$user = $mydb->getCustomerbyUsername($conobj, "customer", $username);

if(oci_execute($user)){
   $row=oci_fetch_array($user, OCI_NUM);
}

?>
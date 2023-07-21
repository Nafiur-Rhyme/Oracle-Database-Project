<?php
session_start();
//"C:/xampp/htdocs/Online Pharmacy 19c/Online Pharmacy 19c/model/db.php");
require("../model/db.php");

if(!isset($_SESSION['username'])){
    header("Location: ../login.php");
}
$username = $_GET['usr'];
$mydb = new db();
$conobj = $mydb->openConn();
$delete = $mydb->deleteCustomer($conobj, 'customer', $username);
oci_execute($delete);
header("Location: ../view/admin/customerlist.php");

?>
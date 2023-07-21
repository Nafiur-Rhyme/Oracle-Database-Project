<?php
session_start();
//"C:/xampp/htdocs/Online Pharmacy 19c/Online Pharmacy 19c/model/db.php");
require("../../model/db.php");

if(!isset($_SESSION['username'])){
    header("Location: ../login.php");
}

$mydb = new db();
$conobj = $mydb->openConn();
$display = $mydb->showAllMedicine($conobj);

?>
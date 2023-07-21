<?php
session_start();
include("../model/db.php");

$loginError="";

if(isset($_POST["submit"])){
    $mydb = new db();
    $conobj = $mydb->openConn();
    
    $loginCustomer = $mydb->customerLogin($conobj, "CUSTOMER", $_POST["username"], $_POST["password"]);
    $loginAdmin = $mydb->adminLogin($conobj, "ADMIN", $_POST["username"], $_POST["password"]);
    
    //$loginUser = oci_parse($conn, "select * from CUSTOMER where USERNAME = '".$_POST["username"]."'");
    //$loginUser = oci_parse($conn, "SELECT * FROM CUSTOMER WHERE username='".$_POST["username"]."'");
    
    if(oci_execute($loginAdmin)){
        while(($row=oci_fetch_array($loginAdmin, OCI_BOTH)) != false){
            if($_POST["password"]== $row[3]){
                $loginError = "Login successful";
                $_SESSION['username'] = $row['ADMIN_ID'];
                header("Location: ../view/admin/adminpanel.php");
            }
            else{
                $loginError = "Login failed";
                header("Location: ../view/login.php?le=".$loginError);
            }
        }
    }
    if(oci_execute($loginCustomer)){
        while(($row=oci_fetch_array($loginCustomer, OCI_BOTH)) != false){
            if($_POST["password"]== $row[5]){
                $loginError = "Login successful";
                $_SESSION['username'] = $row['USERNAME'];
                header("Location: ../view/customer/dashboard.php");
            }
            else{
                $loginError = "Login failed";
                header("Location: ../view/login.php?le=".$loginError);
            }
        }
    }
    
    

   
    
}

?>

<?php
class db{
    function openConn(){
        $conn=oci_connect('c##scott','tiger','orcl');
        if($conn)
            echo "Connection established";
        else{
            echo "Connection failed";
            $err = oci_error();
        }
        return $conn;
    }
//ADMIN ----------------------------------------------------------------
    function adminLogin($conn, $table, $id, $password){
        $sqlQuery= "SELECT * FROM ".$table." WHERE ADMIN_ID='".$id."' AND password='".$password."'";
        $result = oci_parse($conn, $sqlQuery);
        return $result;
    }

    function getAdminbyID($conn, $table, $id){
        $sqlQuery= "SELECT * FROM ".$table." WHERE admin_id='".$id."'";
        $result = oci_parse($conn, $sqlQuery);
        return $result;
    }

    function addNewAdmin($conn, $table, $firstname, $lastname, $password){
        $sqlQuery = "INSERT INTO $table (first_name, last_name, password) VALUES ('$firstname', '$lastname', '$password')";
        $result = oci_parse($conn, $sqlQuery);
        return $result;
    }

    function updateAdmin($conn, $table, $id, $firstname, $lastname, $password){
        $sqlQuery = "begin
        admin_info_update('$id','$firstname', '$lastname', '$password');
        end;"; 
        $result = oci_parse($conn, $sqlQuery);
        return $result;
    }

    function deleteAdmin($conn, $table, $id){
        $sqlQuery = "DELETE FROM $table WHERE admin_id='$id'";
        $result = oci_parse($conn, $sqlQuery);
        return $result;
    }

    function showAllAdmin($conn){
        $sqlQuery = "SELECT * FROM admin";
        $result = oci_parse($conn, $sqlQuery);
        return $result;
    }

//CUSTOMER ----------------------------------------------------------------
    function customerLogin($conn, $table, $username, $password){
        $sqlQuery= "SELECT * FROM ".$table." WHERE username='".$username."' AND password='".$password."'";
        $result = oci_parse($conn, $sqlQuery);
        return $result;
    }

    function getCustomerbyUsername($conn, $table, $username){
        $sqlQuery= "SELECT * FROM ".$table." WHERE username='".$username."'";
        $result = oci_parse($conn, $sqlQuery);
        return $result;
    }

    function addNewCustomer($conn, $table, $firstname, $lastname, $email,  $username, $mobile, $password, $dob, $gender, $address){
        $sqlQuery = "INSERT INTO $table (first_name, last_name, email, username, mobile, password, dob, gender, address) 
                    VALUES ('$firstname', '$lastname', '$email', '$username', '$mobile', '$password', TO_DATE('$dob'), '$gender', '$address')";
        $result = oci_parse($conn, $sqlQuery);
        return $result;
    }

    function updateCustomer($conn, $table, $firstname, $lastname, $email, $username, $mobile, $password, $dob, $gender, $address){
        $sqlQuery = "begin
        customer_info_update('$firstname', '$lastname', '$email', '$username', '$mobile', '$password', TO_DATE('$dob'), '$gender', '$address');
        end;";                           
        $result = oci_parse($conn, $sqlQuery);
        return $result;
    }

    function deleteCustomer($conn, $table, $username){
        $sqlQuery = "DELETE FROM $table WHERE username='$username'";
        $result = oci_parse($conn, $sqlQuery);

        echo $sqlQuery;
        return $result;
    }

    function showAllCustomer($conn){
        $sqlQuery = "SELECT * FROM customer";
        $result = oci_parse($conn, $sqlQuery);
        return $result;
    }


    
// MEDICINE ----------------------------------------------------------------
    function getMedicineById($conn, $table, $username){
        $sqlQuery= "SELECT * FROM ".$table." WHERE med_id='".$username."'";
        $result = oci_parse($conn, $sqlQuery);
        return $result;
    }    
    function addNewMedicine($conn, $table, $name, $company, $price,  $description, $quantity_in_stock, $reorder){
        $sqlQuery = "INSERT INTO $table (med_name, company, price, description, quantity_in_stock, reorder) VALUES ('$name', '$company', '$price', '$description', '$quantity_in_stock', '$reorder')";
        $result = oci_parse($conn, $sqlQuery);
        return $result;
    }

    function updateMedicince($conn, $table, $med_id, $name, $company, $price,  $description, $quantity_in_stock, $reorder){
        $sqlQuery = "begin
        medicines_info_update('$med_id','$name', '$company', '$price', '$description', '$quantity_in_stock', '$reorder');
        end;"; 
        $result = oci_parse($conn, $sqlQuery);
        return $result;
    }

    function deleteMedicine($conn, $table, $name){
        $sqlQuery = "DELETE FROM $table WHERE name='$name'";
        $result = oci_parse($conn, $sqlQuery);
        return $result;
    }

    function showAllMedicine($conn){
        $sqlQuery = "SELECT * FROM medicines";
        $result = oci_parse($conn, $sqlQuery);
        return $result;
    }
    function closeConn($conn){
        $conn->close();
    }
//ORDERS----------------------------------------------------------------
    function showAllOrders($conn){
        $sqlQuery = "SELECT * FROM orders";
        $result = oci_parse($conn, $sqlQuery);
        return $result;
    }
//REPORTS----------------------------------------------------------------
    function showAllReports($conn){
        $sqlQuery = "SELECT * FROM order_details_view";
        $result = oci_parse($conn, $sqlQuery);
        return $result;
    }
}

?>

<?php
    session_start();
    //unset($_SESSION['username']);
    session_unset();
    session_destroy();
    //echo $_SESSION['username'];
    header("Location: ../view/login.php");
    exit;
?>
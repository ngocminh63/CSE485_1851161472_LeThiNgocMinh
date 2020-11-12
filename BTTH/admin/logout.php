<?php
    session_start();
    if(isset($_SESSION['txtUserName'])){
        unset($_SESSION['txtUserName']);
        header("Location:demo.php");
        exit();
    }

?>
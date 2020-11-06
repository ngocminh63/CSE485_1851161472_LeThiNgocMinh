<?php
    function getAllUser(){
        global $conn;
        $sql = "SELECT * FROM users";
        $result = mysqli_query($conn, $sql);
        $user = mysqli_fetch_all($result);
        return $user;
    }
    function viewRecord($id){
        global $conn;
        $sql = "SELECT * FROM users WHERE id = '$id'";
        $result = mysqli_query($conn, $sql);
        $user = mysqli_fetch_all($result);
        return $user;
    }
    function deleteRecord($id){
        global $conn;
        $sql = "DELETE FROM users WHERE id = '$id'";
        $result = mysqli_query($conn, $sql);
        if ($result = mysqli_query($conn, $sql)){
            return TRUE;
        }
        else{
            return FALSE;
        }
    }



?>
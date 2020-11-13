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
<?php
    function getAllPost(){
        global $conn;
        $sql = "SELECT * FROM posts";
        $result = mysqli_query($conn, $sql);
        $post = mysqli_fetch_all($result);
        return $post;
    }
    function viewRecord1($id){
        global $conn;
        $sql = "SELECT * FROM posts WHERE id = '$id'";
        $result = mysqli_query($conn, $sql);
        $post = mysqli_fetch_all($result);
        return $post;
    }
    function deleteRecord1($id){
        global $conn;
        $sql = "DELETE FROM posts WHERE id = '$id'";
        $result = mysqli_query($conn, $sql);
        if ($result = mysqli_query($conn, $sql)){
            return TRUE;
        }
        else{
            return FALSE;
        }
    }



?>
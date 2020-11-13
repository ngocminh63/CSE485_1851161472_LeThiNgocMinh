<?php
    // Kiem tra
    $errors = array();
    
    $title = $_POST['title'];
	if (empty($title)) {
		$errors[] = 'You forgot to enter title.';
    }
    
    $body = $_POST['body'];
	if (empty($body)) {
		$errors[] = 'You forgot to enter body.';
    }

    
    if (empty($errors)){
        $conn = mysqli_connect('localhost','root','','quanli');
        if(!$conn){
            die('Khong the ket noi');
        }
        // B2: Khai bao cau truy van
            $sql = "INSERT INTO posts (title, body, created_at, updated_at)
             VALUES('$title','$body',NOW(),NOW())";
        if(mysqli_query($conn,$sql)){
            header('location:posts.php');
        } else{
            echo"Không đăng kí được". $sql . "<br>" . mysqli_error($conn);
        }
    } else{
        // Co loi, hien thi lai loi cho nguoi dung biet
        echo "Co loi nhap lieu ...";
    }
?>
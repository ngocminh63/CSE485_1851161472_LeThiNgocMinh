<?php
    // Kiem tra
    $errors = array();
    
    $username = $_POST['txtUserName'];
	if (empty($username)) {
		$errors[] = 'You forgot to enter your last name.';
    }
    
    $email = $_POST['txtEmail'];
	if (empty($email)) {
		$errors[] = 'You forgot to enter your email address.';
    }

    $password1 = $_POST['txtPassword'];
	$password2 = $_POST['txtPassword2'];
	if (!empty($password1)) {
		if ($password1 !== $password2) { 
			$errors[] = 'Your two password did not match.';
		} 
	} else {
		$errors[] = 'You forgot to enter your password.';
	}
    // Kiem tra Error:
    if (empty($errors)){
        $conn = mysqli_connect('localhost','root','','quanli');
        if(!$conn){
            die('Khong the ket noi');
        }
        // B2: Khai bao cau truy van
        $password_hash = password_hash($password1, PASSWORD_DEFAULT);
        $sql = "INSERT INTO users (username, email, password, created_at, updated_at)
                VALUES('$username','$email','$password_hash',NOW(),NOW())";
        if(mysqli_query($conn,$sql)){
            header('location:index.php');
        } else{
            echo"Không đăng kí được". $sql . "<br>" . mysqli_error($conn);
        }
    } else{
        // Co loi, hien thi lai loi cho nguoi dung biet
        echo "Co loi nhap lieu ...";
    }
?>
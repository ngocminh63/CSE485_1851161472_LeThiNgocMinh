<?php
    $errors = array();
    $username = $_POST['txtUserName'];
	if (empty($username)) {
		$errors[] = 'You forgot to enter your email.';
    }
    
    $password = $_POST['txtPassword'];
    if (empty($password)) {
        $errors[] = 'You forgot to enter your password.';
    }

    if (empty($errors)) {
        require("includes/config.php");
        // B2: Khai bao truy van
        $sql = "SELECt * FROM users WHERE username = '$username' AND status = 1";
        $result = mysqli_query($conn,$sql);
        if(mysqli_num_rows($result)>0){
            $row = mysqli_fetch_assoc($result);
            if(password_verify($password, $row['password']))
            {
                session_start();
                $_SESSION['username'] = $username;
                header("Location:demo.php");
                exit();
            }else{
                echo "Mat khau ko chinh xac";
            }
        }else{
            echo "Ko ton tai Tai khoan hoac Tai khoan chua duoc kich hoat";
        }

        }else{
            echo "Hien thi loi";
    }
?>
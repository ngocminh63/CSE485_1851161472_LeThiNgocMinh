<?php
    $errors = array();

    $username = $_POST['txtUserName'];
	if (empty($username)) {
		$errors[] = 'You forgot to enter your user name.';
    }

   
    $password1 = $_POST['txtPassword1'];
    $password2 = $_POST['txtPassword2'];
    if (!empty($password1)) {
    if ($password1 !== $password2) { 
        $errors[] = 'Your two password did not match.';
    } 
    } else {
    $errors[] = 'You forgot to enter your password.';
    }

    if (empty($errors)) {
        require("includes/config.php");
        // B2: Khai bao truy van
            $sql = "SELECT * FROM users WHERE username = '$username'";
            $result = mysqli_query($conn, $sql);
        // B3: Kiem tra ban ghi co ton tai
        if(mysqli_num_rows($result)>0){
            echo "Nguoi dung voi ten dang nhap da ton  tai";
        }else{
            $hashed_passcode = password_hash($password1, PASSWORD_DEFAULT);
            $activation_code = substr(md5(uniqid(rand(), true)), 16, 16);
            $sql = "INSERT INTO users (username, email, role, password, created_at, updated_at, activation_code) 
                    VALUES ('$username', '$email', '$role', '$hashed_passcode', NOW(), NOW(), '$activation_code')";
        }
    }
    }else{
        echo "Hien thi loi";
    }
?>            
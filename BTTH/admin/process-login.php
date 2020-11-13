<?php
// require_once('includes/config.php');
// $errors = array();
// $username = $_POST['txtUserName'];
// 	if (empty($username)) {
// 		$errors[] = 'You forgot to enter your username.';
//     }
// $password = $_POST['txtPassword'];
// 	if (empty($password)) {	
// 			$errors[] = 'Your two password did not match.';
//     } 
// if (empty($errors)){
//     $sql = "SELECT * FROM users WHERE username='$username'";
//         // echo $sql;
//         $result = mysqli_query($conn,$sql);
//         if(mysqli_num_rows($result)>0){
//             $row = mysqli_fetch_assoc($result);
//             // print_r($row);
//             $password_hash = $row['password'];
//             // echo $password_hash;
//             if(password_verify($password,$password_hash)){
//                 echo "Xin chào " . $username . ". ,bạn đã đăng nhập thành công. <a href='admin.php'>Về trang chủ</a>";
//                 die();
//             }else{
//                 echo "Sai mật khẩu, vui lòng nhập lại.<a href='login.php'>Về trang đăng nhập</a> ";
//             }
//         }else{
//             echo ".....";
//         }
// }
// else{
//         echo "Có lỗi khi nhập dữ liệu ...";
//     }
	
	if($_POST['txtUserName'] == 'admin' && $_POST['password'] == '' ){
        header("location:index.php");
    }else{
        exit;
    }

?>

<?php
    if(isset($_POST['username'])){    //để kiểm tra một biến nào đó đã được khởi tạo trong bộ nhớ
        $username = $_POST['username'];
    }
    require('includes/config.php');
    // 2. Khai bao Truy van
    $sql = "SELECT * FROM users WHERE username like '%username%'";
    mysqli_set_charset($conn,'UTF8');
    $result = mysqli_query($conn,$sql);             //thực hiện một truy vấn đối với cơ sở dữ liệu
    $users_arr = array();
    while($row = mysqli_fetch_assoc($result)){     //tìm nạp một hàng kết quả dưới dạng một mảng kết hợp.
        $id=$row['id'];
        $username=$row['username'];
        $email=$row['email'];
        $role=$row['role'];
        $created_at=$row['created_at'];
        $updated_at=$row['updated_at'];

        $users_arr[] = array("0" => $id, "1" => $username, "2" => $email, "3" => $role,"5" => $created_at, "6" => $updated_at);
    }
    echo json_encode($users_arr);    // Sử dụng hàm json_encode để convert giá trị string chỉ định thành định dạng JSON(ách thức để mô tả object trong xử lý của java script)

?>
<?php
    if(isset($_POST['id'])){    //để kiểm tra một biến nào đó đã được khởi tạo trong bộ nhớ
        $id = $_POST['id'];
    }
    require('includes/config.php');
    // 2. Khai bao Truy van
    $sql = "SELECT * FROM posts WHERE user_id = '$id'";
    mysqli_set_charset($conn,'UTF8');
    $result = mysqli_query($conn,$sql);             //thực hiện một truy vấn đối với cơ sở dữ liệu
    $users_arr = array();
    while($row = mysqli_fetch_assoc($result)){     //tìm nạp một hàng kết quả dưới dạng một mảng kết hợp.
        $userid = $row['id'];
        $title = $row['title'];

        $users_arr[] = array("id" => $userid, "title" => $title);
    }
    echo json_encode($users_arr);    // Sử dụng hàm json_encode để convert giá trị string chỉ định thành định dạng JSON(ách thức để mô tả object trong xử lý của java script)

?>
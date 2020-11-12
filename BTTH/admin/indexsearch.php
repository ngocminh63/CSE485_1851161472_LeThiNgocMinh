<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/demo.css">
    <script src="JS/jquery-3.5.1.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/1e9d4d2468.js" crossorigin="anonymous"></script>
  </head>
  <body style="border-top: 10px solid #2b3f8d;">
    <header class="header">
        <div class="container">
            <div class="row align-items-center align-items-md-end" style="margin: 10px 0 10px 0;">
                <div class="col-lg-7 col-9">
                    <div class="header-brand">
                        <a href="#"><img src="Images/logo.png" alt="" class="logo"></a>
                    </div>
                </div>
                <div class="col-lg-5 col-3">
                    <div class="header-right">
                        <div class="form-inline header-meta" style="float:right; border-bottom: 1px solid grey;">
                            <ul>
                                <li class="login"><a href="admin/login.php" style="margin-right:5px; margin-bottom:-3px;">Login</a></li>  
                            </ul>
                            <div class="language">
                                <img src="Images/vi.jpg" alt="" class="lgg">
                                <img src="Images/en.jpg" alt="" class="lgg">
                            </div>
                        </div>
                        <br><br>
                        <div class="form-inline search d-none d-md-block" style="float:right;">
                            <div class="form-group">
                                <span class="glyphicon glyphicon-search"></span>
                                <input type="text" id="keyWord" placeholder="Tìm kiếm">
                            </div>
                            <input type="button" value="Tìm" class="btn btn-primary input-submit">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <nav class="navbar navbar-expand-sm navbar-light " style="background-color: #0A1F77; margin-bottom: 0px; border-radius:0px;">
        <div class="container">   
            <button class="navbar-toggler d-lg-none bg-white"  type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId"
                aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <form class="form-inline my-2 my-lg-0 d-block d-md-none position-relative">
                <input class="form-control mr-sm-2" type="text" placeholder="Search">
                <button class="btn my-2 my-sm-0 position-absolute" style="right: 0%;bottom: 0.1%;" type="submit"><i class="fa fa-search"></i></button>
            </form>
            <div class="collapse navbar-collapse" id="collapsibleNavId" >
                <ul class="navbar-nav mr-auto mt-2 mt-lg-0 ">
                    <li class="nav-item my-auto">
                        <a class="nav-link" href="#" style="color: white;">MANAGER POSTS</a>
                    </li>
                    <li class="nav-item my-auto">
                        <a class="nav-link" href="#" style="color: white;">MANAGER TOPICS</a>
                    </li>
                    <li class="nav-item dropdown my-auto">
                        <a class="nav-link dropdown-toggle" href="#" id="dropdownId" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: white;">MANAGER USERS</a>
                        <div class="dropdown-menu" aria-labelledby="dropdownId">
                            <a class="dropdown-item" href="indexsearch.php">Tìm kiếm</a>
                            <a class="dropdown-item" href="index.php">QL người dùng</a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
      <div class="container">
        <div class="row">
            <div class="col-md-8">
                <select name="" id="user">
                    <option value="0">-- Chọn tên người sử dụng --</option>
                    <!-- Giá trị cần có ở đây lấy từ CSDL -->
                    <?php
                    require("includes/config.php");
                    // 2. Khai bao truy van
                    $sql = "SELECT * FROM users";
                    mysqli_set_charset($conn,'UTF8');
                    $result = mysqli_query($conn,$sql);
                    // 3. Xu ly ket qua
                    while($row = mysqli_fetch_assoc($result)){
                        echo "<option value='".$row['id']."' >".$row['username']."</option>";
                    }

                    ?>
                </select>
            </div>
            <div class="col-md-8">
            <select name="" id="post">
                    <option value="0">-- tên bài --</option>
                    <!-- Giá trị cần có ở đây lấy từ CSDL nhưng tương ứng với Phòng ban được chọn-->
            </select>
            </div>
        </div>
      </div>
      <footer class="footer-page">
        <div class="footer-top" >
            <div class="container">
                <div class="row">
                    <div class="col-md-8 text-left">
                        <h3><span>© 2020 TRƯỜNG ĐẠI HỌC THỦY LỢI</span></h3>
                    </div>
                    <div class="col-md-4 text-right">
                        <a href="#"><img src="Images/fb-icon.png" alt=""></a>
                        <a href="#"><img src="Images/ytb-icon.png" alt=""></a>
                        <a href="#"><img src="Images/twitter-icon.png" alt=""></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-middle">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <a href="#"><img src="Images/TLU-map.png" alt=""></a>
                    </div>
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="address">
                                    TRƯỜNG ĐẠI HỌC THỦY LỢI<br>
                                    Địa chỉ: 175 Tây Sơn, Đống Đa, Hà Nội <br>
                                    Điện thoại: (024) 38522201 - Fax: (024) 35633351
                                    Email: <a href="#" style="color: white;">phonghcth@tlu.edu.vn</a>
                                </div>
                                <hr>
                                <div class="address">
                                    PHÂN HIỆU ĐẠI HỌC THỦY LỢI<br>
                                    Địa chỉ 1: Số 2 Trường Sa, P.17, Q.Bình Thạnh, Tp.Hồ Chí Minh
                                </div>
                                <div class="address">
                                    Điện thoại: (028) 38400532 - Fax: (028) 38400542
                                </div>
                                <div class="address">
                                    Địa chỉ 2: Phường An Thạnh, TP Thuận An, Tỉnh Bình Dương<br>
                                    Điện thoại: (065) 3748620 - Fax: (065) 3833489
                                    Email: <a href="#" style="color: white;">cs2@tlu.edu.vn</a>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="address">
                                    CƠ SỞ PHỐ HIẾN<br>
                                    Địa chỉ: Quốc lộ 38B Nhật Tân, Tiên Lữ, Hưng Yên<br>
                                    Điện thoại: (0221) 3883885
                                </div>
                                <div class="address">Email: Bandtctsvphohien@tlu.edu.vn</div>
                                <hr>
                                <div class="address">
                                    VIỆN ĐÀO TẠO VÀ KHOA HỌC ỨNG DỤNG MIỀN TRUNG<br>
                                    Địa chỉ: Số 115 Trần Phú, Thành phố Phan Rang, Tỉnh Ninh Thuận<br>
                                    Điện thoại: (0259) 3823027, (0259) 3823028<br>
                                    Email: <a href="#" style="color: white;"> trungtamdh2@tlu.edu.vn</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
      <!-- <a href="" id="lienKet">Click Here</a> -->
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/jquery-3.5.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/script.js"></script>
  </body>
</html>
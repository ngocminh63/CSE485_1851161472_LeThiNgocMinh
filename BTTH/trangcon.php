<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trường Đại học Thủy Lợi</title>
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
                    <li class="nav-item active my-auto">
                        <a class="nav-link" href="#"><i class="fa fa-home"></i></span></a>
                    </li>
                    <li class="nav-item dropdown my-auto">
                        <a class="nav-link dropdown-toggle" href="#" id="dropdownId" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: white;">TIN TỨC & THÔNG BÁO</a>
                        <div class="dropdown-menu" aria-labelledby="dropdownId">
                            <a class="dropdown-item" href="#">TIN VIDEO</a>
                            <a class="dropdown-item" href="#">TIN TỨC</a>
                            <a class="dropdown-item" href="#">THÔNG BÁO</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown my-auto">
                        <a class="nav-link dropdown-toggle" href="#" id="dropdownId" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: white;">TUYỂN SINH</a>
                        <div class="dropdown-menu" aria-labelledby="dropdownId">
                            <a class="dropdown-item" href="#">VĂN BẰNG 2</a>
                            <a class="dropdown-item" href="#">TIẾN SĨ</a>
                            <a class="dropdown-item" href="#">VỪA LÀM VỪA HỌC</a>
                            <a class="dropdown-item" href="#">TUYỂN SINH LIÊN THÔNG</a>
                        </div>
                    </li>
                    <li class="nav-item my-auto">
                        <a class="nav-link" href="#" style="color: white;">LIÊN HỆ</a>
                    </li>
                    <li class="nav-item dropdown my-auto">
                        <a class="nav-link dropdown-toggle" href="#" id="dropdownId" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: white;">GIỚI THIỆU</a>
                        <div class="dropdown-menu" aria-labelledby="dropdownId">
                            <a class="dropdown-item" href="#">TỔNG QUAN</a>
                            <a class="dropdown-item" href="#">CƠ CẤU TỔ CHỨC VÀ NHÂN LỰC</a>
                            <a class="dropdown-item" href="#">CƠ SỞ VẬT CHẤT</a>
                            <a class="dropdown-item" href="#">SỨ MẠNH, TẦM NHÌN</a>
                            <a class="dropdown-item" href="#">CÔNG TÁC ĐẢNG</a>
                            <a class="dropdown-item" href="#">CÔNG TÁC CÔNG ĐOÀN</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown my-auto">
                        <a class="nav-link dropdown-toggle" href="#" id="dropdownId" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: white;">ĐÀO TẠO</a>
                        <div class="dropdown-menu" aria-labelledby="dropdownId">
                            <a class="dropdown-item" href="#">THẠC SĨ</a>
                            <a class="dropdown-item" href="#">ĐẠI HỌC CHÍNH QUY</a>
                            <a class="dropdown-item" href="#">CAM KẾT ĐẢM BẢO CHẤT LƯỢNG ĐÀO TẠO</a>
                            <a class="dropdown-item" href="#">TIẾN SĨ</a>
                            <a class="dropdown-item" href="#">VỪA LÀM VỪA HỌC</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown my-auto">
                        <a class="nav-link dropdown-toggle" href="#" id="dropdownId" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: white;">GIỚI THIỆU</a>
                        <div class="dropdown-menu" aria-labelledby="dropdownId">
                            <a class="dropdown-item" href="#">TỔNG QUAN</a>
                            <a class="dropdown-item" href="#">CƠ CẤU TỔ CHỨC VÀ NHÂN LỰC</a>
                            <a class="dropdown-item" href="#">CƠ SỞ VẬT CHẤT</a>
                            <a class="dropdown-item" href="#">SỨ MẠNH, TẦM NHÌN</a>
                            <a class="dropdown-item" href="#">CÔNG TÁC ĐẢNG</a>
                            <a class="dropdown-item" href="#">CÔNG TÁC CÔNG ĐOÀN</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown my-auto">
                        <a class="nav-link dropdown-toggle" href="#" id="dropdownId" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: white;">NGHIÊN CỨU</a>
                        <div class="dropdown-menu" aria-labelledby="dropdownId">
                            <a class="dropdown-item" href="#">TIN KHOA HỌC CÔNG NGHỆ</a>
                            <a class="dropdown-item" href="#">CÁC ĐƠN VỊ KHCN</a>
                            <a class="dropdown-item" href="#">VĂN BẢN, CƠ CHẾ, BIỂU MẪU</a>
                            <a class="dropdown-item" href="#">LIÊN HỆ </a>
                            <a class="dropdown-item" href="#">QUỸ PHÁT TRIỂN KH & CN</a>
                            <a class="dropdown-item" href="#">NCKH & CHUYỂN GIAO CÔNG NGHỆ</a>
                            <a class="dropdown-item" href="#">HỘI NGHỊ, HỘI THẢO</a>
                            <a class="dropdown-item" href="#">THÔNG BÁO KHCN</a>
                            <a class="dropdown-item" href="#">TẠP CHÍ KHKT THỦY LỢI & MÔI TRƯỜNG</a>
                            <a class="dropdown-item" href="#">SỞ HỮU TRÍ TUỆ</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown my-auto">
                        <a class="nav-link dropdown-toggle" href="#" id="dropdownId" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: white;">SINH VIÊN</a>
                        <div class="dropdown-menu" aria-labelledby="dropdownId">
                            <a class="dropdown-item" href="#">SINH VIÊN HIỆN TẠI</a>
                            <a class="dropdown-item" href="#">GIÁO VIÊN CHỦ NHIỆM</a>
                            <a class="dropdown-item" href="#">QUY CHẾ QUY ĐỊNH</a>
                            <a class="dropdown-item" href="#">HỌC PHÍ</a>
                            <a class="dropdown-item" href="#">LIÊN HỆ</a>
                            <a class="dropdown-item" href="#">SINH VIÊN TỐT NGHIỆP</a>
                            <a class="dropdown-item" href="#">HOẠT ĐỘNG SINH VIÊN</a>
                            <a class="dropdown-item" href="#">HỖ TRỢ SINH VIÊN</a>
                            <a class="dropdown-item" href="#">CƯU SINH VIÊN</a>
                            <a class="dropdown-item" href="#">SINH VIÊN TƯƠNG LAI</a>
                            <a class="dropdown-item" href="#">THÔNG BÁO</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown my-auto">
                        <a class="nav-link dropdown-toggle" href="#" id="dropdownId" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: white;">ĐỐI NGOẠI</a>
                        <div class="dropdown-menu" aria-labelledby="dropdownId">
                            <a class="dropdown-item" href="#">GIỚI THIỆU CHUNG</a>
                            <a class="dropdown-item" href="#">TIN TỨC ĐỐI NGOẠI</a>
                            <a class="dropdown-item" href="#">HỢP TÁC ĐÀO TẠO QUỐC TẾ</a>
                            <a class="dropdown-item" href="#">DỰ ÁN QUỐC TẾ</a>
                            <a class="dropdown-item" href="#">THỎA THUẬN HỢP TÁC</a>
                            <a class="dropdown-item" href="#">QUY CHẾ, QUY ĐỊNH VỀ ĐỐI NGOẠI</a>
                            <a class="dropdown-item" href="#">LIÊN HỆ</a>
                        </div>
                    </li>
                    <li class="nav-item my-auto">
                        <a class="nav-link" href="#" style="color: white;">VĂN BẢN</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <main class="main-contain" style="margin-top:30px">
        <div class="container">
            <div class="primary-content">
                <div class="row">
                    <div class="col-md-4 col-lg-3">
                        <div class="tlu-menu">
                            <p style="font-size:24px; line-height:2;font-family:Calibri;">
                                <a href="http://www.tlu.edu.vn/gioi-thieu">Giới thiệu</a>
                            </p>
                            <div class="column-2">
                                <ul style="margin-left:0px;">
                                    <li style="position:relative; padding-left:15px; display:block;"><a href="http://www.tlu.edu.vn/cong-tac-dang" style="display: block; border-bottom: 1px solid #ccc; padding: 7px 7px;">Công tác Đảng</a></li>
                                    <li style="position:relative; padding-left:15px; display:block;"><a href="http://www.tlu.edu.vn/cong-tac-cong-doan" style="display: block; border-bottom: 1px solid #ccc; padding: 7px 7px;">Công tác Đoàn</a></li>
                                    <li style="position:relative; padding-left:15px; display:block;"><a href="http://www.tlu.edu.vn/Tong-quan" style="display: block; border-bottom: 1px solid #ccc; padding: 7px 7px;">Tổng quan</a></li>
                                    <li style="position:relative; padding-left:15px; display:block;"><a href="http://www.tlu.edu.vn/Co-cau-to-chuc-va-nhan-luc" style="display: block; border-bottom: 1px solid #ccc; padding: 7px 7px;">Cơ cấu tổ chức và nhân lực</a></li>
                                    <li style="position:relative; padding-left:15px; display:block;"><a href="http://www.tlu.edu.vn/Co-so-vat-chat" style="display: block; border-bottom: 1px solid #ccc; padding: 7px 7px;">Cơ sở vật chất</a></li>
                                    <li style="position:relative; padding-left:15px; display:block;"><a href="http://www.tlu.edu.vn/Su-mang-tam-nhin" style="display: block; border-bottom: 1px solid #ccc; padding: 7px 7px;">Sứ mạng, tầm nhìn</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-8 col-lg-9">
                        <div class="heading">
                            <h3>Công tác Đảng</h3>
                        </div>
                        <ul class="related-list" style="list-style:none; margin-bottom:50px;">
                            <li style="display: block; border-bottom: 1px solid #ccc; padding: 0px 25px; height:130px;">
                                <div class="row">
                                    <div class="col-sm-3">
                                        <figure><a href="http://www.tlu.edu.vn/cong-tac-dang/danh-sach-bch-dang-bo-truong-nhiem-ky-9876"></a></figure>
                                    </div>
                                    <div class="col-sm-9" style="text-align:justify">
                                        <h4 class="related-title"><a href="http://www.tlu.edu.vn/cong-tac-dang/danh-sach-bch-dang-bo-truong-nhiem-ky-9876">Danh sách BCH Đảng bộ trường nhiệm kỳ 2015 - 2020</a></h4>
                                        <p class="time-post">15/09/2018 00:00</p>
                                        <p class="text-right font-16px"><a href="http://www.tlu.edu.vn/cong-tac-dang/danh-sach-bch-dang-bo-truong-nhiem-ky-9876"><i class="fa fa-angle-right"></i><em>Xem chi tiết</em></a></p>
                                    </div>
                                </div>
                            </li>
                            <li style="display: block; border-bottom: 1px solid #ccc; padding: 7px 7px; padding: 25px 0;">
                                <div class="row">
                                    <div class="col-sm-3">
                                        <figure>
                                            <a href="http://www.tlu.edu.vn/cong-tac-dang/danh-sach-bch-dang-bo-truong-nhiem-ky-9876">
                                                <img src="Images/0.Hammer_and_sickle.png.jpg" alt="">
                                            </a>
                                        </figure>
                                    </div>
                                    <div class="col-sm-9" style="text-align:justify">
                                        <h4 class="related-title"><a href="http://www.tlu.edu.vn/cong-tac-dang/danh-sach-bch-dang-bo-truong-nhiem-ky-9876">Văn bản của Trung Ương</a></h4>
                                        <p class="time-post">04/07/2018 00:00</p>
                                        <p class="text-right font-16px"><a href="http://www.tlu.edu.vn/cong-tac-dang/danh-sach-bch-dang-bo-truong-nhiem-ky-9876"><i class="fa fa-angle-right"></i><em>Xem chi tiết</em></a></p>
                                    </div>
                                </div>
                            </li>
                            <li style="display: block; border-bottom: 1px solid #ccc; padding: 7px 7px; padding: 25px 0;">
                                <div class="row">
                                    <div class="col-sm-3">
                                        <figure>
                                            <a href="http://www.tlu.edu.vn/cong-tac-dang/danh-sach-bch-dang-bo-truong-nhiem-ky-9876">
                                                <img src="Images/gop_y_du_thao_yfgi.gif" alt="">
                                            </a>
                                        </figure>
                                    </div>
                                    <div class="col-sm-9" style="text-align:justify">
                                        <h4 class="related-title"><a href="http://www.tlu.edu.vn/cong-tac-dang/danh-sach-bch-dang-bo-truong-nhiem-ky-9876">Văn bản của Trung Ương</a></h4>
                                        <p class="time-post">06/11/2020 17:14</p>
                                        <p>Thực hiện Chỉ thị số 35-CT/TW của Bộ Chính trị về Đại hội đảng bộ các cấp, tiến tới Đại hội XIII của Đảng; Thông báo Kết luận số 159-TB của Bộ Chính trị về việc thảo luận các văn kiện Đại hội XIII của Đảng tại Đại hội Đảng bộ các cấp, gửi lấy ý kiến nhân dân và tổng hợp các ý kiến đóng góp vào văn kiện Đại hội XIII của Đảng</p>
                                        <p class="text-right font-16px"><a href="http://www.tlu.edu.vn/cong-tac-dang/danh-sach-bch-dang-bo-truong-nhiem-ky-9876"><i class="fa fa-angle-right"></i><em>Xem chi tiết</em></a></p>
                                    </div>
                                </div>
                            </li>
                            <li style="display: block; border-bottom: 1px solid #ccc; padding: 7px 7px; padding: 25px 0;">
                                <div class="row">
                                    <div class="col-sm-3">
                                        <figure>
                                            <a href="http://www.tlu.edu.vn/cong-tac-dang/danh-sach-bch-dang-bo-truong-nhiem-ky-9876">
                                                <img src="Images/1A7A4125.jpg" alt="">
                                            </a>
                                        </figure>
                                    </div>
                                    <div class="col-sm-9" style="text-align:justify">
                                        <h4 class="related-title"><a href="http://www.tlu.edu.vn/cong-tac-dang/danh-sach-bch-dang-bo-truong-nhiem-ky-9876">Khai mạc phiên chính thức Đại hội đại biểu Đảng bộ Trường Đại học Thủy lợi khóa XXVIII, nhiệm kỳ 2020 - 2025</a></h4>
                                        <p class="time-post">15/05/2020 00:00</p>
                                        <p>(TLU) - Thực hiện Chỉ thị số 35-CT/TW ngày 30/5/2019 của Bộ Chính trị (khóa XII) về đại hội đảng các cấp tiến tới Đại hội đại biểu toàn quốc lần thứ XIII của Đảng; Kế hoạch số 97-KH/ĐUK ngày 30/7/2019 của Đảng ủy Khối các trường Đại học, Cao đẳng Hà Nội về tổ chức đại hội đảng bộ các cấp tiến tới Đại hội đại biểu lần thứ III Đảng bộ Khối các trường Đại học, Cao đẳng Hà Nội, sáng nay (15/5/2020) phiên chính thức Đại hội đại biểu Đảng bộ Trường Đại học Thủy lợi khóa XXVIII, nhiệm kỳ 2020 – 2025 đ</p>
                                        <p class="text-right font-16px"><a href="http://www.tlu.edu.vn/cong-tac-dang/danh-sach-bch-dang-bo-truong-nhiem-ky-9876"><i class="fa fa-angle-right"></i><em>Xem chi tiết</em></a></p>
                                    </div>
                                </div>
                            </li>
                            <li style="display: block; border-bottom: 1px solid #ccc; padding: 7px 7px; padding: 25px 0;">
                                <div class="row">
                                    <div class="col-sm-3">
                                        <figure>
                                            <a href="http://www.tlu.edu.vn/cong-tac-dang/danh-sach-bch-dang-bo-truong-nhiem-ky-9876">
                                                <img src="Images/dang1.jpg" alt="">
                                            </a>
                                        </figure>
                                    </div>
                                    <div class="col-sm-9" style="text-align:justify">
                                        <h4 class="related-title"><a href="http://www.tlu.edu.vn/cong-tac-dang/danh-sach-bch-dang-bo-truong-nhiem-ky-9876">Đại hội Đại biểu Đảng bộ trường lần thứ 27 nhiệm kỳ 2015 - 2020</a></h4>
                                        <p class="time-post">28/05/2015 00:00</p>
                                        <p>Đại hội đại biểu Đảng bộ Trường Đại học Thủy lợi lần thứ XXVII, nhiệm kỳ 2015-2020 đã bế mạc với niềm tin tưởng sâu sắc vào ý chí quyết tâm của toàn Đảng bộ vào tương lai tươi sáng của Nhà trường.</p>
                                        <p class="text-right font-16px"><a href="http://www.tlu.edu.vn/cong-tac-dang/danh-sach-bch-dang-bo-truong-nhiem-ky-9876"><i class="fa fa-angle-right"></i><em>Xem chi tiết</em></a></p>
                                    </div>
                                </div>
                            </li>
                            <li></li>
                            <li></li>
                            <li></li>
                            <li></li>
                            <li></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </main>



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
    <script src="JS/JavaScript.js"></script>
</body>
</html>
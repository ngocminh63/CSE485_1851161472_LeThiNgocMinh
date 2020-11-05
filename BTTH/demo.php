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
    <menu style="background-color: #0A1F77; margin: 0 0 0 0;">
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="Images/baner-tuyen.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="Images/banner-webthumb.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="Images/nganh-thuy-loi-vietthumb.jpg" class="d-block w-100" alt="...">
                </div>
            </div>
            <div>  
                <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </menu>
    <div class="container">
        <div class="quick-link">
            <div class="iwt">
                <a href="#">
                    <span class="iwt-icon"><img src="Images/quality.jpg" alt=""></span>
                </a>
                <h4><a href="#">Đảm bảo<br>chất lượng</a></h4>
            </div>
            <div class="iwt">
                <a href="#">
                    <span class="iwt-icon"><img src="Images/www.jpg" alt=""></span>
                </a>
                <h4><a href="#">Tạp chí</a></h4>
            </div>
            <div class="iwt">
                <a href="#">
                    <span class="iwt-icon"><img src="Images/library.jpg" alt=""></span>
                </a>
                <h4><a href="#">Thư viện</a></h4>
            </div>
            <div class="iwt">
                <a href="#">
                    <span class="iwt-icon"><img src="Images/email.jpg" alt=""></span>
                </a>
                <h4><a href="#">TLU mail</a></h4>
            </div>
            <div class="iwt">
                <a href="#">
                    <span class="iwt-icon"><img src="Images/lichcongtac.jpg" alt=""></span>
                </a>
                <h4><a href="#">Lịch công tác</a></h4>
            </div>
            <div class="iwt">
                <a href="#">
                    <span class="iwt-icon"><img src="Images/user.jpg" alt=""></span>
                </a>
                <h4><a href="#">Đăng kí học</a></h4>
            </div>
        </div>
    </div>

    <section class="section-box">
        <div class="container">
            <div class="row">
                <div class="col-lg-9">
                    <div class="col-md-7">
                        <div class="card-info-img0">
                            <a href="#"><img src="Images/nenthumb.jpg" alt=""></a>
                        </div>
                        <div class="card-info-body">
                            <h3 class="card-info-title">
                                <a href="" style="font-size: 18px; color: black; font-weight: bold;">Trường Đại học Thủy
                                    Lợi tuyển sinh 2020 - Đón đầu xu thế</a>
                                <span><img src="Images/hot.gif" alt=""></span>
                            </h3>
                            <div class="card-info-desc ng-blinding" style="font-size: 15.7px;">
                                Với triết lý giáo dục “Lấy người học làm trung tâm”, Trường Đại học Thủy lợi mở rộng quy
                                mô đào tạo ở cả 3 địa chỉ là Hà Nội,...
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="nav-tabs" style="height: 43px;">
                            <button class="tablink nav-link" id="News" style="background-color: white;">Tin tức</button>
                            <button class="tablink nav-link" id="Informs">Thông báo</button>
                        </div>
                        <div class="tabcontent" style="display: block;">
                            <div class="row">
                                <ul class="unstyle-dot">
                                    <li><a href="http://www.tlu.edu.vn/tin-tuc/truong-dai-hoc-thuy-loi-tuyen-sinh-2020-11112" class="ng-blinding">Trường Đại học Thủy Lợi tuyển sinh 2020- Đón đầu xu thế</a><span><img src="Images/hot.gif" alt=""></span></li>
                                    <li><a href="http://www.tlu.edu.vn/tin-tuc/phuong-thuc-xet-tuyen-dai-hoc-chinh-quy-11033" class="ng-blinding">Phương thức xét tuyển đại học chính quy năm 2020</a></li>
                                    <li><a href="http://www.tlu.edu.vn/tin-tuc/cac-nganh-tuyen-sinh-dai-hoc-chinh-quy-11036" class="ng-blinding">Các ngành tuyển sinh đâị học năm 2020</a></li>
                                    <li><a href="http://www.tlu.edu.vn/tin-tuc/bo-y-te-va-bo-tt-tt-de-nghi-nguoi-dan-13238" class="ng-blinding">Bộ Y tế và Bộ TT&TT đề nghị người dân cả nước cài đặt Bluezone</a></li>
                                    <li><a href="http://www.tlu.edu.vn/tin-tuc/khai-giang-lop-boi-duong-nang-cao-trinh-13236" class="ng-blinding">Khai giảng lớp bồi dưỡng nâng cao trình độ Tiếng anh</a></li>
                                </ul>
                                <div class="text-right pt-3" style="width:100%">
                                    <a ng-href="http://www.tlu.edu.vn/thong-bao" class="more">
                                    <i class="fa fa-angle-double-right"></i>Xem tất cả
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 thongbao2" style="display: none;">
                            <div class="row">
                                <ul class="unstyle-dot">
                                    <li><a href="http://www.tlu.edu.vn/tin-tuc/thong-bao-cap-hoc-bong-cho-thi-sinh-11064" class="ng-blinding">Thông báo cấp Học bổng cho thí sinh trúng tuyển Đại học chính quy và nhập học vào Trường Đại học Thủy Lợi năm 2020</a></li>
                                    <li><a href="http://www.tlu.edu.vn/tin-tuc/truong-dai-hoc-thuy-loi-thong-bao-tuyen-11062" class="ng-blinding">Trường Đại học Thủy Lợi thông báo Tuyển sinh hệ chính quy năm 2020</a></li>
                                    <li><a href="http://www.tlu.edu.vn/tin-tuc/cuoc-thi-tim-kiem-y-tuong-kinh-doanh-13211" class="ng-blinding">Cuộc thi tìm kiếm ý tưởng kinh doanh mới do Hiệp hội Doanh nghiệp Đức(GBA) tổ chức</a></li>
                                    <li><a href="http://www.tlu.edu.vn/tin-tuc/mot-so-thong-tin-sinh-hoat-lop-thang-7-13209" class="ng-blinding">Một số thông tin sinh hoạt lớp tháng 7 năm 2020</a></li>
                                    <li><a href="http://www.tlu.edu.vn/tin-tuc/thong-bao-so-2-cuoc-thi-sinh-vien-voi-13207" class="ng-blinding">Thông báo số 2 Cuộc thi "Sinh viên với ý tưởng khởi nghiệp" năm 2020</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="department">
                        <h3>PHÂN HIỆU - KHOA</h3>
                        <div class="list-department">
                            <ul>
                                <li>
                                    <div class="text">
                                        <a href="#" class="link-to-side-department" style="color: #001373;">Khoa Công trình</a>
                                    </div>
                                </li>
                                <li>
                                    <div class="text">
                                        <a href="#" class="link-to-side-department">Khoa Kĩ thuật tài nguyên nước</a>
                                    </div>
                                </li>
                                <li>
                                    <div class="text">
                                        <a href="#" class="link-to-side-department">Khoa Công nghệ thông tin</a>
                                    </div>
                                </li>
                                <li>
                                    <div class="text">
                                        <a href="#" class="link-to-side-department">Khoa Cơ khí</a>
                                    </div>
                                </li>
                                <li>
                                    <div class="text">
                                        <a href="#" class="link-to-side-department">Khoa Điện - ĐIện tử</a>
                                    </div>
                                </li>
                                <li>
                                    <div class="text">
                                        <a href="#" class="link-to-side-department">Khoa Kinh tế và Quản lí</a>
                                    </div>
                                </li>
                                <li>
                                    <div class="text">
                                        <a href="#" class="link-to-side-department">Khoa Hóa và Môi trường</a>
                                    </div>
                                </li>
                                <li>
                                    <div class="text">
                                        <a href="#" class="link-to-side-department">Trung tâm Đào tạo quốc tế</a>
                                    </div>
                                </li>
                                <li>
                                    <div class="text">
                                        <a href="#" class="link-to-side-department">Phân hiệu Đại học Thủy Lợi</a>
                                    </div>
                                </li>
                                <li>
                                    <div class="text">
                                        <a href="#" class="link-to-side-department">Viện Đào tạo và Khoa học ứng dụng miền Trung</a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <section class="section-box bg-light2">
        <div class="container">
            <div class="row">
                <div class="col-sm">
                    <a href="http://ts.tlu.edu.vn/tuyen-sinh-dai-hoc" target="_blank"  title="Tuyển sinh Đại Học" rel="follow, index">
                        <img src="Images/TuyenSinhDH.jpg" alt="">
                    </a>
                </div>
                <div class="col-sm">
                    <a href="http://ts.tlu.edu.vn/tin-tuyen-sinh-thac-si" target="_blank"  title="Tuyển sinh Thạc sĩ" rel="follow, index">
                        <img src="Images/TuyenSinhThacSi.jpg" alt="">
                    </a>
                </div>
                <div class="col-sm">
                    <a href="http://ts.tlu.edu.vn/tin-tuyen-tien-si" target="_blank"  title="Tuyển sinh Tiến sĩ" rel="follow, index">
                        <img src="Images/TuyenSinhTS.jpg" alt="">
                    </a>
                </div>
            </div>
        </div>
    </section>
    
    <section class="section-box">
        <div class="container">
            <div class="heading" style="margin-bottom: 17px;">
                <h3 class="title typescale-1" >
                    <a href="http://www.tlu.edu.vn/dao-tao" target="_blank"  title="Phòng Đào tạo" rel="follow, index" style="color: #001373;">ĐÀO TẠO</a>
                </h3>
            </div>
            
            <div class="row">
                <div class="col-lg-9">
                    <div class="row row-space">
                        <div class="row">
                            <div class="col-sm">
                                <div class="card-info-img" style="background-image: url(Images/thumbnail_Logo\ DHTL.jpg);">
                                    <!--<img src="Images/thumbnail_Logo DHTL.jpg" alt="" style="height: 150px;">-->
                                </div>
                                <div class="card-info-body">
                                    <h4 class="card-info-title"><a href="#">Thông báo triển khai kế hoạch tính toán khối lượng vượt giờ năm học 2019-2020</a></h4>
                                </div>
                            </div>
                            <div class="col-sm">
                                <div class="card-info-img" style="background-image: url(Images/NCKH-Avatar.jpg);" >
                                    <!--<img src="Images/NCKH-Avatar.jpg" alt="" style="height: 150px;"> -->
                                </div>
                                <div class="card-info-body">
                                    <h4 class="card-info-title"><a href="">Thông tin luận án tiến sĩ cấp Trường của NCS Nguyễn Quang Lương</a></h4>
                                </div>
                            </div>
                            <div class="col-sm">
                                <div class="card-info-img" style="background-image: url(Images/Thong-Bao.jpg);">
                                    <!--<img src="Images/Thong-Bao.jpg" alt="" style="height: 150px;">-->
                                </div>
                                <div class="card-info-body">
                                    <h4 class="card-info-title"><a href="#">Thông tin thời gian bảo vệ luận án tiến sĩ cấp Trường của NCS Nguyễn Văn Hiếu </a></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-3">
                    <ul class="unstyle-dot">
                        <li style="list-style-type: square;"><a href="http://www.tlu.edu.vn/dao-tao/thong-bao-ve-to-chuc-thi-chuan-tieng-13181" style="color: black;">Thông báo về tổ chức thi chuẩn Tiếng Anh đầu ra A2 đợt 1...</a></li>
                        <li style="list-style-type: square;"><a href="http://www.tlu.edu.vn/dao-tao/bao-giang-nam-hoc-2020-2021-cho-dhcq-13178" style="color: black;">Báo giảng năm học 2020-2021 cho ĐHCQ</a></li>
                        <li style="list-style-type: square;"><a href="http://www.tlu.edu.vn/dao-tao/thong-tin-luan-an-tien-si-cap-truong-13172" style="color: black;">Thông tin luận án tiến sĩ cấp Trường của NCS Nguyễn Văn Hiếu</a></li>
                        <li style="list-style-type: square;"><a href="http://www.tlu.edu.vn/dao-tao/thong-tin-thoi-gian-bao-ve-luan-an-tien-11116" style="color: black;">Thông tin thời gian bảo vệ luận án tiến sĩ cấp Trường của NCS...</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <section class="section-box bg-light2">
        <div class="container">
            <div class="heading" style="margin-bottom: 17px;">
                <h3 class="title typescale-1" >
                    <a href="http://www.tlu.edu.vn/doi-ngoai" target="_blank"  title="ĐỐI NGOẠI" rel="follow, index" style="color: #001373;">ĐỐI NGOẠI</a>
                </h3>
            </div>
            
            <div class="row">
                <div class="col-lg-9">
                    <div class="row row-space">
                        <div class="row">
                            <div class="col-sm">
                                <div class="card-info-img" style="background-image: url(Images/200720Hosei1.jpg);" >
                                    <!--<img src="Images/200720Hosei1.jpg" alt="" style="height: 150px;"> -->
                                </div>
                                <div class="card-info-body">
                                    <h4 class="card-info-title"><a href="http://www.tlu.edu.vn/doi-ngoai/truong-dhtl-khai-thac-tiem-nang-hop-tac-13200" style="font-size: 15px; color: black;">Trường ĐHTL khai thác tiềm năng hợp tác với ĐH Hosei, Nhật Bản trong lĩnh vực Kỹ thuật Robot, Trí tuệ nhân tạo và Điện-điện tử</a></h4>
                                </div>
                            </div>
                            <div class="col-sm">
                                <div class="card-info-img" style="background-image: url(Images/research.jpg);">
                                    <!--<img src="Images/research.jpg" alt="" style="height: 150px;">-->
                                </div>
                                <div class="card-info-body">
                                    <h4 class="card-info-title"><a href="http://www.tlu.edu.vn/doi-ngoai/chuong-trinh-du-an-quoc-te-de-tai-hop-13152" style="font-size: 15px; color: black;">Chương trình, Dự án quốc tế, Đề tài hợp tác nghiên cứu với đối tác nước ngoài</a></h4>
                                </div>
                            </div>
                            <div class="col-sm">
                                <div class="card-info-img" style="background-image: url(Images/0k4a7767thumb.jpg);">
                                    <!--<img src="Images/0k4a7767thumb.jpg" alt="" style="height: 150px;">-->
                                </div>
                                <div class="card-info-body">
                                    <h4 class="card-info-title"><a href="http://www.tlu.edu.vn/doi-ngoai/bi-thu-thu-hai-dai-su-quan-indonesia-13117" style="font-size: 15px; color: black;">Bí thư thứ hai Đại sứ quán Indonesia đến làm việc với Nhà trường </a></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-3">
                    <ul class="unstyle-dot">
                        <li style="list-style-type: square;"><a href="http://www.tlu.edu.vn/doi-ngoai/le-ky%CC%81-ke%CC%81t-bien-ban-ghi-nho-vo%CC%81i-cong-13116" style="color: black;">Lễ ký kết Biên bản ghi nhớ với Công ty TNHH Mirae E&I, Hàn...</a></li>
                        <li style="list-style-type: square;"><a href="http://www.tlu.edu.vn/doi-ngoai/hop-tac-trong-nghien-cuu-khoa-hoc-va-13115" style="color: black;">Hợp tác trong nghiên cứu khoa học và đào tạo</a></li>
                        <li style="list-style-type: square;"><a href="http://www.tlu.edu.vn/doi-ngoai/thong-bao-tuyen-sinh-chuong-trinh-11076" style="color: black;">Thông báo tuyển sinh Chương trình Meister School "Kỹ sữ làm việc tại Nhật...</a></li>
                        <li style="list-style-type: square;"><a href="http://www.tlu.edu.vn/doi-ngoai/toa-dam-gap-mat-va-de-xuat-hop-tac-voi-10664" style="color: black;">Tọa đàm, gặp mặt và đề xuất hợp tác với các dối tác quốc...</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <section class="section-box" style="padding-bottom: 0px;">   
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <h3 class="title typescale-1">
                        <a href="http://www.tlu.edu.vn/doi-ngoai" target="_blank"  title="ĐỐI NGOẠI" rel="follow, index" style="color: #001373; ">NGHIÊN CỨU</a>
                    </h3>
                </div>
                <div class="col-md-3">
                    <h3 class="title typescale-1" >
                        <a href="#" style="color: #001373;">SỰ KIỆN</a>
                    </h3>
                </div>
            </div>
        </div>
    </section>
    <section class="section-box">
        <div class="container">
            <div class="row">
                <div class="col-lg-9">
                    <div class="row row-space">
                        <div class="row">
                            <div class="col-sm">
                                <div class="card-info-img" style="background-image: url(Images/a3_24072020thumb.jpg);">
                                    <!-- <img src="Images/a3_24072020thumb.jpg" alt="" style="height: 150px;"> -->
                                </div>
                                <div class="card-info-body">
                                    <h4 class="card-info-title">
                                        <a href="http://www.tlu.edu.vn/nghien-cuu/nghiem-thu-de-tai-khoa-hoc-cong-nghe-do-13229">Nghiệm thu đề tài khoa học công nghệ do nhóm nghiên cứu trường Đại học Thủy Lợi</a>

                                    </h4>
                                </div>
                            </div>
                            <div class="col-sm">
                                <div class="card-info-img" style="background-image: url(Images/HoiThao.jpg);">
                                    <!-- <img src="Images/HoiThao.jpg" alt="" style="height: 150px;"> -->
                                </div>
                                <div class="card-info-body">
                                    <h4 class="card-info-title">
                                        <a href="http://www.tlu.edu.vn/nghien-cuu/hoi-thao-quoc-te-ve-cong-nghe-tien-tien-13222">Hội thảo quốc tế về công nghệ tiên tiến trong xử lý tín hiệu, viễn thông và điện toán(Sigtelcom 2020)</a>
                                        
                                    </h4>
                                </div>
                            </div>
                            <div class="col-sm">
                                <div class="card-info-img" style="background-image: url(Images/kc_08_002thumb.jpg);">
                                    <!-- <img src="Images/kc_08_002thumb.jpg" alt="" style="height: 150px;"> -->
                                </div>
                                <div class="card-info-body">
                                    <h4 class="card-info-title"><a href="http://www.tlu.edu.vn/nghien-cuu/hoi-thao-khoa-hoc-de-tai-cap-nha-nuoc-13221">Hội thảo khó học Đề tài cấp Nhà nước- KC08.27/16-20</a></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>    
        
                <div class="col-md-3 spacingTop">
                    <div>
                        <a href="http://sigtelcom.tlu.edu.vn/" target="_blank">
                            <img src="Images/sigtelcom.jpg">
                        </a>  
                        <br><br>
                    <!-- <div style="padding-bottom: 5px;"> -->
                        <a href="http://hnkh.tlu.edu.vn/" target="_blank">
                            <img src="Images/Anual_Semina.png">
                        </a>
                    </div>     
                </div>
            </div>
        </div>
    </section>
    
    <section class="section-box" style="background-color:#efefef">
        <div class="container">
            <div class="heading" style="margin-bottom: 17px;">
                <h3 class="title typescale-1" >
                    <a href="http://www.tlu.edu.vn/sinh-vien-tuong-lai" target="_blank"  title="SINH VIÊN" rel="follow, index" style="color: #001373;">SINH VIÊN</a>
                </h3>
            </div>
            
            <div class="row">
                <div class="col-sm-15">
                    <div class="row row-space">
                        <div class="row">
                            <div class="col-sm">
                                <div class="card-info-img">
                                    <a href="http://www.tlu.edu.vn/sinh-vien-tuong-lai" target="_blank"  title="Tuyển sinh Đại Học" rel="follow, index">
                                        <img src="Images/FutureStudent.jpg" alt="">
                                    </a>
                                </div>
                                <div class="card-info-body">
                                    <ul class="unstyle-dot">
                                        <li style="list-style-type: square;"><a href="http://www.tlu.edu.vn/sinh-vien-tuong-lai/ngay-hoi-tu-van-tuyen-sinh-huong-13156" style="color: black;">Ngày hội Tư vấn Tuyển sinh Hướng...</a></li>
                                        <li style="list-style-type: square;"><a href="http://www.tlu.edu.vn/sinh-vien-tuong-lai/truong-dh-thuy-loi-vien-ngoc-xanh-13155" style="color: black;">Trường ĐH Thủy Lợi- viên ngọ xanh...</a></li>
                                        <li style="list-style-type: square;"><a href="http://www.tlu.edu.vn/sinh-vien-tuong-lai/bai-thi-to-hop-thpt-van-giu-ba-dau-diem-11054" style="color: black;">Bài thi tôt hợp THPT vẫn giữ ba đầu điểm</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-sm">
                                <div class="card-info-img">
                                    <a href="http://www.tlu.edu.vn/sinh-vien-hien-tai" target="_blank"  title="Tuyển sinh Đại Học" rel="follow, index">
                                        <img src="Images/CurentStudent.jpg" alt="">
                                    </a>
                                </div>
                                <div class="card-info-body">
                                    <ul class="unstyle-dot">
                                        <li style="list-style-type: square;"><a href="http://www.tlu.edu.vn/sinh-vien-hien-tai/gioi-thieu-sach-huong-dan-thi-nghiem-13227" style="color: black;">Giới thiệu sách:"Hướng dẫn thí nghiệm...</a></li>
                                        <li style="list-style-type: square;"><a href="http://www.tlu.edu.vn/sinh-vien-hien-tai/mua-he-xanh-2020-chien-dich-tinh-13226" style="color: black;">"Mùa hè xanh 2020"- chiến dịch tình...</a></li>
                                        <li style="list-style-type: square;"><a href="http://www.tlu.edu.vn/sinh-vien-hien-tai/dh-thuy-loi-don-hang-chuc-luu-hoc-sinh-13212" style="color: black;">ĐH Thủy Lợi đón hàng chục lưu học sinh...</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-sm">
                                <div class="card-info-img">
                                    <a href="http://www.tlu.edu.vn/cuu-sinh-vien" target="_blank"  title="Tuyển sinh Đại Học" rel="follow, index">
                                        <img src="Images/Alumi.jpg" alt="">
                                    </a>
                                </div>
                                <div class="card-info-body">
                                    <ul class="unstyle-dot">
                                        <li style="list-style-type: square;"><a href="http://www.tlu.edu.vn/cuu-sinh-vien/gan-bo-het-minh-vi-mot-tinh-yeu-mai-11095" style="color: black;">Gắn bó hết mình vì một tình...</a></li>
                                        <li style="list-style-type: square;"><a href="http://www.tlu.edu.vn/cuu-sinh-vien/phien-hop-thu-4-cua-ban-chap-hanh-hoi-11083" style="color: black;">Phiên họp thứ 4 của Ban chấp...</a></li>
                                        <li style="list-style-type: square;"><a href="http://www.tlu.edu.vn/cuu-sinh-vien/chi-hoi-nganh-thuy-dien-duoc-thanh-lap-10678" style="color: black;">Chi hội ngành Thủy điện được...</a></li>
                                    </ul>
                                </div>
                            </div> 
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container my-5">
            <div class="heading text-center">
                <h3 class="title typescale-1">Đối tác tiêu biểu của trường</h3>
            </div>
            <div id="demo" class="carousel slide" data-ride="carousel">

                <!-- Indicators -->
                <ul class="carousel-indicators">
                  <li data-target="#demo" data-slide-to="0" class="active"></li>
                  <li data-target="#demo" data-slide-to="1"></li>
                  <li data-target="#demo" data-slide-to="2"></li>
                </ul>
                
                <!-- The slideshow -->
                <div class="container carousel-inner no-padding">
                  <div class="carousel-item active">
                    <div class="col-xs-3 col-sm-3 col-md-3">
                      <a href="#"><img src="Images/01tudelft.jpg"></a>
                    </div>    
                    <div class="col-xs-3 col-sm-3 col-md-3">
                      <a href="#"><img src="Images/02brescia.jpg"></a>
                    </div>   
                    <div class="col-xs-3 col-sm-3 col-md-3">
                        <a href="#"><img src="Images/03kyushu.jpg"></a>
                    </div>   
                    <div class="col-xs-3 col-sm-3 col-md-3">
                        <a href="#"><img src="Images/04tohoku.jpg"></a>
                    </div>   
                  </div>
                  <div class="carousel-item">
                    <div class="col-xs-3 col-sm-3 col-md-3">
                        <a href="#"><img src="Images/05jj.jpg"></a>
                    </div>    
                    <div class="col-xs-3 col-sm-3 col-md-3">
                        <a href="#"><img src="Images/06colorado.jpg"></a>
                    </div>   
                    <div class="col-xs-3 col-sm-3 col-md-3">
                        <a href="#"><img src="Images/07uark.jpg"></a>
                    </div>   
                    <div class="col-xs-3 col-sm-3 col-md-3">
                        <a href="#"><img src="Images/08en.jpg"></a>
                    </div>  
                  </div>
                  <div class="carousel-item">
                    <div class="col-xs-3 col-sm-3 col-md-3">
                        <a href="#"><img src="Images/09damwatch.jpg"></a>
                    </div>    
                    <div class="col-xs-3 col-sm-3 col-md-3">
                        <a href="#"><img src="Images/10gns.jpg"></a>
                    </div>    
                  </div>
                </div>
                
                <!-- Left and right controls -->
                <a class="carousel-control-prev" href="#demo" data-slide="prev">
                  <span class="carousel-control-prev-icon"></span>
                </a>
                <a class="carousel-control-next" href="#demo" data-slide="next">
                  <span class="carousel-control-next-icon"></span>
                </a>
              </div>
          </div>
    </section>

    
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

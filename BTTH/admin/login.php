<!doctype html>
<html lang="en">
 <head>
    <title>Đăng nhập</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<style>
    .form-control {
        background-color: transparent;
        border-top: 0;
        border-right: 0;
        border-left: 0;
        border-radius: 0;
        width: 100%;
        padding: .375rem .75rem;
        font-size: 1rem;
        line-height: 1.5;
        border-bottom: .0625rem solid #ccc;
    }
    html, body {
        height: 100%;
        background-color: #ccc;
    }

    .logo_container{
        height: 100%;
        display: flex;
        align-items: center;
        justify-content: center;
        padding-top: 30px;
    }
    .signup_container {
        height: 100%;
        display: flex;
        align-items: center;
        justify-content: center;
    }
    form{
        padding: 40px 40px;
    }
    </style>
</head>
  <body>
    <main>
	<div class="logo_container ">
            <img src="Images/logo.png" alt="">
        </div>
        <div class="signup_container" style="padding-top:50px">
            <div class="row">
                <div class="col-md-12" style="background-color: white;">
                    <form action="process-login.php"method="POST">
                        <div class="form-group" style="margin-top:25px">
                            <label for="username">TÊN ĐĂNG NHẬP</label>
                            <input class="form-control" type="text" name="txtUserName" id="txtUserName" placeholder="tài khoản đăng nhập" required ng-model="Username"/>
                        </div>
                        <div class="form-group">
                            <label for="password">MẬT KHẨU</label>
                            <input class="form-control" type="password" name="txtPassword" id="txtPassword" placeholder="********" required ng-model="Password"/>
                        </div>
                        <div class="m-t-lg">
                            <div class="form-group">
                                <button class="btn btn-dark" name="sbmLogin" id="sbmLogin" value="Login" style="padding: 8px 40px;border-radius: 2.1875rem;">ĐĂNG NHẬP</button>
                            </div>
                        </div>
	                    <div>
		                    <p style="color:#111">
			                    Bạn chưa có tài khoản? <a href="register.php" class="">Gửi yêu cầu</a> tạo tài khoản mới
		                    </p>
	                    </div>
	                    <div>
			                <a href="js/script.js" class="">Bạn đã quên mật khẩu?</a>
	                    </div>
                    </form>  
                </div>
            </div>
        </div>
    </main>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>

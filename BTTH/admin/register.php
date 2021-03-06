<!doctype html>
<html lang="en">
  <head>
    <title>Đăng kí</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
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
        .register_container {
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
        <div class="logo_container " style="padding-bottom:25px;">
            <img src="Images/logo.png" alt="">
        </div>
        <div class="register_container">
          <div class="row" style="background-color: white;">
              <div class="col-md-12">
                  <form action="process-register.php" method="POST" style="width:400px;">
                      <div class="form-group">
                          <label for="">Username</label>
                          <input type="text" class="form-control" name="txtUserName" id="txtUserName" aria-describedby="emailHelpId" placeholder="">

                      </div>
                      <div class="form-group">
                          <label for="">Email</label>
                          <input type="email" class="form-control" name="txtEmail" id="txtEmail" aria-describedby="emailHelpId" placeholder="">

                      </div>
                      <div class="form-group">
                          <label for="">Password</label>
                          <input type="password" class="form-control" name="txtPassword" id="txtPassword" aria-describedby="emailHelpId" placeholder="">

                      </div>
                      <div class="form-group">
                          <label for="">Confirm Password</label>
                          <input type="password" class="form-control" name="txtPassword2" id="txtPassword2" aria-describedby="emailHelpId" placeholder="">
                      </div>
                      <div class="form-group">
                          <input type="submit" class="form-control btn btn-primary" value="Register" name="txtLogin" id="txtLogin" aria-describedby="emailHelpId" placeholder="">
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

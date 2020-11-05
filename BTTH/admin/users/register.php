
<?php
    require 'includes/config.php';
    if($_POST['username']==""||$_POST['email']==""||$_POST['role']==""||$_POST['password']==""||$_POST['created_at']==""||$_POST['updated_at']=="")
    {
        header("location:index.php?err=loi");
    } 
    else{
        $id=$_POST['id'];
        $user_name=$_POST['username'];
        $email=$_POST['email'];
        $role=$_POST['role'];
        $password=$_POST['password'];
        $created_at=$_POST['created_at'];
        $updated_at=$_POST['updated_at'];
        $sql = "INSERT INTO lop  (id,username,email,role,password,created_at,updated_at)
        VALUES ('$id', '$user_name', '$email', '$role','$password','$created_at','$updated_at')";
        if (mysqli_query($conn, $sql)) {
            header('location: index.php  ');
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($connect);
        }
    };
?>
<!doctype html>
<html lang="en">
  <head>
    <title>Đăng kí</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
    <main class="container">
        <div class="row">
            <div class="col-md-12">
                <form action="index.php" method="POST">
                    <div class="form-group">
                        <label for="txtFirstName">Tên đăng nhập:</label>
                        <input type="text" class="form-control" name="txtUserName" id="txtUserName">
                    </div>
                    <div class="form-group">
                        <label for="txtEmail">Email:</label>
                        <input type="email" class="form-control" name="txtEmail" id="txtEmail">
                    </div>
                    <div class="form-group">
                        <label>Role</label>
                        <select class="text-input" name="role">
                            <option value="user">User</option>
                            <option value="admin">Admin</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="txtPassword1">Password:</label>
                        <input type="password" class="form-control" name="txtPassword1" id="txtPassword1">
                    </div>
                    <div class="form-group">
                        <label for="txtPassword2">Password Confirm:</label>
                        <input type="password" class="form-control" name="txtPassword2" id="txtPassword2">
                    </div>
                    <div class="form-group">
                        <input type="submit" class="form-control bg-success text-light" name="sbmRegister" id="sbmRegister" value="Register">
                    </div>
                </form>
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
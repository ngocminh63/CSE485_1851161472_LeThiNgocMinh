<?php
  require 'includes/config.php';

  $username =  "";
  $name_err =  "";
  $email = "";
  $role = "";
  $password= "";
  if($_SERVER["REQUEST_METHOD"] == "POST"){
      if(empty(trim($_POST["username"]))){
          $name_err = "Please enter a username.";
      } else{
          $sql = "SELECT id FROM users WHERE username = ?";

          if($stmt = mysqli_prepare($conn, $sql)){
              mysqli_stmt_bind_param($stmt, "s", $param_name);

              $param_name = trim($_POST["username"]);

              if(mysqli_stmt_execute($stmt)){
                  mysqli_stmt_store_result($stmt);

                  if(mysqli_stmt_num_rows($stmt) == 1){
                      $name_err = "This name is already taken.";
                  } else{
                      $username = trim($_POST["username"]);
                  }
              } else{
                  echo "Oops! Something went wrong. Please try again later.";
              }

              mysqli_stmt_close($stmt);
          }
      }
      if(empty($name_err) ){
          $email = trim( strip_tags( $_POST['email'] ) );
          $role = trim( strip_tags( $_POST['role'] ));
          $password = trim( strip_tags( $_POST['password'] ));

          $sql = "INSERT INTO users (username, email,role, password) VALUES (?,?,?,?)";

          if($stmt = mysqli_prepare($conn, $sql)){
              mysqli_stmt_bind_param($stmt, "sssss", $param_name, $email, $role, $password);

              $param_name = $username;

              if(mysqli_stmt_execute($stmt)){
                  header("location: index.php");
              } else{
                  echo "Something went wrong. Please try again later.";
              }

              mysqli_stmt_close($stmt);
          }
      }

    // Close connection
    mysqli_close($conn);
  }
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
                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" class="boder border-success mt-5" >
                    <div class="form-group <?php echo (!empty($name_err)) ? 'has-error' : ''; ?>">
                        <label><strong>User Name <span class="text-danger">*</span></strong></label>
                        <input type="text" name="username" class="form-control" value="<?php echo $username; ?>">
                        <span class="help-block"><?php echo $name_err; ?></span>
                    </div>
                    <div class="form-group">
                        <label for=""><strong>Email</strong></label>
                        <input type="email" name="email" class="form-control" value="<?php echo $email; ?>">
                    </div>
                    <div class="form-group">
                        <label>Role</label>
                        <select class="text-input" name="role">
                            <option value="author">Author</option>
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
                        <input type="submit" name="submit" class="btn btn-primary" value="Submit">
                        <a class="btn btn-light" href="index.php" role="button">Cancel</a>
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
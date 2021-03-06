<?php

  require 'includes/config.php';
  require 'includes/function.php';
  $id = $_GET['id'];
  $user = viewRecord($id);
  foreach ($user as $row){
    $username =  $row['1'];
    $email = $row['2'];
  }
  

  if($_SERVER["REQUEST_METHOD"] == "POST"){
    global $conn;
    $username = trim( strip_tags( $_POST['username'] ) );
    $email = trim( strip_tags( $_POST['email'] ) );
    $sql = "UPDATE users SET username = '$username', email = '$email' where id ='$id'";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    header('Location: index.php');
    exit();
  }

?>

<!doctype html>
<html lang="en">
  <head>
    <title>Update Record</title>
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
        display: flex;
        align-items: center;
        justify-content: center;
        padding-top: 30px;
    }
    .body_container{
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
  <?php 
    $id = $_GET['id'];
    $user = viewRecord($id);
    foreach ($user as $row){
      $name =  $row['1'];
      $email = $row['2'];
    }
  ?>
    
  <div class="logo_container ">
    <img src="Images/logo.png" alt="">
  </div>
    
    <div class="body_container" style="padding-top:50px">
      <div class="row align-center">
            <div class="col-12" style="background-color: white;">
            <h2>Update Record</h2>
            <form name="myForm" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]).'?id='.$_GET['id']; ?>" method="post" class="boder border-success" onsubmit="return validateform()">
                <p>Plese edit the input values and submit to update the record.</p>
                <div class="form-group ">
                    <label><strong> User Name <span class="text-danger"></span></strong></label>
                    <input type="text" name="username" class="form-control" value="<?php echo $username; ?>">
                </div>
                <div class="form-group">
                    <label for=""><strong>Email</strong></label>
                    <input type="email" name="email" class="form-control" value="<?php echo $email; ?>">
                </div>
                <div class="form-group">
                    <input type="submit" name="submit" class="btn btn-primary" value="Save">
                    <a name="" id="" class="btn btn-light border" href="index.php" role="button">Cancel</a>
                </div>
            </form>
            </div>
        </div>
    </div>

    <script>
    function validateform() {
      var x = document.forms["myForm"]["username"].value;
      if (x == "" || x == null) {
        alert("Bạn cần nhập tên đăng nhập");
        return false;
      }
      var y = document.forms["myForm"]["email"].value;
      if (y == "" || y == null) {
        alert("Bạn cần nhập email");
        return false;
      }
    }
  </script>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>

<?php

  require 'includes/config.php';
  require 'includes/function.php';
  $id = $_GET['id'];
  $user = viewRecord($id);
  foreach ($user as $row){
    $user_name =  $row['1'];
    $email = $row['2'];
    $role = $row['3'];
    $password=$row['4'];
  }
  

  if($_SERVER["REQUEST_METHOD"] == "POST"){
    global $conn;
    $user_name = trim( strip_tags( $_POST['username'] ) );
    $email = trim( strip_tags( $_POST['email'] ) );
    $password = trim( strip_tags( $_POST['password'] ));
    $role = trim( strip_tags( $_POST['role'] ) );
    // $date = trim( strip_tags( $_POST['date'] ) );
    $sql = "UPDATE users SET username = '$user_name', email = '$email',role = '$role', password = '$password' where id ='$id'";
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
  </head>
  <body>
  <?php 
    $id = $_GET['id'];
    $user = viewRecord($id);
    foreach ($user as $row){
      $username =  $row['1'];
      $email = $row['2'];
      $role = $row['3'];
    }
  ?>
    <div class="container">
      <div class="row align-center">
            <div class="col-12 col-md-10">
            <h2>Update Record</h2>
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]).'?id='.$_GET['id']; ?>" method="post" class="boder border-success mt-5" >
                <p>Plese edit the input values and submit to update the record.</p>
                <div class="form-group ">
                    <label><strong>User Name <span class="text-danger"></span></strong></label>
                    <input type="text" name="name" class="form-control" value="<?php echo $name; ?>">
                </div>
                <div class="form-group">
                    <label for=""><strong>Email</strong></label>
                    <textarea class="form-control" name="description"  rows="3" ><?php echo $description; ?></textarea>
                </div>
                <div class="form-group">
                  <label for=""><strong>Password</strong></label>
                  <input type="text" class="form-control" name="salary" value="<?php echo $salary; ?>" aria-describedby="helpId" >
                </div>
                <div class="form-group">
                    <label>Role</label>
                    <select class="text-input" name="role">
                        <option value="user">User</option>
                        <option value="admin">Admin</option>
                    </select>
                </div>
                <div class="form-group">
                    <input type="submit" name="submit" class="btn btn-primary" value="Save">
                    <a name="" id="" class="btn btn-light border" href="index.php" role="button">Cancel</a>
                </div>
            </form>
            </div>
        </div>
        <?php
            
        ?>
    </div>



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>

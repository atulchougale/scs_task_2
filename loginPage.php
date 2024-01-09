<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include 'dbconnect.php';
error_reporting(0);
session_start();
?>



<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Form | FOODII</title>
  <link rel="stylesheet" href="./css/style.css?v=2">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" />
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

</head>

<body>
  <div class="container">
    <div class="wrapper">
      <div class="title"><span>Login Form</span></div>
      <form action="#" method="post">
        <div class="row">
          <i class="fas fa-envelope"></i>
          <input type="text" placeholder="Email" name="email" required>
        </div>
        <div class="row">
          <i class="fas fa-lock"></i>
          <input type="password" placeholder="Password" name="password" required>
        </div>
        <div class="pass"><a href="#">Forgot password?</a></div>
        <div class="row button">
          <input type="submit" name="submit" value="Login">
        </div>
        <div class="signup-link">Not a member? <a href="registerPage.php">Register now</a></div>
      </form>
    </div>
  </div>




  <?php
  if (isset($_POST['submit'])) {

    $email = mysqli_real_escape_string($conn, $_POST['email']);

    $password = mysqli_real_escape_string($conn, $_POST['password']);


    $query = "SELECT * FROM registration WHERE email = '$email' && password = '$password' ";

    $data = mysqli_query($conn, $query);

    $total = mysqli_num_rows($data);

    if ($total == 1) {
      $_SESSION['user_email'] = $email;
      if ($email === "admin@gmail.com") {

        echo  "<script>
                swal({
                    title: 'Login Successfully!',
                    text: 'Welcome To FOODIIs Admin Dashboard.',
                    icon: 'success',
                    button: 'Ok Done!',
                }).then(function() {
                    window.location.href = 'adminDashboard.php';
                });
              </script>";
      } else {
        echo  "<script>
            swal({
                title: 'Login Successfully!',
                text: 'Welcome To FOODIIs.',
                icon: 'success',
                button: 'Ok Done!',
            }).then(function() {
                window.location.href = 'index.php';
            });
          </script>";
      }
    } else {
      echo "<script>
                swal({
                    title: 'Error!',
                    text: 'Invalid email or password!',
                    icon: 'error',
                    button: 'Ok Done!',
                }).then(function() {
                    window.location.href = 'loginPage.php';
                });
            </script>";
    }
  }
  ?>
</body>

</html>
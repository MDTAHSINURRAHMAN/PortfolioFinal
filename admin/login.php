<?php
require('../includes/config.php');
if (isset($_POST['login'])) {
  $email = $_POST['email'];
  $password = $_POST['password'];
  $query = "SELECT * FROM admin WHERE email ='$email' && password = '$password'";
  $run = mysqli_query($db, $query);
  $data = mysqli_fetch_array($run);
  if (count($data) > 0) {
    $_SESSION['isUserLoggedIn'] = true;
    $_SESSION['emailId'] = $_POST['email'];
    echo "<script>window.location.href = '/Portfolio/Admin/index.php';</script>";
  } else {
    echo "<script>alert('Incorrect email or password !')</script";
  }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Admin</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/icheck-bootstrap/3.0.1/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/3.1.0/css/adminlte.min.css">
  <style>
    .login-box {
      position: absolute;
      top: 50%;
      left: 42%;


      height: 300px;
      /* Adjust as per your need */
      width: 300px;
      /* Adjust as per your need */
    }

    .login-logo {
      text-align: center;
    }

    .login-card-body {
      padding: 20px;
    }

    .login-page {
      display: flex;
      justify-content: center;
      align-items: center;
      position: relative;
    }
  </style>
</head>

<body class="hold-transition login-page">
  <div class="login-box">
    <div class="login-logo">
      <a href="index.php"><b>MY</b> PORTFOLIO</a>
    </div>
    <!-- /.login-logo -->
    <div class="card">
      <div class="card-body login-card-body">
        <p class="login-box-msg">Admin Panel</p>

        <form method="post">
          <div class="input-group mb-3">
            <input type="email" class="form-control" name="email" placeholder="Email" required>
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-envelope"></span>
              </div>
            </div>
          </div>
          <div class="input-group mb-3">
            <input type="password" class="form-control" name="password" placeholder="Password" required>
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-lock"></span>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-8">
              <div class="icheck-primary">
                <input type="checkbox" id="remember">
                <label for="remember">
                  Remember Me
                </label>
              </div>
            </div>
            <!-- /.col -->
            <div class="col-4">
              <button type="submit" name="login" class="btn btn-primary btn-block">Sign In</button>
            </div>
            <!-- /.col -->
          </div>
        </form>

        <!-- /.social-auth-links -->

      </div>
      <!-- /.login-card-body -->
    </div>
  </div>
  <!-- /.login-box -->

  <!-- jQuery -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.0/js/bootstrap.bundle.min.js"></script>
  <!-- AdminLTE App -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/3.1.0/js/adminlte.min.js"></script>
</body>

</html>
<?php
require('../includes/config.php');
if (!isset($_SESSION['isUserLoggedIn'])) {
  echo "<script>window.location.href = '/Portfolio/Admin/login.php';</script>";
}
$query = "SELECT * FROM home,section_control,social_media,about,personal_info";
$run = mysqli_query($db, $query);
$user_data = mysqli_fetch_array($run);
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Admin Panel | Dashboard</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="plugins/summernote/summernote-bs4.min.css">
</head>

<body class="hold-transition sidebar-mini layout-fixed">
  <div class="wrapper">

    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
      </ul>


      <!-- Right navbar links -->
      <ul class="navbar-nav ml-auto">
        <!-- Messages Dropdown Menu -->
        <!-- Notifications Dropdown Menu -->
        <li class="nav-item">
          <a class="nav-link" data-widget="fullscreen" href="#" role="button">
            <i class="fas fa-expand-arrows-alt"></i>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../includes/logout.php">
            Logout
          </a>
        </li>
      </ul>
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Brand Logo -->
      <a href="index3.html" class="brand-link">
        <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">Admin Panel</span>
      </a>

      <!-- Sidebar -->
      <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
          <div class="image">
            <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
          </div>
          <div class="info">
            <a href="#" class="d-block">MD Tahsinur Rahman</a>
          </div>
        </div>

        <!-- SidebarSearch Form -->
        <div class="form-inline">
          <div class="input-group" data-widget="sidebar-search">
            <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
            <div class="input-group-append">
              <button class="btn btn-sidebar">
                <i class="fas fa-search fa-fw"></i>
              </button>
            </div>
          </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
            <li class="nav-item menu-open">
              <a href="index.php" class="nav-link">
                <i class="fa fa-cog" aria-hidden="true"></i>
                <p>
                  Section Control
                </p>
              </a>

            </li>
            <li class="nav-item menu-open">
              <a href="index.php?homesetting=true" class="nav-link">
                <i class="fa fa-cog" aria-hidden="true"></i>
                <p>
                  Home Setting
                </p>
              </a>

            </li>
            <li class="nav-item menu-open">
              <a href="index.php?aboutsetting=true" class="nav-link">
                <i class="fa fa-cog" aria-hidden="true"></i>
                <p>
                  About Setting
                </p>
              </a>

            </li>
            <li class="nav-item menu-open">
              <a href="index.php?skillsetting=true" class="nav-link">
                <i class="fa fa-cog" aria-hidden="true"></i>
                <p>
                  Skill Control
                </p>
              </a>

            </li>
            <li class="nav-item menu-open">
              <a href="index.php?projectsetting=true" class="nav-link">
                <i class="fa fa-cog" aria-hidden="true"></i>
                <p>
                  Project Setting
                </p>
              </a>

            </li>
            <li class="nav-item menu-open">
              <a href="index.php?contactsetting=true" class="nav-link">
                <i class="fa fa-cog" aria-hidden="true"></i>
                <p>
                  Contact Setting
                </p>
              </a>

            </li>
            <li class="nav-item menu-open">
              <a href="index.php?changebackgroundsetting=true" class="nav-link">
                <i class="fa fa-cog" aria-hidden="true"></i>
                <p>
                  Change Background
                </p>
              </a>

            </li>
            <li class="nav-item menu-open">
              <a href="index.php?seosetting=true" class="nav-link">
                <i class="fa fa-cog" aria-hidden="true"></i>
                <p>
                  SEO Setting
                </p>
              </a>

            </li>
            <li class="nav-item menu-open">
              <a href="index.php?accountsetting=true" class="nav-link">
                <i class="fa fa-cog" aria-hidden="true"></i>
                <p>
                  Account Setting
                </p>
              </a>

            </li>



          </ul>
        </nav>
        <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0">Manage Site</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">

              </ol>
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content-header -->

      <!-- Main content -->
      <section class="content">
        <div class="container-fluid">
          <!-- Small boxes (Stat box) -->
          <!-- /.row -->
          <!-- Main row -->
          <div class="row">
            <?php
            if (isset($_GET['homesetting'])) { ?>
              <div class="card card-primary col-lg-12">
                <div class="card-header">
                  <h3 class="card-title">Update Home</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <img src="../packages/images/<?= $user_data['pro_pic'] ?>" class="col-2">
                <form role="form" action="../includes/admin.php" method="post" enctype="multipart/form-data">
                  <div class="card-body">
                    <div class="form-group">
                      <label for="exampleInputEmail1">About Profile Pic</label>
                      <input type="file" class="form-control" name="pro">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Title / Name</label>
                      <input type="text" class="form-control" name="title" value="<?= $user_data['title'] ?>" id="exampleInputEmail1" placeholder="Enter title/name">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Subtitle</label>
                      <input type="text" class="form-control" name="subtitle" value="<?= $user_data['subtitle'] ?>" id="exampleInputPassword1" placeholder="Enter subtitle">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Description</label><br>
                      <textarea cols="50" name="description"><?= $user_data['description'] ?></textarea>
                    </div>

                    <div class="form-check">
                      <input type="checkbox" name="showicons" class="form-check-input" id="exampleCheck1" <?php
                                                                                                          if ($user_data['home_section']) {
                                                                                                            echo "checked";
                                                                                                          }
                                                                                                          ?>>
                      <label class="form-check-label" for="exampleCheck1">Show Social Icons</label>
                    </div>
                  </div>
                  <!-- /.card-body -->

                  <div class="card-footer">
                    <button type="submit" name="update-home" class="btn btn-primary">Save Changes</button>
                  </div>
                </form>
              </div>
            <?php
            } else if (isset($_GET['aboutsetting'])) {
            ?>

              <div class="card card-primary col-lg-12">
                <div class="card-header">
                  <h3 class="card-title">Update About</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <img src="../packages/images/<?= $user_data['profile_pic'] ?>" class="col-2">
                <form role="form" action="../includes/admin.php" method="post" enctype="multipart/form-data">
                  <div class="card-body">

                    <div class="form-group">
                      <label for="exampleInputEmail1">About Profile Pic</label>
                      <input type="file" class="form-control" name="profile">
                    </div>

                    <div class="form-group">
                      <label for="exampleInputEmail1">About Title / Name</label>
                      <input type="text" class="form-control" name="abouttitle" value="<?= $user_data['about_title'] ?>" id="exampleInputEmail1" placeholder="Enter title/name">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">About Subtitle</label>
                      <input type="text" class="form-control" name="aboutsubtitle" value="<?= $user_data['about_subtitle'] ?>" id="exampleInputPassword1" placeholder="Enter subtitle">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">About Description</label><br>
                      <textarea cols="50" name="aboutdesc"><?= $user_data['about_desc'] ?></textarea>
                    </div>

                  </div>
                  <!-- /.card-body -->

                  <div class="card-footer">
                    <button type="submit" name="update-about" class="btn btn-primary">Save Changes</button>
                  </div>
                </form>
              </div>

            <?php
            } else {
            ?>

              <form method="post" action="../includes/admin.php">
                <div class="custom-control custom-switch custom-switch-off-danger custom-switch-on-success">
                  <input type="checkbox" name="home" class="custom-control-input" id="customSwitch1" <?php
                                                                                                      if ($user_data['home_section']) {
                                                                                                        echo "checked";
                                                                                                      }
                                                                                                      ?>>
                  <label class="custom-control-label" for="customSwitch1">Home Section</label>
                </div>
                <div class="custom-control custom-switch custom-switch-off-danger custom-switch-on-success">
                  <input type="checkbox" name="about" class="custom-control-input" id="customSwitch2" <?php
                                                                                                      if ($user_data['about_section']) {
                                                                                                        echo "checked";
                                                                                                      }
                                                                                                      ?>>
                  <label class="custom-control-label" for="customSwitch2">About Section</label>
                </div>
                <div class="custom-control custom-switch custom-switch-off-danger custom-switch-on-success">
                  <input type="checkbox" name="skill" class="custom-control-input" id="customSwitch3" <?php
                                                                                                      if ($user_data['skill_section']) {
                                                                                                        echo "checked";
                                                                                                      }
                                                                                                      ?>>
                  <label class="custom-control-label" for="customSwitch3">Skill Section</label>
                </div>
                <div class="custom-control custom-switch custom-switch-off-danger custom-switch-on-success">
                  <input type="checkbox" name="project" class="custom-control-input" id="customSwitch4" <?php
                                                                                                        if ($user_data['project_section']) {
                                                                                                          echo "checked";
                                                                                                        }
                                                                                                        ?>>
                  <label class="custom-control-label" for="customSwitch4">Project Section</label>
                </div>
                <div class="custom-control custom-switch custom-switch-off-danger custom-switch-on-success">
                  <input type="checkbox" name="contact" class="custom-control-input" id="customSwitch5" <?php
                                                                                                        if ($user_data['contact_section']) {
                                                                                                          echo "checked";
                                                                                                        }
                                                                                                        ?>>
                  <label class="custom-control-label" for="customSwitch5">Contact Section</label>
                </div>
                <input type="submit" cla ss="btn btn-sm btn-primary" name="update-section" value="Save Changes">
              </form>
            <?php
            }
            ?>
          </div>
          <!-- /.row (main row) -->
        </div><!-- /.container-fluid -->
      </section>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    <footer class="main-footer">
      <strong>Copyright &copy; 2020 <a href="https://adminlte.io">MD Tahsinur Rahman</a>.</strong>
      All rights reserved.
      <div class="float-right d-none d-sm-inline-block">
        <b>Version</b> 3.1.0-rc
      </div>
    </footer>

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
      <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
  </div>
  <!-- ./wrapper -->

  <!-- jQuery -->
  <script src="plugins/jquery/jquery.min.js"></script>
  <!-- jQuery UI 1.11.4 -->
  <script src="plugins/jquery-ui/jquery-ui.min.js"></script>
  <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
  <script>
    $.widget.bridge('uibutton', $.ui.button)
  </script>
  <!-- Bootstrap 4 -->
  <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- ChartJS -->
  <script src="plugins/chart.js/Chart.min.js"></script>
  <!-- Sparkline -->
  <script src="plugins/sparklines/sparkline.js"></script>
  <!-- JQVMap -->
  <script src="plugins/jqvmap/jquery.vmap.min.js"></script>
  <script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
  <!-- jQuery Knob Chart -->
  <script src="plugins/jquery-knob/jquery.knob.min.js"></script>
  <!-- daterangepicker -->
  <script src="plugins/moment/moment.min.js"></script>
  <script src="plugins/daterangepicker/daterangepicker.js"></script>
  <!-- Tempusdominus Bootstrap 4 -->
  <script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
  <!-- Summernote -->
  <script src="plugins/summernote/summernote-bs4.min.js"></script>
  <!-- overlayScrollbars -->
  <script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
  <!-- AdminLTE App -->
  <script src="dist/js/adminlte.js"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="dist/js/demo.js"></script>
  <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
  <script src="dist/js/pages/dashboard.js"></script>
</body>

</html>
<?php
include_once 'dbconfig.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" href="assets/images/download.jpg" type="image/ico" />

  <title> Sistem Informasi PT. Maju Jaya</title>

  <link href="assets/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="assets/nprogress/nprogress.css" rel="stylesheet">
  <link href="assets/iCheck/skins/flat/green.css" rel="stylesheet">
  <link href="assets/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
  <link href="assets/css/custom.min.css" rel="stylesheet">
</head>

<body class="nav-md">
  <div class="container body">
    <div class="main_container">
      <div class="col-md-3 left_col">
        <div class="left_col scroll-view">
          <div class="navbar nav_title" style="border: 0;">
            <center>
              &nbsp; <a href="index.php" style="color:#fff;"><span>
                  <font size="6" color="white" face="Helvetica Neue">Sistem Informasi</font>
                </span></a>
              &nbsp; <a href="index.php" style="color:#fff;"><span>
                  <font size="5" color="white" face="Helvetica Neue">PT. Maju Jaya</font>
                </span></a>
            </center>
          </div>

          <div class="clearfix"></div>

          <br />

          <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
            <div class="menu_section">
              <ul class="nav side-menu">
                <li><a href="index.php"><i class="fa fa-home"></i> Home <span class="fa fa-chevron"></span></a>
                </li>
                <li><a href="#"><i class="fa fa-desktop"></i> Data Pegawai <span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu">
                    <li><a href="index.php?page=lihat_record">Tampil Data</a></li>
                    <li><a href="index.php?page=tambah_record">Tambah Data</a></li>
                  </ul>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>

      <div class="top_nav">
        <div class="nav_menu">
          <div class="nav toggle">
            <a id="menu_toggle"><i class="fa fa-bars"></i></a>
          </div>
        </div>
      </div>

      <div class="right_col" role="main">
        <?php
        $queries = array();
        parse_str($_SERVER['QUERY_STRING'], $queries);
        error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
        switch ($queries['page']) {
          case 'lihat_record':
            include 'lihat_record.php';
            break;
          case 'tambah_record':
            include 'tambah_record.php';
            break;
          case 'edit_record':
            include 'edit_record.php';
            break;
          case 'hapus_record':
            include 'hapus_record.php';
            break;
          default:
            include 'home.php';
            break;
        }
        ?>
      </div>

      <footer>
        <div class="pull-right">
          Copyright @ 2021 Sistem Informasi PT. Maju Jaya
        </div>
        <div class="clearfix"></div>
      </footer>
    </div>
  </div>

  <script src="assets/jquery/dist/jquery.min.js"></script>
  <script src="assets/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="assets/fastclick/lib/fastclick.js"></script>
  <script src="assets/nprogress/nprogress.js"></script>
  <script src="assets/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
  <script src="assets/iCheck/icheck.min.js"></script>
  <script src="assets/skycons/skycons.js"></script>
  <script src="assets/js/custom.min.js"></script>

</body>

</html>
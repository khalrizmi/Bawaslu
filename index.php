<?php 

session_start();
include 'config/connection.php';

if ($_SESSION['login'] == false) {
  header('Location:home.php');
}

if (isset($_GET['logout'])) {
  session_destroy();
  // header('login.php');
  echo "<script>window.location.href='home.php'</script>";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta name="description" content="Vali is a responsive and free admin theme built with Bootstrap 4, SASS and PUG.js. It's fully customizable and modular.">

  <title>SAW</title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Main CSS-->
  <link rel="stylesheet" type="text/css" href="vali/css/main.css">
  <!-- Font-icon css-->
  <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body class="app sidebar-mini rtl">
  <!-- Navbar-->
  <header class="app-header"><a class="app-header__logo" href="index.html">Bawaslu Jabar</a>
    <!-- Sidebar toggle button--><a class="app-sidebar__toggle" href="#" data-toggle="sidebar" aria-label="Hide Sidebar"></a>
    <!-- <h4 class="text-white" style="margin-top: 10px;">Sistem Pendukung Keputusan Penyelesaian Calon Pegawai Baru</h4> -->
    <!-- Navbar Right Menu-->
    <ul class="app-nav">
      <!-- User Menu-->
      <li class="dropdown"><a class="app-nav__item" href="#" data-toggle="dropdown" aria-label="Open Profile Menu"><i class="fa fa-user fa-lg"></i></a>
        <ul class="dropdown-menu settings-menu dropdown-menu-right">
          <li><a class="dropdown-item" href="?logout"><i class="fa fa-sign-out fa-lg"></i> Logout</a></li>
        </ul>
      </li>
    </ul>
  </header>
  <!-- Sidebar menu-->
  <div class="app-sidebar__overlay" data-toggle="sidebar"></div>
  <aside class="app-sidebar">
    <div class="app-sidebar__user">
      <div>
        <p class="app-sidebar__user-name"><?= $_SESSION['nama'] ?></p>
      </div>
    </div>
    <ul class="app-menu">
      <li><a class="app-menu__item" href="index.php"><i class="app-menu__icon fa fa-dashboard"></i><span class="app-menu__label">Dashboard</span></a></li>
      <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-laptop"></i><span class="app-menu__label">Master Data</span><i class="treeview-indicator fa fa-angle-right"></i></a>
        <ul class="treeview-menu">
          <li><a class="treeview-item" href="?p=user"><i class="icon fa fa-circle-o"></i> User</a></li>
          <li><a class="treeview-item" href="?p=umur"><i class="icon fa fa-circle-o"></i> Umur</a></li>
          <li><a class="treeview-item" href="?p=pendidikan" rel="noopener"><i class="icon fa fa-circle-o"></i> Pendidikan</a></li>
          <li><a class="treeview-item" href="?p=ipk"><i class="icon fa fa-circle-o"></i> IPK</a></li>
          <li><a class="treeview-item" href="?p=status"><i class="icon fa fa-circle-o"></i> Status</a></li>
          <li><a class="treeview-item" href="?p=jarak"><i class="icon fa fa-circle-o"></i> Jarak Tempuh</a></li>
        </ul>
      </li>
      <li><a class="app-menu__item" href="?p=pelamar"><i class="app-menu__icon fa fa-pie-chart"></i><span class="app-menu__label">Data Pelamar</span></a></li>
      <li><a class="app-menu__item" href="?p=kriteria"><i class="app-menu__icon fa fa-pie-chart"></i><span class="app-menu__label">Data Kriteria</span></a></li>
      <li><a class="app-menu__item" href="?p=penilaian"><i class="app-menu__icon fa fa-pie-chart"></i><span class="app-menu__label">Penilaian</span></a></li>
      <li><a class="app-menu__item" href="?logout"><i class="app-menu__icon fa fa-pie-chart"></i><span class="app-menu__label">Logout</span></a></li>
    </ul>
  </aside>
  <main class="app-content">

    <?php 
    switch (@$_GET['p']) {
      case 'user':
      if (@$_GET['act'] == "create") {
        include 'page/user/create.php';
      } else if (@$_GET['act'] == "edit") {
        include 'page/user/edit.php';
      } else {
        include 'page/user/index.php';
      }
      break;

      case 'umur':
      if (@$_GET['act'] == "create") {
        include 'page/umur/create.php';
      } else if (@$_GET['act'] == "edit") {
        include 'page/umur/edit.php';
      } else {
        include 'page/umur/index.php';
      }
      break;

      case 'pendidikan':
      if (@$_GET['act'] == "create") {
        include 'page/pendidikan/create.php';
      } else if (@$_GET['act'] == "edit") {
        include 'page/pendidikan/edit.php';
      } else {
        include 'page/pendidikan/index.php';
      }
      break;

      case 'ipk':
      if (@$_GET['act'] == "create") {
        include 'page/ipk/create.php';
      } else if (@$_GET['act'] == "edit") {
        include 'page/ipk/edit.php';
      } else {
        include 'page/ipk/index.php';
      }
      break;

      case 'status':
      if (@$_GET['act'] == "create") {
        include 'page/status/create.php';
      } else if (@$_GET['act'] == "edit") {
        include 'page/status/edit.php';
      } else {
        include 'page/status/index.php';
      }
      break;

      case 'jarak':
      if (@$_GET['act'] == "create") {
        include 'page/jarak/create.php';
      } else if (@$_GET['act'] == "edit") {
        include 'page/jarak/edit.php';
      } else {
        include 'page/jarak/index.php';
      }
      break;

      case 'kriteria':
      include 'page/kriteria/index.php';
      break;

      case 'penilaian':
      include 'page/penilaian/index.php';
      break;

      case 'pelamar':
      if (@$_GET['act'] == "show") {
        include 'page/pelamar/show.php';
      } else {
        include 'page/pelamar/index.php';
      }
      break;

      default:
      include 'page/dashboard.php';
      break;
    }

    ?>

  </main>
  <!-- Essential javascripts for application to work-->
  <script src="vali/js/jquery-3.2.1.min.js"></script>
  <script src="vali/js/popper.min.js"></script>
  <script src="vali/js/bootstrap.min.js"></script>
  <script src="vali/js/main.js"></script>
  <!-- The javascript plugin to display page loading on top-->
  <script src="vali/js/plugins/pace.min.js"></script>
  <!-- Page specific javascripts-->

  <!-- Data table plugin-->
  <script type="text/javascript" src="vali/js/plugins/jquery.dataTables.min.js"></script>
  <script type="text/javascript" src="vali/js/plugins/dataTables.bootstrap.min.js"></script>
  <script type="text/javascript">$('#sampleTable').DataTable();</script>
</body>
</html>
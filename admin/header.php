<?php
session_start();
if ($_SESSION['user']['level'] != 'admin') {
  header("Location:../login.php");
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Aplikasi Kasir</title>
  <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet">
  <link href="../css/styles.css" rel="stylesheet">
  <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
</head>

<body class="sb-nav-fixed">
  <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
    <!-- Navbar Brand-->
    <a class="navbar-brand ps-3">Aplikasi kasir</a>
    <!-- Sidebar Toggle-->
    <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
  </nav>
  <div id="layoutSidenav">
    <div id="layoutSidenav_nav">
      <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
        <div class="sb-sidenav-menu">
          <div class="nav">
            <div class="sb-sidenav-menu-heading">Menu</div>
            <a class="nav-link" href="index.php">
              <div class="sb-nav-link-icon"><i class="fas fa-home-alt"></i></div>
              Beranda
            </a>
            <a class="nav-link" href="barang.php">
              <div class="sb-nav-link-icon"><i class="fas fa-clipboard"></i></div>
              Data Barang
            </a>
            <a class="nav-link" href="pembelian.php">
              <div class="sb-nav-link-icon"><i class="fas fa-tag"></i></div>
              Pembelian
            </a>
            <a class="nav-link" href="stock.php">
              <div class="sb-nav-link-icon"><i class="fas fa-file-alt"></i></div>
              Stock Barang
            </a>
            <a class="nav-link" href="masuk.php">
              <div class="sb-nav-link-icon"><i class="fas fa-boxes-packing"></i></div>
              Barang Masuk
            </a>
            <a class="nav-link" href="data-petugas.php">
              Data Petugas
            </a>
            <a class="nav-link" href="../logout.php">
              Logout
            </a>
            <div>
      </nav>
    </div>
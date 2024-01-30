<?php
require_once 'header.php';
require_once '../koneksi.php';
?>
<div id="layoutSidenav_content">
  <main>
    <div class="container-fluid px-4">
      <h1 class="mt-4">Data Barang</h1>
      <a href="pendataan-barang-tambah.php" class="btn btn-success mb-3">Tambah Data</a>
      <div class="card mb-4">
        <div class="card-body">
          <table id="datatablesSimple">
            <thead>
              <tr>
                <th>No.</th>
                <th>Nama Barang</th>
                <th>Harga Barang</th>
                <th>Stok Barang</th>
              </tr>
            </thead>
            <tbody>
              <?php
              $query = "SELECT * FROM produk";
              $result = $conn->query($query); ?>
              <?php
              $no = 1;
              while ($row = $result->fetch_assoc()) {
                echo "<tr><td>" . $no . "</td><td>" . $row["nama_produk"] . "</td><td>" . $row["harga"] . "</td><td>" . $row["stok_tersedia"] . "</td></tr>";
              } ?>
              <?php
              $conn->close();
              ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </main>
  <?php require_once 'footer.php' ?>
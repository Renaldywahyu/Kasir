<?php
require_once '../koneksi.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $conn->begin_transaction();
  $tanggal_pembelian = $_POST['tanggal_pembelian'];
  $nama_supplier = $_POST['nama_supplier'];
  $invoice_pembelian = $_POST['invoice_pembelian'];

  $conn->begin_transaction();
  try {
    $total_harga = 0;
    foreach ($_SESSION['pembelian_barang'] as $key => $value) {
      $produk_id = $value['produk_id'];
      $harga_beli = $value['harga_beli'];
      $jumlah = $value['jumlah'];
      $total_harga += $harga_beli * $jumlah;
    }

    $query_pembelian = "INSERT INTO pembelian (tanggal_pembelian, nama_supplier, invoice_pembelian,status,total_harga) VALUES ('$tanggal_pembelian', '$nama_supplier', '$invoice_pembelian','draft',$total_harga)";
    $conn->query($query_pembelian);

    $pembelian_id = $conn->insert_id;
    foreach ($_SESSION['pembelian_barang'] as $key => $value) {
      $produk_id = $value['produk_id'];
      $harga_beli = $value['harga_beli'];
      $jumlah = $value['jumlah'];
      $query_pembelian_detail = "INSERT INTO pembelian_detail (pembelian_id, produk_id, harga_beli, jumlah) VALUES ('$pembelian_id', '$produk_id', '$harga_beli', '$jumlah')";
      $conn->query($query_pembelian_detail);
    }

    $conn->commit();
    unset($_SESSION['pembelian_barang']);
    unset($_SESSION['tanggal_pembelian']);
    unset($_SESSION['nama_supplier']);
    unset($_SESSION['invoice_pembelian']);
    echo '<script>
            alert("Data berhasil disimpan");
            window.location.href = "data-pembelian.php";
        </script>';
  } catch (\Throwable $th) {
    $conn->rollback();
    $pesan =  "Data gagal disimpan : " . $th->getMessage();
    echo '<script>
        alert("' . $pesan . '");
        window.location.href = "data-pembelian-tambah.php";
    </script>';
  }
}

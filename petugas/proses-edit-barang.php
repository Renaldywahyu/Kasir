<?php
require_once '../koneksi.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $id_produk = $_POST['id_produk'];
  $nama_produk = $_POST['nama_produk'];
  $harga = $_POST['harga'];

  $query_update = "UPDATE produk SET nama_produk='$nama_produk', harga='$harga' WHERE id_produk=$id_produk";

  if ($conn->query($query_update) === TRUE) {
    echo '<script>
        alert("Berhasil melakukan edit data barang");
        window.location.href = "pendataan-barang.php";
      </script>';
    die;
  } else {
    echo "Error: " . $query . "<br>" . $conn->error;
  }
}

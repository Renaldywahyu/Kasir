<?php
require_once '../koneksi.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama_produk = $_POST['nama_produk'];
    $harga = $_POST['harga'];
    $stok_tersedia = $_POST['stok_tersedia'];

    $query = "INSERT INTO produk (nama_produk, harga, stok_tersedia) VALUES ('$nama_produk', '$harga', $stok_tersedia')";

    if ($conn->query($query) === TRUE) {
        header("Location:pendataan-barang.php");
    } else {
        echo "Error: " . $query . "<br>" . $conn->error;
    }
}

<?php
$servername = "localhost";
$database= "kasir";
$username = "root";
$password = "root";


$conn = mysqli_connect($servername, $username, $password, $database);

if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
} else {
	echo "";
}

?>

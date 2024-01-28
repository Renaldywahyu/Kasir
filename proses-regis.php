<?php

$username = $_POST['username'];
$password = $_POST ['password'];
$konfirmPassword = $_POST['konfirmPassword'];
 
include 'koneksi.php';

$sql 	= "INSERT INTO user(username, password, konfirmPassword) values($username','$password', 'konfirmPassword')";

$query 	= mysqli_query($koneksi, $sql);

if($query){
	echo "<script>alert('Berhasil Registrasi.');window.location.assign('login.php');</script>";
}else{
	echo "<script>alert('Gagal Registrasi.');window.location.assign('regis.php');</script>";
}
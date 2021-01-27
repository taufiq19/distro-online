<?php
include "koneksi.php";
$username = $_POST['user'];
$password = $_POST['pass'];

$ambil = $koneksi->query("SELECT * FROM admin WHERE username='$username' AND password='$password'");
$sukses = $ambil->num_rows;

if($sukses==1){
	session_start();
	$_SESSION['username']    = $ambil->fetch_assoc();

    //$_SESSION['password']    = $password;

	echo "<script>alert('Selamat datang $username'); window.location = 'admin/tambah.php'</script>";	
} else {
	echo "<script>alert('Username dan Password tidak valid.'); window.location = 'index.html'</script>";	
}

<?php 
// mengaktifkan session pada php
session_start();
 
// menghubungkan php dengan koneksi database
include 'db_connection.php';
 
// menangkap data yang dikirim dari form login
$username = $_POST['username'];
$password = $_POST['password'];
 
 
// menyeleksi data user dengan username dan password yang sesuai
$login = mysqli_query($conn,"SELECT * FROM `admin` WHERE username='$username' and password='$password'");
// menghitung jumlah data yang ditemukan
$check = mysqli_num_rows($login);
 
// cek apakah username dan password di temukan pada database
if($check > 0){
 
	$data = mysqli_fetch_assoc($login);
	$_SESSION['username'] = $username;
	header("location:admin");
}else{
	header("location:login.php?pesan=gagal");
}
 
?>
<?php 
// koneksi database
include '../db_connection.php';
 
// menangkap data yang di kirim dari form
$id = $_POST['id'];
$nama = $_POST['nama'];
$email = $_POST['email']; 
$subjek = $_POST['subjek'];
$pesan = $_POST['pesan'];
// menginput data ke database
mysqli_query($conn,"INSERT INTO `contact` (`id`, `nama`, `email`, `subjek`, `pesan`) 
                                      VALUES ('$id', '$nama', '$email', '$subjek', '$pesan')");
 
// mengalihkan halaman kembali ke index.php
header("location:../index.php");

 
?>
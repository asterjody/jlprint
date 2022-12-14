<?php 
// koneksi database
include '../../db_connection.php';
 
// menangkap data yang di kirim dari form
$id = $_POST['id'];
$pekerjaan = $_POST['pekerjaan'];
$deskripsi = $_POST['deskripsi'];

// menginput data ke database
mysqli_query($conn,"INSERT INTO `pekerjaan` (`id`, `pekerjaan`, `deskripsi`)
                                   VALUES ('$id', '$pekerjaan', '$deskripsi')");
 
// mengalihkan halaman kembali ke pekerjaan.php
echo "<script>alert('Data Berhasil Ditambahkan.');window.location='../pekerjaan.php'</script>";

 
?>
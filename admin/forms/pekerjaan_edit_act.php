<?php 
// koneksi database
include '../../db_connection.php';
 
// menangkap data yang di kirim dari form
$id = $_POST['id'];
$pekerjaan = $_POST['pekerjaan'];
$deskripsi = $_POST['deskripsi'];

// query SQL untuk insert data ke dalam Mysql
$sql = "UPDATE pekerjaan SET id = '$id', pekerjaan = '$pekerjaan', deskripsi = '$deskripsi' WHERE id = '$id'";
mysqli_query($conn, $sql);
// mengalihkan ke halaman pekerjaan.php
echo "<script>alert('Data Berhasil Diubah.');window.location='../pekerjaan.php'</script>";
?>
<?php 
// koneksi database
include '../../db_connection.php';
 

// menangkap data yang di kirim dari form
$id = $_POST['id'];
$nama = $_POST['nama'];
$tempat = $_POST['tempat']; 
$tanggal = $_POST['tanggal'];
$jk = $_POST['jk'];
$alamat = $_POST['alamat'];
$agama = $_POST['agama'];
$status = $_POST['status'];
$nohp = $_POST['nohp'];
$email = $_POST['email'];
$pendidikan = $_POST['pendidikan'];
$namasekolah = $_POST['namasekolah'];
$pekerjaan = $_POST['pekerjaan'];

// query SQL untuk insert data ke dalam Mysql
$sql = "UPDATE pelamar SET id = '$id', nama = '$nama', tempat = '$tempat', tanggal = '$tanggal', jk = '$jk', alamat = '$alamat', agama = '$agama', status = '$status', nohp = '$nohp', email = '$email', pendidikan = '$pendidikan', namasekolah = '$namasekolah', pekerjaan = '$pekerjaan' WHERE id = '$id'";
mysqli_query($conn, $sql);
// mengalihkan ke halaman pelamar.php
echo "<script>alert('Data Berhasil Diubah.');window.location='../pelamar.php'</script>";
?>
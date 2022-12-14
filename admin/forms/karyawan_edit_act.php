<?php 
// koneksi database
include '../../db_connection.php';
 
// menangkap data yang di kirim dari form
$id = $_POST['id'];
$nama = $_POST['nama'];
$jabatan = $_POST['jabatan'];
$tanggalmasuk = $_POST['tanggalmasuk'];
$tempat = $_POST['tempat']; 
$tanggal = $_POST['tanggal'];
$jk = $_POST['jk'];
$alamat = $_POST['alamat'];
$agama = $_POST['agama'];
$status = $_POST['status'];
$nohp = $_POST['nohp'];
$email = $_POST['email'];
// query SQL untuk insert data ke dalam Mysql
$sql = "UPDATE karyawan SET id = '$id', nama = '$nama', jabatan = '$jabatan', tanggalmasuk = '$tanggalmasuk', tempat = '$tempat', tanggal = '$tanggal', jk = '$jk', alamat = '$alamat', agama = '$agama', status = '$status', nohp = '$nohp', email = '$email' WHERE id = '$id'";
mysqli_query($conn, $sql);
// mengalihkan ke halaman karyawan.php
echo "<script>alert('Data Berhasil Diubah.');window.location='../karyawan.php'</script>";
?>
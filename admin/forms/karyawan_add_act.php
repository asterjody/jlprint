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
// menginput data ke database
mysqli_query($conn,"INSERT INTO `karyawan` (`id`, `nama`, `jabatan`, `tanggalmasuk`, `tempat`, `tanggal`, `jk`, `alamat`, `agama`, `status`, `nohp`, `email`)
                                   VALUES ('$id', '$nama', '$jabatan', '$tanggalmasuk', '$tempat', '$tanggal', '$jk', '$alamat', '$agama', '$status', '$nohp', '$email')");
 
// mengalihkan halaman kembali ke karyawan.php
echo "<script>alert('Data Berhasil Ditambahkan.');window.location='../karyawan.php'</script>";

 
?>
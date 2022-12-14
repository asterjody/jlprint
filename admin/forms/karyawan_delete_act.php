<?php
// koneksi database
include_once '../../db_connection.php';

$sql="DELETE FROM karyawan WHERE id='" . $_GET["id"] . "'";
mysqli_query($conn, $sql);
// mengalihkan ke halaman karyawan.php
echo "<script>alert('Data Berhasil Dihapus.');window.location='../karyawan.php'</script>";
?>
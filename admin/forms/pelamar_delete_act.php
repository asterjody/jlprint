<?php
// koneksi database
include_once '../../db_connection.php';

$sql="DELETE FROM pelamar WHERE id='" . $_GET["id"] . "'";
mysqli_query($conn, $sql);
// mengalihkan ke halaman pelamar.php
echo "<script>alert('Data Berhasil Dihapus.');window.location='../pelamar.php'</script>";
?>
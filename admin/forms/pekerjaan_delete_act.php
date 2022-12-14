<?php
// koneksi database
include_once '../../db_connection.php';

$sql="DELETE FROM pekerjaan WHERE id='" . $_GET["id"] . "'";
mysqli_query($conn, $sql);
// mengalihkan ke halaman pekerjaan.php
echo "<script>alert('Data Berhasil Dihapus.');window.location='../pekerjaan.php'</script>";
?>
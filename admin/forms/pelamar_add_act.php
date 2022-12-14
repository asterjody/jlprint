<?php 
// koneksi database
include '../../db_connection.php';
 
if($_POST['upload']){ 
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
    $ext_allowed    = array('pdf','docx');
    $namafile    = $_FILES['cv']['name'];
    $x        = explode('.', $namafile);
    $ext    = strtolower(end($x));
    $size        = $_FILES['cv']['size'];
    $file_tmp    = $_FILES['cv']['tmp_name'];
    
    if(in_array($ext, $ext_allowed) === true){
        if($size < 2044070){ 
            move_uploaded_file($file_tmp, '../../documents/'.$namafile);
    // menginput data ke database
    $query=mysqli_query($conn,"INSERT INTO `pelamar` (`id`, `nama`, `tempat`, `tanggal`, `jk`, `alamat`, `agama`, `status`, `nohp`, `email`, `pendidikan`, `namasekolah`, `pekerjaan`,`cv`)
                                       VALUES ('$id', '$nama', '$tempat', '$tanggal', '$jk', '$alamat', '$agama', '$status', '$nohp', '$email', '$pendidikan', '$namasekolah', '$pekerjaan','$namafile')");
                if($query){
                    // mengalihkan halaman kembali ke index.php
                    echo "<script>alert('Data Berhasil Ditambahkan.');window.location='../pelamar.php'</script>";
                     
                }
                else{
                    echo "<script>alert('FILE GAGAL DI UPLOAD!');window.location='../pelamar_add.php'</script>";
                }
            }
            else{
                echo "<script>alert('UKURAN FILE TERLALU BESAR!');window.location='../pelamar_add.php'</script>";
            }
        }
        else{
            echo "<script>alert('EKSTENSI FILE YANG DI UPLOAD TIDAK DI PERBOLEHKAN!');window.location='../pelamar_add.php'</script>";
        }
    }                                               
     
 
 
?>
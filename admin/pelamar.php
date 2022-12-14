<?php 
  include '../db_connection.php';
  session_start();
  if($_SESSION['username']==""){
    header("location:../index.php?pesan=belum_login");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>JL Print - Admin</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs5/dt-1.13.1/datatables.min.css"/>
 
<script type="text/javascript" src="https://cdn.datatables.net/v/bs5/dt-1.13.1/datatables.min.js"></script>

  <!-- Favicons -->
  <link href="../logojl.png" rel="icon">
  <link href="../logojl.png" rel="apple-touch-icon">

  <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css" rel="stylesheet">
  
  <link href="https://cdn.datatables.net/1.13.1/css/dataTables.bootstrap5.min.css" rel="stylesheet">
  <link href="https://cdn.datatables.net/select/1.5.0/css/select.bootstrap5.min.css" rel="stylesheet">
  <link href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.jqueryui.min.css" rel="stylesheet">


  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/jlstyles.css" rel="stylesheet">

</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center">

      <h1 class="logo me-auto"><a href="#">JL Print</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link" href="index.php">Home</a></li>
          <li><a class="nav-link" href="karyawan.php">Data Karyawan</a></li>
          <li><a class="nav-link active" href="pelamar.php">Data Pelamar</a></li>
          <li><a class="nav-link" href="pekerjaan.php">Data Pekerjaan</a></li>
          <li><a class="nav-link" href="contact.php">Kontak</a></li>
          <li><a class="getstarted" href="logout.php">Logout</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->


  <main id="main">

  <style>
       #example {
      font-size: 13px;
 
   }
  </style>

  <!-- ======= Contact Section ======= -->
  <section id="contact" class="contact">

    <div class="container" data-aos="fade-up">
      <div class="col-12">
        <div class="section-title">
          <h2>Data Pelamar</h2>
          <p></p>
        </div>
        <div class="text-center">
          <a class="btn btn-success" href="pelamar_add.php">Tambah Data</a>
        </div>
        <br>
        
        <div class="row">
          <div class=" mt-5 mt-lg-0 flex align-items-center">
            <table id="example" class="table display table-bordered table-striped" style="width:100%">
            <thead>
                
                <tr>
                    <th width="20px">No.</th>
                    <th>Nama</th>
                    <th>Tanggal Lahir</th>
                    <th>Jenis Kelamin</th>
                    <th>Alamat</th>
                    <th>Agama</th>
                    <th>Status</th>
                    <th>No. HP</th>
                    <th>Email</th>
                    <th>Pendidikan</th>
                    <th>Pekerjaan</th>
                    <th>CV</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
              <?php
                $no= 1;
                $query = mysqli_query($conn, 'SELECT * FROM `pelamar` ORDER BY `pelamar`.`pendidikan` DESC');
                
                while ($data = mysqli_fetch_array($query)) {
                  
              ?>
                <tr>
                    <td><?php echo $no++ ?></td>
                    <td><?php echo $data['nama']?></td>
                    <td><?php echo $data['tempat']?>, <?php echo $data['tanggal']?></td>
                    <td><?php echo $data['jk']?></td>
                    <td><?php echo $data['alamat']?></td>
                    <td><?php echo $data['agama']?></td>
                    <td><?php echo $data['status']?></td>
                    <td><?php echo $data['nohp']?></td>
                    <td><?php echo $data['email']?></td>
                    <td>
                    <?php 
                      if($data['pendidikan']==1){
                        echo "SD";
                      }else if($data['pendidikan']==2){
                        echo "SMP";
                      }else if($data['pendidikan']==3){
                        echo "SMA";
                      }else if($data['pendidikan']==4){
                        echo "S1";
                      }else if($data['pendidikan']==5){
                        echo "S2";
                      }
                      ?> , 
                    <?php echo $data['namasekolah']?>
                    </td>                    
                    <td><?php echo $data['pekerjaan']?></td>
                    <td><a type="button" class="btn btn-primary" href="../documents/<?php echo $data['cv'];?>"><i class='bx bx-folder'></i>CV</a></td> 
                    <td>
                    <a type="button" class="btn btn-warning" href='pelamar_edit.php?id=<?php echo $data['id']; ?> '><i class='bx bxs-edit'></i></a>
                    <a type="button" class="btn btn-danger" href='forms/pelamar_delete_act.php?id=<?php echo $data['id']; ?> ' onclick="javascript: return confirm('Anda Yakin Ingin Menghapus Data?')"><i class='bx bx-trash' ></i></a>
                    </td>
                </tr>
                <?php } ?>
            </tbody>
            </table>
          </div>
          <div class="text-center">
          <a class="btn btn-primary" href="forms/pelamar_laporan.php">Cetak Laporan</a>
        </div>
        </div>
        
      </div>
    </div>

  </section><!-- End Contact Section -->
    
  </main><!-- End #main -->

   <!-- ======= Footer ======= -->
   <footer id="footer">


<div class="footer-top section-bg">
  <div class="container">
    <div class="row">

      <div class="col-lg-3 col-md-6 footer-contact">
        <h3>JL Print</h3>
        <p>
          Jl. Printing Indonesia No. 1<br>    
          Kota Jakarta Barat, Daerah Khusus Ibukota Jakarta<br>
          Indonesia<br><br>
          <strong>No. Telepon:</strong> (021) 12345678<br>
          <strong>Email:</strong> contact@jlprint.com<br>
        </p>
      </div>

      <div class="col-lg-3 col-md-6 footer-links">
        <h4>Link</h4>
        <ul>
          <li><i class="bx bx-chevron-right"></i> <a href="index.php">Home</a></li>
          <li><i class="bx bx-chevron-right"></i> <a href="karyawan.php">Data Karyawan</a></li>
          <li><i class="bx bx-chevron-right"></i> <a href="pelamar.php">Data Pelamar</a></li>
          <li><i class="bx bx-chevron-right"></i> <a href="pekerjaan.php">Data Pekerjaan</a></li>
          <li><i class="bx bx-chevron-right"></i> <a href="contact.php">Kontak</a></li>
        </ul>
      </div>

      <div class="col-lg-3 col-md-6 footer-links">
        <h4>Layanan Kami</h4>
        <ul>
          <li><i class="bx bx-chevron-right"></i> <a href="#">Cetak Buku</a></li>
          <li><i class="bx bx-chevron-right"></i> <a href="#">Cetak Kemasan</a></li>
          <li><i class="bx bx-chevron-right"></i> <a href="#">Cetak Kertas</a></li>
          <li><i class="bx bx-chevron-right"></i> <a href="#">Cetak Sticker</a></li>
          <li><i class="bx bx-chevron-right"></i> <a href="#">Cetak Spanduk</a></li>
        </ul>
      </div>

      <div class="col-lg-3 col-md-6 footer-links">
        <h4>Sosial Media</h4>
        <p>Ikuti Sosial Media kami untuk mendapatkan informasi terbaru mengenai JL Print</p>
        <div class="social-links mt-3">
          <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
          <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
          <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
          <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
          <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
        </div>
      </div>

    </div>
  </div>
</div>
</footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
  <script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.13.1/js/dataTables.bootstrap5.min.js"></script>
  <script src="https://cdn.datatables.net/select/1.5.0/js/dataTables.select.min.js"></script>
  <script src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>
  <script src="https://cdn.datatables.net/responsive/2.2.3/js/responsive.bootstrap.min.js"></script>

  <script>
    $(document).ready(function() {
    $('#example').DataTable( {
        select: true,
        scrollx: true
    } );
} );
  </script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>
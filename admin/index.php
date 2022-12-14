
<?php
  session_start();
  include '../db_connection.php';
  if($_SESSION['username']==""){
    header("location:../index.php?pesan=belum_login");
}
  $username = $_SESSION['username'];
  $cari_id = "SELECT * FROM `admin` WHERE username='$username'";
  $result = mysqli_query($conn, $cari_id);
?>
<?php
  if(mysqli_num_rows($result)>0){
    $data = mysqli_fetch_array($result);
    $_SESSION['name'] = $data['name'];
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

  <!-- Favicons -->
  <link href="../logojl.png" rel="icon">
  <link href="../logojl.png" rel="apple-touch-icon">

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
          <li><a class="nav-link active" href="index.php">Home</a></li>
          <li><a class="nav-link" href="karyawan.php">Data Karyawan</a></li>
          <li><a class="nav-link" href="pelamar.php">Data Pelamar</a></li>
          <li><a class="nav-link" href="pekerjaan.php">Data Pekerjaan</a></li>
          <li><a class="nav-link" href="contact.php">Kontak</a></li>
          <li><a class="getstarted" href="logout.php">Logout</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">

    <div class="container">
      <div class="row">
        <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">
          <h1>Selamat Datang <?php echo $_SESSION['name']; ?>,<br> Di Halaman Admin<br> JL Print</h1>
          <div class="d-flex justify-content-center justify-content-lg-start">
            <a href="#about" class="btn-get-started scrollto">Get Started</a>
          </div>
        </div>
        <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="200">
          <img src="assets/img/jlicon.png" class="img-fluid animated" alt="">
        </div>
      </div>
    </div>

  </section><!-- End Hero -->

  <main id="main">
    
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

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>
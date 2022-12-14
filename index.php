<?php
session_start();
include 'db_connection.php';

if(isset($_GET['pesan'])){
	if($_GET['pesan'] == "gagal"){
		echo "Username atau Password salah!";
	}
	else if($_GET['pesan'] == "belum_login"){
		echo "Anda Harus Login Untuk Mengakses Halaman Ini!";
	}
	else if($_GET['pesan'] == "noaccess"){
		echo "Akses Ditutup";
	}
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>JL Print</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="logojl.png" rel="icon">
  <link href="logojl.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="admin/assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="admin/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="admin/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="admin/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="admin/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="admin/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="admin/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="admin/assets/css/jlstyles.css" rel="stylesheet">

</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top header-scrolled">
    <div class="container d-flex align-items-center">

      <h1 class="logo me-auto"><a href="index.php">JL Print</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto"><img src="admin/assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="#about">Profil</a></li>
          <li><a class="nav-link scrollto" href="#services">Layanan</a></li>
          <li><a class="nav-link   scrollto" href="#pricing">Harga</a></li>
          <li><a class="nav-link scrollto" href="#careers">Karir</a></li>
          <li><a class="nav-link scrollto" href="#contact">Kontak</a></li>
          <li><a class="getstarted scrollto" href="login.php">Login</a></li>
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
          <h1>Percetakan Terbaik untuk Anda!</h1>
          <div class="d-flex justify-content-center justify-content-lg-start">
            <a href="#pricing" class="btn-get-started scrollto">Get Started</a>
          </div>
        </div>
        <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="200">
        <img src="admin/assets/img/hero-img.png" class="img-fluid animated" alt="">
        </div>
      </div>
    </div>

  </section><!-- End Hero -->

  <main id="main">
    <!-- ======= About Us Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Profil</h2>
        </div>

        <div class="row content">
          <div class="col-lg-6">
            <p>
              JL Print adalah suatu perusahaan yang
              bergerak di bidang percetakan yang mencetak stiker merk, packaging, buku, dan
              label. Perusahaan ini berdiri pada tahun 2022 di Jakarta Barat 
            </p>
            <ul>
              <li><i class="ri-check-double-line"></i>Kualitas Terbaik</li>
              <li><i class="ri-check-double-line"></i>Pelayanan Cepat</li>
              <li><i class="ri-check-double-line"></i>Harga Terjangkau</li>
            </ul>
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0">
            <p>
            Pelajari lebih lanjut mengenai layanan yang tersedia JL Print.
            </p>
            <a href="#services" class="btn-learn-more">Learn More</a>
          </div>
        </div>

      </div>
    </section><!-- End About Us Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Layanan</h2>
          <p></p>
        </div>

        <div class="row">
          <div class="col-xl-3 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-box">
              <div class="icon"><i class='bx bxs-printer'></i></div>
              <h4><a href="">Kualitas Tinta</a></h4>
              <p>Kami menggunakan material pilihan yang terbaik untuk menghasilkan cetakan yang sempurna.</p>
            </div>
          </div>

          <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="200">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-file"></i></div>
              <h4><a href="">Kualitas Bahan</a></h4>
              <p>Kami menggunakan material pilihan yang terbaik untuk menghasilkan cetakan yang sempurna.</p>
            </div>
          </div>

          <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-xl-0" data-aos="zoom-in" data-aos-delay="300">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-tachometer"></i></div>
              <h4><a href="">Kecepatan Pengerjaan</a></h4>
              <p>JL Print berusaha melakukan proses pengerjaan secara cepat untuk meningkatkan kepuasan pelanggan.</p>
            </div>
          </div>

          <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-xl-0" data-aos="zoom-in" data-aos-delay="400">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-layer"></i></div>
              <h4><a href="">Banyak Pilihan</a></h4>
              <p>JL Print memilih banyak pilihan untuk anda dalam mencetak. </p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Services Section -->

    <!-- ======= Pricing Section ======= -->
    <section id="pricing" class="pricing">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Harga</h2>
          <p></p>
        </div>

        <div class="row">

          <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
            <div class="box featured">
              <h3>Cetak Sticker</h3>
              <p>Mulai Dari</p>
              <h4><sup>Rp.</sup>1.000<span>per 1 Pcs</span></h4>
              <ul>
                <li><i class="bx bx-check"></i> Kualitas Terbaik</li>
                <li><i class="bx bx-check"></i> Pengerjaan Cepat</li>
                <li><i class="bx bx-check"></i> Banyak Pilihan</li> 
              </ul>
              <a href="#" class="buy-btn">Hubungi Kami</a>
            </div>
          </div>

          <div class="col-lg-4 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="200">
            <div class="box featured">
              <h3>Cetak Buku</h3>
              <p>Mulai Dari</p>
              <h4><sup>Rp.</sup>20.000<span>per 1 Pcs</span></h4>
              <ul>
                <li><i class="bx bx-check"></i> Kualitas Terbaik</li>
                <li><i class="bx bx-check"></i> Pengerjaan Cepat</li>
                <li><i class="bx bx-check"></i> Banyak Pilihan</li>
              </ul>
              <a href="#" class="buy-btn">Hubungi Kami</a>
            </div>
          </div>

          <div class="col-lg-4 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="300">
            <div class="box featured">
              <h3>Cetak Kemasan</h3>
              <p>Mulai Dari</p>
              <h4><sup>Rp.</sup>1.500<span>per 1 Pcs</span></h4>
              <ul>
                <li><i class="bx bx-check"></i> Kualitas Terbaik</li>
                <li><i class="bx bx-check"></i> Pengerjaan Cepat</li>
                <li><i class="bx bx-check"></i> Banyak Pilihan</li>
              </ul>
              <a href="#" class="buy-btn">Hubungi Kami</a>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Pricing Section -->

        <!-- ======= Careers Section ======= -->
        <section id="careers" class="why-us section-bg">
          <div class="container-fluid" data-aos="fade-up">
            <div class="section-title">
              <h2>Karir</h2>
            </div>
    
            <div class="row">
    
              <div class="col-lg-7 d-flex flex-column justify-content-center align-items-stretch  order-2 order-lg-1">
    
                <div class="content">
                  <h3>Lowongan Pekerjaan <br><strong>JL Print</strong></h3>
                  <p>
                    Berikut adalah lowongan pekerjaan yang dibutuhkan pada<br>JL Print
                  </p>
                </div>
    
                <div class="accordion-list">
                <ul>
                <?php
                $no= 1;
                $target= 1;
                $open= 1;
                $query = mysqli_query($conn, 'SELECT * FROM `pekerjaan` ORDER BY `pekerjaan`.`pekerjaan` ASC');
                
                while ($data = mysqli_fetch_array($query)) {
                  
                ?>
                  <li>
                    <a data-bs-toggle="collapse" class="collapse" data-bs-target="#accordion-list-<?php echo $target++ ?>"><span>0<?php echo $no++ ?>
                  </span> <?php echo $data['pekerjaan']?>
                  <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i>
                </a>
                    <div id="accordion-list-<?php echo $open++ ?>" class="collapse" data-bs-parent=".accordion-list">
                      <p>
                        Deskripsi Pekerjaan: <br>
                        <?php echo $data['deskripsi']?>
                      </p>
                    </div>
                  </li>
                <?php } ?>   
                </ul>

                  <div class="text-center">
                    <br><a href="forms" class="btn-get-started scrollto">Lamar Sekarang</a>
                  </div>
                    
                </div>
              </div>

              <div class="col-lg-4 align-items-stretch order-1 order-lg-2 img" style='background-image: url("admin/assets/img/jlcareer.png");' data-aos="zoom-in" data-aos-delay="150">&nbsp;</div>
            </div>
    
          </div>
        </section><!-- End Careers Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Kontak</h2>
          <p></p>
        </div>

        <div class="row">

          <div class="col-lg-5 d-flex align-items-stretch">
            <div class="info">
              <div class="address">
                <i class="bi bi-geo-alt"></i>
                <h4>Lokasi:</h4>
                <p>Jl. Printing Indonesia No. 1, Jakarta Barat, Jakarta 11510</p>
              </div>

              <div class="email">
                <i class="bi bi-envelope"></i>
                <h4>Email:</h4>
                <p>contact@jlprint.com</p>
              </div>

              <div class="phone">
                <i class="bi bi-phone"></i>
                <h4>No. Telepon:</h4>
                <p>(021) 12345678</p>
              </div>

              <iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d49643.901627288804!2d106.85290617961236!3d-6.254082546041153!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sgoogle%20maps%20script!5e0!3m2!1sid!2sid!4v1671038789136!5m2!1sid!2sid" frameborder="0" style="border:0; width: 100%; height: 290px;" allowfullscreen></iframe>
            </div>

          </div>

          <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
            <form action="forms/contact.php" method="post" class="php-email-form">
              <div class="row">
                <div class="form-group col-md-6">
                  <label for="name">Nama</label>
                  <input type="hidden" name="id"required>
                  <input type="text" name="nama" class="form-control" id="nama" required>
                </div>
                <div class="form-group col-md-6">
                  <label for="email">Email</label>
                  <input type="email" class="form-control" name="email" id="email" required>
                </div>
              </div>
              <div class="form-group">
                <label for="subjek">Subjek</label>
                <input type="text" class="form-control" name="subjek" id="subjek" required>
              </div>
              <div class="form-group">
                <label for="pesan">Pesan</label>
                <textarea class="form-control" name="pesan" rows="10" required></textarea>
              </div>
              <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Pesan anda sudah dikirim. Terimakasih!</div>
              </div>
              <div class="text-center"><button type="submit">Kirim</button></div>
            </form>
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
              Jl. Printing Indonesia No. 1
              Kota Jakarta Barat, Daerah Khusus Ibukota Jakarta<br>
              Indonesia<br><br>
              <strong>No. Telepon:</strong> (021) 12345678<br>
              <strong>Email:</strong> contact@jlprint.com<br>
            </p>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Link</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Profil</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Layanan</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Harga</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Karir</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Kontak</a></li>
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
  <script src="admin/assets/vendor/aos/aos.js"></script>
  <script src="admin/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="admin/assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="admin/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="admin/assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="admin/assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="admin/assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="admin/assets/js/main.js"></script>

</body>

</html>
<?php 
  include '../db_connection.php';
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>JL Print</title>
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
  <link href="../forms/form.css" rel="stylesheet">
</head>
<body>
 <br>
	<h1>
		<!-- <img src="assets/img/login.png" alt="Responsive image" class="img-fluid"> -->
		JL Print
	</h1>
 
 
	<div class="kotak_login">
		<p class="tulisan_login">
			<h3>Tambah Data Pekerjaan</h3>
		<form action="forms/pekerjaan_add_act.php" method="post">
        <input type="hidden" name="id">

			  <label">Nama Pekerjaan</label>
        <input type="text" class="form_login" name="pekerjaan" required>

        <label>Deskripsi</label>
        <input type="text" class="form_data" name="deskripsi" required>

        <br>
			  <input type="submit" class="tombol_login" value="Tambah Data">
 
			<br/>
      <br/>
      <div class="text-center">
      <a class="btn btn-danger" href="pekerjaan.php">Batal</a>
      </div>
			<br/>
		</form>
		
	</div>
 
 
</body>
</html>
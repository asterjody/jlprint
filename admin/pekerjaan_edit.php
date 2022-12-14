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
<?php
	// koneksi database
	$id = $_GET['id'];
	$sql ="SELECT * FROM pekerjaan WHERE id= '$id'";
	$query = mysqli_query($conn, $sql);
	$row = mysqli_fetch_array($query);
	?>
 <br>
	<h1>
		<!-- <img src="assets/img/login.png" alt="Responsive image" class="img-fluid"> -->
		JL Print
	</h1>
 
 
	<div class="kotak_login">
		<p class="tulisan_login">
			<h3>Edit Data Pekerjaan</h3>
		<form action="forms/pekerjaan_edit_act.php" method="post">
    <input type="hidden" name="id" value="<?php echo $row['id']?>">

      <label">Nama Pekerjaan</label>
      <input type="text" class="form_login" name="pekerjaan" value="<?php echo $row['pekerjaan']?>" required>

      <label>Deskripsi</label>
      <input type="text" class="form_data" name="deskripsi" value="<?php echo $row['deskripsi']?>" required>

      <br>
      <input type="submit" class="tombol_login" value="Edit Data">

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
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
			<h3>Tambah Data Pelamar</h3>
		<form action="forms/pelamar_add_act.php" method="post" enctype="multipart/form-data">
        <input type="hidden" name="id">

        <label">Nama Lengkap</label>
        <input type="text" class="form_login" name="nama" required>

        <label>Tempat Lahir</label>
        <input type="text" name="tempat" class="form_login" required>

        <label>Tanggal Lahir</label>
        <input type="date" class="form_login" name="tanggal" required>

        <label>Jenis Kelamin</label>
        <select class="form_login" name="jk" required>
          <option selected>Pilih Jenis</option>
          <option value="Laki-Laki">Laki-Laki</option>
          <option value="Perempuan">Perempuan</option>
        </select>  

        <label>Alamat</label>
        <input type="text" class="form_data" name="alamat" required>

        <label>Agama</label>
        <select class="form_login" name="agama" required>
          <option selected>Pilih Agama</option>
          <option value="Islam">Islam</option>
          <option value="Kristen">Kristen</option>
          <option value="Katolik">Katolik</option>
          <option value="Hindu">Hindu</option>
          <option value="Buddha">Buddha</option>
          <option value="Konghucu">Konghucu</option>
        </select>

        <label>Status Perkawinan</label>
        <select class="form_login" name="status" required>
          <option selected>Pilih Status</option>
          <option value="Belum Menikah">Belum Menikah</option>
          <option value="Menikah">Menikah</option>
        </select>    
                
        <label>Nomor Handphone</label>
        <input type="text" class="form_login" name="nohp"  onkeypress="return event.charCode >= 48 && event.charCode <=57" required>

        <label>E-mail</label>
        <input type="email" class="form_login" name="email" required>

        <label>Pendidikan Terakhir</label>
        <select class="form_login" name="pendidikan" required>
          <option selected>Pilih Pendidikan</option>
          <option value="1">SD</option>
          <option value="2">SMP</option>
          <option value="3">SMA</option>
          <option value="4">S1</option>
          <option value="5">S2</option>
        </select>

        <label>Nama Sekolah</label>
        <input type="text" class="form_login" name="namasekolah" required>

        <label>Pekerjaan yang dilamar</label>
        <select class="form_login" name="pekerjaan" required>
          <option selected>Pilih Pekerjaan</option>
          <?php
							$query=mysqli_query($conn,"SELECT * FROM pekerjaan ORDER BY pekerjaan ASC");
							while($data=mysqli_fetch_array($query)){
					?>
					<option value="<?php echo $data['pekerjaan'] ?>"><?php echo $data['pekerjaan'] ?></option>
					<?php	}	?>		
        </select>

        <label>CV / Resume *</label>
        <input type="file" class="form_login" name="cv" required>
        <p style="color: red">*File berupa <b>PDF</b> atau <b>Word</b></p>
        <br>
			  <input type="submit" class="tombol_login" name="upload" value="Tambah Data">
 
			<br/>
      <br/>
      <div class="text-center">
      <a class="btn btn-danger" href="pelamar.php">Batal</a>
      </div>
			<br/>
		</form>
		
	</div>
 
 
</body>
</html>
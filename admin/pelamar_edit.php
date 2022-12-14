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
	$sql ="SELECT * FROM pelamar WHERE id= '$id'";
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
			<h3>Edit Data Pelamar</h3>
		<form action="forms/pelamar_edit_act.php" method="post">
        <input type="hidden" name="id" value="<?php echo $row['id']?>">

			  <label">Nama Lengkap</label>
        <input type="text" class="form_login" name="nama" value="<?php echo $row['nama']?>" required>
			
        <label>Tempat Lahir</label>
        <input type="text" name="tempat" class="form_login" value="<?php echo $row['tempat']?>" required>

        <label>Tanggal Lahir</label>
        <input type="date" class="form_login" name="tanggal" value="<?php echo $row['tanggal']?>" required>

        <label>Jenis Kelamin</label>
        <select class="form_login" name="jk" required>
          <option selected><?php echo $row['jk']?></option>
          <option value="Laki-Laki">Laki-Laki</option>
          <option value="Perempuan">Perempuan</option>
        </select>  

        <label>Alamat</label>
        <input type="text" class="form_data" name="alamat"  value="<?php echo $row['alamat']?>" required>

        <label>Agama</label>
        <select class="form_login" name="agama" required>
          <option selected><?php echo $row['agama']?></option>
          <option value="Islam">Islam</option>
          <option value="Kristen">Kristen</option>
          <option value="Katolik">Katolik</option>
          <option value="Hindu">Hindu</option>
          <option value="Buddha">Buddha</option>
          <option value="Konghucu">Konghucu</option>
        </select>

        <label>Status Perkawinan</label>
        <select class="form_login" name="status" required>
          <option selected><?php echo $row['status']?></option>
          <option value="Belum Menikah">Belum Menikah</option>
          <option value="Menikah">Menikah</option>
        </select>    
                
        <label>Nomor Handphone</label>
        <input type="text" class="form_login" name="nohp"  onkeypress="return event.charCode >= 48 && event.charCode <=57"  value="<?php echo $row['nohp']?>" required>
        
        <label>E-mail</label>
        <input type="text" class="form_login" name="email"  value="<?php echo $row['email']?>" required>

        <label>Pendidikan Terakhir</label>
        <select class="form_login" name="pendidikan" required>
          <option selected>
          <?php 
              if($row['pendidikan']==1){
                echo "1";
              }else if($row['pendidikan']==2){
                echo "2";
              }else if($row['pendidikan']==3){
                echo "3";
              }else if($row['pendidikan']==4){
                echo "4";
              }else if($row['pendidikan']==5){
                echo "5";
              }
              ?>
          </option>
          <option value="1">SD</option>
          <option value="2">SMP</option>
          <option value="3">SMA</option>
          <option value="4">S1</option>
          <option value="5">S2</option>
        </select>

        <label>Nama Sekolah</label>
        <input type="text" class="form_login" name="namasekolah"  value="<?php echo $row['namasekolah']?>" required>

        <label>Pekerjaan yang dilamar</label>
        <select class="form_login" name="pekerjaan" required>
          <option selected><?php echo $row['pekerjaan']?></option>
          <?php
							$query=mysqli_query($conn,"SELECT * FROM pekerjaan ORDER BY pekerjaan ASC");
							while($data=mysqli_fetch_array($query)){
					?>
					<option value="<?php echo $data['pekerjaan'] ?>"><?php echo $data['pekerjaan'] ?></option>
					<?php	}	?>		
        </select>
        <br>
			  <input type="submit" class="tombol_login" value="Edit Data">
 
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
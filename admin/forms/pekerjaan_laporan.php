<?php 
  include '../../db_connection.php';
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
  <link href="../../logojl.png" rel="icon">
  <link href="../../logojl.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Data Tables -->
  <link href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css" rel="stylesheet">
  <link href="https://cdn.datatables.net/buttons/2.3.2/css/buttons.dataTables.min.css" rel="stylesheet">
  <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
  <script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/buttons/2.3.2/js/dataTables.buttons.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
  <script src="https://cdn.datatables.net/buttons/2.3.2/js/buttons.html5.min.js"></script>
  <script src="https://cdn.datatables.net/buttons/2.3.2/js/buttons.print.min.js"></script>
  <script>
    $(document).ready(function() {
    $('#example').DataTable( {
        dom: 'Bfrtip',
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ]
    } );
} );
  </script>
  


</head>
<body>
<style>
       #example {
      font-size: 13px;
 
   }
  </style>
 <br>
	<h1>
		<!-- <img src="assets/img/login.png" alt="Responsive image" class="img-fluid"> -->
		JL Print
	</h1>
 
 
	<div class="kotak_laporan">
		<p class="tulisan_login">
			<h3>Laporan Data Pekerjaan</h3>
            <table id="example" class="display nowrap" style="width:100%">
            <thead>
                
                <tr>
                    <th>No.</th>
                    <th>Nama Pekerjaan</th>
                    <th>Deskripsi</th>
                </tr>
            </thead>
            <tbody>
            <?php
                $no= 1;
                $query = mysqli_query($conn, 'SELECT * FROM `pekerjaan` ORDER BY `pekerjaan`.`pekerjaan` ASC');
                while ($data = mysqli_fetch_array($query)) {
              ?>
                <tr>
                    <td><?php echo $no++ ?></td>
                    <td><?php echo $data['pekerjaan']?></td>
                    <td><?php echo $data['deskripsi']?></td>
                  </tr>
                  <?php } ?>
                </tbody>
    </table>
		
	</div>
 
 
</body>
<br>
<button><a href="../pekerjaan.php">Kembali ke Halaman Data Pekerjaan</a></button>
</html>
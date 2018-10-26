<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Detail</title>
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <a href="#" class="logo">
      <span class="logo-mini"><b>D</b>TC</span>
      <span class="logo-lg"><img src="images/logo.png" height="30" width="180"></span>
    </a>
  
  </header>
  <aside class="main-sidebar">
    <section class="sidebar">

    </section>
  </aside>
  <div class="content-wrapper">
    <section class="content-header">
    </section>

    <section class="invoice">
      <div class="row">
        <div class="col-xs-12">
          <h2 class="page-header">
            <i class="fa fa-globe"></i> DT Tracking Information, Inc.
            <small class="pull-right">Date: 06/2017</small>
          </h2>
        </div>
      </div>
      <div class="row">
        <div class="col-xs-12 table-responsive">
          <table class="table table-striped">
            <thead>
            <tr>
              <th>Cabang</th>
              <th>Via</th>
              <th>Tanggal masuk</th>
              <th>Scanning</th>
              <th>Printing</th>
			  <th>Packing</th>
			  <th>Tanggal Kirim</th>
			  <th>Keterangan</th>
            </tr>
            </thead>
            <tbody>
			<?php
include "koneksi.php";

$id_cabang=$_REQUEST[id_cabang];
echo "";

$hasil = mysql_query("SELECT * FROM utama WHERE id_cabang='$id_cabang'",$id_mysql);

	if (! $hasil)
		die("permintaan gagal dilaksanakan");
while ($baris = mysql_fetch_array($hasil))
{
echo "   <tr>
	     <td>$baris[cabang]</td>
	     <td>$baris[via]</td>
	     <td>$baris[tgl_masuk]</td>
		 <td>$baris[scanning]</td>
		 <td>$baris[printing]</td>
		 <td>$baris[packing]</td>
		 <td>$baris[tgl_kirim]</td>
		 <td>$baris[ket]</td></tr>
	     ";
}
mysql_close($id_mysql);
?>
            
            </tbody>
          </table>
        </div>
      </div>
      <div class="row">
      </div>
    </section>
    <div class="clearfix"></div>
  </div>

<script src="plugins/jQuery/jquery-2.2.3.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
<script src="plugins/fastclick/fastclick.js"></script>
<script src="dist/js/app.min.js"></script>
<script src="dist/js/demo.js"></script>
</body>
</html>
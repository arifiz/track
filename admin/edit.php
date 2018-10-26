<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Detection Admin Page</title>
  <link href='https://d30y9cdsu7xlg0.cloudfront.net/png/228840-200.png' rel='shortcut icon'>
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">
</head>
<!-- ADD THE CLASS layout-top-nav TO REMOVE THE SIDEBAR. -->
<body class="hold-transition skin-blue layout-top-nav">
<div class="wrapper">

  <header class="main-header">
    <nav class="navbar navbar-static-top">
      <div class="container">
        <div class="navbar-header">
          <a href="home.php" class="navbar-brand"><b>DTC</b>TRACK</a>
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
            <i class="fa fa-bars"></i>
          </button>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse pull-left" id="navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a>Halaman utama Admin<span class="sr-only">(current)</span></a></li>
            
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Menu <span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="#">Action</a></li>
                <li><a href="#">Another action</a></li>
                <li><a href="#">Something else here</a></li>
                <li class="divider"></li>
                <li><a href="#">Separated link</a></li>
                <li class="divider"></li>
                <li><a href="http://localhost/track/admin">Login Admin</a></li>
              </ul>
            </li>
          </ul>
          <form class="navbar-form navbar-left" role="search">
            <div class="form-group">
              <input type="text" class="form-control" id="navbar-search-input" placeholder="Cari">
            </div>
          </form>
        </div>
      </div>
      <!-- /.container-fluid -->
    </nav>
  </header>
  <!-- Full Width Column -->
  <div class="content-wrapper">
    <div class="container">
      <!-- Content Header (Page header) -->
      <section class="content-header">
       
      </section>

	  <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title"></h3>

             
            <!-- /.box-header -->
            <div>
<script type="text/javascript"> 
    // 1 detik = 1000 
    window.setTimeout("waktu()",1000);   
    function waktu() {    
        var tanggal = new Date();   
        setTimeout("waktu()",1000);   
       document.getElementById("output1").innerHTML = tanggal.getHours()+":"+tanggal.getMinutes()+":"+tanggal.getSeconds(); 
   } 
   </script>
<h2 class="box-title">Daftar LJK Masuk Per Jam : <H3 id="output1" ></H3> </h2>
 </div>
<h3>Edit Data Tracking</h3>
<a class="btn" href="home.php"><span class="glyphicon glyphicon-arrow-left"></span>Kembali</a>

<?php
include "koneksi.php";
$id_cabang=$_REQUEST[id_cabang];

$hasil = mysql_query("SELECT * FROM utama WHERE id_cabang='$id_cabang'", $id_mysql);

if (! $hasil)
	die("Permintaan edit tracking gagal");

$baris = mysql_fetch_array($hasil)
?>
<form action="update.php" method="POST">
			<div class="modal-body">
				<div class="form-group">
						<label>ID Tracking</label>
						<input name="id_cabang" type="text" class="form-control" id="tgl2"  name="id_cabang" value='<?php echo "$baris[id_cabang]"; ?>' autocomplete="off" >
				</div>
				<div class="form-group">
						<label>Nomor Tracking</label>
						<input name="no_kirim" type="text" class="form-control" id="tgl2"  name="no_kirim" value='<?php echo "$baris[no_kirim]"; ?>' autocomplete="off">
				</div>
               <div class="form-group">
						<label>Nama Cabang</label>
						<input name="cabang" type="text" class="form-control" id="tgl2"  name="cabang" value='<?php echo "$baris[cabang]"; ?>' autocomplete="off">
				</div>	
				<div class="form-group">
						<label>Via</label>
						<input name="via" type="text" class="form-control" id="tgl2"  name="via" value='<?php echo "$baris[via]"; ?>' autocomplete="off">
				</div>
	 		    <div class="form-group">
						<label>Tanggal Masuk</label>
						<input name="tgl_masuk" type="date" class="form-control" id="tgl2"  name="tgl_masuk" value='<?php echo "$baris[tgl_masuk]"; ?>' autocomplete="off">
				</div>
				<div class="form-group">
				<label>Scanning</label>
				<select class="form-control" name="scanning" >
					<option value="Sudah">Sudah</option>
					<option value="Belum">Belum</option>
					<option value="Error">Error</option>
				</select>
				</div>
				<div class="form-group">
				<label>Printing</label>
				<select class="form-control" name="printing" >
					<option value="Sudah">Sudah</option>
					<option value="Belum">Belum</option>
					<option value="Error">Error</option>
				</select>
				</div><div class="form-group">
				<label>Packing</label>
				<select class="form-control" name="packing" >
					<option value="Sudah">Sudah</option>
					<option value="Belum">Belum</option>
					<option value="Error">Error</option>
				</select>
				</div>
				<div class="form-group">
						<label>Tanggal Kirim</label>
						<input name="tgl_kirim" type="date" class="form-control" id="tgl2"  name="tgl_kirim" value='<?php echo "$baris[tgl_kirim]"; ?>' autocomplete="off">
				</div>
				<div class="form-group">
						<label>Tanggal Terima</label>
						<input name="tgl_terima" type="date" class="form-control" id="tgl2"  name="tgl_terima" value='<?php echo "$baris[tgl_terima]"; ?>' autocomplete="off">
				</div>
				<div class="form-group">
				<label>Keterangan</label>
				<select class="form-control" name="ket" >
				     <option value=" "> </option>
					<option value="Paket Sudah dikim">Paket Sudah dikim</option>
					<option value="Paket Sudah bisa diambil">Paket Sudah bisa diambil</option>
					<option value="Paket Belum Dikirim">Paket Belum Dikirim</option>
					<option value="LJK Error, segera Chat via skype Detection">LJK Error, segera Chat via skype Detection</option>
					<option value="Berita acara Pengiriman Error, segera Chat via skype Detection">Berita acara Pengiriman Error, segera Chat via skype Detection</option>
					<option value="Form Absen Error, segera Chat via skype Detection">Form Absen Error, segera Chat via skype Detection </option>
				</select>
				</div>
		    </div>
				<div class="modal-footer">
					<a href ="home.php"><button type="button" class="btn btn-default" data-dismiss="modal">Batal</button></a>
					<input type="submit" class="btn btn-primary" value="SIMPAN">
				</div>
							

			</form>
		</div>
	</div>
</div>



<script src="plugins/jQuery/jquery-2.2.3.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
<script src="plugins/slimScroll/jquery.slimscroll.min.js"></script>
<script src="plugins/fastclick/fastclick.js"></script>
<script src="dist/js/app.min.js"></script>
<script src="dist/js/demo.js"></script>
</body>
</html>
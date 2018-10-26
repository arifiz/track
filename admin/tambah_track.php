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
<h3>Tambah Tracking Baru</h3>
<a class="btn" href="home.php"><span class="glyphicon glyphicon-arrow-left"></span>Kembali</a>
<?php 
include "koneksi.php";
$per_hal=10;
$jumlah_record=mysql_query("SELECT COUNT(*) from utama");
$jum=mysql_result($jumlah_record, 0);
$halaman=ceil($jum / $per_hal);
$page = (isset($_GET['page'])) ? (int)$_GET['page'] : 1;
$start = ($page - 1) * $per_hal;
?>

<form action="track_tambah_simpan.php" method="post">
					<div class="form-group">
						<label>Nomor</label>
						<input name="no_kirim" type="text" class="form-control" id="tgl2"  name="no_kirim" >
				</div>
					<div class="form-group">
							<label>Nama Cabang</label>								
							<select class="form-control" name="cabang">
							  <option>---- Pilih Cabang ----</option>
								<?php 
								$brg=mysql_query("select * from at_lembaga order by nama asc");
								while($b=mysql_fetch_array($brg)){
									?>	
									<option value="<?php echo $b['nama']; ?>"><?php echo $b['nama'] ?></option>
									<?php 
								}
								?>
							</select>
							</br>
					<a href="tmb_cabang.php"><u>Tambah Cabang Baru</u></a>
				  </div>				
				<div class="form-group">
				<label>Media</label>
				<select class="form-control" name="via" >
					<option value="Paket">Paket</option>
					<option value="Email">Email</option>
					<option value="Kliring">Kliring</option>
				</select>
				</div>	
					<div class="form-group">
						<label>Tanggal Masuk</label>
						<input name="tgl_masuk" type="date" class="form-control" id="tgl" autocomplete="off">
					</div>
				<div class="form-group">
				<label>Scanning</label>
				<select class="form-control" name="scanning" >
					<option value="Belum">Belum</option>
					<option value="Sudah">Sudah</option>
					<option value="Error">Error</option>
				</select>
				</div>
				<div class="form-group">
				<label>Printing</label>
				<select class="form-control" name="printing" >
					<option value="Belum">Belum</option>
					<option value="Sudah">Sudah</option>
					<option value="Error">Error</option>
				</select>
				</div><div class="form-group">
				<label>Packing</label>
				<select class="form-control" name="packing" >
					<option value="Belum">Belum</option>
					<option value="Sudah">Sudah</option>
					<option value="Error">Error</option>
				</select>
				</div>
					<div class="form-group">
						<label>Tanggal Kirim</label>
						<input name="tgl_kirim" type="date" class="form-control" id="tgl2" autocomplete="off">
					</div>						
				 	<div class="form-group">
						<label>Keterangan</label>
						<input name="ket" type="text" class="form-control" id="tgl2" autocomplete="off">
					</div>	
					</div>
				<div class="modal-footer">
					<a href="home.php"><button type="button" class="btn btn-default" data-dismiss="modal">Batal</button></a>
					<input type="submit" class="btn btn-primary" value="Simpan">
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
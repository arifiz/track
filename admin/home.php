<?php
function DateToIndo($date) { // fungsi atau method untuk mengubah tanggal ke format indonesia
   // variabel BulanIndo merupakan variabel array yang menyimpan nama-nama bulan
		$BulanIndo = array("Januari", "Februari", "Maret",
						   "April", "Mei", "Juni",
						   "Juli", "Agustus", "September",
						   "Oktober", "November", "Desember");
	
		$tahun = substr($date, 0, 4); // memisahkan format tahun menggunakan substring
		$bulan = substr($date, 5, 2); // memisahkan format bulan menggunakan substring
		$tgl   = substr($date, 8, 2); // memisahkan format tanggal menggunakan substring
		
		$result = $tgl . " " . $BulanIndo[(int)$bulan-1] . " ". $tahun;
		return($result);
}
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Detection Admin Page</title>
  <link href='https://d30y9cdsu7xlg0.cloudfront.net/png/228840-200.png' rel='shortcut icon'>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
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
                <li><a href="logout.php">Login Admin</a></li>
              </ul>
            </li>
          </ul>
          <form class="navbar-form navbar-left" role="search">
            <div class="form-group">
              <input type="text" class="form-control" id="navbar-search-input" placeholder="Cari">
            </div>
          </form>
        </div>
        <!-- /.navbar-collapse -->
        <!-- Navbar Right Menu -->
        <div class="navbar-custom-menu">
          <ul class="nav navbar-nav">

            <li class="dropdown tasks-menu">
              <!-- Menu Toggle Button -->

            </li>
            <!-- User Account Menu -->
            
          </ul>
        </div>
        <!-- /.navbar-custom-menu -->
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
<a href="tambah_track.php" ><button style="margin-bottom:20px" class="btn btn-success"></span>Tracking Baru</button></a>
<br/>
<br/> 
 
<?php 
include "koneksi.php";
$per_hal=20;
$jumlah_record=mysql_query("SELECT COUNT(*) from utama");
$jum=mysql_result($jumlah_record, 0);
$halaman=ceil($jum / $per_hal);
$page = (isset($_GET['page'])) ? (int)$_GET['page'] : 1;
$start = ($page - 1) * $per_hal;
?>
<div class="col-md-12">
	<table class="col-md-2">
		<tr>
			<td>Jumlah Record</td>		
			<td><?php echo $jum; ?></td>
		</tr>
		<tr>
			<td>Jumlah Halaman</td>	
			<td><?php echo $halaman; ?></td>
		</tr>
	</table>

</div>
          <form action="search_exe.php" name="formcari" method="post">
        <div class="input-group col-md-5 col-md-offset-7">
		<span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-search"></span></span>
		<input input type="text" name="cabang" class="form-control" placeholder="Cari Cabang di sini .." aria-describedby="basic-addon1" >	
	     </div>
          </form>
<br/>
<div class="box-body">
<div class="table-responsive">
<table class="table table-bordered table-hover" border="0">
	<tr>
		<thead>
                    <th align="center">Nomor</th>
					<th align="center">Nomor Track</th>
					<th align="center">Cabang</th>
					<th align="center">Terima Via</th>
                    <th align="center">Tanggal Masuk</th>
                    <th align="center">Scanning</th>
				    <th align="center">Printing</th>
					<th align="center">Packing</th>
                    <th align="center">Tanggal Kirim</th>
					<th align="center">Tanggal Terima</th>
					<th align="center">Keterangan</th>
					<th align="center">Edit</th>
					<th align="center">Hapus</th>
		</thead>
  </tr>
</div>
</div>
		
	<?php 
	if(isset($_GET['cari'])){
		$cari=mysql_real_escape_string($_GET['cari']);
		$brg=mysql_query("select * from utama where Cabang like '$cari' or Tanggal like '$cari' order by tgl_masuk desc");
	}else{
		$brg=mysql_query("select * from utama order by tgl_masuk desc limit $start, $per_hal");
	}
	$no=1;
	if($start > 1 ){ $no=$start+1; }
	while($b=mysql_fetch_array($brg)){

		?>
		<tr>
			<td align="center"><span class="style3"><span class="style5"><?php echo $no++ ?></span></td>
			<td align="center"><span class="style3"><span class="style5"><?php echo $b['no_kirim']; ?></span></td>
			<td align="center"><span class="style3"><span class="style5"><?php echo $b['cabang']; ?></span></td>
			<td align="center"><span class="style3"><span class="style5"><?php echo $b['via']; ?></span></td>			
			<td align="center"><span class="style3"><span class="style5"><?php echo DateToIndo($b['tgl_masuk']); ?></span></td>			
			<td align="center"><span class="style3"><span class="style5"><?php echo $b['scanning']; ?></span></td>
			<td align="center"><span class="style3"><span class="style5"><?php echo $b['printing']; ?></span></td>
			<td align="center"><span class="style3"><span class="style5"><?php echo $b['packing']; ?></span></td>
			<td align="center"><span class="style3"><span class="style5"><?php echo DateToIndo($b['tgl_kirim']); ?></span></td>
			<td align="center"><span class="style3"><span class="style5"><?php echo DateToIndo($b['tgl_terima']); ?></span></td>
			<td align="center"><span class="style3"><span class="style5"><?php echo $b['ket']; ?></span></td>
			<td> 
				<span class="style4"><a href="edit.php?id_cabang=<?php echo $b['id_cabang']; ?>" class="btn btn-warning">Edit</a></td> 
				<td><a onclick="if(confirm('Apakah anda yakin ingin menghapus data ini ??')){ location.href='hapus.php?id=<?php echo $b['id_cabang']; ?>' }" class="btn btn-danger">Hapus</a> </span></td>
		</tr>		
		<?php 
	}
	?>
	
	
	
</table>
<ul class="pagination">			
			<?php 
			for($x=1;$x<=$halaman;$x++){
				?>
				<li><a href="?page=<?php echo $x ?>"><?php echo $x ?></a></li>
				<?php
			}
			?>						
</ul>
<!-- modal input -->
<div id="myModal" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title">Tracking Baru</h4>
			</div>
			<div class="modal-body">
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
					<a data-toggle="modal" data-target="#myModal2" href="#"><u>Tambah Cabang Baru</u></a>
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
					<button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
					<input type="submit" class="btn btn-primary" value="Simpan">
				</div>
							

			</form>
		</div>
	</div>
</div>
<div id="myModal2" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title">Tambah Cabang Baru</h4>
			</div>
			<div class="modal-body">
				<form action="tambah_cabang_simpan.php" method="post">
						
				 	<div class="form-group">
						<label>ID Cabang</label>
						<input name="kode" type="text" class="form-control" id="kode" autocomplete="off">
					</div>	
					<div class="form-group">
						<label>Nama cabang</label>
						<input name="nama" type="text" class="form-control" id="nama" autocomplete="off">
					</div>	
			</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
					<input type="submit" class="btn btn-primary" value="Simpan">
				</div>
			</form>
		</div>
	</div>
</div>

<script type="text/javascript">
		$(document).ready(function(){
			$("#tgl").datepicker({dateFormat : 'yy/mm/dd'});							
			$("#tgl2").datepicker({dateFormat : 'yy/mm/dd'});							
		});
	</script>

<script src="plugins/jQuery/jquery-2.2.3.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
<script src="plugins/slimScroll/jquery.slimscroll.min.js"></script>
<script src="plugins/fastclick/fastclick.js"></script>
<script src="dist/js/app.min.js"></script>
<script src="dist/js/demo.js"></script>
</body>
</html>

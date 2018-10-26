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
?><!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Detection Tracking Page</title>
  <link href='http://landsker.co.uk/wp-content/uploads/2014/06/planning.png' rel='shortcut icon'>
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
          <a href="#" class="navbar-brand"><img src="images/logo.png" height="30" width="180"></a>
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
            <i class="fa fa-bars"></i>
          </button>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse pull-left" id="navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="#">Home <span class="sr-only">(current)</span></a></li>
          </ul>
          <form action="search_exe.php" name="formcari" method="post">
        <div class="input-group col-md-5 col-md-offset-7">
		<span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-search"></span></span>
		<input input type="text" name="cabang" class="form-control" placeholder="Cari Cabang di sini .." aria-describedby="basic-addon1" >	
	     </div>
          </form>

        </div>
	</div>
        <!-- /.navbar-collapse -->

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
</div>
</div>
</div>
 
            <div class="box-body">
              <div class="table-responsive">
                <table class="table table-bordered table-hover">
                  <thead>
                  <tr bgcolor="#3c8dbc">
					<td align="center"><b>Nomor</b></td>
                    <td align="center"><b>Cabang</b></td>
                    <td align="center"><b>Tanggal Masuk</b></td>
					<td align="center"><b>Terima Via</b></td>
                    <td align="center"><b>Scanning</b></td>
				    <td align="center"><b>Printing</b></td>
					<td align="center"><b>Packing</b></td>
                    <td align="center"><b>Tanggal Kirim</b></td>
					<td align="center"><b>Tanggal Terima</b></td>
					<td align="center"><b>Keterangan</b></td>
                  </tr>
                  </thead>
                  <tbody>		  
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
		
		
		<?php
			$warna="#ffffff";
			if($b['tgl_kirim'] != "0000-00-00"){ $warna="ADD8E6"; }
	  echo "<tr bgcolor=$warna>
			<td align='center'><span class='style3'><span class='style5'> $b[no_kirim] </span></td>
			<td align='center'><span class='style3'><span class='style5'> $b[cabang] </span></td>
			<td align='center'><span class='style3'><span class='style5'> ".DateToIndo($b['tgl_masuk'])."</span></td>	
			<td align='center'><span class='style3'><span class='style5'> $b[via] </span></td>					
			<td align='center'><span class='style3'><span class='style5'> $b[scanning] </span></td>
			<td align='center'><span class='style3'><span class='style5'> $b[printing] </span></td>
			<td align='center'><span class='style3'><span class='style5'> $b[packing] </span></td>
		    <td align='center'><span class='style3'><span class='style5'> ".DateToIndo($b['tgl_kirim'])."</span></td>	
			<td align='center'><span class='style3'><span class='style5'> ".DateToIndo($b['tgl_terima'])."</span></td>			
			<td align='center'><span class='style3'><span class='style5'> $b[ket] </span></td>
				
		</tr>"
		?>
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

<?php
include "koneksi.php";
$cabang= $_POST['cabang']; //get the nama value from form
$q = "SELECT * from utama where cabang like '%$cabang%' "; //query to get the search result
$result = mysql_query($q); //execute the query $q
echo "<center>";

while ($data = mysql_fetch_array($result)) {  //fetch the result from query into an array
echo "
";
}
  $jumlah = mysql_num_rows($result);   
  if ($jumlah > 0) {  
    echo '<p><div class="alert alert-warning alert-dismissible"><h5>Data yang masuk diurutkan berdasarkan tanggal paket masuk di Detection</h5></div></p>';  
     
        while ($res=mysql_fetch_array($result)) {  
        $nomor++; echo $nomor.'. ';  
        echo $res[cabang].'<br>';  
      }  
  }


  else {  
   // menampilkan pesan zero data  
    echo '<html><div class="alert alert-info alert-dismissible">
                <h4><i class="icon fa fa-info"></i>Tidak ada paket LJK yang masuk hari ini.</h4>
                Paket mungkin masih dalam perjalanan ke Detection atau belum masuk ke detection
              </div>
			  </html>';  
  }     

					?>
              </div>
            </div>
          </div>
        </div>

<!-- Start Timer 15/sec refresh -->
<?php
$page = $_SERVER['PHP_SELF'];
$sec = "60";
?>
<meta http-equiv="refresh" content="<?php echo $sec?>;URL='<?php echo $page?>'">
<?php
echo "<h5><i></i></h5>";
 ?>
<!-- End Timer 15/sec refresh -->   
    
  <div class="container">
	
      <div class="pull-right hidden-xs">
        <b>Version</b> 2.0
      </div>
      <strong>Copyright &copy; 2016 <a href="#">IT Detection</a>.</strong> All rights reserved.
	  
  </div>
  

<script src="plugins/jQuery/jquery-2.2.3.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
<script src="plugins/slimScroll/jquery.slimscroll.min.js"></script>
<script src="plugins/fastclick/fastclick.js"></script>
<script src="dist/js/app.min.js"></script>
<script src="dist/js/demo.js"></script>
</body>
</html>
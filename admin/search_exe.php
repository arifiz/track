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
          <a href="home.php" class="navbar-brand"><img src="../images/logo.png" height="20" width="130"></a>
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
            <i class="fa fa-bars"></i>
          </button>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse pull-left" id="navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="home.php">Kembali ke Home <span class="sr-only">(current)</span></a></li>
            
          </ul>

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

             <center><h3>Hasil searching</h3></center>
            <!-- /.box-header -->
            <div>

 </div>
    
   
              <div class="box-tools pull-right">
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="table-responsive">
                <table class="table no-margin">
                  <thead>
                  <tr>
				    <th>Nomor Track</th>
                    <th>Cabang</th>
                    <th>Tanggal Masuk</th>
                    <th>Scanning</th>
				    <th>Printing</th>
					<th>Packing</th>
                    <th>Tanggal Kirim</th>
					<th>Keterangan</th>
					<th>Edit</th>
					<th>Hapus</th>
                  </tr>
                  </thead>
                  <tbody>
                  <tr>
<?php
include "koneksi.php";
$cabang= $_POST['cabang']; //get the nama value from form
$q = "SELECT * from utama where cabang like '%$cabang%' "; //query to get the search result
$result = mysql_query($q); //execute the query $q
echo "<center>";

while ($data = mysql_fetch_array($result)) {  //fetch the result from query into an array
echo "
<tr>
<td>".$data['id_cabang']."</td>
<td>".$data['cabang']."</td>
<td>".$data['tgl_masuk']."</td>
<td>".$data['scanning']."</td>
<td>".$data['printing']."</td>
<td>".$data['packing']."</td>
<td>".$data['tgl_masuk']."</td>
<td>".$data['ket']."</td>
<td><a class='btn btn-warning' href=edit.php?id_cabang=".$data['id_cabang'].">Edit</td>
<td><a class='btn btn-danger' href=edit.php?id_cabang=".$data['id_cabang'].">Hapus</td>

</tr>";
}
  $jumlah = mysql_num_rows($result);   
  if ($jumlah > 0) {  
    echo '<p><div class="alert alert-success alert-dismissible"><h4><i class="icon fa fa-check"></i>Ada '.$jumlah.' paket LJK yang masuk</h4></div></p>';  
     
        while ($res=mysql_fetch_array($result)) {  
        $nomor++; echo $nomor.'. ';  
        echo $res[cabang].'<br>';  
      }  
  }  
  else {  
   // menampilkan pesan zero data  
    echo '<html><div class="alert alert-danger alert-dismissible">
                
                <h4><i class="icon fa fa-ban"></i>Mohon maaf, Data yang anda cari tidak ditemukan.</h4>
                 Silahkan periksa kata kunci anda kembali
              </div></html>';  
  }     

?>
  </footer>
</div>


<script src="plugins/jQuery/jquery-2.2.3.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
<script src="plugins/slimScroll/jquery.slimscroll.min.js"></script>
<script src="plugins/fastclick/fastclick.js"></script>
<script src="dist/js/app.min.js"></script>
<script src="dist/js/demo.js"></script>
</body>
</html>


 

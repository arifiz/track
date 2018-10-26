<?php 
include 'koneksi.php';
$kode=$_POST['kode'];
$nama=$_POST['nama'];

$hasil = mysql_query("insert into at_lembaga values('$kode','$nama')");

if ($hasil)
	echo '<script language="javascript">;
		document.location="home.php";</script>';
else
	echo '<script language="javascript">alert("Data Gagal Disimpan!");
		document.location="home.php";</script>';

 ?>
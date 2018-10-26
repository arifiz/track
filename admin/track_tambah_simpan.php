<?php 
include 'koneksi.php';
$no_kirim=$_POST['no_kirim'];
$cabang=$_POST['cabang'];
$via=$_POST['via'];
$tgl_masuk=$_POST['tgl_masuk'];
$scanning=$_POST['scanning'];
$printing=$_POST['printing'];
$packing=$_POST['packing'];
$tgl_kirim=$_POST['tgl_kirim'];
$ket=$_POST['ket'];

$hasil = mysql_query("insert into utama values('','$no_kirim','$cabang','$via','$tgl_masuk','$scanning','$printing','$packing','$tgl_kirim','$tgl_kirim','$ket')");

if ($hasil)
	echo '<script language="javascript">;
		document.location="home.php";</script>';
else
	echo '<script language="javascript">alert("Data Gagal Disimpan!");
		document.location="home.php";</script>';

 ?>
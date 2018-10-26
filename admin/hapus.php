<?php 
include 'koneksi.php';
$id=$_GET['id'];
mysql_query("delete from utama where id_cabang='$id'");
header("location:home.php");

?>
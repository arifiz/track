<?php
$id_cabang = $_POST[id_cabang];
$no_kirim = $_POST[no_kirim];
$cabang = $_POST[cabang];
$via = $_POST[via];
$tgl_masuk = $_POST[tgl_masuk];
$scanning = $_POST[scanning];
$printing = $_POST[printing];
$packing = $_POST[packing];
$tgl_kirim = $_POST[tgl_kirim];
$tgl_terima = $_POST[tgl_terima];
$ket = $_POST[ket];

include "koneksi.php";

$hasil= mysql_query("UPDATE utama SET no_kirim='$no_kirim',cabang='$cabang',via='$via',tgl_masuk='$tgl_masuk',scanning='$scanning',printing='$printing',packing='$packing',tgl_kirim='$tgl_kirim',tgl_terima='$tgl_terima',ket='$ket' WHERE id_cabang='$id_cabang'", $id_mysql);

print("<html><head><meta http-equiv='refresh' content='0;url=home.php'></head><body></body></html>");
?>
<?php 
include 'header.php';
?>

<h3><span class="glyphicon glyphicon-briefcase"></span>  Edit Pengiriman</h3>
<a class="btn" href="barang_laku.php"><span class="glyphicon glyphicon-arrow-left"></span>  Kembali</a>

<?php
$id_brg=mysql_real_escape_string($_GET['id']);

$det=mysql_query("select * from kirim where id_kirim='$id_brg'")or die(mysql_error());
while($d=mysql_fetch_array($det)){
	?>					
	<form action="update_laku.php" method="post">
		<table class="table">
			<tr>
				<td></td>
				<td><input type="hidden" name="id" value="<?php echo $d['id_kirim'] ?>"></td>
			</tr>
			<tr>
				<td>Penomeran</td>
				<td><input type="text" class="form-control" name="nomer" value="<?php echo $d['nomer'] ?>"></td>
			</tr>
			<tr>
				<td>Cabang Neutron</td>
				<td><input type="text" class="form-control" name="cabang" value="<?php echo $d['cabang1'] ?>"></td>
			</tr>
			<tr>
				<td>Media</td>
				<td><input type="text" class="form-control" name="media" value="<?php echo $d['media'] ?>"></td>
			</tr>
			<tr>
				<td>Tanggal Selesai</td>
				<td><input name="tglsel" type="text" class="form-control" id="tglsel" autocomplete="off" value="<?php echo $d['tglsel'] ?>"></td>
			</tr>
			<tr>
				<td>4SD-IVSD</td>
				<td><input type="text" class="form-control" name="4sd" value="<?php echo $d['ivsd'] ?>"></td>
			</tr>
			<tr>
				<td>1SMP-VIISMP</td>
				<td><input type="text" class="form-control" name="1smp" value="<?php echo $d['viismp'] ?>"></td>
			</tr>
			<tr>
				<td>1SMA-XSMA</td>
				<td><input type="text" class="form-control" name="1sma" value="<?php echo $d['xsma'] ?>"></td>
			</tr>
			<tr>
				<td>5SD-VSD</td>
				<td><input type="text" class="form-control" name="5sd" value="<?php echo $d['vsd'] ?>"></td>
			</tr>
			<tr>
				<td>2SMP-VIIISMP</td>
				<td><input type="text" class="form-control" name="2smp" value="<?php echo $d['viiismp'] ?>"></td>
			</tr>
			<tr>
				<td>2SMA-XISMA</td>
				<td><input type="text" class="form-control" name="2sma" value="<?php echo $d['xisma'] ?>"></td>
			</tr>
			<tr>
				<td>6SD-VISD</td>
				<td><input type="text" class="form-control" name="6sd" value="<?php echo $d['visd'] ?>"></td>
			</tr>
			<tr>
				<td>3SMP-IXSMP</td>
				<td><input type="text" class="form-control" name="3smp" value="<?php echo $d['ixsmp'] ?>"></td>
			</tr>
			<tr>
				<td>3SMA-XIISMA</td>
				<td><input type="text" class="form-control" name="3sma" value="<?php echo $d['xiisma'] ?>"></td>
			</tr>
			<tr>
				<td>Tanggal Kirim</td>
				<td><input name="tglkrm" type="text" class="form-control" id="tglkrm" autocomplete="off" value="<?php echo $d['tglkirim'] ?>"></td>
			</tr>
				<tr>
				<td>Petugas</td>
				<td><input type="text" class="form-control" name="petugas" value="<?php echo $d['petugas'] ?>"></td>
			</tr>	
			<tr>
				<td>VIA</td>
				<td><input type="text" class="form-control" name="via" value="<?php echo $d['via'] ?>"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" class="btn btn-info" value="Simpan"></td>
			</tr>
		</table>
	</form>
	<?php 
}
?>
 <script type="text/javascript">
        $(document).ready(function(){

            $('#tglsel').datepicker({dateFormat: 'yy/mm/dd'});
            $('#tglkrm').datepicker({dateFormat: 'yy/mm/dd'});

        });
    </script>
<?php 
include 'footer.php';

?>
<?php
// Sesion Di jalankan
session_start();

$UserName = $_POST['UserName'];
$Password = $_POST['Password'];
// membuat koneksi Ke MYSQL dan Database, Sesuaikan Dengan pengaturan di tempat anda 
include "koneksi.php";

// mencari Password berdasarkan UserName
$query = "SELECT * FROM login WHERE UserName = '$UserName'";
$hasil = mysql_query($query) or die("Error");
$data  = mysql_fetch_array($hasil);

if ($data['UserName'] && $Password==$data['Password']){

    // jika sesuai, maka buat session
        $_SESSION['UserName'] = $data['UserName'];
		$_SESSION['NIK'] = $data['NIK'];
        $_SESSION['TypeUser'] = $data['TypeUser'];
        if($data['TypeUser']=="Admin"){
            header("location:home.php");
		}if($data['TypeUser']=="Operator"){
            header("location:operator/index.php");
        }else if($data['TypeUser']=="Owner"){
            header("location:owner/index.php");
        }
		}
else{
		?>
		<script language="JavaScript">
			alert('Username atau Password tidak sesuai. Silahkan diulang kembali!');
			document.location='index.html';
		</script>
		<?php
    }
?>
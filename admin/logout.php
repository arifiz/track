<?php
session_start();
unset($_SESSION['UserName']);
unset($_SESSION['Password']);
session_destroy();
	header("Location:../index.php");
?>

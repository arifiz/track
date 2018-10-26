<?php
 $pemakai	="dete5883_tracking";
 $password	="Detecti0ns";
 $id_mysql	=mysql_connect("localhost",
 $pemakai,$password);
  if (! $id_mysql)
	die ("Database MySQL tak dapat dibuka");

  if (! mysql_select_db("dete5883_jogdas_t",
  $id_mysql))
	die("Database tidak bisa dipilih");
?>
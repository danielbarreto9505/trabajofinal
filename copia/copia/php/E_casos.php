<?php
	$id = number_format($_GET['id']);
	include 'C_conexion.php';
	$conexion->query("DELETE FROM casos WHERE cod_caso = $id") or die ($conexion-> mysqli_errno());

	header("location: ../A_adminCasos.php?estado2=1");


?>
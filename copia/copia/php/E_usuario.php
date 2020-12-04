<?php
	$id = number_format($_GET['id']);
	include 'C_conexion.php';
	$conexion->query("DELETE FROM casos WHERE id_cliente = $id") or die ($conexion-> mysqli_errno());
	$conexion->query("DELETE FROM `users` WHERE id = $id") or die ($conexion-> mysqli_errno());

	header("location: ../A_modificarUsuario.php?estado2=1");


?>
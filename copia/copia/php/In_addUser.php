<?php
	
	include 'C_conexion.php';

	$nom = $_POST['nom'];
	$ape = $_POST['ape'];
	$tel = $_POST['tel'];
	$cor = $_POST['cor'];
	$docu = $_POST['docu'];
	$num = $_POST['num'];
	$pass = $_POST['pass'];
	$passr = $_POST['passR'];
	$rol = $_POST['role'];

	if ($pass == $passr) {
		$conexion->query("INSERT INTO `users`( `nombre`, `apellido`, `telefono`, `correo`, `t_docu`, `num_docum`, `pass`, `rol`) VALUES ('$nom','$ape',$tel,'$cor','$docu',$num,'$pass','$rol')") or die(mysqli_errno());
		$conexion->close();
		header("location: ../A_insertarUsuario.php?estado=0");
	}else{
		header("location: ../A_insertarUsuario.php?estado=1");
	}



?>
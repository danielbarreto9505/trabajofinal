<?php
 require('C_conexion.php');

	$cod = $_POST['ide'];
	$nom = $_POST['nom'];
	$ape = $_POST['ape'];
	$cor = $_POST['cor'];
	$tel = $_POST['tel'];
	$num = $_POST['num'];
	$t_doc = $_POST['docu'];
	$rol = $_POST['rol'];

	$conexion->query("UPDATE `users` SET `nombre`='$nom',`apellido`='$ape',`telefono`=$tel,`correo`='$cor',`t_docu`='$t_doc',`num_docum`=$num,`rol`='$rol' WHERE id = $cod")or die($conexion-> mysqli_errno());

	
	$conexion->close();

	header("Location: ../A_modificarUsuario.php?estado=0");
?>
<?php
	include 'C_conexion.php';

 	$id = $_POST['usua'];
 	$nom = $_POST['nomb'];

 	$conexion->query("INSERT INTO `casos`( `nom_caso` ,`id_cliente`,`id_comentarios`) VALUES ('$nom',$id,$id)") or die(mysqli_errno());


 	header("Location: ../A_adminCasos.php?estado=1");
?>
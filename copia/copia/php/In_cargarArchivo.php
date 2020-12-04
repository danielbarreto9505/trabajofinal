<?php
	include 'C_conexion.php';
	$id = $_POST['id'];
	$nombre = $_FILES['archivo']['name'];
    $tipo = $_FILES['archivo']['type'];
    $tamanio = $_FILES['archivo']['size'];
    $ruta = $_FILES['archivo']['tmp_name'];
    $destino = "docs/" . $nombre;

    if (copy($ruta,"../".$destino)) {
    	$qry = "UPDATE casos SET arch_caso = '$destino' WHERE cod_caso = $id";
    	$conexion->query($qry) or die("error");
    	header("location: ../A_examinarCaso.php?id=$id&succes=1");
    }else{
    	header("location: ../A_examinarCaso.php?id=$id&error=1");
    }

?>
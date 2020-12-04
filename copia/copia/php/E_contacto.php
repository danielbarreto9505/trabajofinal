<?php   

include 'C_conexion.php';

$id = $_GET['id'];

$conexion->query("DELETE FROM `contactenos` WHERE id = $id") or die(mysqli_errno());
$conexion->close();

header("location: ../A_contacto.php?std=1")

?>
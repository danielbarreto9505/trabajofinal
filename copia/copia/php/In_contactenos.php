<?php  
include 'C_conexion.php';
$nom = $_POST['nom'];
$ape = $_POST['ape'];
$tel = $_POST['tel'];
$cor = $_POST['cor'];
$men = $_POST['men'];

$conexion->query("INSERT INTO `contactenos`( `nombre`, `apellido`, `telefono`, `correo`, `mensaje`) VALUES ('$nom','$ape',$tel,'$cor','$men')") or die (mysqli_error());
$conexion->close();

header("location: ../I_contactenos.php?std=1");
?>
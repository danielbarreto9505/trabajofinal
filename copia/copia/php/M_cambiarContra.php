<?php
session_start();
include 'C_conexion.php';

$pass = $_POST['contra'];
$pass_C = $_POST['conf_contra'];
$id_u = $_SESSION['id_clin'];
if($pass = $pass_C){
$qry = "UPDATE `users` SET `pass`= '$pass' WHERE id = $id_u";
 $conexion->query($qry) or die (mysqli_errno());
 $conexion->close();

 header("location: ../U_cambiarContraseña.php?std=1");
}else{
 header("location: ../U_cambiarContraseña.php?std=2");
}

?>
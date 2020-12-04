<?php

include 'C_conexion.php';

$pass = $_POST['contra'];
$pass_C = $_POST['conf_contra'];
$id_u = $_POST['cds'];
if($pass = $pass_C){
$qry = "UPDATE `users` SET `pass`= '$pass' WHERE id = $id_u";
 $conexion->query($qry) or die (mysqli_errno());
 $conexion->close();

 header("location: ../index.php?std=1");
}

?>
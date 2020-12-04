<?php
	session_start();
	session_destroy();

	include'C_conexion.php';
	$us =  $_POST["user"];
	$ps = $_POST["pass"];

	$op = $conexion->query("SELECT * FROM users WHERE correo = '$us' and pass = '$ps'") or die(mysqli_error($sql));
	
	if ($row = mysqli_fetch_array($op)) {
	session_start();
		$_SESSION['id_clin'] = $row[0];
		$_SESSION['nomb'] = $row[1]." ".$row[2];
		$_SESSION['rol'] = $row[8];


		mysqli_close($conexion); 
		switch ($row[8]) {
			case 'A':
				header("location: ../A_inicio.php");
				break;

			case 'U':
				header("location: ../U_inicio.php");
				break;
			default:
				# code...
				break;
		}
	}else
			{
			header("Location: ../I_login.php?estado=1");
			exit();
		}
		
?>
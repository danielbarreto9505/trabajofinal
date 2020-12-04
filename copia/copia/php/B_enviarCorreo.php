<?php 

include 'C_conexion.php';



$destino = $_GET['correo'];

$conexion = $conexion->query("SELECT * FROM users WHERE correo = '$destino' LIMIT 1 ");

	if (mysqli_num_rows($conexion)==0) {
		header("location: ../I_recuperarContra.php?std=3");
	}else{
		while ($row=$conexion->fetch_assoc()) {
			$id = $row['id'];
		}
		$desde = "FROM: "."gerencia@barretoymartinezabogados.com";
		$asun = "Recuperar contraseña";
		$mensaje = "<html> 
<head> 
   <title>RECUPERACION DE CONTRASEÑA</title> 
</head> 
<body> 
<h1>BARRETO Y MARTINEZ ABOGADOS ESPECIALIZADOS</h1> 
<h4>recuperacion de contraseña:</h4>
<p>

<b>Accede al siguiente enlace para recuperar tu contraseña:</b>
<a href="."https://www.barretoymartinezabogados.com/I_cambiarContra.php?cds=".echo $id;.">HAS CLICK AQUI</a>
</p> 
</body> 
</html>";
		$resultado = mail($destino, $asun, $mensaje, $desde);
			if ($resultado == true) {
				header("location: ../I_recuperarContra.php?std=1");
			}
				header("location: ../I_recuperarContra.php?std=2");

	}





?>
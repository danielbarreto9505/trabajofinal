<?php
	session_start();
	require("M_head.php");
	require("php/V_user.php");
	$r = validar_admin($_SESSION['rol']);

	if ($r == 1) {
		?>
		<body>
	<?php
		require("U_menu.php");
	?>
	<h4 style="padding-top: 50px;">Bienvenido <?php echo $_SESSION['nomb']; ?></h4>
	</body>
	</html>
		<?php

	}else{

		echo "ESTA INTENTANDO INGRESAR DE FORMA ILEGAL A LA PLATAFORMA";
	}
?>

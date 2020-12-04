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
	<?php
		if(isset($_GET["std"]) && $_GET["std"] == 1 ){
		?>	
		<script>
			swal({
  title: "<b>Contraseña modificada correctamente</b>",
  text: "<h5>",
  html: true,
  type: "success",
  confirmButtonText: "Aceptar"
});
		</script>
		
	<?php
		}

		?>

	<?php
		if(isset($_GET["std"]) && $_GET["std"] == 2 ){
		?>	
		<script>
			swal({
  title: "<b>Las contraseñas no coinciden</b>",
  text: "<h5>",
  html: true,
  type: "warning",
  confirmButtonText: "Aceptar"
});
		</script>
		
	<?php
		}

		?>
	<div class="container">
		<div class="row">
			<div class="col-md-3"></div>
			<div class="col-md-6 text-center">
				<br>
				<br>
				<h4>CAMBIAR CONTRASEÑA</h4>
				<form action="php/M_cambiarContra.php" method="post">
					<input type="password" placeholder="Contraseña nueva" class="form-control" name="contra" autocomplete="off" required>
					<br>
					<input type="password" placeholder="Repetir contraseña" class="form-control" name="conf_contra" autocomplete="off" required>
					<br>
					<button style="height: 50px; width: 80%; border-radius: 10px; background-color: rgb(39,78,107);  cursor: pointer; color: #fff; margin-bottom: 80px;" type="submit">Modificar Contraseña</button>
				</form>
			</div>
			<div class="col-md-3"></div>
		</div>
	</div>
		<?php

	}else{

		echo "ESTA INTENTANDO INGRESAR DE FORMA ILEGAL A LA PLATAFORMA";
	}
?>

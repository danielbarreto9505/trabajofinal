<?php
	session_start();
	require("M_head.php");
	require("php/V_admin.php");
	$r = validar_admin($_SESSION['rol']);

	if ($r == 1) {
		?>
		<body>
	<?php
		require("A_menu.php");
	?>
<!---------------------------------------->	
	<?php
		if(isset($_GET["estado"]) && $_GET["estado"] == 0 ){
		?>	
		<script>
			swal({
  title: "<b>Usuario creado exitosamente</b>",
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
		if(isset($_GET["estado"]) && $_GET["estado"] == 1 ){
		?>	
		<script>
			swal({
  title: "<b>las contraseñas no coinciden</b>",
  text: "<h5>",
  html: true,
  type: "error",
  confirmButtonText: "Aceptar"
});
		</script>
		
	<?php	
		}		
	?>
<!--------------------------------------------->
<div class="container-fluid">
	<div class="row">
		<div class="col-md-3"></div>
		<div class="col-md-6 text-center" style="padding-top: 20px;">
			<h1><b>Crear Usuario</b></h1>
			<hr>
			<div>
				<form action="php/In_addUser.php" method="post">
					<div  style="margin-top: 15px;">
						<input type="text" name="nom" required placeholder="Nombre" class="form-control" autocomplete="off" >
					</div>
					<div style="margin-top: 15px;">
						<input type="text" name="ape" required placeholder="Apellido" class="form-control" autocomplete="off">
					</div >
					<div style="margin-top: 15px;">
						<input type="text" name="tel"  required placeholder="Telefono" class="form-control" autocomplete="off" pattern="[0-9]{10}" title="Si es un numero fijo inicia con 3 digitos 031 y el numero de telefono seguido, para celular porfavor digite los 10 digitos correspondientes">
					</div>
					<div style="margin-top: 15px;">
						<input type="text" name="cor" required placeholder="Correo" class="form-control" autocomplete="off" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" title="Por favor ingrese un correo valido">
					</div>
					<div style="margin-top: 15px;">
						<select name="docu" class="form-control">
							<option value="CC">CC</option>
							<option value="TI">TI</option>
						</select>
					</div>
					<div style="margin-top: 15px;">
						<input type="text" name="num" required placeholder="Numero de documento" class="form-control" autocomplete="off" >
					</div>

<!-----------contraseña----->
					<div style="margin-top: 15px;">
						<input type="password" name="pass" required placeholder="Contraseña" class="form-control" autocomplete="off" >
					</div>

					<div style="margin-top: 15px;">
						<input type="password" name="passR" required placeholder="Contraseña" class="form-control" autocomplete="off" >
					</div>
<!-----------fin contraseña----->	

					<div style="margin-top: 15px;">
						<select name="role"  class="form-control">
							<option value="A">Administrador</option>
							<option value="U">Usuario</option>
						</select>
					</div>
						<div style="margin-top: 10px;"><button style="height: 50px; width: 80%; border-radius: 10px; background-color: rgb(39,78,107);  cursor: pointer; color: #fff; margin-bottom: 80px;" type="submit">Agregar Usuario</button></div>
				</form>
			</div>
		</div>
		<div class="col-md-3"></div>
	</div>
</div>
</body>
</html>
		<?php

	}else{

		echo "ESTA INTENTANDO INGRESAR DE FORMA ILEGAL A LA PLATAFORMA";
	}
?>
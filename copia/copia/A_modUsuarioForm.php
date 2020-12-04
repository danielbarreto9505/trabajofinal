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
<div class="container-fluid">
	<div class="row">
		<div class="col-md-3"></div>
		<div class="col-md-6 text-center" style="padding-top: 30px;">
			<h1><b>Modificar    Usuario</b></h1>
			<hr>
		<?php
			include 'php/C_conexion.php';

		$idu = number_format($_GET['id']);

		$op = $conexion->query("SELECT * FROM users WHERE id = $idu");

		if ($row = mysqli_fetch_array($op)) {
			?>
		<div>
			<form action="php/In_modificaUsuario.php" method="post">
					<input type="text" name="ide" class="input-group form-control" readonly value="<?php echo $row[0];?>">
					<div class="input-group mb-3" style="margin-top: 15px;">
						<input type="text" name="nom" required placeholder="Nombre" class="form-control" autocomplete="off"  value="<?php echo $row[1];?>">
						<div class="input-group-append">
    						<span class="input-group-text" id="basic-addon2">Nombre</span>
  						</div>
					</div>
					
					<div class="input-group mb-3" style="margin-top: 15px;">
						<input type="text" name="ape" required placeholder="Apellido" class="form-control" autocomplete="off" value="<?php echo $row[2];?>">
						<div class="input-group-append">
    						<span class="input-group-text" id="basic-addon2">Apellido</span>
  						</div>
					</div >
					<div class="input-group mb-3" style="margin-top: 15px;">
						<input type="text" name="tel"  required placeholder="Telefono" class="form-control" autocomplete="off" pattern="[0-9]{10}" title="Si es un numero fijo inicia con 3 digitos 031 y el numero de telefono seguido, para celular porfavor digite los 10 digitos correspondientes" value="<?php echo $row[3];?>">
						<div class="input-group-append">
    						<span class="input-group-text" id="basic-addon2">Telefono</span>
  						</div>
					</div>

					<div class="input-group mb-3" style="margin-top: 15px;" >
						<input type="text" name="cor" required placeholder="Correo" class="form-control" autocomplete="off" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" title="Por favor ingrese un correo valido" value="<?php echo $row[4];?>">
						<div class="input-group-append">
    						<span class="input-group-text" id="basic-addon2">Correo</span>
  						</div>
					</div>
					<div class="input-group mb-3" style="margin-top: 15px;">
						<select name="docu" id="" class="form-control">
							<option value="CC">CC</option>
							<option value="TI">TI</option>
						</select>
						<div class="input-group-append">
    						<span class="input-group-text" id="basic-addon2">Tipo de documento</span>
  						</div>
					</div>
					<div class="input-group mb-3" style="margin-top: 15px;">
						<input type="text" name="num" required placeholder="Numero de documento" class="form-control" autocomplete="off" value="<?php echo $row[6];?>">
						<div class="input-group-append">
    						<span class="input-group-text" id="basic-addon2">Numero de documento</span>
  						</div>
					</div>
					<div class="input-group mb-3" style="margin-top: 15px;">
						<select name="rol" id="" class="form-control">
							<option value="A">Administrador</option>
							<option value="U">Usuario</option>
						</select>
						<div class="input-group-append">
    						<span class="input-group-text" id="basic-addon2">Rol </span>
  						</div>
					</div>
						<div style="margin-top: 10px;"><button id="btn" style="height: 50px; width: 80%; border-radius: 10px; background-color: rgb(39,78,107);  cursor: pointer; color: #fff; margin-bottom: 80px;" type="submit" onclick="return confirm('¿estas seguro de aplicar estos cambios?');">Modificar Usuario</button></div>
				</form>
			<?php
		}
	?>
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

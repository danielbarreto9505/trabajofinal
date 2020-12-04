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

<?php
		if(isset($_GET["estado"]) && $_GET["estado"] !== 0 ){
		?>	
		<script>
			swal({
  title: "<b>Curso exitosamente</b>",
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
		if(isset($_GET["estado2"]) && $_GET["estado2"] !== 0 ){
		?>	
		<script>
			swal({
  title: "<b>curso eliminado exitosamente</b>",
  text: "<h5>",
  html: true,
  type: "error",
  confirmButtonText: "Aceptar"
});
		</script>
		
	<?php	
		}		
	?>
<style>
	.th{
		background-color: rgb(39,78,107);
		color: #fff;
	}
	.tabla tr:nth-child(odd){
  background-color: #F8F8F8;
}

.tabla tr:nth-child(even){
  background-color: #CFCFCF;
}
 tr:first-child th:first-child{border-top-left-radius: 10px;}
 tr:first-child th:last-child{border-top-right-radius: 10px;}

 tr:last-child td:first-child{border-bottom-left-radius: 10px;}
 tr:last-child td:last-child{border-bottom-right-radius: 10px;}
</style>
<div class="container-fluid">
	<div class="row">
		<div class="col-md-2"></div>
		<div class="col-md-8 text-center" style="margin-top: 30px;">
			<h1>Crear Curso</h1>
			<hr>
			<form action="php/In_addCaso.php" method="post">
			<div style="margin-top: 15px;" class="input-group"><input type="text" required="true" class="form-control" name="nomb" placeholder="Nombre del curso">
			<div class="input-group-append">
    				<span class="input-group-text" id="basic-addon2">Nombre del Curso</span>
  				</div>
  			</div>
			<div style="margin-top: 15px;" class="input-group mb-3">
				<select name="usua" id="" class="form-control">
					<?php
						include 'php/C_conexion.php';
						$conexion = $conexion->query("SELECT * FROM users where rol = 'U'");
						while ($row = $conexion->fetch_assoc()) {
						
							?>
								<option value="<?php echo $row['id'];?>"><?php echo $row['nombre']." ".$row['apellido'];?></option>
							<?php
						
						}
					?>
				</select>
				<div class="input-group-append">
    				<span class="input-group-text" id="basic-addon2">Asignar usuario</span>
  				</div>
			</div>
			<div style="margin-top: 10px;"><button id="btn" style="height: 50px; width: 80%; border-radius: 10px; background-color: rgb(39,78,107);  cursor: pointer; color: #fff; margin-bottom: 80px;" type="submit" onclick="return confirm('¿estas seguro de aplicar estos cambios?');">Crear Curso</button></div>
			<div style="margin-top: 15px;"></div>

			</form>
		</div>
		<div class="col-md-2"></div>
	</div>
	<hr>
	<div class="container-fluid">
		<div class="row" style="margin-bottom: 30px;">
			<div class="col-md-2"></div>
			<div class="col-md-8 text-center">
				<h1>Lista de Casos</h1>
				<hr>
				<table style="width: 100%;" class="tabla" style="padding-bottom: 30px;">
					<tr>
						<th class="th">Identificacion</th>
						<th class="th">Nombre del curso</th>
						<th class="th">Cliente</th>
						<th class="th">Eliminar</th>
					</tr>
					<tbody>
						<?php
							include 'php/C_conexion.php';

							$conexion = $conexion->query("SELECT a.cod_caso,b.nombre,b.apellido,a.nom_caso  FROM casos a LEFT JOIN users b on a.id_cliente = b.id");
							while ($row2 = $conexion->fetch_assoc()) {
								?>
							<tr>
							<th style="padding-bottom: 15px; padding-top: 15px;"><?php echo $row2['cod_caso'];?></th>
							<th style="padding-bottom: 15px; padding-top: 15px;"><a href="A_examinarCaso.php?id=<?php  echo $row2['cod_caso'];?>"><?php echo $row2['nom_caso'];?></a></th>
							<th style="padding-bottom: 15px; padding-top: 15px;"><?php echo $row2['nombre']." ".$row2['apellido'];?></th>
							<th style="padding-bottom: 15px; padding-top: 15px;"><button style="border-style: none; background-color: inherit;" onclick="return confirm('¿desea eliminar este caso, esta operacion no se puede deshacer?');"><a href="php/E_casos.php?id=<?php echo $row2['cod_caso']; ?>" class="icon-cross" style="background-color: red; color: #fff; border-style: none;text-decoration: none; padding: 7px; border-radius: 5px; cursor: pointer; margin: 50px;"></a></button></th>
								<?php
							}
						?>

						</tr>
					</tbody>
				</table>
			</div>
			<div class="col-md-2"></div>
		</div>
	</div>
</div>
</body>
</html>
	<?php

	}else{

		echo "ESTA INTENTANDO INGRESAR DE FORMA ILEGAL A LA PLATAFORMA";
	}
?>

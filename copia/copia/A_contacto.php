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
		if(isset($_GET["std"]) && $_GET["std"] == 1 ){
		?>	
		<script>
			swal({
  title: "<b>Mensaje elminado</b>",
  text: "<h5></h5>",
  html: true,
  type: "success",
  confirmButtonText: "Aceptar"
});
		</script>
		
	<?php	
		}		
	?>
	<div>
		<div class="container">
			<div class="row">
				
				<div class="col-md-10 text-center">
					<br>
					<br>
					<br>
					<h3>Solcitudes de contacto</h3>
					<table class="table">
						<thead>
							<tr>
								<th>Nombre</th>
								<th>Apellido</th>
								<th>Telefono</th>
								<th>Correo</th>
								<th>Mensaje</th>
								<th>Eliminar</th>
							</tr>
						</thead>
						<tbody>
							<?php 
							include 'php/C_conexion.php';

							$conexion = $conexion->query("SELECT * FROM `contactenos`") or die(mysqli_errno());

							while ($row = $conexion->fetch_assoc()) {
								?>
							<tr style="max-height: auto;">
								<td><?php echo $row['nombre']; ?></td>
								<td><?php echo $row['apellido']; ?></td>
								<td><?php echo $row['telefono']; ?></td>
								<td><?php echo $row['correo']; ?></td>
								<td><p style="max-width: 900px; max-height: auto;" ><?php echo $row['mensaje']; ?></p></td>
								<td><div><button style="border-style: none; background-color: inherit;" onclick="return confirm('¿desea eliminar este usuario?');"><a href="php/E_contacto.php?id=<?php echo $row['id']; ?>" class="icon-cross" style="background-color: red; color: #fff; border-style: none;text-decoration: none; padding: 7px; border-radius: 5px; cursor: pointer; "></a></button></div></td>
							</tr>
							<?php
							}


							?>
						</tbody>
					</table>
				</div>
				
			</div>
		</div>
	</div>
		<?php

	}else{

		echo "ESTA INTENTANDO INGRESAR DE FORMA ILEGAL A LA PLATAFORMA";
	}
?>

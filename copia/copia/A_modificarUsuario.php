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
		if(isset($_GET["estado"]) && $_GET["estado"] == 0 ){
		?>	
		<script>
			swal({
  title: "<b>Usuario modificado exitosamente</b>",
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
		if(isset($_GET["estado2"]) && $_GET["estado2"] == 1 ){
		?>	
		<script>
			swal({
  title: "<b>Usuario eliminado</b>",
  text: "<h5>",
  html: true,
  type: "error",
  confirmButtonText: "Aceptar"
});
		</script>
		
	<?php	
		}		
	?>
<div class="container-fluid">
	<div class="row text-center">
		<div class="col-md-1"></div>
		<div class="col-md-10 text-center" style="padding-top: 20px;">
			<h1><b>Modificar o Eliminar Usuarios</b></h1>
			<hr>
			<div>
				<table class="text-center tabla">
					<tr>
						<th class="th">Nombre</th>
						<th class="th">Apellido</th>
						<th class="th">Telefono</th>
						<th class="th">Correo</th>
						<th class="th">Tipo de Documento</th>
						<th class="th">Numero de Documento</th>
						<th class="th">Rol</th>
						<th class="th" >Eliminar o Editar</th>
					</tr>
						<tbody>
							<?php
								include 'php/C_conexion.php';
								 $conexion = $conexion->query("SELECT * FROM users");
								while ($row = $conexion->fetch_assoc()) {
									
									?>
									<tr>
	 				  					<td style="padding: 10px;"><?php echo $row['nombre']; ?></td>
	 				  					<td style="padding: 10px;"><?php echo $row['apellido']; ?></td>
	 				  					<td style="padding: 10px;"><?php echo $row['telefono']; ?></td>
	 				  					<td style="padding: 10px;"><?php echo $row['correo']; ?></td>
     				  					<td style="padding: 10px;"><?php echo $row['t_docu']; ?></td>
     				  					<td style="padding: 10px;"><?php echo $row['num_docum']; ?></td>
     				  					<td style="padding: 10px;"><?php echo $row['rol']; ?></td>
										<?php if (number_format($row['id']) != 1){
											?>
											<td style="padding: 10px;"><div><button style="border-style: none; background-color: inherit;" onclick="return confirm('¿desea eliminar este usuario?');"><a href="php/E_usuario.php?id=<?php echo $row['id']; ?>" class="icon-cross" style="background-color: red; color: #fff; border-style: none;text-decoration: none; padding: 7px; border-radius: 5px; cursor: pointer; "></a></button></div>
												<div style="margin-top: 10px;"><a href="A_modUsuarioForm.php?id=<?php echo $row['id']; ?>" class="icon-pencil" style="background-color: blue; color: #fff; border-style: none; padding: 7px; border-radius: 5px; cursor: pointer; text-decoration: none;"></a></div>
											</td>
										<?php }else{
											?>
											<td>
											</td>
										<?php } ?>
   				 					</tr>
									<?php
								}
							?> 
						</tbody>
				</table>
			</div>
		</div>
		<div class="col-md-1"></div>
	</div>
</div>
</body>
</html>
<?php

	}else{

		echo "ESTA INTENTANDO INGRESAR DE FORMA ILEGAL A LA PLATAFORMA";
	}
?>
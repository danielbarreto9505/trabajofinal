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
	<div class="container">
		<div>
			<br>
			<br>
			<br>
			<table class="table tabla text-center">
				<thead>
					<tr>
						<th>ID</th>
						<th>Nombre del curso</th>
						<th>Examinar</th>
					</tr>
				</thead>
				<tbody >
					<?php 
					$id = $_SESSION['id_clin'];
					include 'php/C_conexion.php';
					$conexion = $conexion->query("SELECT * FROM casos WHERE id_cliente = $id ") or die(mysqli_errno());
					while ($row = $conexion->fetch_assoc()) {
						?>
					<tr>
						<td><?php echo $row['cod_caso']; ?></td>
						<td><?php echo $row['nom_caso']; ?></td>
						<td><a href="U_examinarCaso.php?id=<?php echo $row['cod_caso']; ?>" class="icon-pencil" style="background-color: blue; color: #fff; border-style: none;text-decoration: none; padding: 7px; border-radius: 5px; cursor: pointer; margin: 50px;"></a></td>
					</tr>
						<?php
					}
					?>
				</tbody>
			</table>
		</div>
	</div>
<?php
	}else{

		echo "ESTA INTENTANDO INGRESAR DE FORMA ILEGAL A LA PLATAFORMA";
	}
?>

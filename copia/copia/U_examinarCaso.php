<?php
	session_start();
	require("M_head.php");
	require("php/V_user.php");
	$r = validar_admin($_SESSION['rol']);
	$id_f = $_GET['id'];
	if ($r == 1) {
		?>
		<body>
	<?php
		require("U_menu.php");
	?>
	<?php
		if(isset($_GET["succes"]) && $_GET["succes"] == 1 ){
		?>	
		<script>
			swal({
  title: "<b>Archivo cargado exitosamente</b>",
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
		if(isset($_GET["error"]) && $_GET["error"] == 1 ){
		?>	
		<script>
			swal({
  title: "<b>Error al subir archivo</b>",
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
	<div class="row" style="margin-top: 20px;">

		<div class="col-md-4 text-center">
			
			<?php
				include 'php/C_conexion.php';
						$conexion = $conexion->query("SELECT * FROM casos where cod_caso = $id_f") or die(mysqli_errno());
						while ($row = $conexion->fetch_assoc()) {
				
			?>
		</div>
		<div class="col-md-8">
			<h2>Reporte</h2>
			<hr>
			<style>.frame{
				width: 100%;
				height: 600px;
			}
		</style>
		<iframe class="frame text-center" src="<?php echo $row['arch_caso'];?>">		
		</iframe>
		<?php 
			}
			?>
			
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
<?php
	session_start();
	require("M_head.php");
	require("php/V_admin.php");
	$r = validar_admin($_SESSION['rol']);
	$id_f = $_GET['id'];
	if ($r == 1) {
		?>
		<body>
	<?php
		require("A_menu.php");
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
		<div class="col-md-6 text-center">
			<h1>Administrar Curso</h1>
			<?php
				include 'php/C_conexion.php';
						$conexion = $conexion->query("SELECT * FROM casos where cod_caso = $id_f") or die(mysqli_errno());
						while ($row = $conexion->fetch_assoc()) {
				
			?>
			<div><h1>Codigo <?php  echo $row['cod_caso'];?></h1></div>
				<hr>
			
			<form action="php/In_cargarArchivo.php" class="input-control" enctype="multipart/form-data" method="post">

				<div><label for="">Codigo del curso</label></div>
				<div><input class="form-control" type="text" name="id" readonly value="<?php echo $_GET['id'];?>"></div>
				<label for="">Cargar PDF</label>
				<div><input type="file" class="form-control" required name="archivo"></div>	
				<div><button type="submit" style="height: 50px; width: 80%; border-radius: 10px; background-color: rgb(39,78,107);  cursor: pointer; color: #fff; margin-top: 10px;">Cargar PDF</button></div>

			</form>
			
			<hr>
			

		</div>
		<div class="col-md-6">
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
			<table>
				
			</table>
		</div>
	</div>
	<div class="row">
			
	</div>
</div>
</body>
</html>

		<?php

	}else{

		echo "ESTA INTENTANDO INGRESAR DE FORMA ILEGAL A LA PLATAFORMA";
	}
?>
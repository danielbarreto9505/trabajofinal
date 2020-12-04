<?php
	require("M_head.php");
?>
<body>
	<?php
		require("M_menu.php");
	?>
<!------------------------------- sweet alert ------------------>
<?php
		if(isset($_GET["std"]) && $_GET["std"] == 1 ){
		?>	
		<script>
			swal({
  title: "<b>MENSAJE ENVIADO</b>",
  text: "<h5>se ha enviado un link de confirmacion a su correo, verifique por favor si es necesario en: Correo no deseado.</h5>",
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
  title: "<b>ERROR</b>",
  text: "<h5>tenemos un problema tecnico con el envio de mensajes, estamos atentos a una pronta solucion.</a></h5>",
  html: true,
  type: "warning",
  confirmButtonText: "Aceptar"
});
		</script>
		
	<?php	
		}		
	?>

<?php
		if(isset($_GET["std"]) && $_GET["std"] == 3 ){
		?>	
		<script>
			swal({
  title: "<b>ERROR</b>",
  text: "<h5>El correo ingresado no existe en nuestra base de datos</a></h5>",
  html: true,
  type: "warning",
  confirmButtonText: "Aceptar"
});
		</script>
		
	<?php	
		}		
	?>	
<!------------------------------- sweet alert ------------------>
<div class="container-fluid">
	<div class="row">
		<div class="col-md-4"></div>
		<div class="col-md-4" style="margin-top: 30px;">
			<img src="img/logo-blanco.jpg" alt="" class="img-fluid">
		</div>
		<div class="col-md-4"></div>
	</div>
	<div class="row">
		<div class="col-md-4"></div>
		<div class="col-md-4" style="margin-top: 20px;" class="text-center">
			<form action="php/B_enviarCorreo.php" method="get">
				<label for="correo">Ingresa tu correo:</label>
				<input id="correo" type="text" name="correo" class="form-control" style="border-color: rgb(39,78,107); margin-bottom: 10px;" required placeholder="Correo">
				
				<br>
				<button type="submit" style="color: #fff; background-color: rgb(39,78,107); border-style: none; border-radius: 10px; width: 50%; height: 40px; cursor: pointer;">Recuperar contraseña</button>
			</form>
		</div>
		<div class="col-md-4"></div>
	</div>
</div>
</body>
</html>

<?php
	require("M_head.php");
?>
<body>
	<?php
		require("M_menu.php");
	?>
<!------------------------------- sweet alert ------------------>
<?php
		if(isset($_GET["estado"]) && $_GET["estado"] !== 0 ){
		?>	
		<script>
			swal({
  title: "<b>Error ingresando datos</b>",
  text: "<h5>porfavor verifica si el correo o la contraseña son correctos</a></h5>",
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
			<form action="php/L_login.php" method="post">
				
				<input type="text" name="user" class="form-control" style="border-color: rgb(39,78,107); margin-bottom: 10px;" required placeholder="Correo">
				<input type="password" name="pass" class="form-control " style="border-color: rgb(39,78,107); margin-bottom: 10px;" required placeholder="Contraseña">
				<br>
				<button type="submit" style="color: #fff; background-color: rgb(39,78,107); border-style: none; border-radius: 10px; width: 50%; height: 40px; cursor: pointer;">Iniciar Sesion</button>
			</form>
		</div>
		<div class="col-md-4"></div>
	</div>
</div>
</body>
</html>
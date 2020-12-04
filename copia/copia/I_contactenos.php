<?php
require ("M_head.php");
?>
<body>
	<?php
		require("M_menu.php");
	?>
	<?php
		if(isset($_GET["std"]) && $_GET["std"] == 1 ){
		?>	
		<script>
			swal({
  title: "<b>Mensaje Enviado</b>",
  text: "<h5>hemos recibido tu mensaje y estamos pendientes a una proxima respuesta.</h5>",
  html: true,
  type: "success",
  confirmButtonText: "Aceptar"
});
		</script>
		
	<?php	
		}		
	?>
<!-------------------------------------------------------------------------->
<div class="container-fluid text-center" id="con" style="background-color: rgb(39,78,107); color: #fff;">
		<h3 style="padding: 10px;">Contactenos</h3>
		<hr style="background-color: #fff;">
		<div class="row">
			<div class="col-md-6">
				<div>
					<form action="php/In_contactenos.php" method="post">
						<div>
						<div>
							<input type="text" name="nom" class="form-control caj" placeholder="Nombre" required autocomplete="off">
						</div>
						<div>
							<input type="text" name="ape" class="form-control caj" placeholder="Apellido" required autocomplete="off">
						</div>
						<div>
							<input type="text" name="tel" class="form-control caj" placeholder="Telefono" required autocomplete="off" pattern="[0-9]{10}" title="Si es un numero fijo inicia con 3 digitos 031 y el numero de telefono seguido, para celular porfavor digite los 10 digitos correspondientes">
						</div>
						<div>
							<input type="text" name="cor" class="form-control caj" placeholder="Correo" required  autocomplete="off" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" title="Por favor ingrese un correo valido">
						</div>
						<div>
							<textarea class="form-control caj" id="exampleFormControlTextarea1" rows="7" placeholder="Mensaje" name="men"></textarea>
						</div>
						<div><button type="submit" class="btn bot">Enviar</button></div>
						</div> 
					</form>
				</div>
			</div>
			<div class="col-md-6">
				<div class="row">
					<div class="col-md-3"></div>
					<div class="col-md-6"><img src="img/logo-comp.jpeg" alt="" class="img-fluid"></div>
					<div class="col-md-3"></div>
				</div>
				<div class="row">
					<div class="col-md-6 text-center">
					
					<hr style="background-color: #fff;">
				<div align="left"></div>
					<div><p align="left"><a href="tel:+573103456323" class="tele"><h3> 310 3456323</a>
					<br>
					</p></h3></div>
				</div>
				<div class="col-md-6 text-center">
					
					<hr style="background-color: #fff;">
					
					<div><p align="left"><a href="tel:+573204577899" class="tele"><h3> 320 4577899
					<br>
					</p></a></p></h3></div>
				</div>
				</div>
			</div>
		</div>
	</div>

	<!----------------------------------------------------------------------------------->
	
</body>

</html>
<?php
require("M_footer.php");
?>
<?php
require ("M_head.php");
?>
<body>
<?php
		if(isset($_GET["std"]) && $_GET["std"] == 1 ){
		?>	
		<script>
			swal({
  title: "<b>CONTRASEÑA CONFIGURADA CORRECTAMENTE</b>",
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
		require("M_menu.php");
	?>
<!------------------- inicio -------------------------------------------------------------------->
	
  
  <!-- The slideshow -->
 
<!------------------- quienes somos -------------------------------------------------------------------->

<!------------------- quienes somos -------------------------------------------------------------------->
	<div class="container-fluid text-center " id="qui"  >
		<div class="row">
			<div class="col-md-6" style="margin: 0px; background-color: rgba(39,78,107,0.7); display: flex; justify-content: center; align-content: center; flex-direction: column; color: #fff; padding-right: 50px; padding-left: 50px;">
				
				<p align="justify"><b>Daniel Barreto</b> ingeniero de sistemas.
				</p>
				
			</div>
			<div class="col-md-6" style="background-color: #fff; margin: 0px; padding: 0px;">
				<img src="img/slide-3.jpg" class="img-fluid" style="width: 100%; height: 100%;">
			</div>
		</div>	

	</div>
<!------------------- nuestras sedes -------------------------------------------------------------------->
	
<!------------------- contactenos -------------------------------------------------------------------->

<!---------------------------------------------------------------------------------------------->	
</body>

</html>
<?php
require("M_footer.php");
?>

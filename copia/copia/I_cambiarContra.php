<?php
require ("M_head.php");
?>
<body>
	
	<?php
		require("M_menu.php");
	?>
	<div class="container">
		<div class="row">
			<div class="col-md-2"></div>
			<div class="col-md-8 text-center">
				<br>
				<br>
				<br>
				<br>
				<form action="php/R_cambiarContraseña.php" method="post">
					<input type="text" placeholder="Repetir contraseña" class="form-control" name="cds" autocomplete="off" required value="<?php  
						$id = $_GET['cds'];
						echo $id;
					?>">
					<br>
					<input type="password" placeholder="Contraseña nueva" class="form-control" name="contra" autocomplete="off" required>
					<br>
					<input type="password" placeholder="Repetir contraseña" class="form-control" name="conf_contra" autocomplete="off" required>

					<br>
					<button style="height: 50px; width: 80%; border-radius: 10px; background-color: rgb(39,78,107);  cursor: pointer; color: #fff; margin-bottom: 80px;" type="submit">Cambiar Contraseña</button>
				</form>
			</div>
			<div class="col-md-2"></div>
		</div>
	</div>
</body>

</html>
<?php
require("M_footer.php");
?>

<?php
		require("M_head.php");
	?>
<body>
	<?php
	require("M_menu.php");
	?>
<div class="container-fluid galeria" style=" padding-top: 30px; padding-bottom: 30px; background-color: rgba(39,78,107,0.7);">
		<articles class="row">
			<article class="col-md-3" style="padding-bottom: 20px;">
				<a href="img/img.jpg" data-lightbox="example-set" >
				<img src="img/img.jpg"  class="img-thumbnail" ></a>
			</article>
			<article class="col-md-3">
				<a href="img/img2.jpg" data-lightbox="example-set" >
				<img src="img/img2.jpg" alt="Descansa" class="img-thumbnail" ></a>
				
			</article>
			<article class="col-md-3">
				<a href="img/img4.jpg" data-lightbox="example-set" >
				<img src="img/img4.jpg" alt="Ház deporte" class="img-thumbnail"></a>
				
			</article>
			<article class="col-md-3">
				<a href="img/img5.jpg" data-lightbox="example-set" >
				<img src="img/img5.jpg" alt="Vuela" class="img-thumbnail"></a>
				
			</article>
			<article class="col-md-3">
				<a href="img/img6.jpg" data-lightbox="example-set" >
				<img src="img/img6.jpg" alt="Sueña" class="img-thumbnail"></a>
				
			</article>
			<article class="col-md-3">
				<a href="img/img7.jpg" data-lightbox="example-set" >
				<img src="img/img7.jpg" alt="Viaja" class="img-thumbnail"></a>
				
			</article>
			
			
		</articles>
	</div>
	<script>
	  lightbox.option({
		'albumLabel': "Imagen %1 de %2"
	  })
  </script>
</body>
</html>
<?php
require("M_footer.php");
?>
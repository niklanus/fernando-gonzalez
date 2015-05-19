<?php $currentPage = 'verObra';  ?>

<?php include_once('includes/header.php') ?>

<?php
	if (isset($_GET[""])) { 
	}
?>

<section class="obra">
	<div class="obra-gallery">
		<img src="obras/1/1.jpg" alt="">
		<img src="obras/1/2.jpg" alt="">
		<img src="obras/1/3.jpg" alt="">
		<img src="obras/1/4.jpg" alt="">
		<img src="obras/1/5.jpg" alt="">
		<img src="obras/1/6.jpg" alt="">
	</div>

	<div class="container obra-info">
		<div class="row cf">
			<div class="col-md-5">
				<h1>Tortugas Open Mall</h1>
			</div>
			<div class="col-md-7">
				<div class="row cf">
					<div class="col-sm-4">
						<p class="obra-info-title">Cliente</p>
						<p>Tortugas Open Mall</p>
					</div>
					<div class="col-sm-4">
						<p class="obra-info-title">Ubicación</p>
						<p>Malvinas Argentinas, Prov. de Buenos Aires</p>
					</div>
					<div class="col-sm-4">
						<p class="obra-info-title">Periodo</p>
						<p>2010</p>
					</div>
				</div>
				<p class="obra-info-title description">Descripción</p>
				<p>Proyecto Paisajístico y Direcciòn Técnica, conjuntamente con Estudio Cabeza.</p>
			</div>
		</div>
	</div>
</section>


<?php include_once('includes/footer.php') ?>

<script src="js/galleria-1.4.2.min.js"></script>

<script>
	Galleria.loadTheme('js/galleria.classic.min.js');
	Galleria.run('.obra-gallery');
	Galleria.configure({
		showCounter: false
	});
</script>

</body>
</html>
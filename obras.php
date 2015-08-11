<?php $currentPage = 'obras';  ?>

<?php include_once('includes/db.php') ?>
<?php include_once('includes/functions.php') ?>
<?php include_once('includes/header.php') ?>

<section class="obras" id="obras">
	<div class="container-fluid max-1500">
		<h1>Obras y Proyectos</h1>

		<div class="cbp-l-grid-work cbp cbp-caption-fadeIn cbp-concursos">
			<?php print(works_featured()); ?>
		</div>

		<div id="obras-more"></div>

	</div>
</section>

<?php include_once('includes/footer.php') ?>

<script>
	$('body').imagesLoaded(function() {
		$('#obras-more').load('ajax/obras-more.php');
	});
</script>

</body>
</html>
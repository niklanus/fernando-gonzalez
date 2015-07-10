<?php $currentPage = 'concursos';  ?>

<?php include_once('includes/db.php') ?>
<?php include_once('includes/functions.php') ?>
<?php include_once('includes/header.php') ?>

<section class="home-concursos" id="concursos">
	<div class="container-fluid max-1500">
		<h1>Concursos</h1>

		<div class="cbp-l-grid-work cbp cbp-cols-2 cbp-concursos">
			<?php print(contests_portfolio()); ?>
		</div>
	</div>
</section>

<?php include_once('includes/footer.php') ?>

</body>
</html>
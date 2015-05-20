<?php $currentPage = 'obras';  ?>

<?php include_once('includes/db.php') ?>
<?php include_once('includes/functions.php') ?>
<?php include_once('includes/header.php') ?>

<section class="home-obras" id="obras">
	<div class="container-fluid max-1500">
		<h1>Obras</h1>

		<div class="cbp-l-grid-work cbp cbp-caption-fadeIn cbp-obras">
			<?php print(works_portfolio()); ?>
		</div>

	</div>
</section>

<?php include_once('includes/footer.php') ?>

</body>
</html>
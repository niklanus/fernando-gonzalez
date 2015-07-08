<?php $currentPage = 'verObra';  ?>
<?php include_once('includes/db.php') ?>
<?php include_once('includes/functions.php') ?>
<?php include_once('includes/header.php') ?>

<?php
	if (!isset($_GET["obra"])) {
		redirect_to('obras.php');
	}

	function find_work(){
		global $connection;
		$obra = preg_replace('/[^-a-zA-Z0-9_]/', '', $_GET["obra"]);
		$query = "SELECT * FROM obras WHERE shortname = '{$obra}'";
		$work = mysqli_query($connection, $query);

		if (!(mysqli_num_rows($work) == 1)) {
			redirect_to('obras.php');
		}

		return $work;
	}
	
	$find_work = find_work();

	$work_item = mysqli_fetch_assoc($find_work);

	$GLOBALS['work_name']        = $work_item["name"];
	$GLOBALS['work_location']    = $work_item["location"];
	$GLOBALS['work_client']      = $work_item["client"];
	$GLOBALS['work_period']      = $work_item["period"];
	$GLOBALS['work_description'] = $work_item["description"];
?>

<section class="obra">
	<div class="obra-gallery-wrapper">
		<div class="obra-preload">
			<div>
				<p>cargando imágenes...</p>
			</div>
		</div>
		<div class="obra-gallery">
			<?php
				$work_img_directory = "obras/{$_GET["obra"]}/";

				if (file_exists($work_img_directory.'1.jpg')) {
					print ("<img src=\"{$work_img_directory}1.jpg\" alt=\"{$GLOBALS['work_name']}\">");
				}
				if (file_exists($work_img_directory.'2.jpg')) {
					print ("<img src=\"{$work_img_directory}2.jpg\" alt=\"{$GLOBALS['work_name']}\">");
				}
				if (file_exists($work_img_directory.'3.jpg')) {
					print ("<img src=\"{$work_img_directory}3.jpg\" alt=\"{$GLOBALS['work_name']}\">");
				}
				if (file_exists($work_img_directory.'4.jpg')) {
					print ("<img src=\"{$work_img_directory}4.jpg\" alt=\"{$GLOBALS['work_name']}\">");
				}
				if (file_exists($work_img_directory.'5.jpg')) {
					print ("<img src=\"{$work_img_directory}5.jpg\" alt=\"{$GLOBALS['work_name']}\">");
				}
				if (file_exists($work_img_directory.'6.jpg')) {
					print ("<img src=\"{$work_img_directory}6.jpg\" alt=\"{$GLOBALS['work_name']}\">");
				}
				if (file_exists($work_img_directory.'7.jpg')) {
					print ("<img src=\"{$work_img_directory}7.jpg\" alt=\"{$GLOBALS['work_name']}\">");
				}
				if (file_exists($work_img_directory.'8.jpg')) {
					print ("<img src=\"{$work_img_directory}8.jpg\" alt=\"{$GLOBALS['work_name']}\">");
				}
				if (file_exists($work_img_directory.'9.jpg')) {
					print ("<img src=\"{$work_img_directory}9.jpg\" alt=\"{$GLOBALS['work_name']}\">");
				}
				if (file_exists($work_img_directory.'10.jpg')) {
					print ("<img src=\"{$work_img_directory}10.jpg\" alt=\"{$GLOBALS['work_name']}\">");
				}
			?>
		</div>
	</div>

	<div class="container obra-info">
		<div class="row cf">
			<div class="col-md-5">
				<h1><?php echo($GLOBALS['work_name']); ?></h1>
			</div>
			<div class="col-md-7">
				<div class="row cf">
					<div class="col-sm-4">
						<p class="obra-info-title">Cliente</p>
						<p><?php echo($GLOBALS['work_client']); ?></p>
					</div>
					<div class="col-sm-4">
						<p class="obra-info-title">Ubicación</p>
						<p><?php echo($GLOBALS['work_location']); ?></p>
					</div>
					<div class="col-sm-4">
						<p class="obra-info-title">Periodo</p>
						<p><?php echo($GLOBALS['work_period']); ?></p>
					</div>
				</div>
				<p class="obra-info-title description">Descripción</p>
				<p><?php echo($GLOBALS['work_description']); ?></p>
			</div>
		</div>
	</div>
</section>

<?php mysqli_free_result($find_work); ?>

<?php include_once('includes/footer.php') ?>

<script src="js/galleria-1.4.2.min.js"></script>
<script src="js/imagesloaded.pkgd.min.js"></script>

<script>
	Galleria.loadTheme('js/galleria.classic.min.js');
	Galleria.run('.obra-gallery');
	Galleria.configure({
		showCounter: false
	});

	$('body').imagesLoaded(function() {
		$('.obra-preload').fadeOut(500);
	});
</script>

</body>
</html>
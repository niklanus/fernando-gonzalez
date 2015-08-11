<?php $currentPage = 'verObra';  ?>
<?php include_once('includes/db.php') ?>
<?php include_once('includes/functions.php') ?>
<?php include_once('includes/header.php') ?>

<?php
	if (!isset($_GET["concurso"])) {
		redirect_to('../concursos');
	}

	function find_contest(){
		global $connection;
		$concurso = preg_replace('/[^-a-zA-Z0-9_]/', '', $_GET["concurso"]);
		$query = "SELECT * FROM concursos WHERE shortname = '{$concurso}'";
		$contest = mysqli_query($connection, $query);

		if (!(mysqli_num_rows($contest) == 1)) {
			redirect_to('../concursos');
		}

		return $contest;
	}
	
	$find_contest = find_contest();

	$contest_item = mysqli_fetch_assoc($find_contest);

	$GLOBALS['contest_name']        = $contest_item["name"];
	$GLOBALS['contest_location']    = $contest_item["location"];
	$GLOBALS['contest_prize']       = $contest_item["prize"];
	$GLOBALS['contest_period']      = $contest_item["period"];
	$GLOBALS['contest_description'] = $contest_item["description"];
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
				$contest_img_directory = "concursos-data/{$_GET["concurso"]}/";

				if (file_exists($contest_img_directory.'1.jpg')) {
					print ("<img src=\"{$contest_img_directory}1.jpg\" alt=\"{$GLOBALS['contest_name']}\">");
				}
				if (file_exists($contest_img_directory.'2.jpg')) {
					print ("<img src=\"{$contest_img_directory}2.jpg\" alt=\"{$GLOBALS['contest_name']}\">");
				}
				if (file_exists($contest_img_directory.'3.jpg')) {
					print ("<img src=\"{$contest_img_directory}3.jpg\" alt=\"{$GLOBALS['contest_name']}\">");
				}
				if (file_exists($contest_img_directory.'4.jpg')) {
					print ("<img src=\"{$contest_img_directory}4.jpg\" alt=\"{$GLOBALS['contest_name']}\">");
				}
				if (file_exists($contest_img_directory.'5.jpg')) {
					print ("<img src=\"{$contest_img_directory}5.jpg\" alt=\"{$GLOBALS['contest_name']}\">");
				}
				if (file_exists($contest_img_directory.'6.jpg')) {
					print ("<img src=\"{$contest_img_directory}6.jpg\" alt=\"{$GLOBALS['contest_name']}\">");
				}
				if (file_exists($contest_img_directory.'7.jpg')) {
					print ("<img src=\"{$contest_img_directory}7.jpg\" alt=\"{$GLOBALS['contest_name']}\">");
				}
				if (file_exists($contest_img_directory.'8.jpg')) {
					print ("<img src=\"{$contest_img_directory}8.jpg\" alt=\"{$GLOBALS['contest_name']}\">");
				}
				if (file_exists($contest_img_directory.'9.jpg')) {
					print ("<img src=\"{$contest_img_directory}9.jpg\" alt=\"{$GLOBALS['contest_name']}\">");
				}
				if (file_exists($contest_img_directory.'10.jpg')) {
					print ("<img src=\"{$contest_img_directory}10.jpg\" alt=\"{$GLOBALS['contest_name']}\">");
				}
			?>
		</div>
	</div>

	<div class="container obra-info">
		<div class="row cf">
			<div class="col-md-5">
				<h1><?php echo($GLOBALS['contest_name']); ?></h1>
			</div>
			<div class="col-md-7">
				<div class="row cf">
					<div class="col-sm-4">
						<p class="obra-info-title">Premio</p>
						<p><?php echo($GLOBALS['contest_prize']); ?></p>
					</div>
					<div class="col-sm-4">
						<p class="obra-info-title">Ubicación</p>
						<p><?php echo($GLOBALS['contest_location']); ?></p>
					</div>
					<div class="col-sm-4">
						<p class="obra-info-title">Periodo</p>
						<p><?php echo($GLOBALS['contest_period']); ?></p>
					</div>
				</div>
				<p class="obra-info-title description">Descripción</p>
				<p><?php echo($GLOBALS['contest_description']); ?></p>
			</div>
		</div>
	</div>
</section>

<?php mysqli_free_result($find_contest); ?>

<?php include_once('includes/footer.php') ?>

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
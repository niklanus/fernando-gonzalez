<?php $currentPage = 'verObra';  ?>
<?php include_once('includes/db.php') ?>
<?php include_once('includes/functions.php') ?>
<?php include_once('includes/header.php') ?>

<style>
	nav {
		display: none !important;
	}
</style>

<?php
	if (!isset($_GET["obra"])) {
		redirect_to('obras.php');
	}

	global $connection;
	$obra = preg_replace('/[^-a-zA-Z0-9_]/', '', $_GET["obra"]);
	$query = "SELECT * FROM obras WHERE shortname = '{$obra}'";
	$work = mysqli_query($connection, $query);

	echo( 'hola'.' '.mysqli_fetch_assoc($work) );
?>

<?php include_once('includes/footer.php') ?>

</body>
</html>
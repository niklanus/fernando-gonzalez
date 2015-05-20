<?php 
	define("DB_SERVER", "localhost");
	define("DB_USER", "gonzalez");
	define("DB_PASS", "joesatr1ani");
	define("DB_NAME", "gonzalez");

	$connection = mysqli_connect(DB_SERVER, DB_USER, DB_PASS, DB_NAME);

	mysqli_set_charset($connection, "utf8");

	if(mysqli_connect_errno()) {
	    die("Database connection failed: " . mysqli_error() . " (" . mysqli_connect_errno() . ")" );
	}
?>
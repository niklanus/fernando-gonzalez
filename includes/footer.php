<footer>
	<div class="footer-copy">
		<p>© 2015 Fernando González - Todos los derechos reservados.</p>
		<a class="niklanus" href="http://niklanus.com.ar" target="_blank"></a>
	</div>
</footer>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script src="js/app.js"></script>

<?php 
	if (isset($connection)) {
		mysqli_close($connection);
	}
?>
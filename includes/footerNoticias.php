<footer>
	<div class="footer-copy">
		<p>© 2015 Fernando González - Todos los derechos reservados.</p>
		<a class="niklanus" href="http://niklanus.com.ar" target="_blank"></a>
	</div>
</footer>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script src="../../js/jquery.easing.js"></script>
<script src="../../js/jquery.waypoints.min.js"></script>
<script src="../../js/jquery.waypoints.sticky.js"></script>
<script src="../../js/slick.min.js"></script>
<script src="../../js/smooth-scroll.min.js"></script>
<script src="../../js/cubeportfolio.min.js"></script>
<script src="../../js/jquery.fitvids.js"></script>
<script src="../../js/scripts.js"></script>

<?php 
	if (isset($connection)) {
		mysqli_close($connection);
	}
?>
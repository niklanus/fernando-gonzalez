<?php $currentPage = 'verNoticia';  ?>
<?php include_once("../../includes/headerNoticias.php") ?>

<div class="noticia-gallery">
	<img src="1.jpg" alt="Jardín Privado en Prov. de Buenos Aires - Private Gardens of Buenos Aires">
	<img src="2.jpg" alt="Jardín Privado en Prov. de Buenos Aires - Private Gardens of Buenos Aires">
	<img src="3.jpg" alt="Jardín Privado en Prov. de Buenos Aires - Private Gardens of Buenos Aires">
</div>

<section class="noticia-container container">
	<h1>Jardín Privado en Prov. de Buenos Aires</h1>
	<div class="noticia-viendo">
		<p>Two years ago, when we came to live here at the Golf Club Argentino, the garden was a wasteland. I have tried to endow it with both visual and tactile effects. Touch is subject to so many taboos. “Do not touch”, “Do not tread on…” As I greatly enjoy walking in the garden, I laid out a narrow path to connect me with all the plants, so that I could touch them one by one. I wanted the ground to be sensual. I wanted to be able to lie on the grass or sit and look at the garden from different places, but not seated on a bench. Behind the house, I wanted a sense of total isolation. When, I am in the pool, I can´t even see my own house. There I feel I am in a different garden, a different world.</p>
		<p>Hace dos años, mi familia y yo nos instalamos a vivir aquí. El jardín estaba yermo. Busqué sobre todo transmitir sensaciones visuales y táctiles. El tacto es el sentido sobre el cual pesan más prohibiciones: prohibido tocar, prohibido pisar… Disfruto muchísimo el recorrido alrededor del jardín, así que dejé un sendero muy angosto para poder tocar las plantas, una por una. Quería tener un suelo voluptuoso, poder acostarme en el pasto, sentarme para contemplar el jardín desde varios puntos diferentes, pero sin usar bancos. Detrás de la casa busqué crear una sensación de privacidad. Me sumerjo en la pileta y ni siquiera veo mi propia casa. Allí me siento en otro jardín, otro mundo.</p>
		<div class="noticia-extra">
			<ul>
				<li><strong>Fuente: Janick de Oliveira Cezar, Jardines Privados de Buenos Aires, Ed. Lariviére, Buenos Aires, 1997.</strong></li>
			</ul>
		</div>
	</div>
</section>

<?php include_once("../../includes/footerNoticias.php") ?>

<script src="../../js/galleria-1.4.2.min.js"></script>

<script>
	Galleria.loadTheme('../../js/galleria.classic.min.js');
	Galleria.run('.noticia-gallery');
	Galleria.configure({
		showCounter: false
	});
</script>

</body>
</html>
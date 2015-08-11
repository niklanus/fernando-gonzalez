<?php $currentPage = 'verNoticia';  ?>
<?php include_once("../../includes/headerNoticias.php") ?>

<div class="noticia-gallery">
	<img src="1.jpg" alt="Parque Micaela Bastidas">
	<img src="2.jpg" alt="Parque Micaela Bastidas">
	<img src="3.jpg" alt="Parque Micaela Bastidas">
	<img src="4.jpg" alt="Parque Micaela Bastidas">
	<img src="5.jpg" alt="Parque Micaela Bastidas">
	<img src="6.jpg" alt="Parque Micaela Bastidas">
</div>

<section class="noticia-container container">
	<h1>Parque Micaela Bastidas</h1>
	<div class="noticia-viendo">
		
		<p>El proyecto es el resultado de un concurso nacional realizado en 1996. Además incluyó la recuperación de la Costanera Sur y los boulevares de Puerto madero (obras ya construidas).</p>
		<p>Lleva ese nombre por la esposa de José Gabriel Condorcanqui, Túpac Amaru.</p>
		<p>Para los arquitectos que lo proyectaron, la razón de la construcción de barrancas tiene razones puramente estéticas. Afirman que “Los mejores parques de Buenos Aires están construidos en barrancas, orientadas hacia el norte o el este.</p>

		<p class="subtitle">Situación</p>

		<p>Se encuentra ubicado en el sector Este del Dique 2 en Puerto Madero. Es el gran parque de la zona y fue el primero en construirse. Inaugurado en enero de 2003, tiene una superficie de 72.000 m2. Lo bordean: Av. Rosario Vera Peñaloza, Julieta Lanteri y Av. Calabria. El parque queda delimitado, de un lado, por los docks y los canales en donde se conformó un exclusivo circuito de lujosos restaurantes, edificios de oficinas y prestigiosos hoteles. Del otro lado, el paseo de la Costanera Sur, es visitado por las clases medias y populares.</p>

		<p class="subtitle">Concepto</p>

		<p>Se caracteriza por gran dinamismo que le otorgan los desniveles de las tres colinas, de 5 m de alto, contenidas por gaviones (piedras envueltas con malla metálica) y el recorrido en zig-zag que cruza de Norte a Sur, articulado por escaleras y rampas.</p>

		<p class="subtitle">Espacios</p>

		<p>Está pensado en dos niveles, uno más alto sobre la calle Julieta Lanteri y otro más bajo lindante con Costanera Sur. La parte alta está dividida en tres zonas: Plaza de los Niños, que cuenta con juegos, Plaza Central (rosedal del sur) y Plaza del Sol, separados por gaviones. En la Plaza de los Niños el área de juegos se conforma mediante madera con diseños innovadores. En la Plaza del Sol se han dispuesto grandes bancos de madera de 2x2m que son utilizados por la gente para sentarse o recostarse y tomar sol. Las rampas y senderos atraviesan el parque, ofreciendo distintas alternativas de recorrido.</p>

		<p class="subtitle">Vegetacion</p>

		<p>En el parque, la forestación, con asesoramiento del paisajista ingeniero agrónomo Fernando González, fue usada como elemento de diseño de espacios. La Plaza de los Niños, está protegida de la calle por una hilera de ciprés de Leyland; la plaza central o Rosedal del Sur, cuenta con 3.884 rosales arbustivos, sectorizados por colores, y la Plaza del Sol, fue trabajada con césped. Se plantaron en su mayoría árboles de flor, ya que aunque el uso de la gente desgastara los jardines, igual permanecería florido. La forestación se integra con mayoría de especies nativas: jacarandás, ceibos, palos borrachos, pezuñas de vaca, ibirá-pitá, lapachos, timboes y tipas. Los 40.000 árboles y arbustos, de hasta 150 especies diferentes, crean una gran masa verde que forma un bosque (hacia la calle Calabria) y lugares con cierta privacidad, donde entre hilera e hilera de álamos se crean pequeños estares. Hacia el río, se incluye la plantación de 2.500 árboles nuevos.</p>

		<p class="subtitle">Los niveles</p>

		<p>Para acceder a las partes altas se construyeron escaleras y tres rampas. El sector más alto se compone de una gran plaza seca de baldosas graníticas, también en zig zag. La parte baja es la más poblada por plantas y arbustos que le dan color al sector. El césped está interrumpido por senderos de conchilla, acompañando cada una de las bajadas de la Costanera.</p>

		<p class="subtitle">El mobiliario</p>

		<p>Se compone de: bancos de madera y de cemento, y tarimas, además de estacionamiento de bicicletas, recipientes para basura y bebederos. En todos los casos abundan. También se instalaron sillas en círculo, como para tomar mate en rueda de amigos, y troncos de árboles para utilizar como asientos.</p>

		<p class="subtitle">Los muros de contención</p>

		<p>Uno de los problemas era quebrar la monotonía de un paisaje totalmente plano. Esto fue conseguido en los 70.000 m2 del parque con la creación de diferentes desniveles formados por montículos de tierra. Estos, están apoyados en suelos blandos y necesitaban ser estabilizados y contenidos. Se encuentra la solución a través de estructuras de suelo reforzado. Debido a la voluntad de lograr integración ambiental, simplicidad, rapidez constructiva y adecuación arquitectónica, los paramentos externos de los muros deberían ser inclinados 14 grados sobre la vertical. Para que el suelo blando de apoyo de los terraplenes no estuviese comprometido por la carga, fueron aplicados en las bases de los mismos geogrillas de 200 kN de resistencia.</p>



		<div class="noticia-extra">
			<p class="subtitle">Créditos</p>
			<ul>
				<li><strong>Fuente: Wiki Arquitectura</strong></li>
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
		showCounter: false,
		showInfo: false
	});
</script>

</body>
</html>
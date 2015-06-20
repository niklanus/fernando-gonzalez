<?php $currentPage = 'verNoticia';  ?>
<?php include_once("../../includes/headerNoticias.php") ?>

<div class="noticia-gallery">
	<img src="1.jpg" alt="Parque Micaela Bastidas: un tesoro para la ciudad">
	<img src="2.jpg" alt="Parque Micaela Bastidas: un tesoro para la ciudad">
	<img src="3.jpg" alt="Parque Micaela Bastidas: un tesoro para la ciudad">
	<img src="4.jpg" alt="Parque Micaela Bastidas: un tesoro para la ciudad">
	<img src="5.jpg" alt="Parque Micaela Bastidas: un tesoro para la ciudad">
	<img src="6.jpg" alt="Parque Micaela Bastidas: un tesoro para la ciudad">
</div>

<section class="noticia-container container">
	<h1>Parque Micaela Bastidas: un tesoro para la ciudad</h1>
	<div class="noticia-viendo">
		<p><strong>Gran dinamismo y distintos criterios de uso le otorgan carácter moderno.</strong></p>

		<p>Dentro del Proyecto Costanera Sur, y como parte del sistema de Nuevas Areas Verdes de Puerto Madero, quedó inaugurado el viernes último el moderno parque Micaela Bastidas, que se integrará con el proyectado parque Virginia Bolten, de próxima construcción. Se accede por la avenida Rosario Vera Peñaloza, continuación de la calle Estados Unidos.</p>
		<p>El parque lleva ese nombre por la esposa de José Gabriel Condorcanqui, Túpac Amaru, y cubre 5,4 ha, y el concepto de modernidad puede aplicársele por el gran dinamismo que le otorgan los desniveles de las tres colinas, de 5 m de altura, contenidas por gruesos muros de gavión (mallas metálicas rellenas con piedras), y el recorridos de zigzagueantes caminos que las cruzan de Norte a Sur, articulados por escaleras y rampas. También es moderno el criterio que contempla las diferentes alternativas de uso, y aun de deterioro, por parte del público porteño.</p>
		<p>Dentro del parque, entre las colinas, quedan claramente delimitadas tres plazas: la Plaza de los Niños, con juegos adecuados a cada edad y protegida de la calle por lo que será un grueso cerco de ciprés de Leyland; el impactante Rosedal del Sur, con 3884 rosales arbustivos de prolongada floración, agrupados por colores, seleccionados por la experta Valentina Casucci, y la Plaza del Sol, de puro césped.</p>
		<p>Por otra parte, también la funcionalidad es una meta. La arquitecta Irene Joselevich, que integra el equipo de arquitectos autores de la obra, explica que se plantaron casi todos árboles de flor, considerando que aun cuando el uso desgastara los jardines, igual permanecería un parque florido. La forestación, con asesoramiento del paisajista ingeniero agrónomo Fernando González, se integra con mayoría de especies nativas, tan caras a Buenos Aires, como jacarandás, ceibos, palos borrachos, pezuñas de vaca, ibirá-pitá, lapachos, timboes y tipas, además de árboles y arbustos de probada adaptación a nuestro medio. Los 40.000 árboles, arbustos y herbáceas crean compactas masas de color que forman un bosque (hacia la calle Calabria) y lugares con cierta privacidad. Hay también abundante mobiliario: bancos de madera y de cemento, y tarimas, además de bicicleteros, recipientes para basura y bebederos.</p>

		<p class="subtitle">Una obra bella y bien guardada</p>

		<p>Son autores del proyecto los arquitectos Irene Joselevich, Graciela Novoa, Alfredo Garay, Néstor Magariños, Adrián Sebastián y Marcelo Vila, y arquitectos asociados Eduardo Cajide y Carlos Verdecchia.</p>
		<p>La coordinación de obra correspondió a Gerencia técnica Corporación Antiguo Puerto Madero SA; la empresa constructora fue Caputo-Salvatori; asesores de estructura, Coto y Chevez; la iluminación del Estudio Ernesto Diz, y la instalación eléctrica de ingeniero Ricardo Ansaldo, instalación sanitaria de Julio Blanco. La parquización estuvo a cargo del ingeniero agrónomo Fernando González; los pliegos fueron de Luis María Grau.</p>
		<p>La superficie total (Micaela Bastidas y Virginia Bolten) abarca 8 ha. Para que las malas experiencias no provoquen temores sobre el futuro de este bello parque, están las promesas de dotarlo de suficiente número de cuidadores con adecuado poder disuasivo. Los comentarios oídos pedían, incluso, cercarlo con una reja, y cerrarlo de noche, por lo menos durante cinco años, que es el tiempo que habría que esperar para que la plantación alcance su plenitud.</p>
		<p>Cristina L. de Bugatti.</p>

		<div class="noticia-extra">
			<p class="subtitle">Créditos</p>
			<ul>
				<li><strong>Fuente: La Nación Arquitectura.</strong></li>
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
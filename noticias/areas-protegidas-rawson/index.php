<?php $currentPage = 'verNoticia';  ?>
<?php include_once("../../includes/headerNoticias.php") ?>

<div class="noticia-gallery">
	<img src="1.jpg" alt="Sede de la Subsecretaría de Turismo y Áreas Protegidas de Rawson">
	<img src="2.jpg" alt="Sede de la Subsecretaría de Turismo y Áreas Protegidas de Rawson">
	<img src="3.jpg" alt="Sede de la Subsecretaría de Turismo y Áreas Protegidas de Rawson">
</div>

<section class="noticia-container container">
	<h1>Sede de la Subsecretaría de Turismo y Áreas Protegidas de Rawson</h1>
	<div class="noticia-viendo">
		<p>La ubicación de la Sede de la Subsecretaría de Turismo y Áreas Protegidas de Rawson, tiene un valor estratégico: establecerlo como hito fundante y generador de nuevas situacionescon respecto a su entorno. Una forma contundente, que establece conexiones de diferente índole con el paisaje circundante.</p>
		<p>Al retirarse sensiblemente del frente sobre la ruta, se genera un gran espacio abierto de acogida que se vincula visualmente con la plaza existente. Ambos vacíos conforman un vacío mayor que garantiza, por un lado, la percepción del edificio desde la ruta, y por el otro, asegura un espacio público de transición previo al edificio propiamente dicho. Dicho espacio presenta un “área fuelle” contra la Ruta, en la cual se resuelve desde la vía de desaceleración existente, el acceso vehicular al edificio. En la misma se ubica el acceso peatonal que lo atraviesa hasta llegar a la plaza seca.</p>
		<p>Si bien el edificio presenta una gran compacidad y fluidez de circulaciones, la presencia de un patio central le brinda visuales interiores, mayor perímetro de iluminación y, un espacio emblemático que separa las diferentes áreas pero permite las visuales cruzadas.</p>
		<p>El espacio de Hall, Confitería, Foyer y Exposiciones se sitúa entre la plaza de acceso y dicho espacio al aire libre.</p>
		<p>(…)</p>
		<p class="subtitle">Materialidad Patagónica y Actual</p>
		<p>Diseño simple y construcción tradicional “dura”, de bajo costo y reducido mantenimiento por la perdurabilidad de los materiales y racional diseño de instalaciones. El uso del hormigón visto en las fachadas asegura un reducido mantenimiento. La elección del pórfido patagónico gris, tan característico de la región, tanto en las fachadas del Auditorio / Aula / Comedor como en el revestimiento de la plaza de acceso, refuerzan el carácter local del edificio. La “materialidad” del patio interior identifica al edificio con su entorno ya que está conformado por especies de la flora autóctona.</p>

		<div class="noticia-extra">
			<p class="subtitle">Créditos</p>
			<ul>
				<li>Equipo: KLM Federico Kelly, PaulaLestard, Hernán Maldonado.</li>
				<li>Asesores: SQM Images (Digital), Ing. Fernando González (Paisajismo), Ing. Sebastián Berdichevsky (Estructura), Carretero (Asesor vial).</li>
				<li>Colaboradores de Proyecto: Marcelo Mininni.</li>
				<li>Colaboradores de Maqueta: Marina Isla Casares, Valeria Bugallo, Tamara Sedziszow, Maria Victoria Ferraiuello.</li>
				<li><strong>Fuente: Zona de Proyecto, N° 11, 2007.</strong></li>
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
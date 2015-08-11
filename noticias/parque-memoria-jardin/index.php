<?php $currentPage = 'verNoticia';  ?>
<?php include_once("../../includes/headerNoticias.php") ?>

<div class="noticia-gallery">
	<img src="1.jpg" alt="Parque de la Memoria">
	<img src="2.jpg" alt="Parque de la Memoria">
	<img src="3.jpg" alt="Parque de la Memoria">
	<img src="4.jpg" alt="Parque de la Memoria">
	<img src="5.jpg" alt="Parque de la Memoria">
	<img src="6.jpg" alt="Parque de la Memoria">
</div>

<section class="noticia-container container">
	<h1>Parque de la Memoria</h1>
	<div class="noticia-viendo">

		<p>Es un espacio público ubicado cerca de Ciudad Universitaria con valor testimonial, artístico y cultural.</p>
		<p>Este proyecto apunta a encontrar un equilibrio entre la presencia de la naturaleza (el paisaje natural) y la presencia de la ciudad (infraestructuras, usos recreativos, arquitectura, paseos públicos). Como en toda intervención de gran escala, se trata de resolver la identidad del lugar dentro de una concepción que valore ajustadamente los elementos naturales que vale la pena conservar e incluya aquellos elementos de uso necesario que, conviviendo con lo heredado, constituyan el punto de partida para la creación de una nueva urbanidad moderna.</p>
		<p>Algunos organismos de derechos humanos decidieron impulsar un proyecto para crear un lugar de recuerdo y homenaje frente al Río de la Plata: un parque de esculturas y un monumento con los nombres de los desaparecidos. El proyecto se convirtió en ley en julio de 1998. La tierra extraída de los nuevos ramales de subterráneos fue utilizada como relleno en el lugar.</p>
		<p>Con la conclusión de la primera etapa del proyecto quedó habilitada la Plaza de Acceso al parque (Av. Costanera Norte Rafael Obligado), en la que ya están emplazadas las obras "Victoria" de William Tucker, "Monumento al Escape" de Dennis Oppenheim y una obra sin título de Roberto Aizenberg.</p>
		<p>El diseño de este sector es una suerte de tramado entre el elemento natural, césped y pastos, y el elemento duro o formal, el hormigón o embaldosado. Hay cordones que atraviesan esta trama que se va volviendo más natural a medida que se acerca al río. Tanto los artefactos de iluminación como los bancos fueron diseñados por el Estudio Baudizzone-Lestard-Varas, ganador del primer premio en el concurso para realizar la plaza.</p>
		<p>La plantación se hizo en conjunto con el Ing. Agr. Fernando González. Se propuso una vegetación uniforme para que no compitiera con las esculturas, reinas del lugar. Unas pocas especies de gramíneas –Cortaderia selloana, Pennisetum ruppelii, Pennisetum setaceum rubrum, Pennisetum villosum– se mecen con el viento de la costa. La especie arbórea elegida fue el roble de los pantanos (Quercus palustris), por su color rojizo en otoño. La línea de plantación de los robles va de lado a lado de la plaza, con un quiebre que representa una puerta de ingreso. Se intercalaron los llamados "árboles metálicos", armazones tubulares por donde trepan perfumadas enredaderas, como el jazmín azórico (Jazminum azoricum).</p>
		<p>El espacio cuenta con un sistema de riego por aspersión que no fue fácil colocar por el diseño en cuadrícula del solado. Tal como fue concebido por sus autores, el parque albergará tres monumentos, entre los que se encontrará el Monumento a las Víctimas del Terrorismo de Estado. Contiguo al Parque de la Memoria se construirá un Parque Natural donde se han preservado las características propias del paisaje, con el respeto de las especies existentes, que potencian la relación del hombre con la naturaleza.</p>
		<p>Los proyectos escultóricos distribuidos a lo largo del gran espacio apuntan a generar la reflexión de los visitantes en torno del pasado reciente. Esta plaza pública se presenta como una ocasión de encuentro, de intercambio social y, además, de memoria colectiva.</p>

		<div class="noticia-extra">
			<p class="subtitle">Ficha técnica</p>
			<ul>
				<li>Año de construcción: 2002</li>
				<li>Ubicación: franja costera del Río de la Plata, adyacente a la Ciudad Universitaria</li>
				<li>Proyecto: Estudio Baudizzone-Lestard-Varas y los arquitectos asociados Claudio Ferrari y Daniel Becker</li>
				<li>Paisajismo: Ing. Agr. Fernando González</li>
				<li>Superficie total del parque: 14 hectáreas</li>
				<li>Superficie Plaza de Acceso: 1,5 hectáreas</li>
				<li><strong>Fuente: Revista Jardín</strong></li>
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
<?php $currentPage = 'verNoticia';  ?>
<?php include_once("../../includes/headerNoticias.php") ?>

<div class="noticia-gallery">
	<img src="1.jpg" alt="YPF - Estación de Servicio Tigre-Nordelta">
	<img src="2.jpg" alt="YPF - Estación de Servicio Tigre-Nordelta">
	<img src="3.jpg" alt="YPF - Estación de Servicio Tigre-Nordelta">
	<img src="4.jpg" alt="YPF - Estación de Servicio Tigre-Nordelta">
	<img src="5.jpg" alt="YPF - Estación de Servicio Tigre-Nordelta">
</div>

<section class="noticia-container container">
	<h1>YPF - Estación de Servicio Tigre-Nordelta</h1>
	<div class="noticia-viendo">

		<p>Por Alexandra Molinare. El proyecto se concentra en la propuesta de una superficie natural continua que se eleva para cobijar e integrar los servicios para el automóvil así como para sus conductores y acompañantes. Debajo de ella se distribuyen el área para vehículos por un lado, para público por el otro y entre ellos las islas de surtidores de combustibles y el cruce vehicular entre las avenidas a ambos lados.</p>
		<p>Hacia el lago, para la tienda y cafetería se propone una variedad de escala que permita su identificación con un supermercado y una sala de estar doméstica, con expansión en terrazas hacia el lago, donde la cualidad del paisaje y las situaciones tienen sin embargo una escala pública y natural, acorde a la geografía del Delta del Tigre, reconstruido a partir de la incorporación de especies exclusivamente autóctonas, procurando el auto-equilibrio y la consiguiente reducción de mantenimiento y la sustentabilidad biológica.</p>
		<p>Proponemos que el impacto visual del techo verde sobre la totalidad del edificio sea además aislamiento térmico, paliativo del suelo natural perdido por la nueva construcción, y un recolector de aguas que en su propia pendiente permita el riego pluvial o la acumulación de excedentes en tanques para reutilizar como agua para lavado primario de vehículos y riego.</p>
		<p>Tecnológicamente optamos por componentes constructivos de bajo impacto ambiental, aptos para acciones rápidas y eficaces, redundando en un beneficio ambiental indirecto. Las fundaciones probadas en la zona son las plateas de hormigón in situ y para el resto de las tecnologías constructivas se definen columnas y vigas metálicas, losas premoldeadas en taller, carpinterías y revestimientos de maderas certificadas y parasoles de aluminio estándar, decks de tablas de cáscara de arroz reciclada, pisos interiores de porcelanato reciclado, solados exteriores absorbentes de bloques articulados de hormigón, nuevos árboles y cubiertas de telas reflejantes tensadas para agregar sombra sobre los estacionamientos, etc. [...]</p>

		<div class="noticia-extra">
			<p class="subtitle">Créditos</p>
			<ul>
				<li>Arquitectos: Hampton+Rivoira+Arquitectos</li>
				<li>Ubicación: Nordelta, Argentina</li>
				<li>Equipo De Proyecto: Jorge Hampton, Emilio Rivoira, Roberto Lombardi</li>
				<li>Jefe De Proyecto: Roberto Lombardi</li>
				<li>Colaboradores: Matías Cajarabilla, Anahí Fedrizzi, Juan Reartes, Emilia Alvarado, Fernando Mayán, Ignacio Aboitiz, Leandro Cappetto, Miguel Cocco, Kevin Hampton</li>
				<li>Dirección De Obra: Claudio Comuzzi, Alejandro Florit</li>
				<li>Paisajismo Y Equipamiento Interior Y Exterior: Diana Cabeza, Martin Wolfson y Fernando González.</li>
				<li>Sustentabilidad, Energías Alternativas, Certificación Leed: Sursolar (Fabián Garreta, Guillermo Adamo, Laura Romanello)</li>
				<li>Estructura: Roberto Merega</li>
				<li><strong>Fuente: Plataforma Arquitectura</strong></li>
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
<?php $currentPage = 'verNoticia';  ?>
<?php include_once("../../includes/headerNoticias.php") ?>

<div class="noticia-gallery">
	<img src="1.jpg" alt="Parque Mujeres Argentinas">
	<img src="2.jpg" alt="Parque Mujeres Argentinas">
	<img src="3.jpg" alt="Parque Mujeres Argentinas">
	<img src="4.jpg" alt="Parque Mujeres Argentinas">
	<img src="5.jpg" alt="Parque Mujeres Argentinas">
	<img src="6.jpg" alt="Parque Mujeres Argentinas">
</div>

<section class="noticia-container container">
	<h1>Parque Mujeres Argentinas</h1>
	<div class="noticia-viendo">
		<p>La decisión de construir espacios verdes públicos de escala metropolitana en conjunto con el Proyecto de Urbanización del Antiguo Puerto Madero ha sido una de las intervenciones de mayor envergadura que se han producido en la historia de la ciudad. Más de la mitad de estas superficies (50 ha) han sido destinadas a espacios de recreación y esparcimiento, de uso público, indiferenciado y gratuito.</p>
		<p>Desde el punto de vista proyectual, la mayor dificultad se presentó en el momento de manejar la escala: la tentación era resolver todo el proyecto con un único partido, de integrar todas las áreas en un gran espacio. Nuestra opción fue la contraria. Nos dedicamos a buscar las reglas de composición que permitieran articular los grandes y los pequeños espacios; una operación de despiece nos permitía comprender la totalidad como un sistema, y comprender también la autonomía de las partes.</p>

		<p>La construcción de un parque era frecuente en la tradición cultural del siglo XIX, definiendo criterios de composición que hoy consideramos clásicos.</p>
		<p>El pensamiento moderno tendió a concebir las áreas verdes como vacíos, como una alfombra de pasto sobre la que se posan edificios-objeto.</p>
		<p>El carácter que ha tomado la Reserva Ecológica nos propone un nuevo concepto de parque, que acompaña la recomposición espontánea del sistema biótico con un profundo respeto por la identidad y la geografía.</p>
		<p>El primer problema, por lo tanto, fue resolver la tensión entre los supuestos conceptuales de una reserva natural y los de un proyecto de urbanización, que tiende a reproducir los parámetros de un área céntrica, debiendo consolidar un tejido de borde interviniendo exclusivamente sobre las áreas del parque.</p>
		<p>[...]</p>
		<p>En el caso del parque Mujeres Argentinas, se propone conformar un espacio interior, un recinto amurallado con gaviones, un gran hueco capaz de acoger una asamblea de gran magnitud. La idea de la muralla rodeando la ciudad original, del edificio del fuerte que avanza sobre el río, presenta como contracara un interior verde y sereno.</p>
		<p>Hacia las esquinas dos plazas secas resuelven la transición con el área edificada; el acceso sobre la avenida Juana Manso se encuentra flanqueando por dos hondonadas plantadas con cactáceas autóctonas provenientes de diferentes puntos del país. Hacia los bordes han sido plantados ejemplares de distintas especies reforzando el uso de especies empleadas en Buenos Aires, conformando así bosques, alineaciones y delimitando áreas para la contemplación y el descanso. En su límite este, un camino atraviesa el parque y articula su integración con los jardines de la Antigua Costanera Sur.</p>
		<p>La proyección del eje de Avenida de Mayo atraviesa este espacio central, propone un eje de tensión que indica que más allá, en la dirección del río, existe un nuevo recinto, otro lugar hacia el cual ir, dinamizando nuevamente el recorrido.</p>
		<p>La reconstrucción del paisaje de la costanera impuso la demolición de edificaciones existentes, agregadas al paisaje en momentos en que estos recintos fueron considerados como un área residual, como espalda del antiguo puerto.</p>
		<p>La durabilidad de las partes y el mobiliario fue decisiva a la hora de su proyecto o definición de compra. Así, barandas, bordes y escalones fueron resueltos con piezas premoldeadas diseñadas especialmente para estos parques. Para las barandas se intentó que brindaran seguridad al mismo tiempo que cumplieran un fin útil, sirviendo de bancos o planos de descanso, con distintas alturas y anchos.</p>
		<p>El proyecto se propone mantener el rigor en el diseño de detalles sin caer en la rigidez que en general caracteriza a los espacios demasiado proyectados. Afirmamos la importancia de la arquitectura del paisaje, pero buscamos que la gente se convierta en el centro del evento, que se apropie e identifique con estos lugares, se sienta jerarquizada.</p>
		<p>[...]</p>

		<div class="noticia-extra">
			<p class="subtitle">Memoria de los autores</p>
			<ul>
				<li>Proyecto: Irene Joselevich, Graciela Novoa, Alfredo Garay, Néstor Magariños, Adrián Sebastián, Marcelo Vila, Arqs.</li>
				<li>Asociados: Eduardo Cajide, Carlos Verdecchia, arqs.</li>
				<li>Colaborador dirección de Obra: Esteban Arcuschín</li>
				<li>Comitente: Corporación Antiguo Puerto Madero S.A.</li>
				<li>Empresa Constructora: Caputo – Salvatori</li>
				
				<li>
					<strong>Asesores:</strong>
					<ul>
						<li>Estructura: Coto y Chevez, ings.</li>
						<li>Suelos: Eugenio Mendigueren, ing.</li>
						<li>Instalación eléctrica: Ricardo Ansaldo, ing.</li>
						<li>Instalación sanitaria: Beberati, ing.</li>
						<li>Drenajes: Alejandro Lavista Llanos, ing.</li>
						<li>Parquización: Fernando González, ing.</li>
						<li>Gaviones:Macaferri Latina</li>
						<li>Pliegos y cómputo: Luis María Grau</li>
					</ul>
				</li>

				<li>SUPERFICIE TOTAL: 5,7 ha.</li>
				<li>UBICACIÓN: Puerto Madero, Buenos Aires, Argentina</li>
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
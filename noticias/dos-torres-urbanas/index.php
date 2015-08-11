<?php $currentPage = 'verNoticia';  ?>
<?php include_once("../../includes/headerNoticias.php") ?>

<div class="noticia-gallery">
	<img src="1.jpg" alt="Dos torres que reinventan el paisaje urbano">
	<img src="2.jpg" alt="Dos torres que reinventan el paisaje urbano">
	<img src="3.jpg" alt="Dos torres que reinventan el paisaje urbano">
	<img src="4.jpg" alt="Dos torres que reinventan el paisaje urbano">
	<img src="5.jpg" alt="Dos torres que reinventan el paisaje urbano">
	<img src="6.jpg" alt="Dos torres que reinventan el paisaje urbano">
</div>

<section class="noticia-container container">
	<h1>Dos torres que reinventan el paisaje urbano</h1>
	<div class="noticia-viendo">
		<p>"Al describir los proyectos realizados para las dos torres en Mongolia, en pleno centro de Ulan Bator, "la capital más fría del mundo", destinada una a oficinas y banco, y la otra a un hotel y residencias, Valeria del Puerto y Horacio Sardin destacaron que "ante la proliferación de una arquitectura internacional de edificios igualmente acristalados en cualquier parte del mundo, poco adaptados al clima y a los paisajes locales, propusieron dos torres vernáculas, en búsqueda de una materialidad apropiada, con economía de recursos, que recupere la sabiduría de las gers, viviendas tradicionalmente mongolas".</p>

		<p>Constructivamente la resolución presenta anchos muros de ladrillos de máquina que envuelven y protegen a los edificios de las bajas temperaturas que llegan a -45° en los crudos inviernos. Los dos potentes volúmenes ladrilleros son intervenidos por cajas acristaladas que emergen en atrevidos voladizos. Estos invernaderos tiene doble piel, una exterior que deja pasar el calor y otra interior que lo conserva, permitiendo la mayor economía de energía. En su interior contienen jardines en altura, humectando el seco ambiente de la desértica estepa, donde el límite entre el exterior y el interior tiene espesor y es allí donde se alojan los espacios más interesantes que aportan singularidad al conjunto. Las cubiertas son jardines y toda el agua de lluvia es recolectada para su utilización en el riego, y con todo esto -tal como afirmaron los proyectistas en la conferencia en la UAI- "se ha concebido una propuesta sustentable a partir de la concepción general del proyecto, con la incorporación de ideas de diseño que apunten a la sabiduría de soluciones más que al uso de tecnologías caras".</p>

		<p>Además, a partir de reconocer "un contexto con pocos espacios públicos, donde los edificios no generan situaciones de apropiación en el nivel de las aceras", ambos edificios proponen plantas bajas con jardines públicos, abiertos a las calles. En el interior se alojan programas híbridos convocantes a distintos tipos usuarios. En el edificio de oficinas, un banco y un bar literario se articulan a partir de una calle interior de doble acceso que se convierte en una galería de arte. En el hotel, el lobby se complementa con un café y un salón de eventos.</p>

		<p>"En una región donde no existen jardines, ni parques, donde los espacios públicos carecen de vegetación -señaló Sardin-, se proponen jardines como mochilas que emergen de las torres, generando espacios de esparcimiento y recreo, al mismo tiempo que reinventan el hostil paisaje urbano".</p>

		<p>En la fachada nortel del edificio de oficinas se alojan los ascensores panorámicos y unas terrazas en doble altura usadas como expansiones en los días cálidos de verano. En el hotel las cajas acristaladas del remate del edificio alojan el restaurante y la piscina.</p>

		<p>En el último nivel del edificio de oficinas se alojan un auditorio y un restaurante con acceso a la terraza-jardín. En la cubierta verde remata el edificio una rampa helicoidal que se convierte en un mirador a la ciudad y a las montañas circundantes.</p>
		
		<p>"Doscientos cincuenta metros separan las dos torres que, al caer el sol, se convierten en faros urbanos", destacó Valeria del Puerto, para lo cual múltiples linternas constituidas por las frágiles y livianas cajas de cristal (más domésticas en el hotel, de mayor monumentalidad en las oficinas) emergen y contrastan con la potente masa ladrillera. Los edificios, si bien son diferentes (la torre de oficinas es de ladrillo blanco y el hotel de ladrillo negro) generan un diálogo, conformando un conjunto de gran identidad.</p>


		<div class="noticia-extra">
			<p class="subtitle">Ficha técnica</p>

			Obra: Hotel y Residencias (torre negra)
			<ul>
				<li>Ubicación: Ulan Bator, Mongolia.</li>
				<li>Proyecto: del Puerto-Sardin / Grinberg-Konterlinik</li>
				<li>Colaboradores: Diego Cohen, Luis Castro, Nicolás D´Annunzio, Germán Vazquez y Agustín Fernández Navarro.</li>
				<li>Asesores instalaciones termomecánicas, sanitarias y electricidad: GNBA</li>
				<li>Asesor estructural: Ing. Carlos Calissano</li>
				<li>Asesor envolventes: Arq. Guillermo Marshall</li>
				<li>Asesor paisajismo: Ing. Fernando González</li>
				<li>Asesor arquitectura sustentable: Arq. Pablo Azqueta</li>
			</ul>
			<br>
			Obra: Oficinas y Banco (torre blanca)
			<ul>
				<li>Ubicación: Ulan Bator, Mongolia.</li>
				<li>Proyecto: del Puerto-Sardin / Grinberg-Konterllnik</li>
				<li>Colaboradores: Diego Cohen, Luis Castro, Nicolás D´Annunzio, Germán Vasquez y Agustín Fernandez Navarro</li>
				<li>Asesores instalaciones termomecánicas, sanitarias y electricidad: GNBA</li>
				<li>Asesor estructural: Ing. Carlos Calissano</li>
				<li>Asesor envolventes: Arq. Guillermo Marshall</li>
				<li>Asesor paisajismo: Ing. Fernando González</li>
				<li>Asesor arquitectura sustentable: Arq. Pablo Azqueta</li>
			</ul>
			<br>
			Fuente: Todo Obras
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
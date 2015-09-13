<?php $currentPage = 'home'; ?>

<?php include_once('includes/db.php') ?>
<?php include_once('includes/functions.php') ?>
<?php include_once('includes/header.php') ?>

<section class="home-featured">
	<div class="home-slider-fixed">
		<div class="fixed-centering">
			<div class="fixed-content">
				<h1>Arquitectura del Paisaje</h1>
				<p>Nos especializamos en proyectos de arquitectura del paisaje e ingeniería paisajística de mediana y gran envergadura, con importantes antecedentes de trabajo en la Argentina y otros países.</p>
				<a href="servicios" class="btn-light">Nuestros servicios</a>
			</div>
		</div>
	</div>
	<div class="home-slider" id="home-slider">
		<div class="slide slide-1"></div>
		<div class="slide slide-2"></div>
		<div class="slide slide-3"></div>
	</div>
	<button class="home-scroll"><i class="arrow_down"></i></button>
</section>

<section class="home-obras" id="home-obras">
	<div class="container-fluid max-1500">
		<h1>Obras</h1>

		<div class="cbp-l-grid-work cbp cbp-caption-fadeIn cbp-obras">
			<?php print(works_home()); ?>
		</div>

		<a class="btn-dark" href="obras">Ver todas las Obras</a>
	</div>
</section>

<section class="home-concursos" id="home-concursos">
	<div class="container-fluid max-1500">
		<h1>Concursos</h1>

		<div class="cbp-l-grid-work cbp cbp-cols-2 cbp-concursos">
			<?php print(contests_home()); ?>
		</div>

		<a class="btn-dark" href="concursos">Ver todos los concursos</a>
	</div>
</section>

<section class="home-servicios" id="home-servicios">
	<div class="servicios-container">	
		<div class="servicios-buttons">
			<div class="container-fluid max-1500">
				<h1>Nuestros Servicios</h1>
				<div class="row cf">
					<div class="col-md-3 col-sm-6">
						<button class="btn-servicios" id="servicios-btn-1">Servicios de Paisajismo</button>
					</div>
					<div class="col-md-3 col-sm-6">
						<button class="btn-servicios" id="servicios-btn-2">Arquitectura Paisajística y Planeamiento</button>
					</div>
					<div class="col-md-3 col-sm-6">
						<button class="btn-servicios" id="servicios-btn-3">Presentaciones</button>
					</div>
					<div class="col-md-3 col-sm-6">
						<button class="btn-servicios" id="servicios-btn-4">Ingeniería Paisajística</button>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div id="servicios-items-load"></div>
</section>

<section class="home-estudio" id="home-estudio">
	<div class="container-fluid">
		<h1>Acerca del Estudio</h1>
	</div>
	<div class="container-centered">
		<div class="home-estudio-col1">
			<div class="inner">
				<p class="subtitle">Nos especializamos en proyectos de arquitectura del paisaje de mediana y gran envergadura.</p>
				<p>Contamos con profesionales capacitados para encarar diseños creativos de alta calidad y el desarrollo de documentación técnica y licitatoria para obras de paisajismo en todas las escalas.</p>
				<p>Tenemos importantes antecedentes en la Argentina y en el exterior en proyectos de parquización de barrios cerrados, clubes, hipódromos y parques públicos.</p>
				<a href="estudio" class="btn-light">Mas información</a>
			</div>
		</div>
		<div class="home-estudio-col2">
			<div class="home-estudio-pic">
				<p class="caption">Nuestras oficinas en Pilar, Buenos Aires.</p>
			</div>
		</div>
	</div>
</section>

<section class="home-contact" id="home-contact">
	<div class="container-fluid">
		<h1>Contacto</h1>
	</div>
	<div class="container-centered">
		<div class="home-contact-col1">
			<div id="map_canvas" class="contact-map"></div>
		</div>
		<div class="home-contact-col2">
			<div class="inner">
				<div class="contact-info">
					<div class="row cf">
						<div class="col-xs-2"><i class="icon_phone"></i></div>
						<div class="col-xs-10">
							<a href="tel:0111544797503">(011) 15 4479 7503</a>
							<a href="tel:02320400230">(02320) 400230</a>
						</div>
					</div>
					<div class="row cf">
						<div class="col-xs-2"><i class="icon_mail"></i></div>
						<div class="col-xs-10">
							<a href="mailto:contacto@paisajismogonzalez.com">contacto@paisajismogonzalez.com</a>
						</div>
					</div>
					<div class="row cf">
						<div class="col-xs-2"><i class="icon_pin"></i></div>
						<div class="col-xs-10">
							<a href="https://www.google.com.ar/maps/place/34%C2%B026'19.2%22S+58%C2%B047'23.1%22W/@-34.4407827,-58.7895589,17z/data=!4m2!3m1!1s0x0:0x0" target="_blank">
								Panamericana Ramal Pilar km. 42,8<br>
								Colectora y Los Jacintos, Pilar<br>
								Buenos Aires, Argentina
							</a>
						</div>
					</div>
				</div>
				<div class="contact-form" id="contact-form">
					<div class="contact-form-body">
						<div class="row cf">
							<div class="col-sm-6">
								<input name="contact-name" type="text" placeholder="Nombre" required="true">
							</div>
							<div class="col-sm-6">
								<input name="contact-email" type="email" placeholder="Email" required="true">
							</div>
						</div>
						<textarea name="contact-msg" placeholder="Su mensaje..." required="true"></textarea>
						<input class="btn-light" id="contact-submit" type="submit" value="Enviar mensaje" name="Submit">
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="home-blog">
	<div class="blog-container">
		<div class="container-fluid max-1500">
			<h1>Blog</h1>
			<p>Descubrí los últimos proyectos del Ing. Fernando González en su blog personal.</p>
			<a href="http://blog.paisajismogonzalez.com" target="_blank" class="btn-light">Visitá el blog</a>
		</div>
	</div>
</section>

<?php include_once('includes/footer.php') ?>

<script>
	function initialize(){
	    var myLatlng = new google.maps.LatLng(-34.438664,-58.789752);
	    var myLatlngCenter = new google.maps.LatLng(-34.438664,-58.789752);
	    var mapOptions = {
	        center: myLatlngCenter,
	        zoom: 15,
	        mapTypeId: google.maps.MapTypeId.ROADMAP,
	        disableDefaultUI: true
	    };
	    var map = new google.maps.Map(document.getElementById("map_canvas"), mapOptions);
	    var marker = new google.maps.Marker({
	        position: myLatlng,
	        map: map,
	        title: 'Estudio Ing. Fernando González'
	    });
	}

	function loadScript() {
	    var script = document.createElement('script');
	    script.type = 'text/javascript';
	    script.src = 'http://maps.googleapis.com/maps/api/js?key=AIzaSyBN5l2KRXtun3ErzrPtiVoyYw6nLBdxkvs&sensor=false&callback=initialize';
	    document.body.appendChild(script);
	}

	$(window).on("load",function(){
	    loadScript();
	});
</script>

</body>
</html>
<?php $currentPage = 'contacto'; ?>

<?php include_once('includes/header.php') ?>

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
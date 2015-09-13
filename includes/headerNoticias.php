<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Ing. Fernando González - Estudio de Paisajismo</title>

	<link href="../../css/blueprints.css" rel="stylesheet">
	<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <link href="../../img/favicon.ico" rel="icon" type="image/x-icon" />
</head>
<body>
<nav id="navbar" class="navbar">
	<div class="container-fluid">
		<a class="navbar-logo" href="../../"></a>
		<ul class="navbar-items">
			<li><a href="http://blog.paisajismogonzalez.com">Blog</a></li>
			<li class="<?php if($currentPage == 'obras') print 'active' ?>"><a href="../../obras">Obras</a></li>
			<li class="<?php if($currentPage == 'concursos') print 'active' ?>"><a href="../../concursos">Concursos</a></li>
			<li class="<?php if($currentPage == 'servicios') print 'active' ?>"><a href="../../servicios">Servicios</a></li>
			<li class="<?php if($currentPage == 'estudio') print 'active' ?>"><a href="../../estudio">El Estudio</a></li>
			<li class="<?php if($currentPage == 'multimedia') print 'active' ?>"><a href="../../multimedia">Multimedia</a></li>
			<li class="<?php if($currentPage == 'prensa') print 'active' ?>"><a href="../../prensa">Prensa</a></li>
			<li class="<?php if($currentPage == 'contacto') print 'active' ?>"><a href="../../contacto">Contacto</a></li>
			<li class="nav-trigger">
				<button class="btn" id="nav-trigger">
					<div class="btn-nav-trigger">
						<span class="btn-nav-1"></span>
						<span class="btn-nav-2"></span>
						<span class="btn-nav-3"></span>
					</div>
				</button>
			</li>
		</ul>
	</div>
</nav>
<nav class="nav-mobile">
	<ul>
		<li><a href="http://blog.paisajismogonzalez.com">Blog</a></li>
		<li class="<?php if($currentPage == 'obras') print 'active' ?>"><a href="../../obras">Obras</a></li>
		<li class="<?php if($currentPage == 'concursos') print 'active' ?>"><a href="../../concursos">Concursos</a></li>
		<li class="<?php if($currentPage == 'servicios') print 'active' ?>"><a href="../../servicios">Servicios</a></li>
		<li class="<?php if($currentPage == 'estudio') print 'active' ?>"><a href="../../estudio">El Estudio</a></li>
		<li class="<?php if($currentPage == 'multimedia') print 'active' ?>"><a href="../../multimedia">Multimedia</a></li>
		<li class="<?php if($currentPage == 'prensa') print 'active' ?>"><a href="../../prensa">Prensa</a></li>
		<li class="<?php if($currentPage == 'contacto') print 'active' ?>"><a href="../../contacto">Contacto</a></li>
	</ul>
</nav>
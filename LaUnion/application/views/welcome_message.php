<!DOCTYPE html>
<html lang="es">
<head>
	<title>Serv&Com "La Union"</title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<!-- Estilos -->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>Shared/css/normalize.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>Shared/css/kendo.common.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>Shared/css/kendo.black.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>Shared/css/refineslide.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>Shared/css/refineslide-theme-dark.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>Shared/css/estilo.css">
	<script type="text/javascript" src="<?php echo base_url();?>Shared/Scripts/jquery.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>Shared/Scripts/kendo.web.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>Shared/Scripts/jquery.refineslide.min"></script>
	<script type="text/javascript">
		$(function(){
			  $('.rs-slider').refineSlide({
			maxWidth           : 1024,  
            transition 			: 'fan',
            transition 			: 'fade',
            transitionDuration : 2000,
            autoPlay           : true,
            keyNav             : true,
            delay              : 4500,
            controls           : null ,
            useThumbs 		    : false,
            captionWidth 	: 30
        	});
		});
	</script>
</head>
<body>
	<header>
		<nav>
			<h1>SERV&COM "LA UNION"</h1>
			<hr>
			<ul id="menuNavegacion">
				<li><a href="">Inicio</a></li>
				<li><a href="">Empresa</a></li>
				<li><a href="">Vehiculos</a></li>
				<li><a href="">Ubicacion</a></li>
				<li><a href="">Contacto</a></li>
			</ul>
		</nav>
	</header>
	<!-- Se carga el contenido -->
	<section id="principal">
		<section id="slider">
			<ul class="rs-slider">
			    <li><a href="#"><img src="<?php echo base_url();?>images/vehiculos/1518/aplicacion1.jpg" /></a>
			    	<div class="rs-caption rs-bottom-right">
			            Camion 1 <a class="button" href="">Mas Detalles</a>
			        </div>
			        <div class="rs-caption rs-top-left">
			            <img src="<?php echo base_url();?>images/website/ashokleyland.png">
			        </div>
			    </li>
			    <li><a href="#"><img src="<?php echo base_url();?>images/vehiculos/1518/aplicacion2.jpg" /></a>
			    	<div class="rs-caption rs-bottom-right">
			            Camion 2 <a class="button" href="">Mas Detalles</a> 
			        </div>
			        <div class="rs-caption rs-top-left">
			            <img src="<?php echo base_url();?>images/website/ashokleyland.png">
			        </div>
			    </li>
			    <li><a href="#"><img src="<?php echo base_url();?>images/vehiculos/1518/aplicacion3.jpg" /></a>
			    	<div class="rs-caption rs-bottom-right">
			            Camion 3 <a class="button" href="">Mas Detalles</a>
			        </div>
			        <div class="rs-caption rs-top-left">
			            <img src="<?php echo base_url();?>images/website/ashokleyland.png">
			        </div>
			    </li>
			    <li><a href="#"><img src="<?php echo base_url();?>images/vehiculos/1518/aplicacion4.jpg" /></a>
			    	<div class="rs-caption rs-bottom-right">
			            Camion 4 <a class="button" href="">Mas Detalles</a>
			        </div>
			        <div class="rs-caption rs-top-left">
			            <img src="<?php echo base_url();?>images/website/ashokleyland.png">
			        </div>
			    </li>
			    <li><a href="#"><img src="<?php echo base_url();?>images/vehiculos/1518/aplicacion5.jpg" /></a>
			    	<div class="rs-caption rs-bottom-right">
			            Camion 5 <a class="button" href="">Mas Detalles</a>
			        </div>
			        <div class="rs-caption rs-top-left">
			            <img src="<?php echo base_url();?>images/website/ashokleyland.png">
			        </div>
			    </li>
			</ul>
		</section>
		<section id="secundario">
			<section id="contenedorModulos">
				<h2>Novedades</h2>
				<div class="separador"></div>
				<article class="modulos">
					<figure>
							<img src="<?php echo base_url();?>images/vehiculos/1518/aplicacion1.jpg">
					</figure><figcaption>
								<h3>Exclusivo!</h3>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
								tempor incididunt ut labore et dolore magna aliqua.</p>
					</figcaption>
				</article><article class="modulos">
					<figure>
							<img src="<?php echo base_url();?>images/vehiculos/1518/aplicacion1.jpg">
					</figure><figcaption>
								<h3>Cotizacion!</h3>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
								tempor incididunt ut labore et dolore magna aliqua.</p>
					</figcaption>
				</article>
			</section>
		</section>
	</section>	
</body>
</html>
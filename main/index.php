<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>El Sin Rival - Orgullo Santaneco</title>
	<link rel="icon" href="../imagenes/icono.png" type="image/png">
	<link rel="stylesheet" type="text/css" href="../css/main.css">
	<link rel='stylesheet' type="text/css" id='bootstrap-css' href="../css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../css/socialFont.css">
</head>
<body>
	<div class="wrapper">
    	<div class="wrap">
		<!-- Main Navigation-->
		<?php include('../componentes/nav.html')?>
		<!-- Social Networks-->
		<div class="social-bar">
			<a href="https://www.facebook.com/elsinrival.sv" class="icon icon-facebook" target="blank"></a>
			<a href="https://www.instagram.com/elsinrivaloficial/" class="icon icon-instagram" target="blank"></a>
			<a href="https://twitter.com/elsinrival_sv?lang=es" class="icon icon-twitter" target="blank"></a>
			<a href="" class="icon icon-envelop" target="blank"></a>
		</div>
		<!-- Carousel-->
		<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
			<ol class="carousel-indicators">
				<li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"></li>
			    <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"></li>
			    <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"></li>
			</ol>
			 <div class="carousel-inner">
			    <div class="carousel-item active">
			      <img src="../imagenes/navidad.jpg" class="d-block w-100" alt="...">
			      <div class="carousel-caption d-none d-md-block">
			        <h5>First slide label</h5>
			        <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
			      </div>
			    </div>
			    <div class="carousel-item">
			      <img src="../imagenes/navidad.jpg" class="d-block w-100" alt="...">
			    <div class="carousel-caption d-none d-md-block">
			        <h5>Second slide label</h5>
			        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
			    </div>
			    </div>
			    <div class="carousel-item">
			      <img src="../imagenes/navidad.jpg" class="d-block w-100" alt="...">
			     <div class="carousel-caption d-none d-md-block">
			        <h5>Third slide label</h5>
			        <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
			    </div>
			    </div>
			  </div>
			  <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-bs-slide="prev">
			    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
			    <span class="visually-hidden">Previous</span>
			  </a>
			  <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-bs-slide="next">
			    <span class="carousel-control-next-icon" aria-hidden="true"></span>
			    <span class="visually-hidden">Next</span>
			  </a>
			</div>
		<?php include('../componentes/swiper.html')?>
	</div>
</div>
<?php include('../componentes/footer.html')?>
<script type="text/javascript" src="../js/main.js"></script>
<script type="text/javascript" src="../js/popper.min.js"></script>
<script type="text/javascript" src="../js/bootstrap.min.js"></script>
</body>
</html>

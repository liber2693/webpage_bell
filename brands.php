<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Pagina Web</title>
	<meta content="width=device-width, initial-scale=1.0" name="viewport">
	<meta content="" name="keywords">
	<meta content="" name="description">
	<?php include('views/cabecera.php');?>

  	<!-- limpiar cache -->
	<meta http-equiv="Last-Modified" content="0">
	<meta http-equiv="Cache-Control" content="no-cache, mustrevalidate">
	<meta http-equiv="Pragma" content="no-cache">
	<!-- limpiar cache -->

  <!-- Favicon -->
  <link rel="shortcut icon" href="img/favicon.png">

  <!-- JOSE 25-10-2018 11:13 pm -->
  <!-- Bootstrap CSS File -->
  <link href="css/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Libraries CSS Files -->
  <link href="js/nivo-slider/css/nivo-slider.css" rel="stylesheet">
  <link href="js/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <!-- Nivo Slider Theme -->
  <link href="css/nivo-slider-theme.css" rel="stylesheet">
  <!-- Responsive Stylesheet File -->
  <link href="css/responsive.css" rel="stylesheet">
  <!-- JOSE 25-10-2018 11:13 pm -->
  <!-- archivo de otro template -->
  <link  href="css/animate.min.css" rel="stylesheet" type="text/css">
  <!-- 11-12-2018 05:17 pm.-->
  <link href="css/style_aparte.css" rel="stylesheet" type="text/css">

</head>

<body>
  <!-- Page Content
	================================================== -->
<!-- Hero -->
	<!-- Start Slider Area -->
    <div id="home" class="slider-area">
        <div class="bend niceties preview-2">
            <div id="ensign-nivoslider" class="slides">
                <img src="img/slider/slider1.jpg" alt="" title="#slider-direction-1" />
                <img src="img/slider/slider2.jpg" alt="" title="#slider-direction-2" />
                <img src="img/slider/slider3.jpg" alt="" title="#slider-direction-3" />
            </div>
            <!-- direction 1 -->
            <div id="slider-direction-1" class="slider-direction slider-one">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="layer-1-1 hidden-xs wow slideInDown " data-wow-duration="2s" data-wow-delay=".2s">
                                    <img class="logo" src="img/images/logos.jpg">
                                </div>
                            <div class="slider-content text-center">
                                <!-- layer 1 -->
                                <!-- layer 2 -->
                                <!--<div class="layer-1-2 wow slideInUp" data-wow-duration="2s" data-wow-delay=".1s">
                                    <h1 class="title2">We're In The Business Of Helping You Start Your Business</h1>
                                </div>-->
                                <!-- layer 3 -->
                                <div class="layer-1-3 hidden-xs wow slideInUp" data-wow-duration="2s" data-wow-delay=".2s" style="margin-top: 200px;">
                                    <a class="ready-btn right-btn page-scroll" href="#services">Comencemos</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
<!-- End Slider Area -->
<!-- /Hero -->

<!-- Header -->
  	<header id="header">
		<div class="container">
			<div id="logo" class="pull-left">
				<a href="index.php"><img src="img/images/logos.jpg" alt="" title="" width="130" height="80"></img></a>
				<!-- Uncomment below if you prefer to use a text image -->
				<!--<h1><a href="#hero">Bell</a></h1>-->
		  	</div>
			<nav id="nav-menu-container">
				<ul class="nav-menu">
					<li><a href="index.php#nosotros">Nosotros</a></li>
					<li><a href="index.php#menu">Noticias</a></li>
					<li><a href="#productos">Productos</a></li>
					<li><a href="#catalogo">Catálogo</a></li>
					<li><a href="index.php#ubicacion">Ubicación</a></li>
					<li><a href="index.php#contact">Contáctanos</a></li>
				</ul>
		  	</nav>
			<nav class="nav social-nav pull-right d-none d-lg-inline">
				<a href="#"><i class="fa fa-twitter"></i></a> 
				<a href="#"><i class="fa fa-facebook"></i></a> 
				<a href="#"><i class="fa fa-linkedin"></i></a> 
				<a href="#"><i class="fa fa-envelope"></i></a>
				<a href="#"><img src="img/images/ig.jpg" width="13%" height="13%"></a>
		  	</nav>
		</div>
  	</header>
<!-- #header -->

<!-- Productos -->
	<section class="productos" id="productos">
		<div class="text-center">
	  		<h2>Productos</h2>
		</div>
		<div class="container">
			<div class="row">
				<div class="feature-col col-lg-3 col-xs-3" id="menu_empresa">
					<div tabindex="1" id="option1">
						<b>Kramer</b>
					</div>
					<div tabindex="2" id="option2">
						<b>Solpak</b>
					</div>
					<div tabindex="3" id="option3">
						<b>Loma</b>
					</div>
					<div tabindex="4" id="option4">
						<b>Bpa</b>
					</div>
					<div tabindex="5" id="option5">
						<b>Pti</b>
					</div>
					<div tabindex="6" id="option6">
						<b>Linx</b>
					</div>
				</div>
				<div class="col-lg-9 col-xs-9 detalle" id="detalles">
					<label>Nombre Empresa: <strong id="titulo_empresa"></strong></label>
					<div id="demo" class="carousel slide" data-ride="carousel">
						<!-- Indicators -->
						<ul class="carousel-indicators">
							
						</ul>
						<!-- The slideshow -->
						<div class="carousel-inner">
							
						</div>
						<!-- Left and right controls -->
						<a class="carousel-control-prev" href="#demo" data-slide="prev">
							<span class="carousel-control-prev-icon"></span>
						</a>
						<a class="carousel-control-next" href="#demo" data-slide="next">
							<span class="carousel-control-next-icon"></span>
						</a>
					</div>
					<div class="table-responsive">
						<table class="table table-borderless text-center" id="tabla_archivos">
							<thead>
								<tr>
									<th>Modelo</th>
									<th>Archivo</th>
								</tr>
							</thead>
							<tbody>
								
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</section>
<!-- Productos -->


<!-- footer -->
	<footer class="site-footer">
		<div class="bottom">
			<div class="container">
				<div class="row">
					<div class="col-lg-6 col-xs-12 text-lg-left text-center">
						<p class="copyright-text">
					  	&copy; MaschinenWerk 2000,C.A | Todos los derechos reservados
						</p>
						<div class="credits">
					  		Desarrollado por: <a href="">liberWEB</a>
							<a href="https://www.instagram.com/liber.26/" target="_blank">
								&nbsp;&nbsp;<img src="img/images/ig.jpg" width="5%" height="5%">
							</a>
							<a href="https://www.instagram.com/liber.26/" target="_blank">
								<img src="img/images/facebook.jpg" width="5%" height="5%">
							</a>
							<a href="https://www.instagram.com/liber.26/" target="_blank">
								<img src="img/images/linkedin.png" width="5%" height="5%">
							</a>
							<!--<a href=""><img src="img/images/twitter.jpg" width="5%" height="5%"></a>-->
						</div>
				  	</div>
					<div class="col-lg-6 col-xs-12 text-lg-right text-center">
						<ul class="list-inline">
							<li class="list-inline-item">
								<a href="#nosotros">Nosotros</a>
							</li>
							<li class="list-inline-item">
								<a href="#features">Noticias</a>
							</li>
							<li class="list-inline-item">
								<a href="#portfolio">Productos</a>
							</li>
							<li class="list-inline-item">
								<a href="#ubicacion">Ubicación</a>
							</li>
							<li class="list-inline-item">
								<a href="#contact">Contáctanos</a>
							</li>
							<li class="list-inline-item">
								<a data-toggle="modal" data-target="#myModal" id="modal_user"><i class="fa fa-user"></i></a>
							</li>
						</ul>
			  		</div>
				</div>
		  	</div>
		</div>
  	</footer>
<!-- footer -->
	<a class="scrolltop" href="#"><span class="fa fa-angle-up"></span></a>
<!-- Modal -->
	<?php include 'views/login.php'; ?>

	<div class="modal fade" id="myModal_img" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-lg" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
					<div class="modal-body text-center">
						<img  id="imagen" width="100%" height="100%">
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-danger" data-dismiss="modal">
							Cerrar
						</button>
					</div>
				</form>
			</div>
		</div>
	</div>
<!-- fin Modal -->


	<!-- JOSE 25-10-2018 11:13 pm -->
	<!-- JavaScript Libraries -->
	<script src="js/jquery/jquery.min.js"></script>
	<script src="js/wow/wow.min.js"></script>
	<script src="js/nivo-slider/js/jquery.nivo.slider.js" type="text/javascript"></script>

	<!-- archivo de las funciones principales del stylo -->
	<script src="js/main.js"></script>
	<!-- JOSE 28-12-2018 10:02 am -->
	<script src="js/detalle_brands.js"></script>


  <!-- javascripts -->
  <?php include('views/pie.php');?>

 
  </body>
</html>

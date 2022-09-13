
<?php
session_start();
include "./config/conexion.php";

?>
<!DOCTYPE html>
<html lang="zxx">

<head>
	<title>GameStore's</title>
	<!-- Meta tag Keywords -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="UTF-8" />
	<meta name="keywords" content="Electro Store Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design"
	/>
	<script>
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!-- //Meta tag Keywords -->

	<!-- Custom-Files -->
	<link href="./vistas/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
	<!-- Bootstrap css -->
	<link href="./vistas/css/style.css" rel="stylesheet" type="text/css" media="all" />
	<!-- Main css -->
	<link rel="stylesheet" href="./vistas/css/fontawesome-all.css">
	<!-- Font-Awesome-Icons-CSS -->
	<link href="./vistas/css/popuo-box.css" rel="stylesheet" type="text/css" media="all" />
	<!-- pop-up-box -->
	<link href="./vistas/css/menu.css" rel="stylesheet" type="text/css" media="all" />
	<!-- menu style -->
	<!-- //Custom-Files -->

	<!-- web fonts -->
	<link href="//fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i&amp;subset=latin-ext" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese"
	    rel="stylesheet">

	    <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
<link href="https://cdn.rawgit.com/mdehoog/Semantic-UI/6e6d051d47b598ebab05857545f242caf2b4b48c/dist/semantic.min.css" rel="stylesheet" type="text/css" />
<script src="https://code.jquery.com/jquery-2.1.4.js"></script>
<script src="https://cdn.rawgit.com/mdehoog/Semantic-UI/6e6d051d47b598ebab05857545f242caf2b4b48c/dist/semantic.min.js"></script>
	<!-- //web fonts -->

</head>

<body>
	<!-- top-header -->
	<div class="agile-main-top">
		<div class="container-fluid">
			<div class="row main-top-w3l py-2">
				<div class="col-lg-4 header-most-top">
					<p class="text-white text-lg-left text-center">Compra lo que mas Amas
						<i class="fas fa-shopping-cart ml-1"></i>
					</p>
				</div>
				<div class="col-lg-8 header-right mt-lg-0 mt-2">
					<!-- header lists -->
					<ul>


						<li class="text-center border-right text-white">
							<a href="#" data-toggle="modal" data-target="#exampleModal" class="text-white">
								<i class="fas fa-sign-in-alt mr-2"></i>Iniciar Sesion</a>
						</li>
						<li class="text-center text-white">
							<a href="#" data-toggle="modal" data-target="#exampleModal2" class="text-white">
								<i class="fas fa-sign-out-alt mr-2"></i>Registrarse </a>
						</li>
				
						<li class="text-center border-right text-white">
							<a href="./config/Salir.php" class="text-white">
								<i class="fas fa-sign-out-alt mr-2"></i>SALIR</a>
						</li>
					</ul>
					<!-- //header lists -->
				</div>
			</div>
		</div>
	</div>

	
	<!-- //shop locator (popup) -->

	<!-- modals -->
	<!-- log in -->
	<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="column">
				    <h2 class="ui blue image header">
				      <img src="./vistas/images/sesion.png" class="image">
				      <div class="content">
				        Ingrese a su cuenta
				      </div>
				    </h2>
				    <form class="ui large form" action="./controlador/controladorLogin.php" method="post">
				      <div class="ui  segment">
				        <div class="field">
				          <div class="ui left icon input">
				            <i class="user icon"></i>
				            <input type="text" name="txtUser" id="txtUser"placeholder="E-mail">
				          </div>
				        </div>
				        <div class="field">
				          <div class="ui left icon input">
				            <i class="lock icon"></i>
				            <input type="password" name="txtClave" id="txtClave" placeholder="Password">
				          </div>
				        </div>
				        <div class="ui fluid large submit button">
				        	<input type="submit" class="btn btn-dark" value="Iniciar Sesiòn" >
				        </div>
				      </div>
				    </form>

				    
 				 </div>
			</div>
		</div>
	</div>
	<!-- register -->
	<div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title">Registrarse</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<form action="#" method="post">
						<div class="form-group">
							<label class="col-form-label">Nombre</label>
							<input type="text" class="form-control" placeholder=" " name="txtNom" required="">
						</div>
						<div class="form-group">
							<label class="col-form-label">Apellido</label>
							<input type="email" class="form-control" placeholder=" " name="txtApe" required="">
						</div>
						<div class="form-group">
							<label class="col-form-label">Correo</label>
							<input type="email" class="form-control" placeholder=" " name="txtCorreo" required="">
						</div>
						<div class="form-group">
							<label class="col-form-label">Contraseña</label>
							<input type="password" class="form-control" placeholder=" " name="txtClave" id="txtClave" required="">
						</div>
						
						<div class="ui fluid large dark submit button">
				        	<input type="submit" class="btn btn-outline-info" value="Registrarse" >
				        </div>

					</form>
				</div>
			</div>
		</div>
	</div>
	<!-- //modal -->
	<!-- //top-header -->

	<!-- header-bottom-->
	<div class="header-bot">
		<div class="container">
			<div class="row header-bot_inner_wthreeinfo_header_mid">
				<!-- logo -->
				<div class="col-md-12">
					<h1 class="text-center">
						<a href="index.php" class="font-weight-bold font-italic">
							<img src="./vistas/images/img3.jpg" alt=" " class="img-fluid">Gamer Store's
						</a>
					</h1>
				</div>
				<!-- //logo -->
				<!-- header-bot -->
				<div class="col-md-9 header mt-4 mb-md-0 mb-4">
					<div class="row">
						
						
						<!-- //cart details -->
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- shop locator (popup) -->
	<!-- //header-bottom -->



	<!-- banner -->
	<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
		<!-- Indicators-->
		<ol class="carousel-indicators">
			<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
			<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
			<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
			<li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
		</ol>
		<div class="carousel-inner">
			<div class="carousel-item item1 active">
				<div class="container">
					<div class="w3l-space-banner">
						<div class="carousel-caption p-lg-5 p-sm-4 p-3">
							<p>Descuento
								<span>15%</span></p>
							<h3 class="font-weight-bold pt-2 pb-lg-5 pb-4">La
								<span>Gran</span>
								Venta
							</h3>
							
						</div>
					</div>
				</div>
			</div>
			<div class="carousel-item item2">
				<div class="container">
					<div class="w3l-space-banner">
						<div class="carousel-caption p-lg-5 p-sm-4 p-3">
							<p>Call of
								<span>DUTY</span></p>
							<h3 class="font-weight-bold pt-2 pb-lg-5 pb-4">El
								<span>Mejor juego de Accion</span>
							</h3>
					
						</div>
					</div>
				</div>
			</div>
			<div class="carousel-item item3">
				<div class="container">
					<div class="w3l-space-banner">
						<div class="carousel-caption p-lg-5 p-sm-4 p-3">
							<p>FORNITE
								<span>5%</span> Descuento</p>
							<h3 class="font-weight-bold pt-2 pb-lg-5 pb-4">Producto
								<span>Nuevo</span>
							</h3>
					
						</div>
					</div>
				</div>
			</div>
			<div class="carousel-item item4">
				<div class="container">
					<div class="w3l-space-banner">
						<div class="carousel-caption p-lg-5 p-sm-4 p-3">
							<p>FIFA 19
								<span>25%</span> Descuento</p>
							<h3 class="font-weight-bold pt-2 pb-lg-5 pb-4">Vàlido
								<span>15 dìas</span>
							</h3>
							
						</div>
					</div>
				</div>
			</div>
		</div>
		<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			<span class="sr-only">Antes</span>
		</a>
		<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
			<span class="carousel-control-next-icon" aria-hidden="true"></span>
			<span class="sr-only">Siguiente</span>
		</a>
	</div>
	<!-- //banner -->

	<!-- top Products -->
	<div class="ads-grid py-sm-5 py-4">
		<div class="container py-xl-4 py-lg-2">
			<!-- tittle heading -->
			<h3 class="tittle-w3l text-center mb-lg-5 mb-sm-4 mb-1">

			<!-- //tittle heading -->
			<div class="row">
				<!-- product left -->
				<div class="agileinfo-ads-display col-lg-12">
					<div class="wrapper">
						<span>P</span>roductos
						<span>I</span>ncreibles
						</h3>
				<div class="row">
				<!-- product left -->
				<div class="agileinfo-ads-display col-lg-12">
					<div class="wrapper">
						<!-- first section -->
						<div class="product-sec1 px-sm-4 px-3 py-sm-5  py-3 mb-4">
							
							<div class="row">

									<!-- navigation -->
								<div class="navbar-inner">
									<div class="container">
										<nav class="navbar navbar-expand-lg navbar-light bg-light">

											<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
											    aria-expanded="false" aria-label="Toggle navigation">
												<span class="navbar-toggler-icon"></span>
											</button>
											<div class="collapse navbar-collapse" id="navbarSupportedContent">
												<ul class="navbar-nav ml-auto text-center mr-xl-5">

													<li class="nav-item" >
														<a class="nav-link" href="index.php">Todas Las Categorias</a>
													</li>
													
													
													<li class="nav-item dropdown mr-lg-2 mb-lg-0 mb-2">
														<a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
															VIDEO JUEGOS
														</a>
														<div class="dropdown-menu">
															<div class="agile_inner_drop_nav_info p-4">
																
																<div class="row">
																	<div class="col-sm-6 multi-gd-img">
																		<ul class="multi-column-dropdown">
																			<li>
																				<a href="catps4.php">PS4</a>
																			</li>
																			<li>
																				<a href="catps3.php">PS3</a>
																			</li>
																			<li>
																				<a href="catpc.php">PC GAMER</a>
																			</li>
																			<li>
																				<a href="catxbox.php">XBOX ONE</a>
																			</li>
																			<li>
																				<a href="catxbox360.php">XBOX 360</a>
																			</li>
																			<li>
																				<a href="catwii.php">WII</a>
																			</li>
																			<li>
																				<a href="catmesa.php">Juegos de mesa</a>
																			</li>
																			
																		</ul>
																	</div>
																	
																</div>

															</div>
														</div>
													</li>

													<li class="nav-item dropdown mr-lg-2 mb-lg-0 mb-2">
														<a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
															Ropa y Accesorios
														</a>
														<div class="dropdown-menu">
															<div class="agile_inner_drop_nav_info p-4">
																
																<div class="row">
																	<div class="col-sm-6 multi-gd-img">
																		<ul class="multi-column-dropdown">
																			<li>
																				<a href="catfiguras.php">Figuras de accion</a>
																			</li>
																			<li>
																				<a href="catropa.php">Ropa Gamer</a>
																			</li>
																			<li>
																				<a href="cattazas.php">Tazas</a>
																			</li>
																			<li>
																				<a href="catpost.php">Posters</a>
																			</li>
																			<li>
																				<a href="catfunko.php">Funko</a>
																			</li>
																			
																			
																		</ul>
																	</div>
																	
																</div>

															</div>
														</div>
													</li>
													<li class="nav-item dropdown mr-lg-2 mb-lg-0 mb-2">
														<a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
															Audios
														</a>
														<div class="dropdown-menu">
															<div class="agile_inner_drop_nav_info p-4">
																
																<div class="row">
																	<div class="col-sm-6 multi-gd-img">
																		<ul class="multi-column-dropdown">
																			<li>
																				<a href="cataudifonos.php">Audifonos</a>
																			</li>
																			<li>
																				<a href="catparlantes.php">Parlantes</a>
																			</li>
																			
																			
																		</ul>
																	</div>
																	
																</div>

															</div>
														</div>
													</li>
													
													
													

													<!--HACER EN CASA -->
													<li class="nav-item">
														<a class="nav-link" href="./vistas/contact.html">Contactenos</a>
													</li>

									<!-- search -->
													
												</ul>
												
												<form class="form-inline" action="index.php" method="post">
													<input class="form-control mr-sm-4" type="search" placeholder="Buscar" id="txtBuscar" name="txtBuscar" aria-label="Search" required>
													<button class="btn btn-dark" onclick="location.href='index.php'" type="submit">Buscar</button>

												</form>
												
											</div>
										</nav>
									</div>
								</div>
								<!-- //navigation -->
								<br><br>
								<div class="container">
									<div class="row">

										<div class="container">
											<div class="row">
												<div class="col-md-12">

													<div class="col-md-25 top_nav_right text-center mt-sm-0 mt-2">
														<div class="wthreecartaits wthreecartaits2 cart cart box_1">
															<br><br>
																<a href="./vistas/cart.php" class="btn btn-outline-warning">Ver Carrito     <i class="fas fa-cart-arrow-down"></i>   </a>

														</div>
													</div>

													<br><br>

													<?php

													$Cnx = new Conexion();
													$cadena = $Cnx->AbrirConexion();
													$Query = "call SP_MostrarCategoriaParlantes()";

													$products = mysqli_query($cadena, $Query);
													?>
													<table class="timetable_sub">
													<thead>
														
														<th>Categoria</th>
														<th>Producto</th>
														<th>Imagen</th>
														<th>Precio</th>
														<th>Cantidad</th>
													</thead>
													<?php
													/*
													* Apartir de aqui hacemos el recorrido de los productos obtenidos y los reflejamos en una tabla.
													*/
													while($r=$products->fetch_object()):?>

													<tr>
														<td>
															<?php echo $r->nomCate;?>
														</td>
														<td>
															<?php echo $r->nombrePro;?>
														</td>
														<td>
															<img src="vistas<?php echo $r->foto;?>" style="width: 85px; height:85px">
														</td>
														<td>
															S/. <?php echo $r->precioPro; ?>					
														</td>

														<td style="width:260px;">
														<?php
														$found = false;

														if(isset($_SESSION["cart"])){ foreach ($_SESSION["cart"] as $c) { if($c["product_id"]==$r->idProducto){ $found=true; break; }}}
														?>
														<?php if($found):?>
															<a href="./vistas/cart.php" class="btn btn-info">Agregado</a>
														<?php else:?>
														<form class="form-inline" method="post" action="./logica/addtocart.php">
															<input type="hidden" name="product_id" value="<?php echo $r->idProducto; ?>">
														 	 <div class="form-group">
														    	<input type="number" name="q" value="1" style="width:70px;" min="1" class="form-control" placeholder="Cantidad">

														  	</div>
														  	<div class="form-group">
															 	<input type="submit" name="submit" value="Añadir al Carrito" class="btn btn-outline-success" />
															</div>
														</form>
														<?php endif; ?>
														</td>
													</tr>
													<?php endwhile; ?>
													</table>
													<br><br><hr>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>


					</div>
				</div>
				<!-- //product left -->

				<!-- product right -->

			</div>

						<!-- //fourth section -->
					</div>
				</div>
				<!-- //product left -->

				<!-- product right -->
			</div>
		</div>
	</div>
	<!-- //top products -->

	<!-- middle section -->
	<div class="join-w3l1 py-sm-5 py-4">
		<div class="container py-xl-4 py-lg-2">
			<div class="row">
				<div class="col-lg-6">
					<div class="join-agile text-left p-4">
						<div class="row">
							<div class="col-sm-7 offer-name">
								<h6>Juegos de deporte</h6>
								<h4 class="mt-2 mb-4">FIFA 20</h4>
								<p>En un descuento de 10% en los primero 20 Unidades compradas</p>
							</div>
							<div class="col-sm-5 offerimg-w3l">
								<img src="./vistas/images/img2.jpg" alt="" class="img-fluid">
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-6 mt-lg-0 mt-5">
					<div class="join-agile text-left p-4">
						<div class="row ">
							<div class="col-sm-7 offer-name">
								<h6>Juegos de Accion que te gustan:</h6>
								<h4 class="mt-2 mb-4">Sniper Gost Warrior 3</h4>
								<p>Un descuento del 15% del paquete completo</p>
							</div>
							<div class="col-sm-5 offerimg-w3l">
								<img src="./vistas/images/img1.jpg" alt="" class="img-fluid">
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- middle section -->

	<!-- footer -->
	<footer>
		<div class="footer-top-first">
			<div class="container py-md-5 py-sm-4 py-3">
				<!-- footer first section -->
				<h2 class="footer-top-head-w3l font-weight-bold mb-2">Gamer Store's :</h2>
				<p class="footer-main mb-4">
					Si estas considerando una nueva consola de videojuegos, estas buscando un nuevo
					juego para tu Pc o PlayStation u otros. Le facilitamos encontrar exactamente lo que necesita a un precio que puede pagar. Ofrecemos precios bajos todos los días en juegos de cualquier
					categoria, consolas con descuentos increibles y démas.
				</p>
				<!-- //footer first section -->
				<!-- footer second section -->

				<!-- //footer second section -->
			</div>
		</div>
		<!-- footer third section -->
		<div class="w3l-middlefooter-sec">
			<div class="container py-md-5 py-sm-4 py-3">
				<div class="row footer-info w3-agileits-info">
					<!-- footer categories -->
					
					<!-- //footer categories -->
					<!-- quick links -->

					<div class="col-md-3 col-sm-6 footer-grids mt-md-0 mt-4" style="margin-left: 250px">
						<h3 class="text-white font-weight-bold mb-3">Contactenos:</h3>
						<ul>
							<li class="mb-3">
								<i class="fas fa-map-marker"></i>Av. Union, Lima</li>
							<li class="mb-3">
								<i class="fas fa-mobile"></i>+51 944028451</li>

							<li class="mb-3">
								<i class="fas fa-envelope-open"></i>
								<a>Gamer_Store@gmail.com</a>
							</li>

						</ul>
					</div>
					<div class="col-md-3 col-sm-6 footer-grids w3l-agileits mt-md-0 mt-4">
						<!-- newsletter -->

						<!-- //newsletter -->
						<!-- social icons -->
						<div class="footer-grids  w3l-socialmk mt-3">
							<h3 class="text-white font-weight-bold mb-3">Sigenos en:</h3>
							<div class="social">
								<ul>
									<li>
										<a class="icon fb" >
											<i class="fab fa-facebook-f"></i>
										</a>
									</li>
									<li>
										<a class="icon tw" >
											<i class="fab fa-twitter"></i>
										</a>
									</li>
									<li>
										<a class="icon gp">
											<i class="fab fa-google-plus-g"></i>
										</a>
									</li>
								</ul>
							</div>
						</div>
						<!-- //social icons -->
					</div>
				</div>
				<!-- //quick links -->
			</div>
		</div>
		<!-- //footer third section -->

		<!-- footer fourth section -->
		<div class="agile-sometext py-md-5 py-sm-4 py-3">
			<div class="container">
				<!-- brands -->





				<!-- //brands -->
				<!-- payment -->

				<!-- //payment -->
			</div>
		</div>
		<!-- //footer fourth section (text) -->
	</footer>
	<!-- //footer -->
	<!-- copyright -->
	<div class="copy-right py-3">
		<div class="container">
			<p class="text-center text-white">© 2019 GamerStore's. Todos los derechos reservados

			</p>
		</div>
	</div>
	<!-- //copyright -->

	<!-- js-files -->
	<!-- jquery -->
	<script src="./vistas/js/jquery-2.2.3.min.js"></script>
	<!-- //jquery -->

	<!-- nav smooth scroll -->
	<script>
		$(document).ready(function () {
			$(".dropdown").hover(
				function () {
					$('.dropdown-menu', this).stop(true, true).slideDown("fast");
					$(this).toggleClass('open');
				},
				function () {
					$('.dropdown-menu', this).stop(true, true).slideUp("fast");
					$(this).toggleClass('open');
				}
			);
		});
	</script>
	<!-- //nav smooth scroll -->

	<!-- popup modal (for location)-->
	<script src="./vistas/js/jquery.magnific-popup.js"></script>
	<script>
		$(document).ready(function () {
			$('.popup-with-zoom-anim').magnificPopup({
				type: 'inline',
				fixedContentPos: false,
				fixedBgPos: true,
				overflowY: 'auto',
				closeBtnInside: true,
				preloader: false,
				midClick: true,
				removalDelay: 300,
				mainClass: 'my-mfp-zoom-in'
			});

		});
	</script>
	<!-- //popup modal (for location)-->

	<!-- cart-js -->
	<script src="./vistas/js/minicart.js"></script>
	<script>
		paypals.minicarts.render(); //use only unique class names other than paypals.minicarts.Also Replace same class name in css and minicart.min.js

		paypals.minicarts.cart.on('checkout', function (evt) {
			var items = this.items(),
				len = items.length,
				total = 0,
				i;

			// Count the number of each item in the cart
			for (i = 0; i < len; i++) {
				total += items[i].get('quantity');
			}


		});
	</script>
	<!-- //cart-js -->

	<!-- password-script -->
	<script>
		window.onload = function () {
			document.getElementById("password1").onchange = validatePassword;
			document.getElementById("password2").onchange = validatePassword;
		}

		function validatePassword() {
			var pass2 = document.getElementById("password2").value;
			var pass1 = document.getElementById("password1").value;
			if (pass1 != pass2)
				document.getElementById("password2").setCustomValidity("Passwords Don't Match");
			else
				document.getElementById("password2").setCustomValidity('');
			//empty string means no validation error
		}
	</script>
	<!-- //password-script -->

	<!-- scroll seller -->
	<script src="./vistas/js/scroll.js"></script>
	<!-- //scroll seller -->

	<!-- smoothscroll -->
	<script src="./vistas/js/SmoothScroll.min.js"></script>
	<!-- //smoothscroll -->

	<!-- start-smooth-scrolling -->
	<script src="./vistas/js/move-top.js"></script>
	<script src="./vistas/js/easing.js"></script>
	<script>
		jQuery(document).ready(function ($) {
			$(".scroll").click(function (event) {
				event.preventDefault();

				$('html,body').animate({
					scrollTop: $(this.hash).offset().top
				}, 1000);
			});
		});
	</script>
	<!-- //end-smooth-scrolling -->

	<!-- smooth-scrolling-of-move-up -->
	<script>
		$(document).ready(function () {
			/*
			var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear'
			};
			*/
			$().UItoTop({
				easingType: 'easeOutQuart'
			});

		});
	</script>
	<!-- //smooth-scrolling-of-move-up -->

	<!-- for bootstrap working -->
	<script src="./vistas/js/bootstrap.js"></script>
	<!-- //for bootstrap working -->
	<!-- //js-files -->
</body>

</html>

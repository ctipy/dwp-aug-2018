<?php include 'funciones/funciones.php'; ?>
<!DOCTYPE html>
<html lang="es">
<head>
	<title>Desarrollo Web Profesional - <?php echo parametros()['empresa']; ?></title>
	<meta name="description" content="">
	<?php include 'includes/head.php'; ?>
</head>
<body>
	<!-- INICIO ENCABEZADO -->
	<?php include 'includes/header.php'; ?>
	<!-- FIN ENCABEZADO -->
	
	<!-- INICIO CONTENIDO -->
	<main>
		
		<!-- Slider -->
		<section class="container">
			<div id="slides" class="owl-carousel owl-theme">
			
			<?php foreach(getSliders(5) as $fila ){   ?>	
			 
			   <div class="item"> 
					<a href="<?php echo $fila['url'];?>" target="<?php echo $fila['target']; ?>"> <img src="images/sliders/<?php echo $fila['imagen']; ?>">  </a>				
				</div>
			
			<?php }  ?>	

			</div>
		</section>

		<!-- Info -->
		<section class="section-info">
			<div class="container">
				<h2 class="title">Titulo de la sección Info</h2>
				<p class="description">
					Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
				</p>

				<div class="row">

				<?php if( count($cms = getCms(100)) > 0) { ?>
					<div class="col-sm-3">
						<div class="box-info">
							<i class="icon ion-md-analytics"></i> 
							<h3><?php echo $cms['titulo']; ?></h3>
							<p>
								<?php echo $cms['descripcion_corta']; ?>
							</p>
						</div>
					</div>
				<?php } ?>	



				<?php foreach(getCmsLista(3) as $cms) { ?>
					<div class="col-sm-3">
						<div class="box-info">
							<i class="icon ion-md-analytics"></i> 
							<h3><?php echo $cms['titulo']; ?></h3>
							<p>
								<?php echo $cms['descripcion_corta']; ?>
							</p>
						</div>
					</div>
				<?php } ?>	

				

					<div class="col-sm-3">
						<div class="box-info">
							<i class="icon ion-md-basket"></i>
							<h3>Lorem ipsum dolor</h3>
							<p>
								Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
							</p>
						</div>
					</div>
					<div class="col-sm-3">
						<div class="box-info">
							<i class="icon ion-md-gift"></i>
							<h3>Lorem ipsum dolor</h3>
							<p>
								Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
							</p>
						</div>
					</div>
					<div class="col-sm-3">
						<div class="box-info">
							<i class="icon ion-md-stopwatch"></i>
							<h3>Lorem ipsum dolor</h3>
							<p>
								Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
							</p>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- FIN SECTION INFO -->

		<!-- INICIO SECTION TEAM -->
		<section class="section-team">
			<div class="container">
				<h2 class="title">Titulo de la sección Team</h2>
				<p class="description">
					Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
				</p>

				<div class="row">
					<div class="col-sm-2">
						<div class="box-team">
							<i class="icon ion-md-person"></i>
							<h3>Lorem ipsum</h3>
							<a class="bg-facebook" href="">
								<i class="icon ion-logo-facebook"></i> Facebook
							</a>

							<a class="bg-twitter" href="">
								<i class="icon ion-logo-twitter"></i> Twitter
							</a>

							<a class="bg-instagram" href="">
								<i class="icon ion-logo-instagram"></i> Instagram
							</a>
						</div>
					</div>
					<div class="col-sm-2">
						<div class="box-team">
							<i class="icon ion-md-person"></i>
							<h3>Lorem ipsum</h3>
							<a class="bg-facebook" href="">
								<i class="icon ion-logo-facebook"></i> Facebook
							</a>

							<a class="bg-twitter" href="">
								<i class="icon ion-logo-twitter"></i> Twitter
							</a>

							<a class="bg-instagram" href="">
								<i class="icon ion-logo-instagram"></i> Instagram
							</a>
						</div>
					</div>
					<div class="col-sm-2">
						<div class="box-team">
							<i class="icon ion-md-person"></i>
							<h3>Lorem ipsum</h3>
							<a class="bg-facebook" href="">
								<i class="icon ion-logo-facebook"></i> Facebook
							</a>

							<a class="bg-twitter" href="">
								<i class="icon ion-logo-twitter"></i> Twitter
							</a>

							<a class="bg-instagram" href="">
								<i class="icon ion-logo-instagram"></i> Instagram
							</a>
						</div>
					</div>
					<div class="col-sm-2">
						<div class="box-team">
							<i class="icon ion-md-person"></i>
							<h3>Lorem ipsum</h3>
							<a class="bg-facebook" href="">
								<i class="icon ion-logo-facebook"></i> Facebook
							</a>

							<a class="bg-twitter" href="">
								<i class="icon ion-logo-twitter"></i> Twitter
							</a>

							<a class="bg-instagram" href="">
								<i class="icon ion-logo-instagram"></i> Instagram
							</a>
						</div>
					</div>
					<div class="col-sm-2">
						<div class="box-team">
							<i class="icon ion-md-person"></i>
							<h3>Lorem ipsum</h3>
							<a class="bg-facebook" href="">
								<i class="icon ion-logo-facebook"></i> Facebook
							</a>

							<a class="bg-twitter" href="">
								<i class="icon ion-logo-twitter"></i> Twitter
							</a>

							<a class="bg-instagram" href="">
								<i class="icon ion-logo-instagram"></i> Instagram
							</a>
						</div>
					</div>
					<div class="col-sm-2">
						<div class="box-team">
							<i class="icon ion-md-person"></i>
							<h3>Lorem ipsum</h3>
							<a class="bg-facebook" href="">
								<i class="icon ion-logo-facebook"></i> Facebook
							</a>

							<a class="bg-twitter" href="">
								<i class="icon ion-logo-twitter"></i> Twitter
							</a>

							<a class="bg-instagram" href="">
								<i class="icon ion-logo-instagram"></i> Instagram
							</a>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- FIN SECTION TEAM -->

		<!-- INICIO SECTION PRESENTACION -->
		<?php if($cms = getCms(2)) { ?>
		<section class="section-presentacion">
			<div class="container">
				<div class="row">
					
					<div class="col-sm-6">
						<iframe width="100%" 
								height="300" 
								src="<?php echo $cms['video']; ?>?rel=0&amp;controls=0&amp;showinfo=0" 
								frameborder="0" 
								allow="autoplay; encrypted-media" 
								allowfullscreen>
						</iframe>
					</div>

					<div class="col-sm-6">
						<h3><a href="cms.php?id=<?php echo $cms['id']; ?>"><?php echo $cms['titulo']; ?></a></h3>
						<p>
							<?php echo $cms['descripcion_corta']; ?>
						</p>
					</div>
				</div>
			</div>
		</section>
		<?php } ?>
		<!-- FIN SECTION PRESENTACION -->

		<!-- FIN SECTION CLIENTES -->
		<section class="section-clientes">
			<div class="container-fluid">
				<div class="row">
					<div class="col-sm-2">
						<div class="box-clientes">
							<a href="#">
								<img src="images/clientes/1.png">
							</a>
						</div>
					</div>
					<div class="col-sm-2">
						<div class="box-clientes">
							<a href="#">
								<img src="images/clientes/2.png">
							</a>
						</div>
					</div>
					<div class="col-sm-2">
						<div class="box-clientes">
							<a href="#">
								<img src="images/clientes/3.png">
							</a>
						</div>
					</div>
					<div class="col-sm-2">
						<div class="box-clientes">
							<a href="#">
								<img src="images/clientes/4.png">
							</a>
						</div>
					</div>
					<div class="col-sm-2">
						<div class="box-clientes">
							<a href="#">
								<img src="images/clientes/1.png">
							</a>
						</div>
					</div>
					<div class="col-sm-2">
						<div class="box-clientes">
							<a href="#">
								<img src="images/clientes/2.png">
							</a>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- FIN SECTION CLIENTES -->
	</main>
	<!-- FIN CONTENIDO -->

	<!-- INICIO PIE -->
	<?php include 'includes/footer.php'; ?>
	<!-- FIN PIE -->

	<!-- INICIO SCRIPT -->
	<?php include 'includes/script.php'; ?>
	<!-- FIN SCRIPT -->
</body>
</html>
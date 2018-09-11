<!DOCTYPE html>
<html lang="es">
<head>
	<title>Contacto | Mi empresa</title>
	<meta name="description" content="">
	<?php include 'includes/head.php'; ?>
</head>
<body>
	<!-- INICIO ENCABEZADO -->
	<?php include 'includes/header.php'; ?>
	<!-- FIN ENCABEZADO -->
	
	<!-- INICIO CONTENIDO -->
	<main>
		<section class="contacto p-section">
			<div class="container">
				<div class="row">
					<div class="col-sm-12">
						<h3 class="title">Dirección y Contacto</h3>
						<p>
							<i class="icon ion-md-map"></i> Avda. Mariscal López (Super Carretera)
						</p>
						<p>
							<i class="icon ion-md-call"></i> +595 21 3280 940 | 
							<i class="icon ion-logo-whatsapp"></i> +595 973 408 000
						</p>
						<p>
							<b>Horarios de Atención</b> Lunes a Viernes de 09:00hs - 14:00hs
						</p>
					</div>
				</div>

				<hr>

				<div class="row">
					<!-- google map -->
					<div class="col-sm-6">
						<iframe src="https://www.google.com/maps/embed?pb" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
					</div>

					<!-- formulario de cotacto -->
					<div class="col-sm-6">
						<form>
							<input type="text" 	name="nombre" 	placeholder="Nombre y Apellido" class="form-control">
							<input type="email" name="email" 	placeholder="E-mail" 			class="form-control">
							<input type="text" 	name="asunto" 	placeholder="Asunto" 			class="form-control">
							<input type="text" 	name="telefono" placeholder="Telefono" 			class="form-control">
							<textarea class="form-control h-textarea" name="mensaje"></textarea>
							<button class="btn btn-primary btn-lg pull-right">Enviar mensaje</button>
						</form>
					</div>
				</div>
			</div>
		</section>
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
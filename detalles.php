<?php include 'funciones/funciones.php'; ?>
<?php
	$servicio = getDetalleServicio($_GET['id']);

?>
<!DOCTYPE html>
<html lang="es">
<head>
	<title><?php echo $servicio['nombre']; ?> | CTi Technology</title>
	<meta name="description" content="<?php echo $servicio['descripcion_corta']; ?>">
	<?php include 'includes/head.php'; ?>
</head>
<body>
	<!-- INICIO ENCABEZADO -->
	<?php include 'includes/header.php'; ?>
	<!-- FIN ENCABEZADO -->
	
	<!-- INICIO CONTENIDO -->
	<main>
		<section class="detalles p-section">
			<div class="container">
				<div class="row">
					
					<div class="col-sm-6">
						<img src="images/servicios/<?php echo $servicio['imagen']; ?>" alt="<?php echo $servicio['nombre']; ?>">
					</div>

					<div class="col-sm-6">
						<h2><?php echo $servicio['nombre']; ?></h2>
						<p>
							<?php echo $servicio['descripcion_corta']; ?>
						</p>
					</div>

					<div class="col-sm-12"><?php echo $servicio['descripcion_larga']; ?></div>
					
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
<header>
	<nav class="navbar navbar-default navbar-fixed-top">
  		<div class="container">
		<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
			    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#menu-navbar" aria-expanded="false">
				    <span class="sr-only">Toggle navigation</span>
				    <span class="icon-bar"></span>
				    <span class="icon-bar"></span>
				    <span class="icon-bar"></span>
			    </button>
	      		<a class="navbar-brand" href="index.php">
	      			<img src="images/logo.png" width="100px">
	      		</a>
	    	</div>
			<div class="collapse navbar-collapse" id="menu-navbar">      
			    <ul class="nav navbar-nav navbar-right">
					
					<?php if($menu_padre = getMenuPadre(1)) {  ?>

						<?php foreach ($menu_padre as $fila) { ?>
		
							<?php if ($menu_hijo = getMenuHijo($fila['id'])) { ?>
						  	<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
			         			<?php echo $fila['nombre'] ?><span class="caret"></span>
			         		</a>	
								  <ul class="dropdown-menu">	
								
									<?php foreach ($menu_hijo as $fila_hijo) { ?>

										<li><a href="<?php echo $fila_hijo['url']; ?>"><?php echo $fila_hijo['nombre']; ?></a></li>

									<?php } ?>
								  </ul>
							</li>		  				
							 <?php } else { ?>
									<li><a href="<?php echo $fila['url']; ?>"><?php echo $fila['nombre']; ?></a></li>
							 <?php } ?>		
									
						<?php	} ?>		
					
					<?php } ?>
							
			        
			    </ul>
			</div>
		</div>
	</nav>
</header>
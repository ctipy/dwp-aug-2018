<?php 
require '../conexion/conexion.php';
require('Calculadora.php');

		$calculadora = new Calculadora();
		echo $calculadora->sumar(1, 100);


        $sql = "SELECT * FROM usuarios";
				$query = $connection->prepare($sql);
				$query->execute();
				$total = $query->rowCount();
      

	      foreach ($query->fetchAll() as $file) {
	       	print_r($file['nombre']) . '<hr>';
	      }


	   	 //Insertar
	  /* 	 $sql = $connection->prepare('INSERT INTO usuarios (`nombre`) VALUES (:nombre)');
    
          $data = array(
            ':nombre' => 'Usuario ' . rand(50,3)
          );

          try {
            $sql->execute($data);
            $mensaje_success = "Nuevo registro insertado";
          } catch (PDOException $e) {
            $e->getMessage();
            $mensaje_error = "Error, intente nuevamente!";
          }
*/
          //Actualizar
			
			/*		$sql = "UPDATE usuarios SET `nombre` = 'Clara' WHERE id = " . 1;
      
		      $sql = $connection->prepare($sql);
		      try
		        {
		          $sql->execute();
		         echo $mensaje_success = "Registro actualizado";
		         
		          exit;
		        }
		        catch (PDOException $e)
		        {
		          $e->getMessage();
		        echo   $mensaje_error = "Error, intente nuevamente!";
						}
						*/


					@session_start();
					if (isset($_SESSION['logueado']) and $_SESSION['logueado']) {
					} else {
						header('Location: login.php');
						exit;
					}


					//Cerrar session
					session_start();
					session_destroy();
					header('location: login.php');




		        


 ?>


 					<script>
function subir_imagen(input)
{
	self . name = 'opener';
	var name = document . getElementsByName("name")[0] . value;
	remote = open('gestor/img.slides.php?name=' + name + '&input=' + input, 'remote', 'align=center,width=600,height=300,resizable=yes,status=yes');
	remote . focus();
}

function subir_imagen_mobile(input)
{
	self . name = 'opener';
	var name = document . getElementsByName("name")[0] . value;
	remote = open('gestor/img.slides.m.php?name=' + name + '&input=' + input, 'remote', 'align=center,width=600,height=300,resizable=yes,status=yes');
	remote . focus();
}
< / script >
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Usuarios | Admin</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. We have chosen the skin-blue for this starter
        page. However, you can choose any other skin. Make sure you
        apply the skin class to the body tag so the changes take effect. -->
  <link rel="stylesheet" href="dist/css/skins/skin-purple.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
        <script>
            function subir_imagen(input, carpeta)
            {
                self.name = 'opener';
                var name = document.getElementsByName("nombre")[0].value;
                remote = open('gestor/subir_imagen.php?name='+name+'&input='+input+'&carpeta='+carpeta ,'remote', 'align=center,width=600,height=300,resizable=yes,status=yes');
                remote.focus();
            }

            </script>

</head>
<!--
BODY TAG OPTIONS:
=================
Apply one or more of the following classes to get the
desired effect
|---------------------------------------------------------|
| SKINS         | skin-blue                               |
|               | skin-black                              |
|               | skin-purple                             |
|               | skin-yellow                             |
|               | skin-red                                |
|               | skin-green                              |
|---------------------------------------------------------|
|LAYOUT OPTIONS | fixed                                   |
|               | layout-boxed                            |
|               | layout-top-nav                          |
|               | sidebar-collapse                        |
|               | sidebar-mini                            |
|---------------------------------------------------------|
-->
<body class="hold-transition skin-purple fixed">
<div class="wrapper">

  <!-- HEADER -->

  <?php include 'includes/header.php'; ?>
  <?php
        //Obtener el registro del usuario
        $total = 0;
        if(isset($_GET['id'])){

            if($_GET['id'] > 0){

                $sql = "SELECT * FROM sliders WHERE id = " . $_GET['id'];
                $query = $connection->prepare($sql);
                $query->execute();
                $total = $query->rowCount();

            }

        }


        //Actualizar datos del usuario
       if(isset($_POST)){

            if($_POST['actualizar'] == 'actualizar' && $_POST['nombre'] != '' && $_POST['imagen'] != ''  && $_POST['id'] > 0){
                   $sql = "UPDATE sliders set nombre = :nombre, imagen=:imagen, url=:url, target=:target,visible=:visible, fecha_upd=NOW() WHERE id = " . $_POST['id'];
                   $data =  array(
                        'nombre' => $_POST['nombre'],
                        'imagen' => $_POST['imagen'],
                        'url' => $_POST['url'],
                        'target' => $_POST['target'],
                        'visible' => $_POST['visible']
                   );
                    
                   $query = $connection->prepare($sql);


                 try{

                    $query->execute($data);

                    } catch(Exception $e){


                 }
                   
            }

       }

   ?>
 <?php include 'includes/mensajes.php';?>
  
  <!-- ASIDE - SIDEBAR  -->
  <?php include 'includes/aside.php'; ?>

  <!-- CONTENIDO -->
  <div class="content-wrapper">
    <section class="content-header">
      <h1>
        Editar usuario
      </h1>
      <ol class="breadcrumb">
        <li><a href="index.php"><i class="fa fa-home"></i> Inicio</a></li>
        <li><span>Usuarios</span></li>
      </ol>
    
    </section>
    <section class="content container-fluid">
      
<div class="panel">
        <div class="row">
          <div class="col-xs-12">
             
            <a href="sliders.php" class="btn btn-warning btn-lg pull-right" href=""> <i class="fa fa-close"></i> Salir</a>
        </div>
        
        </div>
 
       
      </div>

      <div class="panel">
        <div class="row">
          <?php if($total > 0) { 
                 $slider = $query->fetchAll()[0];
                // var_dump($usuario);                 
              ?>  
            <form action="sliders_edit.php" method="POST" name="form">
                <div class="form-group col-md-4">
                    <label>Nombre</label>
                    <input type="text" name="nombre" value="<?php echo $slider['nombre']; ?>" required class="form-control">
                </div>

               <div class="form-group col-md-4">
                    <label>Url</label>
                    <input type="text" name="url" value="<?php echo $slider['url']; ?>" required class="form-control">
                </div>

                 <div class="form-group col-md-2">
                    <label>Visible</label>
                    <select name="visible" class="form-control" required>
                        <option value="1" <?php if($slider['visible'] == 1){ echo 'selected'; } ?>  >Mostrar</option>
                        <option value="0" <?php if($slider['visible'] == 0){ echo 'selected'; } ?> >No Mostrar</option>
                    </select>
                </div>


                 <div class="form-group col-md-2">
                    <label>Target</label>
                    <select name="target" class="form-control" required>
                        <option value="_parent" <?php if($slider['target'] == "_parent"){ echo 'selected'; } ?>  >Misma pagina</option>
                        <option value="_blank" <?php if($slider['target'] == "_blank"){ echo 'selected'; } ?> >Pagina nueva</option>
                    </select>
                </div>

                <div class="form-group col-md-2">
                    <label>Imagen</label>
                    <input type="text" name="imagen" value="<?php echo $slider['imagen']; ?>"  class="form-control" id="imagen"  onclick="subir_imagen('imagen', 'sliders')">
                </div>


                <div class="col-md-2">
                        <br>
                        <input type="hidden" name="id"  value="<?php echo $slider['id']; ?>">
                       <button type="submit" name="actualizar" value="actualizar" class="btn btn-primary">Actualizar</button> 
                </div>

            </form>
          <?php } else {  ?>

            <a href="sliders.php" class="btn btn-warning">El registro no exite, volver a la lista</a>
          
          <?php } ?>

        </div>
      </div>
    </section>
  </div>

  <!-- FOOTER -->
  <?php include 'includes/footer.php'; ?>

</div>
<!-- ./wrapper -->

<!-- REQUIRED JS SCRIPTS -->
<!-- jQuery 3 -->
<script src="bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
</body>
</html>
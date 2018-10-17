<?php
    // function getRealIP()
    // {
    //     // Mediante $_SERVER['HTTP_CLIENT_IP'] verificamos si la IP es una conexión compartida.
    //     // Mediante $_SERVER['HTTP_X_FORWARDED_FOR'] verificamos si la IP pasa por un proxy.
    //     // Mediante $_SERVER['REMOTE_ADDR'] obtenemos la dirección IP desde la cual está viendo la página actual el usuario.

    //     if (!empty($_SERVER['HTTP_CLIENT_IP']))
    //         return $_SERVER['HTTP_CLIENT_IP'];

    //     if (!empty($_SERVER['HTTP_X_FORWARDED_FOR']))
    //         return $_SERVER['HTTP_X_FORWARDED_FOR'];

    //     return $_SERVER['REMOTE_ADDR'];
    // }


    function getSliders($cantidad){
         include 'conexion/conexion.php';
         $sql = "SELECT * FROM sliders WHERE visible = 1 LIMIT " . $cantidad;
         $query = $connection->prepare($sql);
         $query->execute();

         return $query->fetchAll();
    }



function getClientes($cantidad)
{
    include 'conexion/conexion.php';
    $sql = "SELECT * FROM clientes WHERE visible = 1 LIMIT " . $cantidad;
    $query = $connection->prepare($sql);
    $query->execute();

    return $query->fetchAll();
}



function getTeams($cantidad)
{
    include 'conexion/conexion.php';
    $sql = "SELECT * FROM sliders WHERE visible = 1 LIMIT " . $cantidad;
    $query = $connection->prepare($sql);
    $query->execute();

    return $query->fetchAll();
}




function getCms($id)
{
    include 'conexion/conexion.php';
    $sql = "SELECT * FROM cms WHERE id = " . $id;
    $query = $connection->prepare($sql);
    $query->execute();

    if ($query->rowCount() > 0) {
       return $query->fetchAll()[0];
    }
    return 0;
}


function getCmsLista($cantidad)
{
    include 'conexion/conexion.php';
    $sql = "SELECT * FROM cms WHERE visible = 1 LIMIT " . $cantidad;
    $query = $connection->prepare($sql);
    $query->execute();

    return $query->fetchAll();
}


//Funciones para manejar servicios
function   getServicios($cantidad){
    include 'conexion/conexion.php';
    $sql = "SELECT * FROM servicios WHERE visible = 1 LIMIT " . $cantidad;
    $query = $connection->prepare($sql);
    $query->execute();

    return $query->fetchAll();

}

function getDetalleServicio($id){
    include 'conexion/conexion.php';
    $sql = "SELECT * FROM servicios WHERE id = " . $id;
    $query = $connection->prepare($sql);
    $query->execute();

    if ($query->rowCount() > 0) {
        return $query->fetchAll()[0];
    }
    return 0;
}


function getEnlacesPadre(){
    include '../conexion/conexion.php';
    $sql = "SELECT * FROM links WHERE visible = 1 AND id_padre = 0";
    $query = $connection->prepare($sql);
    $query->execute();

    return $query->fetchAll();
}

function getNombreEnlace($id){
    include '../conexion/conexion.php';
    $sql = "SELECT * FROM links WHERE id = " . $id;
    $query = $connection->prepare($sql);
    $query->execute();

    if ($query->rowCount() > 0) {
        $fila =  $query->fetchAll()[0];
        return $fila['nombre'];
    }
    return 'Principal';
}

function getMenuPadre($posicion)
{
    include 'conexion/conexion.php';
    $sql = "SELECT * FROM links WHERE id_padre = 0 AND posicion =  " . $posicion;

    $query = $connection->prepare($sql);
    $query->execute();

    if ($query->rowCount() > 0) {
        return $query->fetchAll();
    }

    return false;

}



function getMenuHijo($id_padre){
    include 'conexion/conexion.php';
    $sql = "SELECT * FROM links WHERE id_padre = " . $id_padre . " ORDER BY posicion " ;

    $query = $connection->prepare($sql);
    $query->execute();

    if($query->rowCount() > 0 ){
        return $query->fetchAll();
    }

    return false;
    
}

function parametros(){
    include 'conexion/conexion.php';
    $sql = "SELECT * FROM parametros where id = 1";
    $query = $connection->prepare($sql);
    $query->execute();

    if(!$query->rowCount() > 0) {
        $sql = "INSERT INTO parametros (id) values (1)";
        $query2 = $connection->prepare($sql);
        $query2->execute();
     }
     $query->execute();
     return $query->fetchAll()[0];
}


function registrar_mensaje($post){
    include 'conexion/conexion.php';
    $sql = "INSERT INTO mensajes (nombre, email, asunto, telefono, mensaje, fecha_add) values (:nombre, :email, :asunto,:telefono, :mensaje, now())";
    //Definiendo una variable $data con los valores a guardase en la consulta sql
    $data = array(
        'nombre' => $post['nombre'],
        'email' => $post['email'],
        'asunto' => $post['asunto'],
        'telefono' => $post['telefono'],
        'mensaje' => $post['mensaje']
    );
    $query = $connection->prepare($sql);
    $query->execute($data);

}


?>
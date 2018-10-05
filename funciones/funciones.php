<?php
    function getRealIP()
    {
        // Mediante $_SERVER['HTTP_CLIENT_IP'] verificamos si la IP es una conexión compartida.
        // Mediante $_SERVER['HTTP_X_FORWARDED_FOR'] verificamos si la IP pasa por un proxy.
        // Mediante $_SERVER['REMOTE_ADDR'] obtenemos la dirección IP desde la cual está viendo la página actual el usuario.

        if (!empty($_SERVER['HTTP_CLIENT_IP']))
            return $_SERVER['HTTP_CLIENT_IP'];

        if (!empty($_SERVER['HTTP_X_FORWARDED_FOR']))
            return $_SERVER['HTTP_X_FORWARDED_FOR'];

        return $_SERVER['REMOTE_ADDR'];
    }


    function getSliders($cantidad){
         include 'conexion/conexion.php';
         $sql = "SELECT * FROM sliders WHERE visible = 1 LIMIT " . $cantidad;
         $query = $connection->prepare($sql);
         $query->execute();

         return $query->fetchAll();
    }
  

?>
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

  function v_email_newsletters($var)
  {
      require 'conexion/conexion.php';
      $sql = "SELECT email FROM newsletters WHERE email = '$var'";
      $query = $connection->prepare($sql);
      $query->execute();
      $total = $query->rowCount();
      return $total;
  }

  function get_cms($id, $campo)
  {
    require 'conexion/conexion.php';
    $sql = "SELECT $campo FROM cms WHERE id = '$id'";
    $query = $connection->prepare($sql);
    $query->execute();
    $rows = $query->fetch();
    return $rows[$campo];
  }

?>
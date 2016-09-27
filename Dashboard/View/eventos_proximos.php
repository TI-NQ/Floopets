<?php
  require_once ("../Model/conexion.php");
  require_once ("../Model/evento.class.php");

  $eventos_proximos=Gestion_evento::eventos_proximos();

  print_r($eventos_proximos);

?>

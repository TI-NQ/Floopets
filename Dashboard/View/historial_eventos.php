<?php
  require_once ("../Model/conexion.php");
  require_once ("../Model/evento.class.php");
  $historial_eventos=Gestion_evento::historial_eventos();
  print_r($historial_eventos);

?>

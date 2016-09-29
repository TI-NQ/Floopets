<?php

if(isset($_GET["pet"])){
  $mascota = $_GET["pet"];
  $titulo = "ADOPTA UN ".$mascota;
}else{
  $mascota = "";
  $titulo = "ADOPTA UN ANIMAL SIN HOGAR";
}

?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title><?php echo $titulo; ?></title>
  </head>
  <body>
    <header>

    </header>
    <div id="filter-pet">
      <div class="container">

      </div>
    </div>
    <div id="datagrid-pet" class="container">

    </div>
  </body>
</html>

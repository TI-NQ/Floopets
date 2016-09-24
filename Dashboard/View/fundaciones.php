<?php
  require_once("../Model/conexion.php");
  require_once("../Model/organizacion.class.php");
  $fundaciones=Gestion_organizacion::ReadAll();
  // print_r($fundaciones);
?>
<div class="row animated zoomIn">
  <h4 class="center">Fundaciones</h4>

    <?php
    foreach ($fundaciones as $row) {
    ?>
    <div class="row">
      <div class="col s4">
        <img src="../../WebFloopets/images/7.jpg" style="max-height:250px; border-radius:5px; margin:0 -10px 20px 100px;" />
      </div>
      <div class="col s2">
        <h5><?php echo $row[2];?></h5>
        <ul>
          <li>Email: <span><?php echo $row[4];?></span></li>
          <li>Telefono: <span><?php echo $row[5];?></span></li>
          <li>Direccion: <span><?php echo $row[6];?></span></li>
        </ul>
        <a href="#" class="waves-effect btn">Ver mas...</a>
      </div>
    </div>

    <?php
    }
    ?>
    <!-- imagen de prueba -->



</div>

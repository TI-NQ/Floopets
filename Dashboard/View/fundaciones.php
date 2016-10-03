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
      <div class="col s12">
        <div class='imagenmascota col s4'>
                      <div style='width:180px ;height:180px ;'>
                        <?php
                        if ($row["org_logo"]=="") {
                          echo"<img class='circle responsive-img' style='width:180px ;height:180px ;' src='../../WebFloopets/images/base.jpg'>";
                        }
                        else {
                           echo"<img style='width:180px ;height:180px ;' src='img/imagen_organizacion/".$row["org_nombre"]."/".$row["org_logo"]."'>";
                        }
                         ?>

                      </div>
                  </div>
        <div class="col s2">
          <h5><?php echo $row[2];?></h5>
          <ul>
            <li>Email: <span><?php echo $row[5];?></span></li>
            <li>Telefono: <span><?php echo $row[4];?></span></li>
            <li>Direccion: <span><?php echo $row[7];?></span></li>
          </ul>

        </div>
      </div>
      </div>


    <?php
    }
    ?>
    <!-- imagen de prueba -->



</div>

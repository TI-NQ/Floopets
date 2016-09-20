<?php

  require_once("../Model/conexion.php");
  require_once("../Model/denuncia.class.php");
  $denuncia = Gestion_denuncia::ReadAll();

?>

<div class="col l8 offset-l4">
  <h4>Gestion Denuncia</h4>
</div>

<div class="row">
<div class="col l12">
<?php
      @$mensaje = $_REQUEST["m"];

      echo @$mensaje;

      foreach ($denuncia as $row)
      {

        echo"<div class='col l6 descrip'>
                <div class='row'>
                  <div class='col l4 col m6'>
                      <div class='col l6'>
                        <label>Nombre de mascota</label>
                        <li>".$row["de_nombre"]."</li>
                      </div>
                      <div class='imagenmascota col l12'>
                          <img class='img-circle' style='width:200px;height:200px;' src='img/imagen_denuncia/".$row["de_contacto"]."/".$row["de_imagen"]."'>
                      </div>
                      <div class='col l6'>
                          <a href='../View/actualizar_denuncia.php?dn=".base64_encode($row["de_cod_denuncia"])."'>
                          <i class='small material-icons'>mode_edit</i>
                          </a>
                      </div>
                      <div class='col l6'>
                          <a href='../Controller/denuncia.controller.php?dn=".base64_encode($row["de_cod_denuncia"])."&accion=d'>
                          <i class='small material-icons'>delete</i>
                          </a>
                      </div>
                  </div>
                  <div class='col l2'>
                    <ul class='descrip'>
                      <h6>Codigo</h6>
                          <li>".$row["de_cod_denuncia"]."</li>
                      <label>Tipo de denuncia</label>
                          <li>".$row["td_nombre"]."</li>
                      <label>Descripcion</label>
                            <li>".$row["de_descripcion"]."</li>
                      <label>Contacto</label>
                            <li>".$row["de_contacto"]."</li>
                      <label>Telefono</label>
                            <li>".$row["de_telefono"]."</li>
                      <label>Fecha de denuncia</label>
                            <li>".$row["de_fecha"]."</li>
                    </ul>                    
                  </div>
                </div>
              </div>

          ";
      }

?>
</div>
</div>
</div>


<?php

  require("../Model/conexion.php");
  include ("../Model/raza.class.php");

  $tipo_mascota=$_POST['tm'];
  // echo "Seleccione servicio : <select onChange='obtservicio(this.value);' name='combo_servicio' id='combo_servicio'></select>";

  $razas=Gestion_raza::readbycodtipo($tipo_mascota);
  if (count($razas) == 0){
    ?><p style="color:red">Lo sentimos no hay razas disponibles</p>
    <?php
  }else{
    ?><select name="ra_cod_raza" id="ra_cod_raza">
        <option value="">Seleccione una raza</option>
        <?php
          foreach ($razas as $fila ) {
            echo '<option value="'.$fila["ra_cod_raza"].'">'.$fila["ra_nombre"].'</option>';
          }
        ?>

    </select>
    <label>Raza mascota</label>
<?php
  }
?>

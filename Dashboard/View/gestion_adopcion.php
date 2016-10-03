<?php

require_once("../Model/conexion.php");
require_once("../Model/adopcion.class.php");
require_once("../Model/usuarios.class.php");
$org_cod_organizacion=Gestion_usuarios::Mi_Organizacion($_SESSION["usu_cod_usuario"]);
$adopcion=Gestion_adopcion::solicitudesapro($org_cod_organizacion[1]);


 ?>


 <!-- esto va en el div de la imagen
  -->
<div class="row">
<div class="col l11 offset-l1">
<?php
	foreach ($adopcion as $row) {
     $nombre_carpeta = strtolower(str_replace('ñ', 'n', $row["ani_carpeta"]));
      $nombre_carpeta = strtolower(str_replace(' ', '', $nombre_carpeta));
      $nombre_img_ani = strtolower(str_replace('ñ', 'n', $row["ani_imagen"]));
      $nombre_img_ani = strtolower(str_replace(' ', '', $nombre_img_ani));
    echo"<div class='col l6 descrip'>
            <div class='row'>
                <div class='col l6 col m6'>
                  <div class='col l7'>
                  <label>Codigo</label>
                    <span>".$row["ado_cod_adopcion"]."</span>
                </div>
                <div class='imagenmascota col l12'>
                      <div>";
                      if ($nombre_img_ani=="") {
                        echo "<img class='responsive-img' style='width:200px ;height:200px ;border-radius:10px;' src='../../WebFloopets/images/base.jpg'>";
                      }else {
                        echo "<img class='responsive-img' style='width:200px ;height:200px ;border-radius:10px;' src='img/imagen_animal/".$nombre_carpeta."/".$nombre_img_ani."'>";
                      }
echo "</div>
</div>
              </div>
                <div class='col l6'>
                  <ul class='descrip'>
                    <label>Fecha :</label>
                      <li>".$row["ado_fecha"]."</li>
                      <label>Nombre Usuario :</label>
                      <li>".$row["usu_nombre"]."</li>
                    <label>Nombre Animal :</label>
                        <li>".$row["ani_nombre"]."</li>
                    <label>Raza :</label>
                        <li>".$row["ra_nombre"]."</li>
                  </ul>
                </div>
            </div>
          </div>

      ";



	}

?>
</div>
</div>

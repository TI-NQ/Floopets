<?php
  require_once ("../Model/conexion.php");
  require_once ("../Model/organizacion.class.php");
  require_once ("../Model/adopcion.class.php");
  require_once ("../Model/voluntarios.class.php");

  require_once ("../Model/animal.class.php");

  $organizacion=Gestion_organizacion::ReadbyID($_SESSION["org_cod_organizacion"]);
  $nombre_carpeta = strtolower(str_replace('ñ', 'n', $organizacion["org_nombre"]));
  $nombre_carpeta = strtolower(str_replace(' ', '', $nombre_carpeta));
  $nombre_org_logo = strtolower(str_replace('ñ', 'n', $organizacion["org_logo"]));
  $nombre_org_logo = strtolower(str_replace(' ', '', $nombre_org_logo));
  $adopciones=Gestion_adopcion::Readbyorg_cod($_SESSION["org_cod_organizacion"]);
  $animal=Gestion_animal::Nombresraza($_SESSION["org_cod_organizacion"]);
  $mis_voluntarios = Gestion_voluntarios::misvolun($_SESSION["org_cod_organizacion"]);
  // if (!isset($_SESSION["org_cod_organizacion"])) {
  //   $mensaje="Debes registrar una fundacion";
  //   $tipo_mensaje="info";
  //   header("Location: dashboard.php?p=".base64_encode('registrar_organizacion')."&m=$mensaje&tm=$tipo_mensaje");
  // }
?>

<div class="row">
  <div class="col12">
 <?php if ($nombre_org_logo=="") {
   echo "<div class='center'><img class='responsive-img' style='width:200px; ;height:200px; ;' src='../../WebFloopets/images/base.jpg'></div>";
 }else {
   echo "<div class='center'><img class='responsive-img' style='width:200px; ;height:200px; ;' src='img/imagen_organizacion/".$nombre_carpeta."/".$nombre_org_logo."'></div>";
 }
 ?>





    <div class="col s6 ayuda">
      <h5 class="center">Mascotas para adopcion</h5>

      <?php

        foreach ($animal as $fila) {

          ?>

          <div class="row" >
            <div class="col s12 mascotas">
              <div class="col s5">
                <p>Mascota: <?php echo $fila[2]?></p>
                <p>Raza: <?php echo $fila[15]?></p>
                <p>Esterilizado: <?php echo $fila[5]?></p>
              </div>
              <div class="col s5">
                <p>Descripcion: <?php echo $fila[7]?></p>
                <p>Sexo: <?php echo $fila[9]?></p>
                <a href="#" class="waves-effect btn">ver mas</a>
              </div>

            </div>
          </div>
          <?php
        }
      ?>
    </div>
    <div class="col s6">
      <h5 class="center">Voluntarios</h5>
      <?php

        foreach ($mis_voluntarios as $row) {

          ?>

          <div class="row" >
            <div class="col s12 mascotas">
              <div class="col s5">
                <p>Nombre: <?php echo $row[1]?></p>
                <p>Telefono: <?php echo $row[2]?></p>
                <p>Direccion: <?php echo $row[3]?></p>
              </div>
                <a href="#" class="waves-effect btn">ver mas</a>

            </div>
          </div>
          <?php
        }
      ?>
    </div>
  </div>

</div>

<?php
require_once("Dashboard/Model/conexion.php");
require_once("Dashboard/Model/animal-copy.class.php");
if (isset($_POST["tipo_animal"])) {
  $animales = Gestion_animal::paraAdoptarbyPet($_POST["tipo_animal"]);
  if(count($animales)<=0){
    echo "En este momento y por fortuna no hay ningun ".$_POST["tipo_animal"]." para adoptar";
  }
  foreach ($animales  as $row) {
  ?>

    <div class="item col m4">
      <div class="mascota">
        <img src="Dashboard/View/img/imagen_animal/<?php echo $row["ani_carpeta"]."/".$row["ani_imagen"]?>">
      </div>
      <div class="detalle">
        <h5><?php echo $row["ani_nombre"]; ?></h5>
        <p>Edad: <?php echo $row["ani_edad"]; ?></p>
       <?php echo "<a class='btn waves-effect blue lighten-3' href='Dashboard/Controller/animal.controller.php?an=".base64_encode($row["ani_cod_animal"])."&accion=enproceso'>Adoptar</a>" ; ?>
      </div>
    </div>
  <?php
  }
}
if (isset($_POST["raza"])) {
  $ani_raza = Gestion_animal::paraAdoptarbyraza($_POST["raza"]);
  if(count($ani_raza)<=0){
    echo "En este momento no hay ningun ".$_POST["raza"]." para adoptar";
  }
  foreach ($ani_raza  as $row) {
  ?>

    <div class="item col m4">
      <div class="mascota">
        <img src="Dashboard/View/img/imagen_animal/<?php echo $row["ani_carpeta"]."/".$row["ani_imagen"]?>">
      </div>
      <div class="detalle">
        <h5><?php echo $row["ani_nombre"]; ?></h5>
        <p>Edad: <?php echo $row["ani_edad"]; ?></p>
       <?php echo "<a class='btn waves-effect blue lighten-3' href='Dashboard/Controller/animal.controller.php?an=".base64_encode($row["ani_cod_animal"])."&accion=enproceso'>Adoptar</a>" ; ?>
      </div>
    </div>
  <?php
  }
}
if (isset($_POST["sexo"])) {
  $ani_sex = Gestion_animal::paraAdoptarbysex($_POST["sexo"]);
  if(count($ani_sex)<=0){
    echo "En este momento no hay mascotas ".$_POST["sexo"]." para adoptar";
  }
  foreach ($ani_sex  as $row) {
  ?>

    <div class="item col m4">
      <div class="mascota">
        <img src="Dashboard/View/img/imagen_animal/<?php echo $row["ani_carpeta"]."/".$row["ani_imagen"]?>">
      </div>
      <div class="detalle">
        <h5><?php echo $row["ani_nombre"]; ?></h5>
        <p>Edad: <?php echo $row["ani_edad"]; ?></p>
       <?php echo "<a class='btn waves-effect blue lighten-3' href='Dashboard/Controller/animal.controller.php?an=".base64_encode($row["ani_cod_animal"])."&accion=enproceso'>Adoptar</a>" ; ?>
      </div>
    </div>
  <?php
  }
}
if (isset($_POST["fundacion"])) {
  $ani_fun = Gestion_animal::paraAdoptarbyfun($_POST["fundacion"]);
  if(count($ani_fun)<=0){
    echo "La fundacion ".$_POST["fundacion"]." no tienes mascotas para adoptar";
  }
  foreach ($ani_fun  as $row) {
  ?>

    <div class="item col m4">
      <div class="mascota">
        <img src="Dashboard/View/img/imagen_animal/<?php echo $row["ani_carpeta"]."/".$row["ani_imagen"]?>">
      </div>
      <div class="detalle">
        <h5><?php echo $row["ani_nombre"]; ?></h5>
        <p>Edad: <?php echo $row["ani_edad"]; ?></p>
       <?php echo "<a class='btn waves-effect blue lighten-3' href='Dashboard/Controller/animal.controller.php?an=".base64_encode($row["ani_cod_animal"])."&accion=enproceso'>Adoptar</a>" ; ?>
      </div>
    </div>
  <?php
  }

}
?>

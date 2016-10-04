
<?php
session_start();
require_once("Dashboard/Model/conexion.php");
require_once("Dashboard/Model/animal-copy.class.php");
require_once("Dashboard/Model/organizacion.class.php");
require_once("Dashboard/Model/raza.class.php");


$fundaciones=Gestion_organizacion::ReadAll();
$razas=Gestion_raza::ReadAll();
//Validacion de logueo para adoptar


if(isset($_GET["pet"])){
  $mascota = $_GET["pet"];
  $titulo = "ADOPTA UN ".$mascota;
  $animales = Gestion_animal::paraAdoptarbyPet($mascota);
}else{
  $mascota = "";
  $titulo = "ADOPTA UN ANIMAL SIN HOGAR";
  $animales = Gestion_animal::paraAdoptar();
}



?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title><?php echo $titulo; ?></title>

  		<!-- google.fonts import -->
  		<link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300" rel="stylesheet">
  		<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
  		<!--Import Google Icon Font-->
  		<link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!-- import font-awesome -->
      <link rel="stylesheet" type="text/css" href="WebFloopets/font-awesome-4.6.3/css/font-awesome.css">
  		<!--Import materialize.css-->
  		<link type="text/css" rel="stylesheet" href="WebFloopets/materialize/css/materialize.css"  media="screen,projection"/>
      <link rel="stylesheet" type="text/css" href="WebFloopets/sweetalert/dist/sweetalert.css">
    <script type="text/javascript" src="WebFloopets/js/jquery-1.12.1.min.js"></script>
    <script type="text/javascript" src="WebFloopets/materialize/js/materialize.js"></script>
    <script type="text/javascript" src="WebFloopets/sweetalert/dist/sweetalert.min.js"></script>

    <link rel="stylesheet" href="WebFloopets/css/estilosint.css">

    <script>
      $(document).ready(function(){
        $('a.ancla').click(function(e){
          e.preventDefault();
          enlace  = $(this).attr('href');
          $('html, body').animate({
            scrollTop: $(enlace).offset().top
          }, 1000);
        });


        $(".button-collapse").sideNav();

        var menu = document.getElementsByClassName("hamburger-menu");

        [].forEach.call(menu, function(m){
          m.addEventListener('click', function(){
            m.classList.toggle('open');
          });
        });

        $(".drag-target").click(function(){
          $("#hamburger-menu").removeClass("open");
        });

        $("input[name*='mascota']").change(function(){
          var tipo_animal = $(this).val();
          $.post("adopciones_ajax.php", {tipo_animal: tipo_animal}, function(data){
            $(".listado").html(data);
          });

        });
        $(".raza").change(function(){
          var raza = $(this).val();
          $.post("adopciones_ajax.php", {raza: raza}, function(data){
            $(".listado").html(data);
          });

        });
        $(".sexo").change(function(){
          var sexo = $(this).val();
          $.post("adopciones_ajax.php", {sexo: sexo}, function(data){
            $(".listado").html(data);
          });

        });
        $(".fundacion").change(function(){
          var fundacion = $(this).val();
          $.post("adopciones_ajax.php", {fundacion: fundacion}, function(data){
            $(".listado").html(data);
          });

        });

        $(document).ready(function(){
         <?php
          if(isset($_GET["m"]) )
          {
            echo "swal('".(base64_decode($_GET["m"]))."','','".(base64_decode($_GET["tm"]))."');";
          }
         ?>
 });

      });
      </script>


    </script>
  </head>
  <body>
    <a href="#" data-activates="slide-out" class="button-collapse"><div id="hamburger-menu" class="hamburger-menu">
      <div class="first"></div>
      <div class="second"></div>
      <div class="third"></div>
    </div></a>
    <nav id="slide-out" class="side-nav">
      <img id="logo" src="WebFloopets/images/logo-negro.png">
      <ul class="menu_floopets">
        <li><a href="index.php#Inicio" ><i class="icono izquierda fa fa-paw"></i> Inicio</a></li>
        <li><a href="index.php#Quienessomos" ><i class="icono izquierda fa fa-paw "></i> Equipo De Trabajo</a></li>
        <!-- <li><a href="index.php#adopciones" ><i class="icono izquierda fa fa-paw"></i> Adopciones</a></li> -->
        <li><a href="index.php#voluntarios" ><i class="icono izquierda fa fa-paw"></i> ¿Quieres ser voluntario?</a></li>
        <li><a href="index.php#denuncias" ><i class="icono izquierda fa fa-paw"></i> Ayuda una Mascota</a></li>
        <li><a href="Eventos.php" ><i class="icono izquierda fa fa-paw"></i> Eventos</a></li>
        <!-- <li><a href="#"><i class="icono izquierda fa fa-paw"></i> Donaciones</a></li>
        <li><a href="#"><i class="icono izquierda fa fa-paw"></i> Cuidados</a></li> -->
      </ul>
    </nav>
    <header>
      <img src="WebFloopets/images/coveradopt.jpg" alt="Adopta un animal sin hogar">
    </header>
    <div id="filter-pet" class="blue-grey darken-4">
      <div class="container">
        <div class="row">
        <form>
          <h5>Selecciona las caracteristicas a buscar</h5>
          <div class="col m2"  >

            <input class="with-gap" name="mascota" type="radio" id="test1" value="Perro" <?php if($mascota == "Perro"){ echo "checked";} ?>/>
            <label for="test1">Perros</label><br>

            <input class="with-gap" name="mascota" type="radio" id="test2" value="Gato" <?php if($mascota == "Gato"){ echo "checked";} ?>/>
            <label for="test2">Gatos</label>
          </div>

          <div class="col m3">
            <select class="browser-default sexo">
              <option value="" disabled selected>Genero</option>
              <option value="Macho">Macho</option>
              <option value="Hembra">Hembra</option>
              <!-- <option value="all">No importa</option> -->
            </select>
          </div>

          <div class="col m3">
            <select class="browser-default raza">
              <option value="" disabled selected>Raza</option>
              <!-- <option value="all">No importa</option> -->
              <?php
              foreach ($razas as $row) {
                echo "<option value = '".$row["ra_nombre"]."'>".$row["ra_nombre"]."</option>";
              }
             ?>
            </select>
          </div>

          <div class="col m3">
            <select class="browser-default fundacion">
              <option value="" disabled selected>Fundación</option>
              <!-- <option value="all">No importa</option> -->
              <?php
              foreach ($fundaciones as $row) {
                echo "<option value = '".$row["org_nombre"]."'>".$row["org_nombre"]."</option>";
              }
             ?>
            </select>
          </div>
        </form>
        </div>
      </div>
    </div>
    <div id="datagrid-pet" class="container">
        <h4 class="center">ESTOS SON NUESTROS AMIGOS QUE NECESITAN UN HOGAR</h4>
        <div class="row listado">
        <?php
        foreach ($animales  as $row) {
          if ($row["ani_imagen"]=="") {
            ?><div class="item col m4">
              <div class="mascota">
                <img src="WebFloopets/images/base.jpg">
              </div>
              <form action="Dashboard/Controller/animal.controller.php" >
              <div class="detalle">
                <h5><?php echo $row["ani_nombre"]; ?></h5>
                <p>Edad: <?php echo $row["ani_edad"]; ?></p>

               <?php echo "<a class='btn waves-effect blue lighten-3' href='Dashboard/Controller/animal.controller.php?an=".base64_encode($row["ani_cod_animal"])."&accion=enproceso'>Adoptar</a>" ; ?>
              </div>
              </form>
            </div><?php
          }else {
            $carpeta = strtolower(str_replace('ñ', 'n', $row["ani_carpeta"]));
       			$carpeta = strtolower(str_replace(' ', '', $carpeta));
       			$img_ani = strtolower(str_replace('ñ', 'n', $row["ani_imagen"]));
       			$img_ani = strtolower(str_replace(' ', '', $img_ani));
            $img_ani = strtolower(str_replace('_', '', $img_ani));
            ?><div class="item col m4">
              <div class="mascota">
                <img src="Dashboard/View/img/imagen_animal/<?php echo $carpeta."/".$img_ani?>">
              </div>
              <form action="Dashboard/Controller/animal.controller.php" >
              <div class="detalle">
                <h5><?php echo $row["ani_nombre"]; ?></h5>
                <p>Edad: <?php echo $row["ani_edad"]; ?></p>

               <?php echo "<a class='btn waves-effect blue lighten-3' href='Dashboard/Controller/animal.controller.php?an=".base64_encode($row["ani_cod_animal"])."&accion=enproceso'>Adoptar</a>" ; ?>
              </div>
              </form>
            </div><?php
          }
        }
        ?>
      </div>

    </div>
  </body>
</html>

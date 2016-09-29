<?php
require_once("Dashboard/Model/conexion.php");
require_once("Dashboard/Model/animal-copy.class.php");

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

    <script type="text/javascript" src="WebFloopets/js/jquery-1.12.1.min.js"></script>
    <script type="text/javascript" src="WebFloopets/materialize/js/materialize.js"></script>

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
        <li><a href="#Inicio" class="ancla"><i class="icono izquierda fa fa-paw"></i> Inicio</a></li>
        <li><a href="#Quienessomos" class="ancla"><i class="icono izquierda fa fa-paw "></i> Equipo De Trabajo</a></li>
        <li><a href="#adopciones" class="ancla"><i class="icono izquierda fa fa-paw"></i> Adopciones</a></li>
        <li><a href="#voluntarios" class="ancla"><i class="icono izquierda fa fa-paw"></i> ¿Quieres ser voluntario?</a></li>
        <li><a href="#denuncias" class="ancla"><i class="icono izquierda fa fa-paw"></i> Ayuda una Mascota</a></li>
        <li><a href="Eventos.php" ><i class="icono izquierda fa fa-paw"></i> Eventos</a></li>
        <li><a href="#"><i class="icono izquierda fa fa-paw"></i> Donaciones</a></li>
        <li><a href="#"><i class="icono izquierda fa fa-paw"></i> Cuidados</a></li>
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
            <select class="browser-default">
              <option value="" disabled selected>Genero</option>
              <option value="M">Macho</option>
              <option value="H">Hembra</option>
              <option value="all">No importa</option>
            </select>
          </div>

          <div class="col m3">
            <select class="browser-default">
              <option value="" disabled selected>Raza</option>
              <option value="all">No importa</option>

            </select>
          </div>

          <div class="col m3">
            <select class="browser-default">
              <option value="" disabled selected>Fundación</option>
              <option value="all">No importa</option>
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
        ?>

          <div class="item col m4">
            <div class="mascota">
              <img src="Dashboard/View/img/imagen_animal/<?php echo $row["ani_carpeta"]."/".$row["ani_imagen"]?>">
            </div>
            <div class="detalle">
              <h5><?php echo $row["ani_nombre"]; ?></h5>
              <p>Edad: <?php echo $row["ani_edad"]; ?></p>
              <button class="waves-effect waves-light btn">ADOPTAR</button>
            </div>
          </div>
        <?php
        }
        ?>
      </div>

    </div>
  </body>
</html>

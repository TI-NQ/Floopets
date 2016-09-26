<?php
	session_start();
  require_once("Dashboard/Model/conexion.php");
  require_once("Dashboard/Model/tipo_denuncia.class.php");
	require_once("Dashboard/Model/evento.class.php");
  $tipod = Gestion_tipo_denuncia::ReadAll();
?>
<!DOCTYPE html>
<html lang="es">
	<head>
		<!-- google.fonts import -->
		<link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
		<!--Import Google Icon Font-->
	  <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	  <!--Import materialize.css-->
	  <link type="text/css" rel="stylesheet" href="WebFloopets/materialize/css/materialize.css"  media="screen,projection"/>
		<link rel="shortcut icon" type="image/x-icon" href="WebFloopets/images/title-web.ico">
		<meta charset="UTF-8">
		<!-- import font-awesome -->
		<link rel="stylesheet" type="text/css" href="WebFloopets/font-awesome-4.6.3/css/font-awesome.css">
		<!-- import animate.css -->
		<link rel="stylesheet" type="text/css" href="WebFloopets/css/animate.css">
		<title>Floopets-Cambiando vidas</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
		<link rel="stylesheet" type="text/css" href="WebFloopets/css/estilos.css">
		<link rel="stylesheet" type="text/css" href="WebFloopets/css/owl.carousel.css">
		<link rel="stylesheet" type="text/css" href="WebFloopets/css/owl.theme.css">

				<!--Import jQuery before materialize.js-->
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
      	<!-- <script type="text/javascript" src="WebFloopets/js/jquery-1.12.1.min.js"></script> -->
      	<script type="text/javascript" src="WebFloopets/materialize/js/materialize.js"></script>
      	<script type="text/javascript" src ="WebFloopets/js/owl.carousel.min.js"></script>
				<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.js"></script>
				<script type="text/javascript">
				wow = new WOW(
													{
													boxClass:     'wow',
													animateClass: 'animated',
													offset:       0,
												})
												wow.init();
				</script>
      	<!-- link del menu -->
      	<script src="WebFloopets/js/efecto_menu.js"></script>
      	<script src="WebFloopets/js/desplegar_ayuda.js"></script>

      	<!-- scripts -->
      	<script type="text/javascript">

      		 $(document).ready(function(){
     			 $('.parallax').parallax();
           $('a.ancla').click(function(e){
           e.preventDefault();
             enlace  = $(this).attr('href');
             $('html, body').animate({
                 scrollTop: $(enlace).offset().top
             }, 1000);
           });
     			 $('select').material_select();
     			 $('.carousel.carousel-slider').carousel({full_width: true});
     			 $("#owl-demo").owlCarousel({
				      autoPlay: 7000, //Set AutoPlay to 3 seconds
				      items : 3,
				      itemsDesktop : [1199,3],
				      itemsDesktopSmall : [979,3]


    			});
     		 });
      	</script>
        <script type="text/javascript">
      		$(document).ready(function(){
      			//nos desplazamos entre todos los divs

      		});
		</script>
	</head>
	<body>
			<i class="fa fa-bars animated zoomIn" aria-hidden="true" id="menu" onclick= "desplegar()"></i>


		<div class="contenedor-menu animated fadeInLeft">

			<img id="logo" onclick="ver_menu()" src="WebFloopets/images/logo-negro.png">
			<i class="fa fa-times" aria-hidden="true" id="salir" onclick= "ver_menu()"></i>
			<ul class="menu_floopets">
				<li><a href="#Inicio" class="ancla"><i class="icono izquierda fa fa-paw"></i> Inicio</a></li>
				<li><a href="#Quienessomos" class="ancla"><i class="icono izquierda fa fa-paw "></i> Equipo De Trabajo</a></li>
				<li><a href="#adopciones" class="ancla"><i class="icono izquierda fa fa-paw"></i> Adopciones</a></li>
				<li><a href="Quiere-Ser-Voluntario.php"><i class="icono izquierda fa fa-paw"></i> ¿Quieres ser voluntario?</a></li>
				<li ><a href="#denuncias" class="ancla"><i class="icono izquierda fa fa-paw"></i> Ayuda una Mascota</a>
				</li>

				<li><a href="Eventos.php" ><i class="icono izquierda fa fa-paw"></i> Eventos</a></li>
				<li><a href="#"><i class="icono izquierda fa fa-paw"></i> Donaciones</a></li>
				<li><a href="#"><i class="icono izquierda fa fa-paw"></i> Cuidados</a></li>
			</ul>


		</div>
		<div class="banner-video" id="Inicio">
			<a class="ingresa btn waves-effect waves-light btn-large wow zoomIn" href="login.php">Ingresar a Floopets</a>
			<video src="WebFloopets/video/563398388.mp4" autoplay></video>
			<!-- <img src="WebFloopets/images/inicio.jpeg" alt="" style="width:100%;height:100vh;"/> -->
		</div>


		<!-- Andrea Guzman-Adopciones -->
		<div class="row seccion1" id="adopciones">
				<div class="container__perros col s12 m6 l6">
					<button class="boton btn waves-effect waves-light btn-large wow fadeInDown">Perro</button>

					<div id="adoptaperro">
						<p class="wow fadeInDown">Adopta un</p>
					</div>

					<img src="WebFloopets/images/1.jpg" class="wow fadeInLeft">
				</div>
				<div class="container__gatos col s12 m6 l6">
					<div id="adoptagato">
						<p class="wow fadeInDown">Adopta un</p>
					</div>
						<button class="boton1 btn waves-effect waves-light btn-large wow fadeInDown">Gato</button>
					<img src="WebFloopets/images/2.jpg" class="wow fadeInRight">

				</div>
		</div>
		<div class="parallax-container azul">
	      	<div class="parallax">
	      		<img src="WebFloopets/recursos/images/linea-azul.png">
	  		</div>
    	</div>
		<!-- Andrea Guzman -->

<!--Contenedor ayuda una mascota
		Ricardo_ochoa -->
		<h2 style="color:#fff; font-family:Roboto Condensed, sans-serif; margin-top:50px;" class="center wow zoomIn" id="denuncias">Denuncias</h2>
		<div class="row seccion2">
			<form class="col s12" action="Dashboard/Controller/denuncia.controller.php" method="POST" enctype="multipart/form-data">
			<div class="container__img col s12 m4 l4" >
				<h3 class="center wow zoomIn">Ayuda una Mascota</h3>
				<p class="center"><img class="bran wow zoomIn" src="WebFloopets/images/ayuda.png"></p>
				<section>
  <div class="inputFile">
    <input type="file" name="de_imagen[]" class="file" />
    <div class="fakeFile">
      <img src="WebFloopets/images/1 copia.png" alt="" class="circle responsive-img wow zoomIn">
    </div>
  </div>
</section>
			</div>
			<div class="container__form__help col s12 m8 l8 wow fadeInRight">
			    <div class="row">
				    <h3 class="center">Seleccione una opción</h3>
				      <div class="row">
				        <div class="input-field col s12 m6 l6 mascota">
    						<select name="td_cod_tipo_denuncia">
                  <?php
      							foreach ($tipod as $row) {
      								echo "<option value = '".$row["td_cod_tipo_denuncia"]."'>".$row["td_nombre"]."</option>";
      							}
      						 ?>
    						</select>
    						<label>Selecciona un tipo de denuncia</label>
  						</div>
							<div class="input-field col s12 m6 l6">
								<input type="text" name="de_telefono" id="de_telefono" required>
										<label for="de_telefono">Telefono</label>
							</div>
				      </div>
							<div class="row">
								<div class="input-field col s12 textarea">
									<textarea id="textarea1" class="materialize-textarea" name="de_descripcion" length="120"></textarea>
									<label for="textarea1">Descripción</label>
								</div>
							</div>
								<div class="input-field col s12 m6 l6">
									<input type="text" name="de_nombre" id="de_nombre" required>
											<label for="de_nombre">Nombre de mascota (Opcional)</label>
								</div>
								<div class="input-field col s12 m6 l6">
									<input type="email" name="de_contacto" id="de_contacto" required>
											<label for="de_contacto">Correo Electronico</label>
								</div>

							<div class="input-field col s12">
								<button class="boton__form btn waves-effect waves-light btn-large right" name="accion" value="c" style="width:50%;">Enviar</button>
							</div>

					</form>
				</div>
  			</div>
		</div>
		<div class="parallax-container">
			<div class="nubes">
				<div class="nube1 "><img class="wow fadeInLeft" data-wow-duration="3s" data-wow-delay="0.3s" src="WebFloopets/recursos/images/nube-3.png"></div>
  				<div class="nube2"><img class="wow fadeInRight" data-wow-duration="3s" data-wow-delay="0.4s" src="WebFloopets/recursos/images/nube-1.png"></div>
  				<div class="nube3"><img class="wow fadeInRight" data-wow-duration="3s" data-wow-delay="0.5s" src="WebFloopets/recursos/images/nube-1.png"></div>
  				<div class="nube4"><img class="wow fadeInRight" data-wow-duration="3s" data-wow-delay="0.6s" src="WebFloopets/recursos/images/nube-2.png"></div>
  				<div class="nube5"><img class="wow fadeInLeft" data-wow-duration="3s" data-wow-delay="0.7s" src="WebFloopets/recursos/images/nube-1.png"></div>
  				<div class="nube6"><img class="wow fadeInRight" data-wow-duration="3s" data-wow-delay="0.8s" src="WebFloopets/recursos/images/nube-1.png"></div>
  			</div>
      		<div class="parallax">
      			<img src="WebFloopets/recursos/images/montañas.png">
      		</div>
    	</div>
    	<div class="row seccion3" id="perdidas">
				<div class="container__perdida col s12 m6 l6">
					<div id="perdida">
						<p class="wow fadeInDown">Mascotas Perdidas</p>
					</div>
					<button class="boton btn waves-effect waves-light btn-large wow fadeInDown">Ver mas...</button>
					<img src="WebFloopets/images/7.jpg" class="wow fadeInLeft">
				</div>
				<div class="container__historias col s12 m6 l6">
					<div id="historias">
						<p class="wow fadeInDown">Historias</p>
					</div>
					<button class="boton1 btn  waves-effect waves-light btn-large wow fadeInDown">Ver mas...</button>
					<img src="WebFloopets/images/5.jpg" class="wow fadeInRight">

				</div>
		</div>
<!-- David Pabon-Cuidados -->

	<div class="row" id="cuidados">
		<h2 style="color:#fff; font-family:Roboto Condensed, sans-serif; margin:0 0 50px 0;" class="center">Cuidados</h2>
		<div class="class col s12">

			<div class="col s12 m12 l8">
				<div class="carousel carousel-slider ">


				    <a class="carousel-item" href="#one!"><img src="WebFloopets/images/Cuid1.jpg"></a>
				    <a class="carousel-item" href="#two!"><img src="WebFloopets/images/Cuid2.jpg"></a>
				    <a class="carousel-item" href="#three!"><img src="WebFloopets/images/Cuid3.jpg"></a>
				    <a class="carousel-item" href="#four!"><img src="WebFloopets/images/Cuid4.jpg"></a>

			  </div>
			</div>


			  <div class="col s12 m12 l4" style="margin-top: 40px">
			  	<h4 class="white-text center" style="font-family: 'Roboto Condensed', sans-serif;">Búsqueda Avanzada</h4>

				  <form class="col s12">
				      <div class="row">
				        	<div class="input-field col s12">

							    <select>

							      <option value="1">Perro</option>
							      <option value="2">Gato</option>

							    </select>
							    <label>Elija el Tipo de Mascota</label>
							  </div>
						  </div>
						  <div class="row">
				        <div class="input-field col s12">
				          <select>

							      <option value="1">Raza 1</option>
							      <option value="2">Raza 2</option>

							    </select>
							    <label>Raza</label>
				        </div>
				      </div>
				      <div class="row">
				        <div class="input-field col s12">
				          <select>

							      <option value="1">0-6 Meses</option>
							      <option value="2">6 Meses - 1 Año</option>
							      <option value="2">1 Año - 3 Años</option>

							    </select>
							    <label>Edad</label>
				        </div>

				      </div>

				<button class="boton__form btn waves-effect waves-light btn-large right">Buscar</button>
		    	</form>

				</div>



			 </div>
	</div>

    <!-- David Pabon-Eventos -->
		<?php

		$validar = Gestion_evento::ReadEvento();

		if (count($validar)<3){
			?>
			<!-- <h3 class="center white-text" style="font-family: 'Roboto Condensed', sans-serif;">Eventos</h3>
			<a class="waves-effect btn" href="../Dashboard/View/gestion_evento.php">Ver Eventos</a> -->
			<?php
		}
		else {
		?>
		<div class="row">
			<h3 class="center white-text" style="font-family: 'Roboto Condensed', sans-serif;">Eventos</h3>

	    	<div id="owl-demo">
<?php
foreach ($validar as $row) {
	?>
	<div class="item">
    <div id="info">
      <h4><?php echo $row["eve_nombre"];?></h4>
      <p><?php echo $row["eve_descripcion"];?></p>
      <p>Direccion: <?php echo $row["eve_direccion"]?></p>
      <p>Fecha: <?php echo $row["eve_fecha"]?>, <?php echo $row["eve_hora"]?></p>
      <a href="#" class="waves-effect btn">Ver Mas</a>
    </div>
	<img src="Dashboard/View/img/imagen_evento/<?php echo (str_replace(" ", "",$row["eve_nombre"]));?>/<?php echo $row["eve_imagen"];?>" alt="Owl Image">
	<!-- <img src="WebFloopets/images/evento1.jpg" alt="Owl Image"> -->
		<div class="text-event">
				<h4><?php echo $row["eve_nombre"];?></h4>
				<h6><?php echo $row["eve_fecha"];?></h6>
		</div>


	</div>

	<?php
}
 ?>
			  <!-- <div class="item">
			  <img src="WebFloopets/images/evento1.jpg" alt="Owl Image">
					<div class="text-event">

							<h4>Ensayo</h4>
							<h6>Fecha</h6>

					</div>

			  </div>
			  <div class="item"><img src="WebFloopets/images/evento2.jpg" alt="Owl Image">
			  <div class="text-event">

							<h4>Ensayo</h4>
							<h6>Fecha</h6>


					</div>
			  </div>
			  <div class="item"><img src="WebFloopets/images/evento3.jpg" alt="Owl Image">
			  <div class="text-event">

							<h4>Ensayo</h4>
							<h6>Fecha</h6>

					</div>
			  </div>
			  <div class="item"><img src="WebFloopets/images/evento4.jpg" alt="Owl Image">
			  		<div class="text-event">

							<h4>Ensayo</h4>
							<h6>Fecha</h6>

					</div>
			  </div>
			  </div> -->



	    </div>


    </div>
		<?php
		}
		 ?>



	<!-- eventos -->
	<!-- <div class="" style="margin-top: 57px" id="eventos">
		<h2 style="color:#fff; font-family:Roboto Condensed, sans-serif; margin:0 0 50px 0;" class="center">Eventos</h2>
	    <div class="row">

	      <div class="col s12 m6 l6 seccion_eventos">
	        <img class="img_eventos" src="WebFloopets/images/imagenes_eventos/imagen1.jpeg" alt="">

	      </div>

	      <div class="col s12 m6 l6 seccion_eventos">
	        <img class="img_eventos" src="WebFloopets/images/imagenes_eventos/imagen3.jpg" alt="">
	      </div>

	      <div class="col s12 m6 l6 seccion_eventos">
	        <img class="img_eventos abajo" src="WebFloopets/images/imagenes_eventos/imagen6.jpeg" alt="">
	      </div>

	      <div class="col s12 m6 l6 seccion_eventos">
	        <img class="img_eventos abajo" src="WebFloopets/images/imagenes_eventos/imagen5.jpeg" alt="">
	      </div>

	    </div>
	</div> -->

	<!-- fin eventos -->
	<footer class="page-footer grey darken-4">
      <div class="container">
        <div class="row">
          <div class="col s12 m6 l6">
            <h5 class="white-text center">¿Que es FlooPets?</h5>
            <p class="grey-text text-lighten-4" align="justify">FlooPets es un sistema de información que servirá  para dar apoyo a los procesos de gestión a fundaciones protectoras de animales, específicamente para ayudar a conglomerar más gente, que pueda navegar en los perfiles de estas fundaciones y de esta manera los usuarios puedan entender un poco más a fondo las labores de estos entes y así les sea más fácil contribuir con estas sociedades ya sea por medio de reportes, ayudas monetarias, dando acogida a animales sin hogar temporal o permanentemente, entre otras contribuciones que estos pueden aportar .</p>
          </div>
          <div class="col s12 m3 l3">
          </div>
          <div class="col s12 m3 l3">
            <a href="#"><img class="logo__footer" src="WebFloopets/images/logo-blanco.png"></a>
            <ul>
              <li><a class="grey-text text-lighten-3" href="#!"><i class="fa fa-facebook-square" aria-hidden="true" style="font-size:30px; color:	#3b5998;"></i> Síguenos en Facebook </a></li>
              <li><a class="grey-text text-lighten-3" href="#!"><i class="fa fa-twitter-square" aria-hidden="true" style="font-size:30px; color:	 #00aced;"></i> Twitter</a></li>
              <!-- <li><a class="grey-text text-lighten-3" href="#!">Link 3</a></li> -->
              <!-- <li><a class="grey-text text-lighten-3" href="#!">Link 4</a></li> -->
            </ul>
          </div>
        </div>
      </div>
      <div class="footer-copyright grey darken-2">
        <div class="container">
          <div align="center">SENA © 2016 Centro de Diseño y Manufactura del Cuero | Análisis y Desarrollo de Sistemas de Información</div>
        </div>
      </div>
    </footer>
	</body>



</html>

<?php
	session_start();
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
      	<!-- link del menu -->
      	<script src="WebFloopets/js/efecto_menu.js"></script>
      	<script src="WebFloopets/js/desplegar_ayuda.js"></script>
      	<!--  -->

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
				      autoPlay: 3000, //Set AutoPlay to 3 seconds
				      items : 4,
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
			<i class="fa fa-bars" aria-hidden="true" id="menu" onclick= "desplegar()"></i>


		<div class="contenedor-menu">

			<img id="logo" onclick="ver_menu()" src="WebFloopets/images/logo-negro.png">
			<i class="fa fa-times" aria-hidden="true" id="salir" onclick= "ver_menu()"></i>
			<ul class="menu_floopets">
				<li><a href="#Inicio" class="ancla"><i class="icono izquierda fa fa-paw"></i> Inicio</a></li>
				<li><a href="#Quienessomos" class="ancla"><i class="icono izquierda fa fa-paw"></i> Quienes Somos</a></li>
				<li><a href="#adopciones" class="ancla"><i class="icono izquierda fa fa-paw"></i> Adopciones</a></li>
				<li><a href="#"><i class="icono izquierda fa fa-paw"></i> ¿Quieres ser voluntario?</a></li>
				<li ><a href="#denuncias" class="ancla"><i class="icono izquierda fa fa-paw"></i> Ayuda una Mascota</a>
				</li>

				<li><a href="#eventos" class="ancla"><i class="icono izquierda fa fa-paw"></i> Eventos</a></li>
				<li><a href="#"><i class="icono izquierda fa fa-paw"></i> Donaciones</a></li>
				<li><a href="#"><i class="icono izquierda fa fa-paw"></i> Cuidados</a></li>
			</ul>


		</div>
		<div class="banner-video" id="Inicio">
			<a class="ingresa btn waves-effect waves-light btn-large" href="login.php">Ingresar a Floopets</a>
			<video src="WebFloopets/video/563398388.mp4" autoplay loop></video>
		</div>
		<!-- David Pabón-Quienes Somos? -->

		<div class="row" id="Quienessomos">
			<div class="col s12">
				<div class="col s3" >
					<h3 class="center" style="color:#fff; font-family:Roboto Condensed, sans-serif; margin:0 0 50px 0;">¿Quienes Somos?</h3>
					<p align = "justify" style="color:#fff; font-family:Roboto Condensed, sans-serif; margin:0 0 50px 0; font-size: 18px;" >
						Floopets es un aplicativo web sin ánimo de  lucro , proporciona la
						oportunidad de adoptar una mascota y obtener así una reducción de
						animales desprotegidos en la ciudad,también permite ejecutar una
						denuncia o reporte de maltrato animal.
					</p>
				</div>
				<div class="col s9">
					<h3 class="center" style="color:#fff; font-family:Roboto Condensed, sans-serif; margin:0 0 50px 0;">Equipo de Trabajo</h3>
				</div>
			</div>

		</div>

		<!-- Andrea Guzman-Adopciones -->
		<div class="row seccion1" id="adopciones">
				<div class="container__perros col s12 m6 l6">
					<div id="adoptaperro">
						<p>Adopta un</p>
					</div>
					<button class="boton btn waves-effect waves-light btn-large">Perro</button>

					<img src="WebFloopets/images/1.jpg">
				</div>
				<div class="container__gatos col s12 m6 l6">
					<div id="adoptagato">
						<p>Adopta un</p>
					</div>
					<button class="boton1 btn waves-effect waves-light btn-large">Gato</button>
					<img src="WebFloopets/images/2.jpg">

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
		<h2 style="color:#fff; font-family:Roboto Condensed, sans-serif; margin-top:50px;" class="center" id="denuncias">Denuncias</h2>
		<div class="row seccion2">
			<div class="container__img col s12 m4 l4" >
				<h3 class="center">Ayuda una Mascota</h3>
				<img class="bran" src="WebFloopets/images/ayuda.png">
				<a href=""><img src="WebFloopets/images/1 copia.png" alt="" class="circle responsive-img"></a>
			</div>
			<div class="container__form__help col s12 m8 l8">
			    <div class="row">
				    <form class="col s12">
				    <h3 class="center">Seleccione una opción</h3>
				      <div class="row">
				        <div class="input-field col s12 m6 l6 mascota">
    						<select>
						      <option value="1">Gato</option>
						      <option value="2">Perro</option>
    						</select>
    						<label>Selecciona un tipo de mascota</label>
  						</div>
				        <div class="input-field col s12 m6 l6 mascota">
    						<select>
						      <option value="1">Pérdida</option>
						      <option value="2">Maltrato</option>
    						</select>
    						<label>Selecciona un tipo de denuncia</label>
  						</div>
				      </div>
        			  <div class="input-field col s12 textarea">
          			      <textarea id="textarea1" class="materialize-textarea" length="120"></textarea>
          				  <label for="textarea1">Descripción</label>
        			  </div>
				      <div class="input-field col s12 m6 l6">
				          <input id="last_name" type="text" class="validate">
				          <label for="last_name">Nombre mascota(Opcional)</label>
				      </div>
				      <div class="input-field col s12 m6 l6">
				          <input id="last_name" type="text" class="validate">
				          <label for="last_name">Nombre contacto</label>
				      </div>
				      <div class="input-field col s12 m6 l6">
				          <input id="last_name" type="text" class="validate">
				          <label for="last_name">Correo electrónico</label>
				      </div>
				      <div class="input-field col s12 m6 l6">
				          <input id="last_name" type="text" class="validate">
				          <label for="last_name">Teléfono (Celular)</label>
				      </div>
							<div class="input-field col s12">
								<button class="boton__form btn waves-effect waves-light btn-large right" style="width:50%;">Enviar</button>
							</div>

					</form>
				</div>
  			</div>
		</div>
		<div class="parallax-container">
			<div class="nubes">
				<div class="nube1"><img src="WebFloopets/recursos/images/nube-3.png"></div>
  				<div class="nube2"><img src="WebFloopets/recursos/images/nube-1.png"></div>
  				<div class="nube3"><img src="WebFloopets/recursos/images/nube-1.png"></div>
  				<div class="nube4"><img src="WebFloopets/recursos/images/nube-2.png"></div>
  				<div class="nube5"><img src="WebFloopets/recursos/images/nube-1.png"></div>
  				<div class="nube6"><img src="WebFloopets/recursos/images/nube-1.png"></div>
  			</div>
      		<div class="parallax">
      			<img src="WebFloopets/recursos/images/montañas.png">
      		</div>
    	</div>
    	<div class="row seccion3" id="perdidas">
				<div class="container__perdida col s12 m6 l6">
					<div id="perdida">
						<p>Mascotas Perdidas</p>
					</div>
					<button class="boton btn waves-effect waves-light btn-large">Ver mas...</button>
					<img src="WebFloopets/images/7.jpg">
				</div>
				<div class="container__historias col s12 m6 l6">
					<div id="historias">
						<p>Historias</p>
					</div>
					<button class="boton1 btn  waves-effect waves-light btn-large">Ver mas...</button>
					<img src="WebFloopets/images/5.jpg">

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
    <!-- <div class="row">

	    <h3 class="center white-text" style="font-family: 'Roboto Condensed', sans-serif;">Eventos</h3>
	    	<div id="owl-demo">

			  <div class="item">
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
			  </div>



	    </div> -->


    </div>

	<!-- eventos -->
	<div class="" style="margin-top: 57px" id="eventos">
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
	</div>

	<!-- fin eventos -->
	<footer class="page-footer grey darken-4">
      <div class="container">
        <div class="row">
          <div class="col s12 m6 l6">
            <h5 class="white-text">Quienes Somos</h5>
            <p class="grey-text text-lighten-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          </div>
          <div class="col s12 m3 l3">
            <h5 class="white-text">Links</h5>
            <ul>
              <li><a class="grey-text text-lighten-3" href="#!">Link 1</a></li>
              <li><a class="grey-text text-lighten-3" href="#!">Link 2</a></li>
              <li><a class="grey-text text-lighten-3" href="#!">Link 3</a></li>
              <li><a class="grey-text text-lighten-3" href="#!">Link 4</a></li>
            </ul>
          </div>
          <div class="col s12 m3 l3">
            <a href="logo-footer"><img class="logo__footer" src="WebFloopets/images/logo-blanco.png"></a>
            <ul>
              <li><a class="grey-text text-lighten-3" href="#!">Link 1</a></li>
              <li><a class="grey-text text-lighten-3" href="#!">Link 2</a></li>
              <li><a class="grey-text text-lighten-3" href="#!">Link 3</a></li>
              <li><a class="grey-text text-lighten-3" href="#!">Link 4</a></li>
            </ul>
          </div>
        </div>
      </div>
      <div class="footer-copyright grey darken-2">
        <div class="container">
          SENA © 2016 Centro de Diseño y Manufactura del Cuero | Análisis y Desarrollo de Sistemas de Información
            <!-- <a class="white-text right" href="#!"><i class="fa fa-facebook" aria-hidden="true"></i></a>
            <a class="white-text right" href="#!"><i class="fa fa-twitter" aria-hidden="true"></i></a>
            <a class="white-text right" href="#!"><i class="fa fa-instagram" aria-hidden="true"></i></a>
            <a class="white-text right" href="#!"><i class="fa fa-google-plus" aria-hidden="true"></i></a> -->
        </div>
      </div>
    </footer>

	<!-- script submenu -->
	<script src="WebFloopets/js/desplegar_ayuda.js"></script>
	</body>



</html>

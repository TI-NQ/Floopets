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
		<script type="text/javascript" src="WebFloopets/js/jquery-1.12.1.min.js"></script>
		<script type="text/javascript" src="WebFloopets/materialize/js/materialize.js"></script>
		<script type="text/javascript" src ="WebFloopets/js/owl.carousel.min.js"></script>
		<script type="text/javascript" src="WebFloopets/js/wow.js"></script>
		<script type="text/javascript">
			wow = new WOW({
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
				$('.modal-trigger').leanModal();

				$(".button-collapse").sideNav();

				var menu = document.getElementsByClassName("hamburger-menu");

				[].forEach.call(menu, function(m){
				  m.addEventListener('click', function(){
				    m.classList.toggle('open');
				  });
				});

				$(".drag-target").click(function(){
					$("#hamburger-menu").removeClass("open");
				})
			});
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
			<div class="banner-video" id="Inicio">
				<div class="frase"><img src="WebFloopets/images/fraseindex.png"></div>
				<a class="ingresa btn waves-effect waves-light btn-large wow zoomIn" href="login.php">Ingresar a Floopets</a>
				<video src="WebFloopets/video/563398388.mp4" autoplay loop></video>
			</div>
			<!-- Andrea Guzman-Adopciones -->
			<div class="row seccion1" id="adopciones">
				<div class="container__perros col s12 m6 l6">

					<div id="conteadop">
						<p class="wow fadeInDown">Adopta un</p>
						<a href="adopciones.php?pet=Perro" class="boton btn waves-effect waves-light btn-large wow fadeInDown">Perro</a>
					</div>

					<img src="WebFloopets/images/1.jpg" class="wow fadeInLeft">
				</div>
				<div class="container__gatos col s12 m6 l6">
					<div id="conteadop">
						<p class="wow fadeInDown">Adopta un</p>
						<a href="adopciones.php?pet=Gato" class="boton btn waves-effect waves-light btn-large wow fadeInDown">Gato</a>
					</div>
					<img src="WebFloopets/images/2.jpg" class="wow fadeInRight">
				</div>
			</div>
			<div class="parallax-container azul">
				<div class="parallax">
					<img src="WebFloopets/recursos/images/linea-azul.png">
				</div>
			</div>
			<!-- Andrea Guzman -->
			<!--Contenedor ayuda una mascota Ricardo_ochoa -->
			<div class="row seccion2">

			<h2  class="center wow zoomIn" id="denuncias"><span>AYUDA A UNA MASCOTA Y</span>REPORTA UNA DENUNCIA</h2>
			<div class="conten_p">
				<p>Se ha perdido tu mascota o conoces algún caso de maltrato animal?, realiza una denuncia con nosotros y alguna de las fundaciones inscritas en Floopets podrá atender tu caso.</p>
			</div>
				<form class="col s12" action="Dashboard/Controller/denuncia.controller.php" method="POST" enctype="multipart/form-data">
					<div class="container__img col s12 m4 l4" >
						<h3 class="center wow zoomIn">AGREGA UNA FOTO</h3>
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
							<h3 class="center">COMPLETAR EL FORMULARIO</h3>
							<div class="row">
								<div class="input-field col s12 m6 l6 mascota">
									<select name="td_cod_tipo_denuncia">
										<option>Selecciona una opción</option>
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

					<div id="conteadop">
						<p class="wow fadeInDown">Mascotas Perdidas</p>
						<button class="boton btn waves-effect waves-light btn-large wow fadeInDown">Ver mas...</button>
					</div>


					<img src="WebFloopets/images/7.jpg" class="wow fadeInLeft">
				</div>
				<div class="container__historias col s12 m6 l6">
	      		    <div id="conteadop">
					    <p class="wow fadeInDown">Historias</p>
					<button class="boton1 btn  waves-effect waves-light btn-large wow fadeInDown">Ver mas...</button>
					</div>
					<img src="WebFloopets/images/5.jpg" class="wow fadeInRight">
				</div>
			</div>
			<!-- David Pabon-Eventos -->
			<?php
				$validar = Gestion_evento::ReadEvento();

				if(count($validar) >= 3 ){

				?>
				<div id="eventos" class="row"  >

			<h2  class="center wow zoomIn" id="denuncias"><span>PROXIMOS</span>EVENTOS</h2>
					<div id="owl-demo">
						<?php

							foreach ($validar as $row) {
						?>
						<div class="item">
							<div id="info">
								<h4><?php echo $row["eve_nombre"];?></h4>
								<p><?php echo substr($row["eve_descripcion"],0,250);?>...</p>
								<p>Direccion: <?php echo $row["eve_direccion"]?><br>Fecha: <?php echo $row["eve_fecha"]?>, <?php echo $row["eve_hora"]?></p>

								<a href="#" class="waves-effect btn">Ver Mas</a>
							</div>
							<img src="Dashboard/View/img/imagen_evento/<?php echo $row["eve_carpeta"];?>/<?php echo $row["eve_imagen"];?>" alt="Owl Image">
							<div class="text-event">

							</div>
						</div>
						<?php
							}
						?>
					</div>
				</div>
				<?php
					}
			  ?>
				<!-- David Pabon-Cuidados -->
				<div class="row wow zoomIn" id="voluntarios">
					<h2  class="center wow zoomIn" id="denuncias"><span>¿AMAS A LOS ANIMALES? SE UN</span> VOLUNTARIO</h2>
					<div class="class col s12">
						<div id="info-v">
							<div class="col s12 m12 l7 info" style="padding-top: 20px">
								<div class="container">
									<p>Si te gustan los animales y deseas aportar a mejorar su bienestar, te invitamos a que hagas parte del sistema de voluntarios de las fundaciones amigas de Floopets. </p>
									<p>Sin embargo, antes de realizar la solicitud debes tener en cuenta algunos aspectos: </p>

									<ul>
										<li><i class="icono izquierda fa fa-paw"></i> Ser mayor de edad</li>
										<li><i class="icono izquierda fa fa-paw"></i> Tener tolerancia y respeto hacia los animales.</li>
										<li><i class="icono izquierda fa fa-paw"></i> Tener buena condición fisica.</li>
										<li><i class="icono izquierda fa fa-paw"></i> Tener el carnet de vacunación al día</li>
										<li><i class="icono izquierda fa fa-paw"></i> Tener una pasión y actitud para ayudar a nuestros animales.</li>
									</ul>
									<a class="voluntario btn waves-effect  waves-light btn-large wow zoomIn modal-trigger" href="#formulario_v">¡Quiero ser Voluntario!</a>
								</div>
							</div>
						</div>
						<div class="col s12 m12 l5">
							<img src="WebFloopets/images/voluntariado1.png"  class="circle responsive-img img_von">
						</div>
						<div class="col s12">
							<div id="formulario_v" class="modal modal-fixed-footer">
								<div class="modal-content grey darken-3">
									<?php
										require_once("Dashboard/Model/conexion.php");
										require_once("Dashboard/Model/organizacion.class.php");
										$organizacion = Gestion_organizacion::ReadAll();
									?>
									<h4>Registro voluntarios</h4>
									<form id="form"action="Dashboard/Controller/voluntarios.controller.php" method="POST" enctype="multipart/form-data">
										<div class="row">
											<div class="input-field">
												<div class="col s6 campos">
													<label for="vo_cod_voluntario">Cedula</label>
													<input  type="text" name="vo_cod_voluntario" required>
												</div>
											</div>
											<div class="input-field">
												<div class="col s6 campos">
													<label for="vo_nombre">Nombre</label>
													<input type="text" name="vo_nombre" required>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="input-field">
												<div class="col s6 campos">
													<label for="vo_telefono">Telefono</label>
													<input type="number" name="vo_telefono" required>
												</div>
											</div>
											<div class="input-field">
												<div class="col s6 campos">
													<label for="vo_direccion">Direccion</label>
													<input type="text" name="vo_direccion" required>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="input-field col s12 campos" style="z-index:1;">
												<select name="org_cod_organizacion" >
													<option value="" disabled selected></option>
													<?php
														foreach ($organizacion as $row){
															echo "<option value='".$row["org_cod_organizacion"]."'>".$row["org_nombre"]."</option>";
														}
													?>
												</select>
												<label for="">Fundaciones</label>
											</div>
										</div>
										<div class="row">
											<div class=" form-group file-field input-field col s12">
												<div class="btn">
													<span>Galeria</span>
													<input type="file" multiple name="vo_imagen[]" >
												</div>
												<div class="file-path-wrapper form-group">

													<input class="file-path validate"  type="text" placeholder="Elige una imagen" name="vo_imagen"  >
												</div>
											</div>
										</div>
									</div>
									<div class="modal-footer grey darken-3">
										<button name="accion" value="c" class="modal-action waves-effect waves-green btn">Registrar</button>
									</div>
								</div>
							</div>
						</form>

					</div>
				</div>
			</div>
			<footer class="page-footer grey darken-4" style="margin-top: 0;">
				<div class="container">
					<div class="row">
						<div class="col s12 m3 l3">
 						 <span>CON EL APOYO DE: </span>
						 <img src="WebFloopets/images/sponsor.png" usemap="#Map" />
							<map name="Map" id="Map">
							    <area alt="Servicio Nacional de Aprendizaje SENA"  target="_blank" title="Servicio Nacional de Aprendizaje SENA" href="http://www.sena.edu.co/Paginas/Portada.aspx" shape="poly" coords="19,10,23,108,118,110,123,12" />
							    <area alt="Visualizo la Web Creando Ideas"  target="_blank" title="Visualizo la Web Creando Ideas" href="http://visualizolaweb.com/" shape="poly" coords="163,15,161,109,399,111,395,18" />
							    <area alt="Fundación ORCA" title="Fundación ORCA"  target="_blank"  href="http://www.fundacionorca.org/" shape="poly" coords="444,11,440,110,584,108,574,15" />

							</map>
						</div>
						<div class="col s12 m3 l3">
						</div>
						<div class="col s12 m3 l3">

						</div>
					</div>
				</div>
				<div class="footer-copyright grey darken-2">
					<div class="container">
						<div align="right">Floopets © 2016 |&nbsp; <a href="https://www.facebook.com/floopets/" target="_blank"><i class="fa fa-facebook-official" aria-hidden="true"></i></a> &nbsp; <a href="https://twitter.com/floopets" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a> </div>
					</div>
				</div>
			</footer>
		</body>
</html>

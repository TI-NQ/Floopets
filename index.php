<!DOCTYPE html>
<html lang="es">
	<head>
		<!-- import Waypoints -->

		<script type="text/javascript" src="WebFloopets/imakewebthings-waypoints-0944e15/lib/noframework.waypoints.min.js"></script>
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
      	<script type="text/javascript" src="WebFloopets/js/jquery-1.12.1.min.js">
      	</script>
      	<script type="text/javascript" src="WebFloopets/materialize/js/materialize.js"></script>
      	<script type="text/javascript" src ="WebFloopets/js/owl.carousel.min.js"></script>
      	<!-- link del menu -->
      	<script src="WebFloopets/js/efecto_menu.js"></script>
      	<!--  -->

      	<!-- scripts -->
      	<script type="text/javascript">
      		 $(document).ready(function(){
     			 $('.parallax').parallax();
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
				$('button').waypoint(function() {
				$(this).toggleClass( 'bounceIn animated' );
				},
				{
				offset: '70%',
				triggerOnce: true
				});

			});
      	</script>
	</head>
	<body>
		
		<!-- menu -->
		<!-- <nav > -->
			<img id="menu" onclick= "desplegar()" src="WebFloopets/recursos/images/IconoMenu.png" >
			<img id="logo" onclick="ver_menu()" src="WebFloopets/recursos/images/logotipo.png">
		
		<div class="contenedor_menu">
	<ul id="items">
		<li> <i class="fa fa-paw"></i>¿Quieres ser voluntario?</li>
		<li> <i class="fa fa-paw"></i>Inicio</li>
		<li> <i class="fa fa-paw"></i>Adopciones</li>
		<li><i class="fa fa-paw"></i>Ayuda una mascota</a>

		<ul id="items_ayuda">
			<li><a href="#"> <i class="fa fa-paw"></i>Perdida</a></li>
			<li> <i class="fa fa-paw"></i>Maltrato</li>
		</ul>
		</li>

		<li> <i class="fa fa-paw"></i>Eventos</li>
		<li> <i class="fa fa-paw"></i>Donaciones</li>
		<li> <i class="fa fa-paw"></i>Cuidados</li>
	</ul>
	</div>

	<!-- </nav> -->
		<!--  -->
		
		
		<div class="banner-video">

			
			<button class="ingresa btn waves-effect waves-light btn-large animated bounceIn">Ingresa</button>
			<button class="unete btn waves-effect waves-light btn-large">Unete</button>
			<video src="WebFloopets/video/563398388.mp4" autoplay loop></video>
		</div>
		<!-- Andrea Guzman-Adopciones -->
		<div class="row seccion1">
				<div class="container__perros col s12 m6 l6">
					<div class="">
						<button class="boton btn waves-effect waves-light btn-large">Perros</button>
					</div>				
					<img src="WebFloopets/images/1.jpg">					
				</div>
				<div class="container__gatos col s12 m6 l6">
					<button class="boton1 btn waves-effect waves-light btn-large">Gatos</button>	
					<img src="WebFloopets/images/2.jpg">
					
				</div>
		</div>
		<div class="parallax-container azul">
	      	<div class="parallax">
	      		<img src="WebFloopets/recursos/images/linea-azul.png">
	  		</div>
    	</div>
		<!-- Andrea Guzman -->


		<!-- Contenedor ayuda una mascota
		Ricardo_ochoa -->
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
				      <button class="boton__form btn waves-effect waves-light btn-large right">Enviar</button>
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
    	<div class="row seccion3">
				<div class="container__perros col s12 m6 l6">
					<div class="">
						<button class="boton btn waves-effect waves-light btn-large">Perros</button>
					</div>				
					<img src="WebFloopets/images/beagle,-perro-triste,-muro-236194.jpg">					
				</div>
				<div class="container__gatos col s12 m6 l6">
					<button class="boton1 btn  waves-effect waves-light btn-large">Gatos</button>	
					<img src="WebFloopets/images/ojos-azules.jpg">
					
				</div>
		</div>
<!-- David Pabon-Cuidados -->
<div class="row">

	<div class="class col s12">
		
		<div class="col s12 m12 l8">
			<div class="carousel carousel-slider ">
			
					
			    <a class="carousel-item" href="#one!"><img src="WebFloopets/images/Cuid1.jpg"></a>
			    <a class="carousel-item" href="#two!"><img src="WebFloopets/images/Cuid2.jpg"></a>
			    <a class="carousel-item" href="#three!"><img src="WebFloopets/images/Cuid3.jpg"></a>
			    <a class="carousel-item" href="#four!"><img src="WebFloopets/images/Cuid4.jpg"></a>
			    
		  </div>
		</div>


		  <div class="col s12 m12 l4">
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

			<div class="parallax-container edificios">
	      		<div class="parallax">
	      			<img src="WebFloopets/recursos/images/edificios2.png">
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
    <hr>
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

	<!-- fin eventos -->
	<footer class="page-footer grey darken-4">
      <div class="container">
        <div class="row">
          <div class="col s12 m6 l6">
            <h5 class="white-text">Footer Content</h5>
            <p class="grey-text text-lighten-4">You can use rows and columns here to organize your footer content.</p>
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
           © 2016 Centro de Diseño y Manufactura del Cuero | Análisis y Desarrollo de Sistemas de Información 
            <a class="white-text right" href="#!"><i class="fa fa-facebook" aria-hidden="true"></i></a>
            <a class="white-text right" href="#!"><i class="fa fa-twitter" aria-hidden="true"></i></a>
            <a class="white-text right" href="#!"><i class="fa fa-instagram" aria-hidden="true"></i></a>
            <a class="white-text right" href="#!"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
        </div>
      </div>
    </footer>

	</body>



</html>
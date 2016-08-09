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
		<title>Floopets-Cambiando vidas</title>
		<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale?1.0, minimum-scale=1.0">
		<link rel="stylesheet" type="text/css" href="WebFloopets/css/estilos.css">
	</head>
	<body>
		<div class="banner-video">
			<video src="WebFloopets/video/563398388.mp4" autoplay loop>
			</video>
		</div>
		<!-- Andrea Guzman-Adopciones -->
		<div class="row">

				<div class="container__perros col s12 m6 l6">
					<div class="">
						<span>sfjhsdfh</span>
						<button class="boton btn waves-effect waves-light btn-large">Perros</button>
					</div>				
					<img src="WebFloopets/images/1.jpg">					
				</div>
				<div class="container__gatos col s12 m6 l6">
					<button class="boton1 btn  waves-effect waves-light btn-large">Gatos</button>	
					<img src="WebFloopets/images/2.jpg">
					
				</div>
<!-- 				<img class="nub" src="WebFloopets/recursos/images/linea-azul.png"> -->
		</div>
		<!-- Andrea Guzman -->


		<!-- Contenedor ayuda una mascota
		Ricardo_ochoa -->
		

		<div class="row">
			<div class="container__img col s12 m4 l4" >
			<center><h2>Ayuda una Mascota</h2></center>
			<center><img class="bran" src="WebFloopets/images/ayuda.png"></img></center>
			<a href=""><center><img src="WebFloopets/images/1 copia.png" alt="" class="circle responsive-img"></center></a>
			</div>
			<div class="container__form__help col s12 m8 l8">
			    <div class="row">
				    <form class="col s12">
				    <center><h2>Seleccione una opcion</h2></center>
				      <div class="row">
				        <div class="input-field col s6 mascota">
    						<select>
						      <option value="" disabled selected>Elige una opcion</option>
						      <option value="1">Gato</option>
						      <option value="2">Perro</option>
    						</select>
    						<label>Selecciona un tipo de mascota</label>
  						</div>
				        <div class="input-field col s6 mascota">
    						<select>
						      <option value="" disabled selected>Elige una opcion</option>
						      <option value="1">Perdida</option>
						      <option value="2">Maltrato</option>
    						</select>
    						<label>Selecciona un tipo de denuncia</label>
  						</div>
				      </div>
        			  <div class="input-field col s12 textarea">
          			      <textarea id="textarea1" class="materialize-textarea"></textarea>
          				  <label for="textarea1">Descripcion</label>
        			  </div>
				      <div class="input-field col s6">
				          <input id="last_name" type="text" class="validate">
				          <label for="last_name">Nombre mascota(Opcional)</label>
				      </div>
				      <div class="input-field col s6">
				          <input id="last_name" type="text" class="validate">
				          <label for="last_name">Nombre contacto</label>
				      </div>
				      <div class="input-field col s6">
				          <input id="last_name" type="text" class="validate">
				          <label for="last_name">Correo electronico</label>
				      </div>
				      <div class="input-field col s6">
				          <input id="last_name" type="text" class="validate">
				          <label for="last_name">Telefono(Celular)</label>
				      </div>
				      <a class="waves-effect waves-light btn right">button</a>
				</div>
				</form>
  				</div>
			</div>
			
		</div>
		<div class="parallax-container">
      		<div class="parallax"><img class="mon" src="WebFloopets/recursos/images/montañas.png"></div>
    	</div>		
	</body>
		<!--Import jQuery before materialize.js-->
      	<script type="text/javascript" src="WebFloopets/js/jquery-1.12.1.min.js">
      	</script>
      	<script type="text/javascript" src="WebFloopets/materialize/js/materialize.js"></script>
      	<!-- scripts -->
      	<script type="text/javascript">
      		 $(document).ready(function(){
     			 $('.parallax').parallax();
     			 $('select').material_select();
    		});
      	</script>
</html>
<!DOCTYPE html>
<html lang="es">
	<head>
		<!--Import Google Fonts-->
		<link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300" rel="stylesheet">
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
		<div class="row">
				<div class="container__perros col s12 m6 l6">
					<!--<img src="WebFloopets/images/1.jpg">-->
				</div>
				<div class="container__gatos col s12 m6 l6">
					<!--<img src="WebFloopets/images/5.jpg">-->
				</div>
				<!--<img class="nub" src="WebFloopets/recursos/images/linea-azul.png">-->
		</div>
		<div class="row">
			<div class="container__img col s12 m5 l4" >
				<center><h1>Ayuda una </h1></center>
				<center><h1>mascota</h1></center>
				<center><img class="insert1" src="WebFloopets/recursos/images/ayuda.png"></center>
				<center><img class="insert" src="WebFloopets/recursos/images/insert-image.png"></center>
			</div>
			<div class="container__form__help col s12 m7 l8">
			    <center><h1>Seleccione una opcion</h1></center>
			</div>
		</div>
		<div class="parallax-container">
      		<div class="parallax">
      			<img src="WebFloopets/recursos/images/montañas.png">
      		</div>
    	</div>
    	<div class="row">
				<div class="container col s12 m6 l6">
					<!--<img src="WebFloopets/images/1.jpg">-->
				</div>
				<div class="container col s12 m6 l6">
					<!--<img src="WebFloopets/images/5.jpg">-->
				</div>
				<!--<img class="nub" src="WebFloopets/recursos/images/linea-azul.png">-->
		</div>

	</body>
		<!--Import jQuery before materialize.js-->
      	<script type="text/javascript" src="WebFloopets/js/jquery-1.12.3.js">
      	</script>
      	<script type="text/javascript" src="WebFloopets/materialize/js/materialize.js"></script>
      	<script type="text/javascript">
      		$(document).ready(function(){
      			$('.parallax').parallax()
      			$('.slider').slider();
    		});
      	</script>
</html>
<?php
session_start();
date_default_timezone_set("America/Bogota");
//Validacion inicio de session
if(!isset($_SESSION["usu_email"])){
    $msn = base64_encode("Debe iniciar sesion primero!");
		$tm=base64_encode("Advertencia");

    header("Location: ../../index.php?ms=".$msn."tm=".$tm);
	};
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<!--- links --->
		<link rel="shortcut icon" type="image/x-icon" href="../../WebFloopets/images/title-web.ico">
		<link rel="stylesheet" href="../../WebFloopets/font-awesome-4.6.3/css/font-awesome.css">
		<link rel="stylesheet" href="recursos/css/estilos.css">
		<link rel="stylesheet" type="text/css" href="recursos/css/jquery.dataTables.css">
	  <link type="text/css" rel="stylesheet" href="../../WebFloopets/materialize/css/materialize.css">
	  <link rel="stylesheet" type="text/css" href="../../WebFloopets/sweetalert/dist/sweetalert.css">

		<title>Floopets-Cambiando vidas</title>

		<!-- scripts -->
    <script type="text/javascript" src="../../WebFloopets/js/jquery-1.12.1.min.js"></script>
	  <script type="text/javascript" charset="utf8" src="../../WebFloopets/js/jquery.dataTables.min.js"></script>
	  <script type="text/javascript" src="../../WebFloopets/materialize/js/materialize.min.js"></script>
	  <script type="text/javascript" src="../../WebFloopets/sweetalert/dist/sweetalert.min.js"></script>
	  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	  <script>
	    $(document).ready( function () {
	  		$('#datatable').DataTable(
	  		{
	      	"language":
	      	{
	        	"url": "https://cdn.datatables.net/plug-ins/1.10.11/i18n/Spanish.json"
	      	},
	      	"iDisplayLength": 3
	    	})
			$(".dropdown-button").dropdown();
	      	$('.modal-trigger').leanModal();
	      	$('select').material_select();
	      	$('.tooltipped').tooltip({delay: 50});
	      	$('.carousel.carousel-slider').carousel({full_width: true});
	      	$('.datepicker').pickadate(
	      	{
		      selectMonths: true,
		      selectYears: 1,
		      min: new Date("<?php date_default_timezone_set("America/Bogota"); echo date('Y-n-j') ?>")
	    	});

	  //     <?php
	  //     if(isset($_GET["m"],$_GET["tm"])){
	  //       echo 'swal({title: "STYLE +", text: "'.base64_decode($_GET["m"]).'", type: "'.base64_decode($_GET["tm"]).'"})';
	  //     }
	  //     ?>

	  	});
		</script>
	<!-- 	<script type="text/javascript">
		        <?php
		      if(isset($_GET["m"])){
		        echo "alert( '".$_GET["m"]."');";
		      }
		    ?>

		</script> -->
	</head>
	<body>
		<a  id="ajustes" href="../Model/cerrar.php">Cerrar Sesion<i class="fa fa-power-off" aria-hidden="true" style="margin-left: 10px; font-size: 25px; position: relative;"></i></a>
		<div class="container-fluid">
			<div class="row">
				<div class="col s12 grey lighten-1" id="menu_up">
				<div class="row">
					<div class="col s2" id="menu_icono">
						<a href="dashboard.php"><img src="../../WebFloopets/images/logo-negro.png"></a><p>FLOOPETS</p>
						<!-- <img src="../../WebFloopets/images/logo1.png"><p>FLOOPETS</p> -->
						<?php include_once("componentes/comp.men.php"); ?>
					</div>
					<div class="col s10 formularios">
						<?php include_once("componentes/comp_page.php");?>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>

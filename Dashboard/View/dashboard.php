<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="shortcut icon" type="image/x-icon" href="../../WebFloopets/images/title-web.ico">
	<link rel="stylesheet" href="../../WebFloopets/font-awesome-4.6.3/css/font-awesome.css">
	<link rel="stylesheet" href="recursos/css/estilos.css">
	<link rel="stylesheet" type="text/css" href="recursos/css/jquery.dataTables.css">
  <link type="text/css" rel="stylesheet" href="../../WebFloopets/materialize/css/materialize.css">
  <link rel="stylesheet" type="text/css" href="recursos/plugins/sweetalert/dist/sweetalert.css">
	<title>Floopets-Cambiando vidas</title>



    <script type="text/javascript" src="../../WebFloopets/js/jquery-1.12.1.min.js"></script>
    <script type="text/javascript" charset="utf8" src="recursos/plugins/datatable/jquery.dataTables.min.js"></script>



    <script type="text/javascript" src="../../WebFloopets/materialize/js/materialize.min.js">
    </script>
    <script type="text/javascript" src="recursos/plugins/sweetalert/dist/sweetalert.min.js"></script>

     <script>
    $(document).ready( function () {
          $('#datatable').DataTable({
               "language": {
               "url": "https://cdn.datatables.net/plug-ins/1.10.11/i18n/Spanish.json"

             },
             "iDisplayLength": 3
    })
		$(".dropdown-button").dropdown();
          $('.modal-trigger').leanModal();
      $('select').material_select();
      $('.tooltipped').tooltip({delay: 50});
      $('.carousel.carousel-slider').carousel({full_width: true});


      $('.datepicker').pickadate({
      selectMonths: true,
      selectYears: 1,
      min: new Date("<?php echo date('Y-n-j') ?>"),
    });

      <?php

      if(isset($_GET["m"],$_GET["tm"])){
        echo 'swal({title: "STYLE +", text: "'.base64_decode($_GET["m"]).'", type: "'.base64_decode($_GET["tm"]).'"})';
      }
      ?>

});
    </script>

</head>
<body>
<div class="container-fluid">
	<div class="row">
			<div class="col l2" id="menu_icono">
				<img src="../../WebFloopets/images/logo-negro.png"><p>FLOOPETS</p>
				<!-- <img src="../../WebFloopets/images/logo1.png"><p>FLOOPETS</p> -->
					<?php include_once("componentes/comp_menu.php"); ?>
			</div>
			<div class="col l12 grey lighten-1" id="menu_up">
					<a  id="ajustes" href="cerrarsesion.php">Cerrar Sesion<i class="fa fa-power-off" aria-hidden="true" style="margin-left: 10px; font-size: 25px; position: relative;"></i></a>
			</div>
				<div class="col l10 center">
							<?php include_once("componentes/comp_page.php");?>
			</div>
	</div>
</div>

</body>




</html>

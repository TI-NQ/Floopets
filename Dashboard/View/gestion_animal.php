<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<script type="text/javascript" src="../../WebFloopets/js/jquery-1.12.1.min.js"></script>
<script type="text/javascript" src="../../WebFloopets/js/jquery.paginate.js"></script>
<script type="text/javascript">
	$(document).ready(function(){
		$(#paginacion).paginate();

		$(function () {              
          $("#demo5").paginate({  
              count: 10,  
              start: 1,  
              display: 7,  
              border: true,  
              border_color: '#fff',  
              text_color: '#fff',  
              background_color: 'black',  
              border_hover_color: '#ccc',  
              text_hover_color: '#000',  
              background_hover_color: '#fff',  
              images: false,  
              mouse: 'press',  
              onChange: function (page) {  
                  $('._current', '#paginacion').removeClass('_current').hide();  
                  $('#p' + page).addClass('_current').show();  
              }  
          });  
      }); 
- See more at: http://www.developerji.com/Post/jPaginate-Plugin-para-paginar-con-jQuery/1028#sthash.x7Mo8z8J.dpuf
	})
</script>

  <a href="dashboard.php?p=<?php echo base64_encode('nueva_mascota')?>" class="waves-effect btn animated zoomIn">Nuevo</a>


<?php
    require_once("../Model/conexion.php");
    require_once("../Model/animal.class.php");
    $animal=Gestion_animal::Nombres();
   //  $animal=Gestion_animal::paginacion();

   // $num_total_reg = count($resultado);

   // $tamano_pagina = 2;

   // $pagina = $_GET["gestion_animal"];
   // if (!$pagina) {
   // 	$inicio = 0;
   // 	$pagina = 1;
   // }else{
   //  $inicio = ($pagina - 1) * $tamano_pagina;

   // }

   // $total_paginas = ceil($num_total_reg / $tamano_pagina);
 ?>


<div class="row">
<div class="col l11 offset-l1 animated zoomIn">
<?php
	@$mensaje = $_REQUEST["m"];
	echo @$mensaje;

foreach ($animal as $row) {
		echo"<div class='col l6 descrip demo' id='paginacion'>
                	<div class='row pagedemo'>
	                  	<div class='col l6 col m6'>
	                  		<div class='col l7'>
		                        <span><b>Mascota:</b></span>
		                        <li>".$row["ani_nombre"]."</li>
	                      	</div>
	                  		<div class='imagenmascota col l12'>
		                          <img class=' responsive-img' style='width:200px ;height:200px ;' src='img/imagen_animal/".$row["ani_nombre"]."/".$row["ani_imagen"]."'>
		                     	</div>
	                   		<div class='col l6'>

	                        	<a class='btn-floating waves-effect' href='../View/dashboard.php?p=".base64_encode('actualizar_animal')."&an=".base64_encode($row['ani_cod_animal'])."'>

	                          <i class='small material-icons'>mode_edit</i>
	                          </a>

	                      	</div>
	                      	<div class='col l6'>

	                          <a class='btn-floating waves-effect waves-light red' href='../Controller/animal.controller.php?an=".base64_encode($row["ani_cod_animal"])."&accion=d'>
	                          <i class='small material-icons'>delete</i>
	                          </a>

	                      	</div>
	                     </div>
						<div class='col l6'>
		                 	<ul class='descrip'>
		                   	<label>Codigo</label>
		                     	  <li>".$row["ani_cod_animal"]."</li>
		                   	<label>raza</label>
		                     	    <li>".$row["ra_nombre"]."</li>
		                   	<label>organizacion</label>
		                     	    <li>".$row["org_nombre"]."</li>
		                	<label>Nombre</label>
		                     	    <li>".$row["ani_nombre"]."</li>
		                     <label>Esterilizacion</label>
		                     	    <li>".$row["ani_esterilizado"]."</li>
		                     <label>Edad</label>
		                     	    <li>".$row["ani_edad"]."</li>
		                     <label>Descripcion</label>
		                     	    <li>".$row["ani_descripcion"]."</li>
		                     <label>N° Microchip</label>
		                     	    <li>".$row["ani_numero_microchip"]."</li>
		                     <label>sexo</label>
		                     	    <li>".$row["ani_sexo"]."</li>
		                 	</ul>

		             	</div>
		           </div>
		        </div>
		        <div id='demo5'>  
              </div>  
		    </div>


        ";


	}
?>
</div>
</div>

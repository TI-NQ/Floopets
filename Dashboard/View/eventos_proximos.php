<?php
  require_once ("../Model/conexion.php");
  require_once ("../Model/evento.class.php");

  $eventos_proximos=Gestion_evento::eventos_proximos();

  // print_r($eventos_proximos);

 ?>
<div class="row">
<div class="col l11 offset-l1">
<?php


	foreach ($eventos_proximos as $row) {
				echo"<div class='col l6 descrip'>
	                	<div class='row'>
	                  	  <div class='col l6 col m6'>
	                  	    <div class='col l7'>
		                        <span><b>Evento:</b></span>
		                        <li>".$row["eve_nombre"]."</li>
	                      	</div>
	                  		<div class='imagenmascota col l12'>

	                          <img class=' responsive-img' style='width:250px ;height:250px ;' src='img/imagen_evento/".$row["eve_carpeta"]."/".$row["eve_imagen"]."'>

	                     	</div>
	                   		<div class='col l6'>
	                   			<a class='btn-floating waves-effect' href='../View/dashboard.php?p=".base64_encode('actualizar_evento')."&eve=".base64_encode($row['eve_cod_evento'])."'>

	                          <i class='small material-icons'>mode_edit</i>
	                          </a>
	                      	</div>
	                      	<div class='col l6'>
													";?>
														<a href='#' id='btntrash' onclick="borrar('<?php echo $row["eve_cod_evento"];?>')" class='btn-floating waves-light red waves-effect'>
	                          <i class='small material-icons'>delete</i>
	                          </a>
														<?php echo"
	                      	</div>
	                     </div>
							<div class='col l6'>
			                 	<ul class='descrip'>
			                   	<label>Codigo</label>
			                     	  <li>".$row["eve_cod_evento"]."</li>
			                   	<label>Tipo de evento</label>
			                     	  <li>".$row["te_cod_tipo_evento"]."</li>
			                   	<label>Dirección</label>
			                     	    <li>".$row["eve_direccion"]."</li>
			                  	 <label>Fecha</label>
			                     	    <li>".$row["eve_fecha"]."</li>
																<label>Hasta</label>
			                     	    <li>".$row["eve_fecha_hasta"]."</li>
			                     <label>Hora</label>
			                     	    <li>".$row["eve_hora"]."</li>
																<label>Hasta</label>
			                     	    <li>".$row["eve_hora_hasta"]."</li>
			                     <label>Descripcion</label>
			                     	    <li>".$row["eve_descripcion"]."</li>
			                     <label>Estado</label>
			                     	    <li>".$row["eve_estado"]."</li>
			                 	</ul>

			             	</div>

			        </div>
		    </div>


        ";

	}
?>
</div>
</div>



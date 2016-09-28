<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

<?php

require_once("../Model/conexion.php");
require_once("../Model/evento.class.php");
$evento=Gestion_evento::Nombres();

@$mensaje = $_REQUEST["m"];

	echo @$mensaje;
 ?>



<div class="row">
<div class="col l11 offset-l1">
<?php


	foreach ($evento as $row) {
				echo"<div class='col l6 descrip'>
	                	<div class='row'>
	                  	  <div class='col l6 col m6'>
	                  	    <div class='col l7'>
		                        <span><b>Evento:</b></span>
		                        <li>".$row["eve_nombre"]."</li>
	                      	</div>
	                  		<div class='imagenmascota col l12'>
<<<<<<< HEAD
	                          <img class=' responsive-img' style='width:250px ;height:250px ;' src='img/imagen_evento/".$row["eve_carpeta"]."/".$row["eve_imagen"]."'>
=======
	                          <img class=' responsive-img' style='width:250px ;height:250px ;' src='img/imagen_evento/".str_replace (" ","",$row["eve_nombre"])."/".$row["eve_imagen"]."'>
>>>>>>> origin/master
	                     	</div>
	                   		<div class='col l6'>
	                   			<a class='btn-floating waves-effect' href='../View/dashboard.php?p=".base64_encode('actualizar_evento')."&eve=".base64_encode($row['eve_cod_evento'])."'>

	                          <i class='small material-icons'>mode_edit</i>
	                          </a>
	                      	</div>
	                      	<div class='col l6'>
	                          <a class='btn-floating waves-effect waves-light red' href='../Controller/evento.controller.php?eve=".base64_encode($row["eve_cod_evento"])."&accion=d'>
	                          <i class='small material-icons'>delete</i>
	                          </a>
	                      	</div>
	                     </div>
							<div class='col l6'>
			                 	<ul class='descrip'>
			                   	<label>Codigo</label>
			                     	  <li>".$row["eve_cod_evento"]."</li>
			                   	<label>Tipo de evento</label>
			                     	  <li>".$row["te_nombre"]."</li>
			                   	<label>Nombre</label>
			                     	    <li>".$row["eve_nombre"]."</li>
			                   	<label>Dirección</label>
			                     	    <li>".$row["eve_direccion"]."</li>
			                  	 <label>Fecha</label>
			                     	    <li>".$row["eve_fecha"]."</li>
			                     	    <li>".$row["eve_fecha_hasta"]."</li>
			                     <label>Hora</label>
			                     	    <li>".$row["eve_hora"]."</li>
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
</div>

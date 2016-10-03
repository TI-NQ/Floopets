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
	                  		<div class='imagenmascota col l12'>";?>
                          <?php
                          if ($row["eve_imagen"]=="") {
                          echo "<img class=' responsive-img' style='width:250px ;height:250px ;' src='../../WebFloopets/images/base.jpg'>";
                          }
                          else {
                          echo  " <img class=' responsive-img' style='width:250px ;height:250px ;' src='img/imagen_evento/".$row["eve_carpeta"]."/".$row["eve_imagen"]."'>"; 
                          }

                           ?>
                           <?php echo"


	                     	</div>
	                   		<div class='col l6'>

	                      	</div>
	                      	<div class='col l6'>

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

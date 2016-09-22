<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

<?php

require_once("../Model/conexion.php");
require_once("../Model/evento.class.php");
$evento=Gestion_evento::ReadAll();
 ?>

<?php
	@$mensaje = $_REQUEST["m"];

	echo @$mensaje;

	foreach ($evento as $row) {
				echo"<div class='container descrip'>
                <div class='row'>
                  <div class='col l6 offset-l2 col m6'>
                   <div class='col l6'>
                        
                          <a href='../View/actualizar_evento.php?eve=".base64_encode($row["eve_cod_evento"])."'>
                          <i class='small material-icons'>mode_edit</i>
                          </a>
                        
                      </div>
                      <div class='col l6'>
                        
                          <a href='../Controller/evento.controller.php?eve=".base64_encode($row["eve_cod_evento"])."&accion=d'>
                          <i class='small material-icons'>delete</i>
                          </a>                        
                        
                      </div>
						<div class='col l6'>
		                 	<ul class='descrip'>
		                   	<label>Codigo</label>
		                     	  <li>".$row["eve_cod_evento"]."</li>
		                   	<label>Tipo de evento</label>
		                     	  <li>".$row["te_cod_tipo_evento"]."</li>
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
		    </div>      	

		
        "; 

	}		
?>
		</tbody>
	</thead>
</table>

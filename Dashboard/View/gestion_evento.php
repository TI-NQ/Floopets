<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

<?php

require_once("../Model/conexion.php");
require_once("../Model/evento.class.php");
$evento=Gestion_evento::ReadAll();
 ?>

<!-- <table>
	<thead>
		<tr>
			<td>Codigo vento</td>
			<td>Codigo tipo evento</td>
			<td>Nombre</td>
			<td>Dirección</td>
			<td>Fecha</td>
			<td>Hora</td>
			<td>Descripcion</td>

		</tr>
		<tbody> -->
<?php
	@$mensaje = $_REQUEST["m"];

	echo @$mensaje;

	foreach ($evento as $row) {
				echo"<div class='container descrip'>
                <div class='row'>
                  <div class='col l4 offset-l2 col m6'>
                   <div class='col l6'>
                        
                          <a href='../View/actualizar_evento.php?ui=".base64_encode($row["eve_cod_evento"])."'>
                          <i class='small material-icons'>mode_edit</i>
                          </a>
                        
                      </div>
                      <div class='col l6'>
                        
                          <a href='../Controller/evento.controller.php?ui=".base64_encode($row["eve_cod_evento"])."&accion=d'>
                          <i class='small material-icons'>delete</i>
                          </a>                        
                        
                      </div>
						<div class='col l4'>
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
		                     <label>Hora</label>
		                     	    <li>".$row["eve_hora"]."</li>
		                     <label>Descripcion</label>
		                     	    <li>".$row["eve_descripcion"]."</li>                      
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

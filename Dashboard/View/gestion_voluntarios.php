<button type="button" name="button">
  <a href="registrar_voluntarios.php">Nuevo</a>
</button>
<?php

require_once("../Model/conexion.php");
require_once("../Model/voluntarios.class.php");
$voluntarios=gestion_voluntarios::ReadAll();
 ?>

<div class="container">
<div class="row">
<table id="datatable" class="display highlight centered responsive-table bordered">
	<thead>
		<tr>
			<td>Cedula</td>
			<td>Nombre</td>
      <td>Telefono</td>
      <td>Direccion</td>
      <td>Foto</td>
      <td>Contraseña</td>
		</tr>
	</thead>

		<tbody>
<?php
			@$mensaje = $_REQUEST["m"];

			echo @$mensaje;

			foreach ($voluntarios as $row) {
				echo"
					<div class='container descrip'>
                	<div class='row'>
                  	<div class='col l4 offset-l2 col m6'>
                   	<div class='col l6'>
                        
                          <a href='../View/actualizar_voluntarios.php?vo=".base64_encode($row["vo_cod_voluntario"])."'>
                          <i class='small material-icons'>mode_edit</i>
                          </a>
                        
                      </div>
                      <div class='col l6'>
                        
                          <a href='../Controller/voluntarios.controller.php?vo=".base64_encode($row["vo_cod_voluntario"])."&accion=d'>
                          <i class='small material-icons'>delete</i>
                          </a>                        
                        
                      </div>
						<div class='col l4'>
		                 	<ul class='descrip'>
		                   	<label>Codigo</label>
		                     	  <li>".$row["vo_cod_voluntario"]."</li>
		                   	<label>Tipo de evento</label>
		                     	  <li>".$row["vo_nombre"]."</li>
		                   	<label>Nombre</label>
		                     	    <li>".$row["vo_telefono"]."</li>
		                   	<label>Dirección</label>
		                     	    <li>".$row["vo_direccion"]."</li>
		                  	 <label>Fecha</label>
		                     	    <li>".$row["vo_imagen"]."</li>		                                          
		                 	</ul>
		                    
		             	</div>
		           </div>
		        </div>
		    </div>      	

		
        "; 

			
	}

?>
		</tbody>
	
</table>
</div>
</div>
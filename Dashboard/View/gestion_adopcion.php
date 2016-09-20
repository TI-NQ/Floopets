<?php

require_once("../Model/conexion.php");
require_once("../Model/adopcion.class.php");
$adopcion=Gestion_adopcion::ReadAll();
 ?>

<button type="button" name="button">
   <a href="registrar_adopcion.php" class="waves-light btn">Nuevo</a>
  </button>
<!-- <table>
	<thead>
		<tr>
			<td>codigo </td>
			<td>fecha</td>
			<td>hora</td>
			<td>codigo animal</td>
			<td>codigo usuario</td>
      		<td>acciones</td>
		</tr>
		<tbody> -->
<?php
@$mensaje = $_REQUEST["m"];

echo @$mensaje;

	foreach ($adopcion as $row) {
		echo"<div class='container descrip'>
                <div class='row'>
                  <div class='col l4 offset-l2 col m6'>
                   <div class='col l6'>
                        
                          <a href='../View/actualizar_adopcion.php?dn=".base64_encode($row["ado_cod_adopcion"])."'>
                          <i class='small material-icons'>mode_edit</i>
                          </a>
                        
                      </div>
                      <div class='col l6'>
                        
                          <a href='../Controller/adopcion.controller.php?dn=".base64_encode($row["ado_cod_adopcion"])."&accion=d'>
                          <i class='small material-icons'>delete</i>
                          </a>                        
                        
                      </div>
						<div class='col l4'>
		                 	<ul class='descrip'>
		                   	<label>Codigo</label>
		                     	  <li>".$row["ado_cod_adopcion"]."</li>
		                   	<label>Fecha</label>
		                     	  <li>".$row["ado_fecha"]."</li>
		                   	<label>hora</label>
		                     	    <li>".$row["ado_hora"]."</li>
		                   	<label>Codigo animal</label>
		                     	    <li>".$row["ani_cod_animal"]."</li>
		                  	 <label>Codigo usuario</label>
		                     	    <li>".$row["usu_cod_usuario"]."</li>                    
		                 	</ul>
		                    
		             	</div>
		           </div>
		        </div>
		    </div>      	

		
        ";            

					
	}

?>
	
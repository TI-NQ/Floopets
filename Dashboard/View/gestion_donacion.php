<?php

require_once("../Model/conexion.php");
require_once("../Model/donacion.php");
$donacion=Gestion_donacion::ReadAll();
 ?>


<?php
@$mensaje = $_REQUEST["m"];

echo @$mensaje;

foreach ($donacion as $row) {
	echo"<div class='container descrip'>
             <div class='row'>
               <div class='col l4 offset-l2 col m6'>
                <div class='col l6'>
                        
                       <a href='../View/actualizar_donacion.php?do=".base64_encode($row["don_cod_donacion"])."'>
                       <i class='small material-icons'>mode_edit</i>
                       </a>
                        
                   </div>
                   <div class='col l6'>
                        
                       <a href='../Controller/donacion.controller.php?do=".base64_encode($row["don_cod_donacion"])."&accion=d'>
                       <i class='small material-icons'>delete</i>
                       </a>                        
                        
                   </div>
			<div class='col l4'>
		               <ul class='descrip'>
		                 <label>Codigo</label>
		                     <li>".$row["don_cod_donacion"]."</li>
		                 <label>descripcion</label>
		                     <li>".$row["don_descripcion"]."</li>
		                 <label>fecha</label>
		                     <li>".$row["don_fecha"]."</li>		                   	                     
		               </ul>
		                    
		           </div>
		        </div>
		     </div>
		  </div>      	

		
        "; 
				
	}
 ?>
			
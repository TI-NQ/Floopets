<?php

require_once("../Model/conexion.php");
require_once("../Model/donacion.php");
$donacion=Gestion_donacion::ReadAll();
 ?>
 <script type="text/javascript">
 function borrar(cod){
   var codigo = cod;
   var accion = "d";
   sweetAlert({
          title: 'Mensaje de FLOOPETS',
          text: 'Esta seguro que desea eliminar?',
          type: 'warning',
          showCancelButton: true,
          confirmButtonColor: '#4db6ac',
          confirmButtonText: 'Aceptar',
          cancelButtonText: 'Cancelar',
          closeOnConfirm: true,
          closeOnCancel: true,
          },
       function(isConfirm){
         if (isConfirm) {
            document.location.href = "../Controller/donacion.controller.php?do="+codigo+"&accion="+accion;
         }
    });
 }
 </script>


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
                   <div class='imagenmascota col l12'>
                       <div style='width:180px ;height:180px ;'>
                       <img class='circle responsive-img' style='width:180px ;height:180px ;' src='img/imagen_donacion/".$row["don_nombre"]."/".$row["don_imagen"]."'>
                       </div>
                   </div>
                   <div class='col l6'>
                        ";
                        ?>
                        <a href='#' id='btntrash' onclick="borrar('<?php echo $row["don_cod_donacion"];?>')" class='btn-floating waves-light red waves-effect'>
                        <?php echo"

                        <i class='small material-icons'>delete</i>
                          </a>

                   </div>
			<div class='col l4'>
		               <ul class='descrip'>
                   <label>Donacion</label>
                      <li>".$row["don_nombre"]."</li>
		                 <label>Codigo</label>
		                     <li>".$row["don_cod_donacion"]."</li>
                      <label>Tipo donacion</label>
                          <li>".$row["don_cod_tipo_donacion"]."</li>
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

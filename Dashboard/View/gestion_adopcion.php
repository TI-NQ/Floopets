<?php

require_once("../Model/conexion.php");
require_once("../Model/adopcion.class.php");
$adopcion=Gestion_adopcion::ReadAll();
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
            document.location.href = "../Controller/adopcion.controller.php?ad="+codigo+"&accion="+accion;
         }
    });
 }


 </script>


<?php
@$mensaje = $_REQUEST["m"];

echo @$mensaje;

	foreach ($adopcion as $row) {
		echo"<div class='container descrip'>
                <div class='row'>
                  <div class='col l4 offset-l2 col m6'>

                   <div class='col l6'>

                          <a href='../View/actualizar_adopcion.php?ad=".base64_encode($row["ado_cod_adopcion"])."'>
                          <i class='small material-icons'>mode_edit</i>
                          </a>

                      </div>
                      <div class='col l6'>
                      ";
                      ?>
                          <a href='#' id='btntrash' onclick="borrar('<?php echo $row["ado_cod_adopcion"];?>')">
                      <?php
                      echo"
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

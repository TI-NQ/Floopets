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
 <!-- esto va en el div de la imagen
  -->
  <div class="row">
<div class="col l11 offset-l1">
<?php
@$mensaje = $_REQUEST["m"];
echo @$mensaje;
	foreach ($adopcion as $row) {
    echo"<div class='col l6 descrip'>
            <div class='row'>
              <div class='col l6 col m6'>
                  <div class='col l7'>
                  <label>Codigo</label>
                    <span>".$row["ado_cod_adopcion"]."</span>
                  </div>
                  <div class='imagenmascota col l12'>
                      <div style='width:180px ;height:180px ;'>
                      <img class='circle responsive-img' style='width:180px ;height:180px ;' src='img/imagen_adopcion/".$row["usu_cod_usuario"]."/".$row["ado_imagen"]."'>
                      </div>
                  </div>
                  <div class='col l6'>
                         <a class='btn-floating waves-effect' href='../View/dashboard.php?p=".base64_encode("actualizar_adopcion")."&ad=".base64_encode($row["ado_cod_adopcion"])."'>
                         <i class='small material-icons'>edit</i>
                      </a>
                  </div>


                  <div class='col l6'>
                  ";
                  ?>
                  <!-- se reemplaza el href por el onclick que carga el delete -->
                  <a href='#' id='btntrash' onclick="borrar('<?php echo $row["ado_cod_adopcion"];?>')" class='btn-floating waves-light red waves-effect' >
                <?php
                echo "<i class='small material-icons'>delete</i>
                  </a>
                  </div>
              </div>
              <div class='col l6'>
                <ul class='descrip'>

                  <span>Fecha :</span>
                      <li>".$row["ado_fecha"]."</li>
                  <span>Codigo animal :</span>
                        <li>".$row["ani_cod_animal"]."</li>
                  <span>Codigo usuario :</span>
                        <li>".$row["usu_cod_usuario"]."</li>

                </ul>
              </div>
            </div>
          </div>

      ";



	}

?>
</div>
</div>

<!-- <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"> -->

<?php

require_once("../Model/conexion.php");
require_once("../Model/cuidado.class.php");
$cuidado=Gestion_cuidado::ReadAll();
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
            document.location.href = "../Controller/cuidado.controller.php?cu="+codigo+"&accion="+accion;
         }
    });
 }
 </script>

<div class="container">
<div class="row">


			<?php


			foreach ($cuidado as $row) {

          $nombre_cuidado = strtolower(str_replace('ñ', 'n', $row["cu_nombre"]));
         $nombre_cuidado = strtolower(str_replace(' ', '', $nombre_cuidado));
				echo"
        <div class='col l6 descrip'>
                <div class='row'>
                  <div class='col l6 col m6'>
                      <div class='col l7'>
                      <label>Nombre cuidado </label>
                        <span>".$row["cu_nombre"]."</span>
                      </div>
                      <div class='imagenmascota col l12'>
                      <div>";
                      if ($nombre_cuidado=="") {
                        echo "<img class='responsive-img' style='width:200px ;height:200px ;border-radius:10px;' src='../../WebFloopets/images/base.jpg'>";
                      }else {
                        echo "<img class='responsive-img' style='width:200px ;height:200px ;border-radius:10px;' src='img/imagen_cuidado/".$nombre_cuidado."/".$row["galeria"]."'>";
                      }
echo "</div>
</div>
                      <div class='col l6'>
                             <a class='btn-floating waves-effect' href='../View/dashboard.php?p=".base64_encode("actualizar_cuidado")."&cui=".base64_encode($row["cu_cod_cuidado"])."'>
                             <i class='small material-icons'>edit</i>
                          </a>
                      </div>



                      <div class='col l6'>
                      ";
                      ?>
                      <!-- se reemplaza el href por el onclick que carga el delete -->
                      <a href='#' id='btntrash' onclick="borrar('<?php echo $row["cu_cod_cuidado"];?>')" class='btn-floating waves-light red waves-effect' >
                      <i class='small material-icons'>delete</i></a>
                    <?php
                    echo "
                      
                      </div>
                  </div>
                  <div class='col l4'>
                    <ul class='descrip'>
                      <span>Codigo :</span>
                      <li>".$row["cu_cod_cuidado"]."</li>                      
                      <span>Descripcion:</span>
                            <li>".$row["cu_descripcion"]."</li>
  



                    </ul>
                  </div>
                </div>
              </div>

          ";
			}

?>

</div>
</div>

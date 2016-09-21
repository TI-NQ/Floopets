<?php

  require_once("../Model/conexion.php");
  require_once("../Model/denuncia.class.php");
  $denuncia = Gestion_denuncia::ReadAll();

?>
<script type="text/javascript">

$(document).ready(function()
{
      $("a#btntrash").click(function(){
       var codigo = $("#de_cod_denuncia").val();
       var accion = "d";
       sweetAlert({
              title: 'Mensaje de FLOOPETS',
              text: 'Esta seguro que desea eliminar?',
              type: 'warning',
              showCancelButton: true,
              confirmButtonColor: '#4db6ac',
              confirmButtonText: 'Aceptar',
              cancelButtonText: 'No, cancel!',
              closeOnConfirm: false,
              closeOnCancel: false,
              },
           function(isConfirm){
             if (isConfirm) {
                 swal("Eliminado!", "se ha eliminado", "success");
                 document.location.href = "../Controller/denuncia.controller.php?dn="+de_cod_denuncia+"&accion="+accion;

             }else{
                 swal("Cancelado", "se cancelo","error");
               }
   });
   });
});

</script>

<div class="col l8 offset-l4">
  <h4>Gestion Denuncia</h4>
</div>

<div class="row">
<div class="col l12">
<?php

      foreach ($denuncia as $row)
      {

        echo"<div class='col l6 descrip'>
                <div class='row'>
                  <div class='col l6 col m6'>
                      <div class='col l7'>
                        <span><b>Nombre de mascota</b></span>
                        <li>".$row["de_nombre"]."</li>
                      </div>
                      <div class='imagenmascota col l12'>
                          <img class='circle responsive-img' style='width:180px ;height:180px ;' src='img/imagen_denuncia/".$row["de_contacto"]."/".$row["de_imagen"]."'>
                      </div>
                      <div class='col l6'>
                          <a href='../View/actualizar_denuncia.php?dn=".base64_encode($row["de_cod_denuncia"])."'>
                          <i class='small material-icons'>mode_edit</i>
                          </a>
                      </div>
                      <div class='col l6'>
                      <input type='hidden' id='de_cod_denuncia' value='".base64_encode($row["de_cod_denuncia"])."'>
                      <a href='#' id='btntrash' >
                        <i class='small material-icons'>delete</i>
                      </a>
                      </div>
                  </div>
                  <div class='col l6'>
                    <ul class='descrip'>
                      <span>Codigo :</span>
                          <li>".$row["de_cod_denuncia"]."</li>
                      <span>Tipo de denuncia :</span>
                          <li>".$row["td_nombre"]."</li>
                      <span>Descripcion :</span>
                            <li>".$row["de_descripcion"]."</li>
                      <span>Contacto :</span>
                            <li>".$row["de_contacto"]."</li>
                      <span>Telefono :</span>
                            <li>".$row["de_telefono"]."</li>
                      <span>Fecha de denuncia :</span>
                            <li>".$row["de_fecha"]."</li>
                    </ul>
                  </div>
                </div>
              </div>

          ";
      }

?>
</div>
</div>
</div>

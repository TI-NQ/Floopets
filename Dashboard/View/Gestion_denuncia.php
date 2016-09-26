<?php

  require_once("../Model/conexion.php");
  require_once("../Model/denuncia.class.php");
  $denuncia = Gestion_denuncia::ReadAll();

?>
<script type="text/javascript">

$(document).ready(function()
{
      <?php
        if(isset($_GET["m"])){
      ?>
      sweetAlert({
             title: 'Mensaje de FLOOPETS',
             text: '<?php echo base64_decode($_GET["m"]); ?>',
             type: '<?php echo base64_decode($_GET["tm"]); ?>',
             showCancelButton: false,
             confirmButtonColor: '#4db6ac',
             confirmButtonText: 'Aceptar',
             cancelButtonText: 'No, cancel!',
             closeOnConfirm: false,
             closeOnCancel: false,
           });
      <?php
        }
       ?>
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
                 cancelButtonText: 'Cancelar',
                 closeOnConfirm: true,
                 closeOnCancel: true,
                 },
              function(isConfirm){
                if (isConfirm) {
                   document.location.href = "../Controller/denuncia.controller.php?dn="+codigo+"&accion="+accion;
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
  <!-- <a class="btn-floating waves-effect" href='../View/actualizar_denuncia.php?dn=".base64_encode($row["de_cod_denuncia"])."'>
     <i class="small material-icons">mode_edit</i>
  </a> -->
<?php

      foreach ($denuncia as $row)
      {

        echo"<div class='col l6 descrip'>
                <div class='row'>
                  <div class='col l6 col m6'>
                      <div class='col l7'>
                        <span><b>Mascota :</b></span>
                        <li>".$row["de_nombre"]."</li>
                      </div>
                      <div class='imagenmascota col l12'>
                          <img class='circle responsive-img' style='width:180px ;height:180px ;' src='img/imagen_denuncia/".$row["de_contacto"]."/".$row["de_imagen"]."'>
                      </div>
                      <div class='col l6'>
                          <a class='btn-floating waves-effect' href='../View/dashboard.php?p=".base64_encode('actualizar_denuncia')."&dn=".base64_encode($row['de_cod_denuncia'])."'>

                          <i class='small material-icons'>mode_edit</i>
                          </a>
                      </div>
                      <div class='col l6'>
                      <input type='hidden' id='de_cod_denuncia' value='".$row["de_cod_denuncia"]."'>
                      <a href='#' id='btntrash' class='btn-floating waves-light red waves-effect' >
                        <i class='small material-icons'>delete</i>
                      </a>
                      </div>
                  </div>
                  <div class='col l6'>
                    <ul class='descrip'>
                          <input type='hidden' value='".$row["de_cod_denuncia"]."'></input>
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
                      <span>Estado :</span>
                            <li>".$row["de_estado"]."</li>
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

<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">


 <a href="dashboard.php?p=<?php echo base64_encode('nueva_mascota')?>" class="waves-effect btn animated zoomIn">Nuevo</a>

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
            document.location.href = "../Controller/animal.controller.php?an="+codigo+"&accion="+accion;
         }
    });
 }
 </script>
<?php
    require_once("../Model/conexion.php");
    require_once("../Model/animal.class.php");
    $animal=Gestion_animal::Nombres();
    // $animal=Gestion_animal::paginacion();


   // $num_reg = count($animal);

   // $paginas = 2;

   // $paginacion = new Zebra_Pagination();
   // $paginacion->records($num_reg);
   // $paginacion->records_per_page($paginas);

   // $consulta = 'SELECT * FROM animal'.(($paginacion->get_page() - 1) * $paginas).','.$paginas;
   //     $result = $con->query($consulta);

    foreach ($animal as $row) {
      
        echo"<div class='col l6 descrip'>
            <div class='row'>
              <div class='col l6 col m6'>
                  <div class='col l7'>
                  <label>Codigo</label>
                    <li>".$row["ani_nombre"]."</li>
                  </div>
                  <div class='imagenmascota col l12'>
                      <div style='width:180px ;height:180px ;'>
                      <img class='circle responsive-img' style='width:200px ;height:200px ;' src='img/imagen_animal/".$row["ani_carpeta"]."/".$row["ani_imagen"]."'>
                      </div>
                  </div>
                  <div class='col l6'>
                         <a class='btn-floating waves-effect waves-light' href='../View/dashboard.php?p=".base64_encode('actualizar_animal')."&an=".base64_encode($row["ani_cod_animal"])."'>
                                <i class='small material-icons'>edit</i>
                          </a>
                  </div>


                  <div class='col l6'>
                  ";
                  ?>
                  <!-- se reemplaza el href por el onclick que carga el delete -->
                  <a href='#' id='btntrash' onclick="borrar('<?php echo $row["ani_cod_animal"];?>')" class='btn-floating waves-light red waves-effect' >
                <?php
                echo "<i class='small material-icons'>delete</i>
                  </a>
                  </div>
              </div>
              <div class='col l6'>
                <ul class='descrip'>
                            <label>Codigo</label>
                                <li>".$row["ani_cod_animal"]."</li>
                            <label>raza</label>
                                  <li>".$row["ra_cod_raza"]."</li>
                            <label>organizacion</label>
                                  <li>".$row["org_cod_organizacion"]."</li>
                          <label>Nombre</label>
                                  <li>".$row["ani_nombre"]."</li>
                             <label>Esterilizacion</label>
                                  <li>".$row["ani_esterilizado"]."</li>
                             <label>Edad</label>
                                  <li>".$row["ani_edad"]."</li>
                             <label>Descripcion</label>
                                  <li>".$row["ani_descripcion"]."</li>
                             <label>N° Microchip</label>
                                  <li>".$row["ani_numero_microchip"]."</li>
                             <label>sexo</label>
                                  <li>".$row["ani_sexo"]."</li>
                          </ul>
              </div>
            </div>
          </div>

      ";


      }
  // $paginacion->render();
?>
</div>
</div>

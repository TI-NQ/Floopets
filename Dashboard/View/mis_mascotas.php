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
    require_once("../Model/usuarios.class.php");
    $mis_mascotas=Gestion_usuarios::Mis_mascotas($_SESSION["usu_cod_usuario"]);
    // print_r ($animal);
    // $animal=Gestion_animal::paginacion();


   // $num_reg = count($animal);

   // $paginas = 2;

   // $paginacion = new Zebra_Pagination();
   // $paginacion->records($num_reg);
   // $paginacion->records_per_page($paginas);

   // $consulta = 'SELECT * FROM animal'.(($paginacion->get_page() - 1) * $paginas).','.$paginas;
   //     $result = $con->query($consulta);

      if (count( $mis_mascotas )>0) {
            foreach ($mis_mascotas as $row) {
      $nombre_carpeta = strtolower(str_replace('ñ', 'n', $row["ani_carpeta"]));
      $nombre_carpeta = strtolower(str_replace(' ', '', $nombre_carpeta));
      $nombre_img_ani = strtolower(str_replace('ñ', 'n', $row["ani_imagen"]));
      $nombre_img_ani = strtolower(str_replace(' ', '', $nombre_img_ani));
        echo"<div class='col s5 offset-s1 descrip'>
            <div class='row'>
              <div class='col l6'>
                  <div class='col s12'>
                  <strong><label>Nombre</label></strong>
                    <li>".$row["ani_nombre"]."</li>
                  </div>
                  <div class='imagenmascota col l12'>
                      <div>";
                      if ($nombre_img_ani=="") {
                        echo "<img class='responsive-img' style='width:200px ;height:200px ;border-radius:10px;' src='../../WebFloopets/images/base.jpg'>";
                      }else {
                        echo "<img class='responsive-img' style='width:200px ;height:200px ;border-radius:10px;' src='img/imagen_animal/".$nombre_carpeta."/".$nombre_img_ani."'>";
                      }
echo "</div>
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
      <!--<label>Codigo</label>
          <li>".$row["ani_cod_animal"]."</li>-->
      <strong><label>Raza</label></strong>
            <li>".$row["ra_nombre"]."</li>
       <label>Esterilizacion</label>
            <li>".$row["ani_esterilizado"]."</li>
       <label>Edad</label>
            <li>".$row["ani_edad"]."</li>
       <label>N° Microchip</label>
            <li>".$row["ani_numero_microchip"]."</li>
       <label>sexo</label>
            <li>".$row["ani_sexo"]."</li>
            
    </ul>
</div>
</div>
</div>";



      }
      }else{
        echo "<center><h3>No tiene mascotas</h3>
              <div>
              <img src='img/perro_triste.jpg' style='width: 40%;'>
              </div>
              </center>

        ";
      }

  // $paginacion->render();
?>

</div>
</div>

<!-- contenedor de perfil usuario (en pruebas) -->
<?php
  require_once ("../Model/conexion.php");
  require_once ("../Model/usuarios.class.php");
  $user_data=Gestion_usuarios::ReadbyID($_SESSION["usu_cod_usuario"]);
  $nombre_carpeta = strtolower(str_replace('ñ', 'n', $user_data["usu_carpeta"]));
      $nombre_carpeta = strtolower(str_replace(' ', '', $nombre_carpeta));
  $nombre_usu_imagen= strtolower(str_replace('ñ', 'n', $user_data["usu_email"]));
  $nombre_usu_imagen = strtolower(str_replace(' ', '', $nombre_usu_imagen));

?>

<form action="../Controller/usuarios.controller.php" method="POST" enctype="multipart/form-data">
<div class="row animated zoomIn">
  <h4 class="center">Mi Perfil</h4>
  <div class="col l4 s5 offset-l1">
    <!-- imagen de prueba -->
    <!-- <img src="img/imagen_evento/vacunatuchanda/5.jpg" style="max-height:400px; border-radius:5px; margin-left:30px;" /> -->
    <?php

    if ($nombre_carpeta == "" or $user_data[8] == "") {
      echo"
      <img class='responsive-img' style='width:300px ;height:300px ;border-radius:10px;'
      src='../../WebFloopets/images/base.jpg'>
      ";
    }else {
      echo"
      <img class='responsive-img' style='width:300px ;height:300px ;border-radius:5px;'
      src='img/imagen_usuario/".$nombre_carpeta."/".$user_data[8]."'>
      ";
    }
    ?>
  </div>
  <div class="col s7 l7" style="margin-top:70px;">

    <input type="text" name="usu_cod_usuario" value="<?php echo $user_data[0]?>" hidden>

      <div class="input-field col s6">
        <input type="text" name="usu_nombre" value="<?php echo $user_data[1]?>">
        <label for="Nombre">Nombre</label>
      </div>
      <div class="input-field col s6">
        <input type="text" name="usu_apellido" value="<?php echo $user_data[2]?>">
        <label for="Apellidos">Apellidos</label>
      </div>


      <div class="input-field col s6">
        <input type="number" name="usu_telefono" value="<?php echo $user_data[3]?>">
        <label for="Telefono">Teléfono</label>
      </div>
      <div class="input-field col s6">
        <input type="email" name="usu_email" value="<?php echo $user_data[5]?>">
        <label for="Correo">Correo Electrónico</label>
      </div>


      <div class="input-field col s6">
        <input type="number" name="usu_cedula" value="<?php echo $user_data[4]?>">
        <label for="Cedula">Cedula</label>
      </div>

      <div class="input-field col s6">
        <input type="number" name="usu_clave" value="<?php echo $user_data[7]?>">
        <label for="Cedula">Modificar Contraseña</label>
      </div>

      <div class="file-field input-field col s12">
        <div class="btn">
          <span>imagen</span>
          <input type="file" name="usu_imagen[]" class="form-control">
        </div>
        <div class="file-path-wrapper form-group">
          <input class="form-control file-path validate"  type="text" placeholder="Puede ingresas mas de una imagen" name="usu_imagen" value="<?php echo $user_data[8] ?>">
        </div>
      </div>
 <input class="form-control file-path validate"  type="hidden" value="<?php echo $user_data[9]?>"  name="usu_carpeta" >



      <div class="input-field col s12">
      <button name="accion" value="u" class="waves-effect btn">Actualizar</button>
      </div>



  </div>
</div>
</form>

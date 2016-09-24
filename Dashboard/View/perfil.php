<!-- contenedor de perfil usuario (en pruebas) -->
<?php
  require_once ("../Model/conexion.php");
  require_once ("../Model/usuarios.class.php");
  $user_data=Gestion_usuarios::ReadbyID($_SESSION["usu_cod_usuario"]);
?>
<div class="row animated zoomIn">
  <h4 class="center">Mi Perfil</h4>
  <div class="col s5">
    <!-- imagen de prueba -->
    <img src="img/imagen_evento/vacunatuchanda/5.jpg" style="max-height:400px; border-radius:5px; margin-left:30px;" />
  </div>
  <div class="col s7" style="margin-top:70px;">
    <div class="row">
      <div class="input-field col s6">
        <input type="text" name="Nombre" value="<?php echo $user_data[1]?>" readonly>
        <label for="Nombre">Nombre</label>
      </div>
      <div class="input-field col s6">
        <input type="text" name="Apellidos" value="<?php echo $user_data[2]?>" readonly>
        <label for="Apellidos">Apellidos</label>
      </div>
    </div>
    <div class="row">
      <div class="input-field col s6">
        <input type="number" name="Telefono" value="<?php echo $user_data[3]?>" readonly>
        <label for="Telefono">Telefono</label>
      </div>
      <div class="input-field col s6">
        <input type="email" name="Correo" value="<?php echo $user_data[5]?>" readonly>
        <label for="Correo">Correo Electronico</label>
      </div>
    </div>
    <div class="row">
      <div class="input-field col s6">
        <input type="number" name="Cedula" value="<?php echo $user_data[4]?>" readonly>
        <label for="Cedula">Cedula</label>
      </div>
      <div class="input-field col s6">
        <input type="email" name="Tipo" value="<?php echo $user_data[9]?>" readonly>
        <label for="Tipo">Tipo Usuario</label>
      </div>
    </div>
    <div class="row">
      <div class="input-field col s12">
        <a href="#" class="waves-effect btn" style="width:100%;">Editar mi Perfil</a>
      </div>
    </div>


  </div>
</div>

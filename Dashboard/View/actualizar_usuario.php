<?php

  require_once("../Model/conexion.php");
  require_once("../Model/usuarios.class.php");
  $us =  Gestion_usuarios::Readbyusu(base64_decode($_REQUEST["us"]));

?>
<form action="../Controller/usuarios.controller.php" method="POST" enctype="multipart/form-data" id="form" class="animated zoomIn">
  <h3 class="center animated zoomIn">Actualizar usuario</h3>
<div class="row">
  <input class="form-control"  hidden name="usu_cod_usuario" required readonly value="<?php echo $us[0]?>">


<div class="input-field form-group col s6">
  <label class="form-label" id="nombre">Nombre</label>
  <input class="form-control" type="text" name="usu_nombre" required value="<?php echo $us[1]?>">
</div>
<div class="input-field form-group col s6">
  <label class="form-label" id="apellido">Apellido</label>
  <input class="form-control" type="text" name="usu_apellido" required value="<?php echo $us[2]?>">
</div>
<div class="input-field form-group col s6">
  <label class="form-label" id="telefono">Telefono</label>
  <input class="form-control" type="number" name="usu_telefono" required value="<?php echo $us[3]?>">
</div>
<div class="input-field form-group col s6">
  <label class="form-label" id="Cc">Cedula</label>
  <input class="form-control" type="number" name="usu_cedula" required value="<?php echo $us[4]?>">
<div class="input-field form-group col s6">
  <label class="form-label" id="email">Email</label>
  <input class="form-control" type="email" name="usu_email" required value="<?php echo $us[5]?>">
</div>
<div class="input-field form-group col s6">
    <label>Contraseña</label>
    <input class="form-control" id="contra" type="number" name="usu_clave" required value="<?php echo $us[7]?>">
</div>
<div class="file-field input-field col s12 m12 form-group" style="margin-top:10px;">
             <div class="file-path-wrapper form-group">
               <input class="form-control file-path validate"  type="text" placeholder="" value="<?php echo $us[8]?>" name="usu_imagen" hidden>
             </div>
          </div>

<div class="form-group col s11">
  <button name="accion" value="u" class="btn btn-primary" id="btnlogin">Actualizar</button>
</div>
</div>

</form>

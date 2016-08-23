<?php
require_once("../Model/conexion.php");
 require_once("../Model/voluntarios.class.php");
 $voluntarios =  gestion_voluntarios::ReadById(base64_decode($_REQUEST["vo"]));
 ?>
<form action="../Controller/voluntarios.controller.php" method="POST">
  <div class="form-group">
  <input type="text" name="vo_cod_voluntario" value="<?php echo $voluntarios[0]?>"hidden/>
  </div>
  <div class="form-group">
  <label class="form-label">Nombre</label>
    <input type="text" class="form-control" name="vo_nombre" required  value="<?php echo $voluntarios[1] ?>">
  </div>
	<div class="form-group">
		<label class="form-label">Telefono</label>
		    <input class="form-control" type="text" name="vo_telefono" required  value="<?php echo $voluntarios[2] ?>">
	</div>
	<div class="form-group">
		<label class="form-label">Direccion</label>
		<input class="form-control" type="text" name="vo_direccion" required  value="<?php echo $voluntarios[3] ?>">
	</div>
  <div class="file-field input-field col s12 m6">
      <div class="btn">
        <span>Galeria</span>
        <input type="file" multiple name="Imagen_Upload[]">
      </div>
      <div class="file-path-wrapper">
        <input class="file-path validate"  type="text" placeholder="foto" name="vo_imagen" value="<?php echo $voluntarios[4] ?>" >
      </div>
    </div>
	<div class="form-group">
		<button name="accion" value="u" class="btn btn-primary">Actualizar</button>
	</div>
</form>

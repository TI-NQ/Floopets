<?php 
	require_once("../Model/conexion.php");
	require_once("../Model/raza.class.php");
	$rz = Gestion_raza::ReadbyID(base64_decode($_REQUEST["rz"]));
 ?>

<form action="../Controller/raza.controller.php" method="POST">
	<div class="form-group">
		<input type="text" name="ra_cod_raza" value="<?php echo $rz[0]?>"hidden/>
		<input type="text" name="ta_cod_tipo_animal" value="<?php echo $rz[2]?>"hidden/>
		<input type="text" name="cu_cod_cuidado" value="<?php echo $rz[3]?>"hidden/>
	</div>
	<div>
		<label class="form-label">nombre</label>
		<input class="form-control"  name="ra_nombre" value="<?php echo $rz[1]?>"required>
	</div>
	<div>
		<label class="form-label">historia</label>
		<input class="form-control"  name="ra_historia" value="<?php echo $rz[4]?>"required>
	</div>
	<div class="file-field input-field col s12 m6">
                <div class="btn">
                  <span>Galeria</span>
                  <input type="file" multiple name="ra_imagen[]">
                </div>
                <div class="file-path-wrapper">
                  <input class="file-path validate"  type="text" placeholder="Puede subir mas de una imagen" name="galeria" value="<?php echo $ra[5] ?>" >
                </div>
  </div>
	<div class="form-group">
		<button name="accion" value="u" class="btn btn-primary">Actualizar</button>
		
	</div>
</form>
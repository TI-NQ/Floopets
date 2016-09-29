<?php
require_once("../Model/conexion.php");
 require_once("../Model/donacion.php");
 $donacion =  Gestion_donacion::ReadbyID(base64_decode($_REQUEST["do"]));

// echo $cu[0];
 ?>
<form action="../Controller/donacion.controller.php" method="POST" id="form">
<input type="hidden" readonly name="don_cod_donacion" required value="<?php echo $donacion[0] ?>">
<input type="hidden" readonly name="org_cod_tipo_donacion" required value="<?php echo $donacion[4] ?>">
<input type="hidden" readonly name="td_cod_tipo_donacion" required value="<?php echo $donacion[1] ?>">
<input type="hidden" readonly name="usu_cod_usuario" required value="<?php echo $donacion[5] ?>">
	<div class="form-group">
		<label class="form-label">fecha</label>
		<input class="form-control" type="date" name="don_fecha" required  value="<?php echo $donacion[2] ?>">
	</div>
	<div class="form-group">
		<label class="form-label">descripcion</label>
		<input class="form-control" type="text" name="don_descripcion" required  value="<?php echo $donacion[6] ?>">
	</div>
<div class="file-field input-field col s12 m6">
                <div class="btn">
                  <span>imagen</span>
                  <input type="file" multiple name="Imagen_Upload[]">
                </div>
                <div class="file-path-wrapper">
                  <input class="file-path validate"  type="text" placeholder="" name="don_imagen" value="<?php echo $donacion[3] ?>" >
                </div>
              </div>
	<div class="form-group">
		<button name="accion" value="c" class="btn btn-primary">Registrar</button>
	</div>
</form>

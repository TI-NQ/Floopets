<?php
require_once("../Model/conexion.php");
 require_once("../Model/adopcion.class.php");
 $adopcion =  Gestion_adopcion::ReadbyID(base64_decode($_REQUEST["ad"]));

 ?>
<form action="../Controller/adopcion.controller.php" method="POST">
<input type="hidden" readonly name="ado_cod_adopcion" required value="<?php echo $adopcion[0] ?>">
<input type="hidden" readonly name="ani_cod_animal" required value="<?php echo $adopcion[1] ?>">
<input type="hidden" readonly name="usu_cod_usuario" required value="<?php echo $adopcion[2] ?>">
	<div class="form-group">
		<label class="form-label">fecha</label>
		<input class="form-control" type="date" name="ado_fecha" required  value="<?php echo $adopcion[3] ?>" min="<?php echo date("Y-m-d"); ?>">
	</div>
	<!-- <div class="form-group">
		<label class="form-label">hora</label>
		<input class="form-control" type="time" name="ad_descripcion" required  value="<?php echo $adopcion[2] ?>">
	</div> -->
<div class="file-field input-field col s12 m6">
                <div class="btn">
                  <span>imagen</span>
                  <input type="file" multiple name="Imagen_Upload[]">
                </div>
                <div class="file-path-wrapper">
                  <input class="file-path validate"  type="text" placeholder="" name="ado_imagen" value="<?php echo $adopcion[4] ?>" >
                </div>
              </div>
	<div class="form-group">
		<button name="accion" value="u" class="btn btn-primary">Actualizar</button>
	</div>
</form>

<?php 
require_once("../Model/conexion.php");
 require_once("../Model/tipo_organizacion.class.php");
 $datos =  Gestion_tipo_organizacion::ReadbyID(base64_decode($_REQUEST["tp"]));
 ?>
<form action="../Controller/tipo_organizacion.controller.php" method="POST">
<input type="hidden" readonly name="to_cod_tipo_organizacion" required value="<?php echo $datos[0] ?>">
	<div class="form-group">
		<label class="form-label">Nombre</label>
		<input class="form-control" type="text" name="to_nombre" required  value="<?php echo $datos[1] ?>">
	</div>
	<div class="form-group">
		<button name="accion" value="u" class="btn btn-primary">Actualizar</button>
	</div>
</form>

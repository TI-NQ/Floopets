<?php 
require_once("../Model/conexion.php");
 require_once("../Model/cuidado.class.php");
 $datos =  Gestion_cuidado::ReadbyID(base64_decode($_REQUEST["cu"]));
 ?>
<form action="../Controller/cuidado.controller.php" method="POST">
<input type="hidden" readonly name="cu_cod_cuidado" required value="<?php echo $datos[0] ?>">
	<div class="form-group">
		<label class="form-label">Nombre</label>
		<input class="form-control" type="text" name="cu_nombre" required  value="<?php echo $datos[1] ?>">
	</div>
	<div class="form-group">
		<button name="accion" value="u" class="btn btn-primary">Actualizar</button>
	</div>
</form>
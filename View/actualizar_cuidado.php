<?php 
require_once("../Model/conexion.php");
 require_once("../Model/cuidado.class.php");
 $cu =  Gestion_cuidado::ReadbyID(base64_decode($_REQUEST["cu"]));

// echo $cu[0];
 ?>
<form action="../Controller/cuidado.controller.php" method="POST">
<input type="hidden" readonly name="cu_cod_cuidado" required value="<?php echo $cu[0] ?>">
	<div class="form-group">
		<label class="form-label">Nombre</label>
		<input class="form-control" type="text" name="cu_nombre" required  value="<?php echo $cu[1] ?>">
	</div>
	<div class="form-group">
		<label class="form-label">Descripcion</label>
		<input class="form-control" type="text" name="cu_descripcion" required  value="<?php echo $cu[2] ?>">
	</div>

	<div class="form-group">
		<button name="accion" value="u" class="btn btn-primary">Actualizar</button>
	</div>
</form>
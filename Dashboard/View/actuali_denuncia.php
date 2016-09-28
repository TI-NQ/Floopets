<?php
require_once("../Model/conexion.php");
 require_once("../Model/denuncia.class.php");

 date_default_timezone_set("America/Bogota");
 ?>
<form action="../Controller/denuncia.controller.php" method="POST">
	<div class="form-group">
			<label class="form-label">codigo</label>
			<input class="form-control" type="text" name="de_cod_denuncia" required  value="<?php echo $denuncia[0] ?>">
		</div>
		<input class="form-control" type="text" name="de_estado" required  value="<?php echo $denuncia[8] ?>">
			<button  name="accion" value="tomar" class="btn btn-primary">Actualizar</button>
</form>
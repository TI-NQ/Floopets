<?php
	session_start();
  require_once("../Model/conexion.php");
  require_once("../Model/rol.class.php");

  $rol =  gestion_rol::ReadbyID(base64_decode($_REQUEST["ro"]));
?>
<form action="../Controller/rol.controller.php" method="POST">
		<input class="form-control"  type="hidden" name="cod_rol" required readonly value="<?php echo $rol[0]?>">
	<div class="form-group">
		<label class="form-label">Nombre de Permiso :</label>
		<input class="form-control" type="text" name="rol_nombre" required value="<?php echo $rol[1]?>">
	</div>
	<div class="form-group">
		<button name="accion" value="u" class="btn btn-primary">Actualizar</button>
	</div>
</form>

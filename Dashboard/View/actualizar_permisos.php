<?php
	session_start();
  require_once("../Model/conexion.php");
  require_once("../Model/permisos.class.php");

  $permisos =  gestion_permisos::ReadbyID(base64_decode($_REQUEST["pe"]));
?>
<form action="../Controller/permisos.controller.php" method="POST">
		<input class="form-control"  type="hidden" name="cod_permiso" required readonly value="<?php echo $permisos[0]?>">
	<div class="form-group">
		<label class="form-label">Nombre de Permiso :</label>
		<input class="form-control" type="text" name="permiso_nombre" required value="<?php echo $permisos[1]?>">
	</div>
	<div class="form-group">
		<button name="accion" value="u" class="btn btn-primary">Actualizar</button>
	</div>
</form>

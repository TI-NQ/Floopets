<?php
	session_start();
  require_once("../Model/conexion.php");
  require_once("../Model/vacuna.class.php");

  $vacuna =  gestion_vacuna::ReadbyID(base64_decode($_REQUEST["ui"]));
?>
<form action="../Controller/vacunas.controller.php" method="POST">
		<input class="form-control"  type="hidden" name="vac_cod_vacuna" required readonly value="<?php echo $vacuna[0]?>">
	<div class="form-group">
		<label class="form-label">Nombre</label>
		<input class="form-control" type="text" name="vac_nombre" required value="<?php echo $vacuna[1]?>">
	</div>
	<div class="form-group">
		<label class="form-label">Fecha</label>
		<input class="form-control" type="date" name="fecha" required value="<?php echo $vacuna[2]?>">
	</div>
	<div class="form-group">
		<button name="accion" value="u" class="btn btn-primary">Actualizar</button>
	</div>
</form>

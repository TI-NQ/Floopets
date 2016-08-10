<?php
	require_once("../Model/conexion.php");
    require_once("../Model/tipo_denuncia.class.php");
	$td=Gestion_tipo_denuncia::ReadbyID(base64_decode($_REQUEST["td"]));
 ?>

<form action="../Controller/tipo_denuncia.controller.php" method="POST">
	<div class="form-group">
		<input type="text" name="td_cod_tipo_denuncia" value="<?php echo $td[0]?>"hidden/>
		<label class="form-label">Tipo Denuncia</label>
		<input class="form-control"  name="td_nombre" value="<?php echo $td[1]?>"required>
		<label class="form-label">Estado</label>
		<input class="form-control"  name="td_estado" value="<?php echo $td[2]?>" required>

	</div>
	<div class="form-group">
		<button name="accion" value="u" class="btn btn-primary">Actualizar</button>

	</div>
</form>

<?php 
	require_once("../Model/conexion.php");
    require_once("../Model/tipo_evento.class.php");
	$tipo_evento=Gestion_tipo_evento::ReadbyID(base64_decode($_REQUEST["ui"]));
 ?>

<form action="../Controller/tipo_evento.controller.php" method="POST">
	<div class="form-group">
		<input type="text" name="te_cod_tipo_evento" value="<?php echo $tipo_evento[0]?>"hidden/>
		<label class="form-label">nombre</label>
		<input class="form-control"  name="te_nombre" value="<?php echo $tipo_evento[1]?>"required>
		<label class="form-label">estado</label>
		<input class="form-control"  name="te_estado" value="<?php echo $tipo_evento[2]?>" required>

	</div>
	<div class="form-group">
		<button name="accion" value="u" class="btn btn-primary">Actualizar</button>
		
	</div>
</form>

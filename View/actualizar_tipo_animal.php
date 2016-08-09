<?php 
	require_once("../Model/conexion.php");
    require_once("../Model/tipo_animal.class.php");
	$tipo=Gestion_tipo_animal::ReadbyID(base64_decode($_REQUEST["ta"]));
 ?>

<form action="../Controller/tipo_animal.controller.php" method="POST">
	<div class="form-group">
		<input type="text" name="ta_cod_tipo_animal" value="<?php echo $tipo[0]?>"hidden/>
		<input type="text" name="cu_cod_cuidado" value="<?php echo $tipo[2]?>"hidden/>
		<label class="form-label">nombre</label>
		<input class="form-control"  name="ta_nombre" value="<?php echo $tipo[1]?>"required>
		<label class="form-label">tamaño</label>
		<input class="form-control"  name="tamano" value="<?php echo $tipo[3]?>" required>
	</div>
	<div class="form-group">
		<button name="accion" value="u" class="btn btn-primary">Actualizar</button>
		
	</div>
</form>
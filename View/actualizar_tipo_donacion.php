<?php 
	require_once("../Model/conexion.php");
    require_once("../Model/tipo_donacion.class.php");
	$tipo_donacion=Gestion_tipo_donacion::ReadbyID(base64_decode($_REQUEST["ui"]));
 ?>

<form action="../Controller/tipo_donacion.controller.php" method="POST">
	<div class="form-group">
		<input type="text" name="td_cod_tipo_donacion" value="<?php echo $tipo_donacion[0]?>"hidden/>
		<label class="form-label">nombre</label>
		<input class="form-control"  name="td_nombre" value="<?php echo $tipo_donacion[1]?>"required>
		<label class="form-label">estado</label>
		<input class="form-control"  name="td_estado" value="<?php echo $tipo_donacion[2]?>" required>

	</div>
	<div class="form-group">
		<button name="accion" value="u" class="btn btn-primary">Actualizar</button>
		
	</div>
</form>

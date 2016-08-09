<?php 
	require_once("../Model/conexion.php");
    require_once("../Model/raza.class.php");
	$raza =Gestion_raza::ReadbyID(base64_decode($_REQUEST["ra"]));
 ?>

<form action="../Controller/tipo_animal.controller.php" method="POST">
	<div class="form-group">
		<input type="text" name="ra_cod_raza" value="<?php echo $raza[0]?>"hidden/>
		<input type="text" name="ta_cod_tipo_animal" value="<?php echo $raza[2]?>"hidden/>
	</div>
	<div>
		<label class="form-label">nombre</label>
		<input class="form-control"  name="ra_nombre" value="<?php echo $raza[1]?>"required>
	</div>
	<div class="form-group">
		<button name="accion" value="u" class="btn btn-primary">Actualizar</button>
		
	</div>
</form>
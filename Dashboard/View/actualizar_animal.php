<?php
require_once("../Model/conexion.php");
 require_once("../Model/animal.class.php");
 $animal =  gestion_animal::ReadbyID(base64_decode($_REQUEST["an"]));

// echo $cu[0];
 ?>
<form action="../Controller/animal.controller.php" method="POST">
  <input type="hidden" readonly name="ani_cod_animal" required value="<?php echo $animal[0] ?>">
	<div class="form-group">
		<input class="form-control" type="hidden" name="ra_cod_raza" required  value="<?php echo $animal[1] ?>">
	</div>
	<div class="form-group">
		<label class="form-label">Nombre</label>
		<input class="form-control" type="text" name="ani_nombre" required  value="<?php echo $animal[2] ?>">
	</div>
  <div class="form-group">
		<label class="form-label">Esterilizado</label>
		<input class="form-control" type="text" name="ani_esterilizado" required  value="<?php echo $animal[3] ?>">
	</div>
  <div class="form-group">
		<label class="form-label">Edad</label>
		<input class="form-control" type="text" name="ani_edad" required  value="<?php echo $animal[4] ?>">
	</div>
  <div class="form-group">
		<label class="form-label">Descripcion</label>
		<input class="form-control" type="text" name="ani_descripcion" required  value="<?php echo $animal[5] ?>">
	</div>
  <div class="form-group">
		<label class="form-label">Microchip</label>
		<input class="form-control" type="text" name="ani_numero_microchip" required  value="<?php echo $animal[6] ?>">
	</div>


	<div class="form-group">
		<button name="accion" value="u" class="btn btn-primary">Actualizar</button>
	</div>
</form>


<form action="../Controller/animal.controller.php" method="POST">
	
	<label class="form-label">Raza:</label>
	<?php
	require_once("../Model/conexion.php");
	require_once("../Model/raza.class.php");
						 $raza=Gestion_raza::ReadAll();
						 ?>
							 <select name="ra_cod_raza">
							 <option disabled selected>Seleccione una raza:</option><?php
						 foreach ($raza as $row) {
						 ?>

								 <option value="<?php echo $row["ra_cod_raza"] ?>" ><?php echo $row["ra_nombre"] ?></option>
									 <?php } ?>
							 </select>
	<div class="form-group">
		<label class="form-label">Nombre:</label>
		<input class="form-control" type="text" name="ani_nombre" required>
	</div>
	<div class="form-group">
		<label class="form-label">Esterilizacion:</label>
		<!-- <input class="form-control" type="date" name="ani_esterilizado" required> -->
		<select name="ani_esterilizado">
		   <option value="0">Si</option>
		   <option value="1">No</option>
		</select>
	</div>
  <div class="form-group">
		<label class="form-label">Edad:</label>
		<input class="form-control" type="text" name="ani_edad" required>
	</div>
  <div class="form-group">
		<label class="form-label">Descripcion:</label>
		<input class="form-control" type="text" name="ani_descripcion" required>
	</div>
  <div class="form-group">
		<label class="form-label">Nmero de Microchip (opcional):</label>
		<input class="form-control" type="text" name="ani_numero_microchip" required>
	</div>
	<div class="form-group">
		<button name="accion" value="c" class="btn btn-primary">Registrar</button>
	</div>
</form>

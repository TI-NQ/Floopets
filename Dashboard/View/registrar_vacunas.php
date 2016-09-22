<h2 class="center">Registrar Vacuna</h2>
<form id="form"action="../Controller/vacunas.controller.php" method="POST">
	<div class="form-group">
		<label class="form-label">Nombre</label>
		<input class="form-control" type="text" name="vac_nombre" required>
	</div>
	<div class="form-group">
		<label class="form-label">Fecha</label>
		<input class="form-control" type="date" name="vac_fecha" min="<?php echo date("Y-m-d"); ?>" required>
	</div>
	<div class="form-group">
		<label class="form-label">serial</label>
		<input class="form-control" type="number" name="vac_serial" required>
	</div>
	<div class="form-group">
		<button name="accion" value="c" class="btn btn-primary">Registrar</button>
	</div>
</form>

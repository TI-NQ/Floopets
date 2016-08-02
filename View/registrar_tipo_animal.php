<form action="../Controller/tipo_animal.controller.php" method="POST">
	<div class="form-group">
		<label class="form-label">nombre</label>
		<input class="form-control" type="text" name="cu_nombre" required>
	</div>
	<div class="form-group">
		<label class="form-label">descripcion</label>
		<input class="form-control" type="text" name="cu_descripcion" required>
	</div>

	<div class="form-group">
		<button name="accion" value="c" class="btn btn-primary">Registrar</button>
	</div>
</form>
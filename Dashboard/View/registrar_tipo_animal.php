<form action="../Controller/tipo_animal.controller.php" method="POST">
	<div class="form-group">
		<label class="form-label">nombre</label>
		<input class="form-control" type="text" name="ta_nombre" required>
	</div>
	<div class="form-group">
		<label class="form-label">tamaño</label>
		<input class="form-control" type="text" name="tamano" required>
	</div>
	<div class="form-group">
		<button name="accion" value="c" class="btn btn-primary">Registrar</button>
	</div>
</form>
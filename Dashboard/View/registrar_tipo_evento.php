<form action="../Controller/tipo_evento.controller.php" method="POST">
	<div class="form-group">
		<label class="form-label">nombre</label>
		<input class="form-control"  name="te_nombre" required>
		<label class="form-label">estado</label>
		<input class="form-control"  name="te_estado" required>

	</div>
	<div class="form-group">
		<button name="accion" value="c" class="btn btn-primary">Registrar</button>
	</div>
</form>

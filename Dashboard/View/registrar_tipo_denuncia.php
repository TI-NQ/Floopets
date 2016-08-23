<form action="../Controller/tipo_denuncia.controller.php" method="POST">
	<div class="form-group">
		<label class="form-label">Tipo Denuncia</label>
		<input class="form-control" type="text" name="td_nombre" required>
	</div>
	<div class="form-group">
		<label class="form-label">Estado</label>
		<input class="form-control" type="text" name="td_estado" required>
	</div>	
	<div class="form-group">
		<button name="accion" value="c" class="btn btn-primary">Registrar</button>
	</div>
</form>

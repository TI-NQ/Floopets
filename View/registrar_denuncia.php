<form action="../Controller/denuncia.controller.php" method="POST">
	<div class="form-group">
		<label class="form-label">codigo usuario</label>
		<input class="form-control" type="text" name="usu_cod_denuncia" required>
	</div>
	<div class="form-group">
		<label class="form-label">descripcion</label>
		<input class="form-control" type="text" name="de_descripcion" required>
	</div>
	<div class="form-group">
		<label class="form-label">fecha</label>
		<input class="form-control" type="text" name="de_fecha" required>
	</div>
	<div class="form-group">
		<button name="accion" value="c" class="btn btn-primary">Registrar</button>
	</div>
</form>
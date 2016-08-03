<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<form action="../Controller/evento.controller.php" method="POST">
	<h1>Registrar Evento</h1>
	<div class="form-group">

		<label>Codigo tipo evento:</label>
		<input name="te_cod_tipo_evento"></input>
		<br>
		<label>Nombre:</label>
		<input name="eve_nombre"></input>
		<br>
		<label>Dirección:</label>
		<input name="eve_direccion"></input>
		<br>
		<label>Fecha:</label>
		<input type="date" name="eve_fecha"></input>
		<br>
		<label>Hora:</label>
		<input type="time" name="eve_hora"></input>
		<br>
		<label>Descripcion:</label>
		<input name="eve_descripcion"></input>
		<br>

	</div>
	<div class="form-group">
		<button name="accion" value="c" class="btn btn-primary">Registrar</button>
	</div>
</form>

<h2>Registrar Evento</h2>
<form id="form" action="../Controller/evento.controller.php" method="POST">

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
		<div class="file-field input-field col s12 m6">
				 <div class="btn">
					 <span>Galeria</span>
					 <input type="file" multiple name="Imagen_Upload[]">
				 </div>
				 <div class="file-path-wrapper">
					 <input class="file-path validate" readonly type="text" placeholder="Subir imagen" name="imagen"  >
				 </div>
			</div>

	</div>
	<div class="form-group">
		<button name="accion" value="c" class="btn btn-primary">Registrar</button>
	</div>
</form>

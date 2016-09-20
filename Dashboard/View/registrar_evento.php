<<<<<<< HEAD
<h2>Registrar Evento</h2>
<form id="form" action="../Controller/evento.controller.php" method="POST">

=======
<?php
	require_once("../Model/conexion.php");
	require_once("../Model/tipo_evento.class.php");
	$eve = Gestion_tipo_evento::ReadAll();
?>

<form action="../Controller/evento.controller.php" method="POST">
	<h1>Registrar Evento</h1>
>>>>>>> origin/master
	<div class="form-group">

		<label>Tipo evento:</label>
		<select name="te_cod_tipo_evento" required>
				<?php
					foreach ($eve as $row) {
						echo "<option value = '".$row["te_cod_tipo_evento"]."'>".$row["te_nombre"]."</option>";
					}
				 ?>
		</select>
		<br>
		<label>Nombre:</label>
		<input name="eve_nombre"></input>
		<br>
		<label>Dirección:</label>
		<input name="eve_direccion"></input>
		<br>
		<label>Fecha:</label>
		<input type="date" name="eve_fecha" min="<?php echo date("Y-m-d"); ?>"></input>
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

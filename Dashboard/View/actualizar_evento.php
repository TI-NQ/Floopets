<?php 
	require_once("../Model/conexion.php");
    require_once("../Model/evento.class.php");
	$evento=Gestion_evento::ReadbyID(base64_decode($_REQUEST["ui"]));
 ?>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<form action="../Controller/evento.controller.php" method="POST">
	<h1>Actualizar Evento</h1>
	<div class="form-group">
		<label>Codigo evento:</label>
		<input name="eve_cod_evento"value="<?php echo $evento[0]?>"readonly></input>
		<br>
		<label>Codigo tipo evento:</label>
		<input name="te_cod_tipo_evento"value="<?php echo $evento[1]?>"></input>
		<br>
		<label>Nombre:</label>
		<input name="eve_nombre" value="<?php echo $evento[2]?>"></input>
		<br>
		<label>Dirección:</label>
		<input name="eve_direccion"value="<?php echo $evento[3]?>"></input>
		<br>
		<label>Fecha:</label>
		<input type="date" name="eve_fecha"value="<?php echo $evento[4]?>"></input>
		<br>
		<label>Hora:</label>
		<input type="time" name="eve_hora"value="<?php echo $evento[5]?>"></input>
		<br>
		<label>Descripcion:</label>
		<input name="eve_descripcion" value="<?php echo $evento[5]?>"></input>
		<br>

	</div>
	<div class="form-group">
		<button name="accion" value="u" class="btn btn-primary">Actualizar</button>
	</div>
</form>

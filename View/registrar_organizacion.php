<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<form action="../Controller/organizacion.controller.php" method="POST">
	<h1>Registrar Organización</h1>
	<div class="form-group">
		<label>Codigo tipo organizacion:</label>
		<input name="to_cod_tipo_organizacion"></input>
		<br>
		<label>Nombre organización:</label>
		<input name="org_nombre"></input>
		<br>
		<label>Nit:</label>
		<input name="org_nit"></input>
		<br>
		<label>Email:</label>
		<input  name="org_email"></input>
		<br>
		<label>Telefono:</label>
		<input type="numeric" name="org_telefono"></input>
		<br>
		<label>Dirección:</label>
		<input name="org_direccion"></input>
		<br>

	</div>
	<div class="form-group">
		<button name="accion" value="c" class="btn btn-primary">Registrar</button>
	</div>
</form>

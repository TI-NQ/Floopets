<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<form action="../Controller/organizacion.controller.php" method="POST">
	<h1>Registrar Organización</h1>
	<div class="form-group">
		<label>Tipo organizacion:</label>
		<?php
		require_once("../Model/conexion.php");
		require_once("../Model/tipo_organizacion.class.php");
							 $tp=Gestion_tipo_organizacion::ReadAll();
							 ?>
								 <select name="to_cod_tipo_organizacion">
								 <option disabled selected>Tipo organizacion:</option><?php
							 foreach ($tp as $row) {
							 ?>

									 <option value="<?php echo $row["to_cod_tipo_organizacion"] ?>" ><?php echo $row["to_nombre"] ?></option>
										 <?php } ?>
								 </select>
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
		<label>Contraseña:</label>
		<input name="org_clave" type="password"></input>
		<br>

	</div>
	<div class="form-group">
		<button name="accion" value="c" class="btn btn-primary">Registrar</button>
	</div>
</form>

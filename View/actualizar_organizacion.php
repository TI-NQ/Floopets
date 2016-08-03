<?php 
	require_once("../Model/conexion.php");
    require_once("../Model/organizacion.class.php");
	$organizacion=Gestion_organizacion::ReadbyID(base64_decode($_REQUEST["ui"]));
 ?>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<form action="../Controller/organizacion.controller.php" method="POST">
	<h1>Actualizar Organización</h1>
	<div class="form-group">
		<input name="org_cod_organizacion" hidden="" value="<?php echo $organizacion[0]?>"></input>
		<label>Codigo tipo organizacion:</label>
		<input name="to_cod_tipo_organizacion"value="<?php echo $organizacion[1]?>"></input>
		<br>
		<label>Nombre organización:</label>
		<input name="org_nombre" value="<?php echo $organizacion[2]?>"></input>
		<br>
		<label>Nit:</label>
		<input name="org_nit" value="<?php echo $organizacion[3]?>"></input>
		<br>
		<label>Email:</label>
		<input  name="org_email" value="<?php echo $organizacion[4]?>"></input>
		<br>
		<label>Telefono:</label>
		<input type="numeric" name="org_telefono" value="<?php echo $organizacion[5]?>"></input>
		<br>
		<label>Dirección:</label>
		<input name="org_direccion" value="<?php echo $organizacion[6]?>"></input>
		<br>

	</div>
	<div class="form-group">
		<button name="accion" value="u" class="btn btn-primary">Actualizar</button>
	</div>
</form>

<?php
	session_start();
  require_once("../Model/conexion.php");
  require_once("../Model/usuarios.class.php");

  $user =  gestion_usuarios::ReadbyID(base64_decode($_REQUEST["us"]));
?>
<form action="../Controller/usuarios.controller.php" method="POST">
		<input class="form-control"  type="hidden" name="usu_cod_usuario" required readonly value="<?php echo $user[0]?>">
	<div class="form-group">
		<label class="form-label">Nombre :</label>
		<input class="form-control" type="text" name="usu_nombre" required value="<?php echo $user[1]?>">
	</div>
	<div class="form-group">
		<label class="form-label">Apellido :</label>
		<input class="form-control" type="text" name="usu_apellido" required value="<?php echo $user[2]?>">
	</div>
	<div class="form-group">
		<label class="form-label">Telefono :</label>
		<input class="form-control" type="number" name="usu_telefono" required value="<?php echo $user[3]?>">
	</div>
	<div class="form-group">
		<label class="form-label">Email :</label>
		<input class="form-control" type="email" name="usu_email" required value="<?php echo $user[4]?>">
	</div>
	<div class="form-group">
    <select name="cod_rol" required value="<?php echo $user[5] ?>">
        <option value="3" <?php if($user["cod_rol"]==3){echo "selected"; } ?>>lely</option>
				  <option value="4" <?php if($user["cod_rol"]==4){echo "selected"; } ?>>criss</option>
    </select>
	<div class="form-group">
		<button name="accion" value="u" class="btn btn-primary">Actualizar</button>
	</div>
</form>

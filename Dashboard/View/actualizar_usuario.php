<?php
  require_once("../Model/conexion.php");
  require_once("../Model/usuarios.class.php");
  require_once("../Model/rol.class.php");

  $user =  Gestion_usuarios::ReadbyID(base64_decode($_REQUEST["us"]));
?>
<form action="../Controller/usuarios.controller.php" method="POST">
		<input class="form-control"  hidden name="usu_cod_usuario" required readonly value="<?php echo $user[0]?>">
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
		<label class="form-label">Cedula :</label>
		<input class="form-control" type="number" name="usu_cedula" required value="<?php echo $user[4]?>">
	</div>
	<div class="form-group">
		<label class="form-label">Email :</label>
		<input class="form-control" type="email" name="usu_email" required value="<?php echo $user[5]?>">
	</div>
	<div class="form-group">
	<label>Roles</label>
    <select name="cod_rol" required>
    <?php
    	$roles=Gestion_rol::ReadAll();
    	foreach ($roles as $row ) {
    		echo '<option  value = "'.$row[0].'"';
    		if ($row[1]==$user[9]) {
    				echo "selected";
    			}


    		echo '>'.$row[1].'</option>';
    	}
     ?>
    </select>
	</div>
	<div class="form-group">
			<label>Contraseña :</label>
			<input class="form-control" type="number" name="usu_clave" required value="<?php echo $user[7]?>">
	</div>
	<div class="form-group">
		<button name="accion" value="u" class="btn btn-primary">Actualizar</button>
	</div>
</form>

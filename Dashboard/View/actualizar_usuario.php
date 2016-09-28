<?php
session_start();
  require_once("../Model/conexion.php");
  require_once("../Model/usuarios.class.php");
  require_once("../Model/rol.class.php");
  //Traemos la variable de Session usu_cod_usuario
  $usuario=$_SESSION["usu_cod_usuario"];
  $user =  Gestion_usuarios::ReadbyID($usuario);
  $rol = Gestion_rol::ReadAll();
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
    <input name="cod_rol" value="Usuario"hidden>

	</div>
	<div class="form-group">
			<label>Contraseña :</label>
			<input class="form-control" type="number" name="usu_clave" required value="<?php echo $user[7]?>">
	</div>
  <div >
    <select class="" name="">
      <?php
        foreach ($rol as $row ) {
          echo "
          <option value= ".$row['cod_rol']." >".$row['rol_nombre']."</option>
          ";
        }

       ?>
    </select>
  </div>

	<div class="form-group">
		<button name="accion" value="u" class="btn btn-primary">Actualizar</button>
	</div>
</form>

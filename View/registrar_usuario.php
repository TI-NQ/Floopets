<form action="../Controller/usuarios.controller.php" method="POST">
	<div class="form-group">
		<label class="form-label">Nombre :</label>
		<input class="form-control" type="text" name="usu_nombre" required>
	</div>
  <div class="form-group">
		<label class="form-label">Apellido :</label>
		<input class="form-control" type="text" name="usu_apellido" required>
	</div>
  <div class="form-group">
		<label class="form-label">Telefono :</label>
		<input class="form-control" type="number" name="usu_telefono" required>
	</div>
  <div class="form-group">
		<label class="form-label">Cedula :</label>
		<input class="form-control" type="number" name="usu_cod_usuario" required>
	</div>
  <div class="form-group">
		<label class="form-label">Email :</label>
		<input class="form-control" type="email" name="usu_email" required>
	</div>
  <div class="form-group">
  	<label>Rol:</label>
    <select name="cod_rol" required>
        <option value="" selected></option>
        <?php
          require_once("../Model/conexion.php");
          require_once("../Model/rol.class.php");

          $rol = gestion_rol::ReadAll();
          foreach ($rol as $row) {
            echo "<option value = '".$row["cod_rol"]."'>".$row["rol_nombre"]."</option>";
          }
         ?>
    </select>
		<!-- <input  class="form-control" type="hidden" name="cod_rol" value="1" required> -->
	</div>
	<div class="form-group">
		<button name="accion" value="c" class="btn btn-primary">Registrar</button>
	</div>
</form>

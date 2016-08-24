<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
	<title>formulario</title>
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/estilos.css">
	<script src="assets/js/jquery-1.10.2.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
	
</head>
<body>
<div class="container">
	<div class="row">
	                        
	    <div class="col-lg-5">
	    	<div class="titulo_formulario">
	           <h1 id="titulo">Registro Usuario</h1>
	        </div>
			<div class="formulario ">
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
				    <select name="cod_rol" required class="form-control">
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
						<label>Contraseña:</label>
						<input name="usu_clave" type="password" required class="form-control">
					</div>
					<div class="form-group">
						<button name="accion" value="c" class="btn btn-primary" style="width: 100%">Registrar</button>
					</div>
				</form>
			</div>
		</div>
	</div>	
</div>
</body>
</html>


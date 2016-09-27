 <?php
	if(isset($_GET["msn"]))
	{
		echo "swal( '".$_GET["msn"]."','', 'success');";
	}
 ?>
<h2 class="center">Registro usuarios</h2>
				<form id="form"action="../Controller/usuarios.controller.php" method="POST">
				 <input type="hidden" value="1" name="cod_rol"/>
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
				  <div class="input-field col s12 m12">
	                <input id="Cc" type="number" name="cedula" required>
	                <label for="Cc">Documento de identidad*</label>
	                <span id="resultadobusqueda" class="red-text accent-3 left"> </span>
              </div>
				  <div class="form-group">
						<label class="form-label">Email :</label>
						<input class="form-control" type="email" name="usu_email" required>
					</div>
					<div class="form-group">
						<label>Contraseña:</label>
						<input name="usu_clave" type="password" required class="form-control">
					</div>
					<div class="file-field input-field col s12">

		    <div class="file-path-wrapper">
		      <input class="file-path validate"  type="text" placeholder="Puede subir mas de una imagen" name="usu_imagen"  >
		    </div>
		  </div>
					<div class="form-group">
						<button id="boton" name="accion" value="c" class="btn btn-primary" style="width: 100%">Registrar</button>
					</div>
				</form>

<form action="../Controller/voluntarios.controller.php" method="POST">
	<div class="form-group">
		<label class="form-label">Cedula:</label>
		<input class="form-control" type="text" name="vo_cod_voluntario" required>
	</div>
	<div class="form-group">
		<label class="form-label">Nombre</label>
		<input class="form-control" type="text" name="vo_nombre" required>
	</div>
  <div class="form-group">
		<label class="form-label">Telefono</label>
		<input class="form-control" type="number" name="vo_telefono" required>
	</div>
  <div class="form-group">
		<label class="form-label">Direccion</label>
		<input class="form-control" type="text" name="vo_direccion" required>
	</div>
	<div class="file-field input-field col s12 m6">
       <div class="btn">
         <span>Galeria</span>
         <input type="file" multiple name="Imagen_Upload[]">
       </div>
       <div class="file-path-wrapper">
         <input class="file-path validate"  type="text" placeholder="Puede subir mas de una imagen" name="vo_imagen"  >
       </div>
    </div>

	<div class="form-group">
		<button name="accion" value="c" class="btn btn-primary">Registrar</button>
	</div>
</form>

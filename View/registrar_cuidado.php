<form action="../Controller/cuidado.controller.php" method="POST">
	<div class="form-group">
		<label class="form-label">nombre</label>
		<input class="form-control" type="text" name="cu_nombre" required>
	</div>
	<div class="form-group">
		<label class="form-label">descripcion</label>
		<input class="form-control" type="text" name="cu_descripcion" required>
	</div>
	<div class="file-field input-field col s12 m6">
       <div class="btn">
         <span>Galeria</span>
         <input type="file" multiple name="Imagen_Upload[]">
       </div>
       <div class="file-path-wrapper">
         <input class="file-path validate"  type="text" placeholder="Puede subir mas de una imagen" name="galeria"  >
       </div>
    </div>
	<div class="form-group">
		<label class="form-label">video</label>
		<input class="form-control" type="text" name="video" required>
	</div>
	<div class="form-group">
		<button name="accion" value="c" class="btn btn-primary">Registrar</button>
	</div>
</form>

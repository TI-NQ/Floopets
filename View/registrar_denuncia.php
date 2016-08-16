<?php
require_once("../Model/usuarios.class.php");
?>
<form action="../Controller/tipo_denuncia.controller.php" method="POST" enctype="multipart/form-data">
	<div class="form-group">
		 <input type="hidden" name="usu_cod_usuario" value="<?php echo $_SESSION["usu_cod_usuario"]; ?>"/>
	</div>
	<div class="form-group">
		<label>Tipo denuncia:</label>
		<select name="td_cod_tipo_denuncia" required>
				<option value="" selected></option>
				<?php
					require_once("../Model/conexion.php");
					require_once("../Model/tipo_denuncia.class.php");

					$den = Gestion_tipo_denuncia::ReadAll();
					foreach ($den as $row) {
						echo "<option value = '".$row["td_cod_tipo_denuncia"]."'>".$row["td_nombre"]."</option>";
					}
				 ?>
		</select>
	</div>
	<div class="form-group">
		<label class="form-label">descripcion</label>
		<input class="form-control" type="text" name="de_descripcion" required>
	</div>
	<div class="form-group">
		<label class="form-label">fecha</label>
		<input class="form-control" type="date" name="de_fecha" required>
	</div>
	<div class="file-field input-field col s12 m6">
			 <div class="btn">
				 <span>Galeria</span>
				 <input type="file" multiple name="Imagen_Upload[]">
			 </div>
			 <div class="file-path-wrapper">
				 <input class="file-path validate" readonly type="text" placeholder="subir imagen" name="de_imagen"  >
			 </div>
		</div>
	<div class="form-group">
		<button name="accion" value="c" class="btn btn-primary">Registrar</button>
	</div>
</form>

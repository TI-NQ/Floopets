<?php
	require_once("../Model/conexion.php");
	require_once("../Model/tipo_denuncia.class.php");
	$den = Gestion_tipo_denuncia::ReadAll();
?>
<h2 class="center">Registrar Denuncia</h2>
<div class="row">
	
	<form id="form" class="col s12" action="../Controller/denuncia.controller.php" method="POST" enctype="multipart/form-data">
		<div class="row">
			<div class="input-field col s12">
				<select name="td_cod_tipo_denuncia" required>
						<?php
							foreach ($den as $row) {
								echo "<option value = '".$row["td_cod_tipo_denuncia"]."'>".$row["td_nombre"]."</option>";
							}
						 ?>
				</select>
				<label>Tipo Denuncia</label>
			</div>
			<div class="row">
        <div class="input-field col s12">
          <textarea id="de_descripcion" class="materialize-textarea" name="de_descripcion" length="120" required></textarea>
          <label for="de_descripcion">Descripcion</label>
        </div>
      </div>
			<div class="file-field input-field col s12">
				<div class="btn">
					<span>Imagenes</span>
					<input type="file" name="de_imagen[]" class="form-control">
				</div>
				<div class="file-path-wrapper form-group">
					<input class="form-control file-path validate"  type="text" placeholder="Puede ingresas mas de una imagen" name="de_imagen" >
				</div>
			</div>
			<div class="input-field col s12 m6 l6">
				<input type="text" name="de_nombre" id="de_nombre" >
						<label for="de_nombre">Nombre de mascota (Opcional)</label>
			</div>
			<div class="input-field col s12 m6 l6">
				<input type="text" name="de_contacto" id="de_contacto" required>
						<label for="de_contacto">Nombre de contacto</label>
			</div>
			<div class="input-field col s12">
				<input type="text" name="de_telefono" id="de_telefono" required>
						<label for="de_telefono">Telefono</label>
			</div>
			<div class="botones">
				<a href="<?=$_SERVER['HTTP_REFERER'] ?>" class="waves-effect waves-light btn red darken-1 left">Cancelar</a>
				<button class="waves-effect waves-light  btn right cyan darken-1" name="accion" value="c" style="margin-right: 50px;">Registrar</button>
			</div>
		</div>
	</form>
</div>
<!-- <form action="../Controller/denuncia.controller.php" method="POST" enctype="multipart/form-data">
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
	<div class=" form-group file-field input-field col s12 m6">
				       <div class="btn">
				         <label class="form-label">Galeria</label>
				         <input type="file" multiple name="de_imagen[]" class="form-control">
				       </div>
				       <div class="file-path-wrapper form-group">
				         <input class="form-control file-path validate"  type="text" placeholder="" name="de_imagen" >
				       </div>
				    </div>
		<div class="form-group">
			<label class="form-label">Nombre de mascota(opcional)</label>
			<input class="form-control" type="text" name="de_nombre">
		</div>
		<div class="form-group">
			<label class="form-label">Nombre de Contacto</label>
			<input class="form-control" type="text" name="de_contacto" required>
		</div>
		<div class="form-group">
			<label class="form-label">Telefono</label>
			<input class="form-control" type="text" name="de_telefono" required>
		</div>
	<div class="form-group">
		<button name="accion" value="c" class="btn btn-primary">Registrar</button>
	</div>
</form> -->

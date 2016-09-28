<?php
require_once("../Model/conexion.php");
require_once("../Model/organizacion.class.php");
$organizacion = Gestion_organizacion::ReadAll();
 ?>
<h1 class="center">Registro voluntarios</h1>
					<form id="form"action="../Controller/voluntarios.controller.php" method="POST" enctype="multipart/form-data">
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
					<div class="input-field col s12 m6 l6" style="z-index:1;">
				<select name="org_cod_organizacion">
					<option value="" disabled selected>organizacion</option>
					<?php
							foreach ($organizacion as $row){
									echo "<option value='".$row["org_cod_organizacion"]."'>".$row["org_nombre"]."</option>";
							}
					 ?>
				</select>
			</div>
					<div class=" form-group file-field input-field col s12 m6">
				       <div class="btn">
				         <label class="form-label">Galeria</label>
				         <input type="file" multiple name="vo_imagen[]" class="form-control">
				       </div>
				       <div class="file-path-wrapper form-group">
				         <input class="form-control file-path validate"  type="text" placeholder="" name="vo_imagen" >
				       </div>
				    </div>
					<div class="form-group">
						<button name="accion" value="c" class="btn btn-primary">Registrar</button>
					</div>
				</form>

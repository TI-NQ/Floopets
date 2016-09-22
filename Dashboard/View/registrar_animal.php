<?php
require_once("../Model/conexion.php");
 require_once("../Model/raza.class.php");
 require_once("../Model/organizacion.class.php");
$raza = Gestion_raza::ReadAll();
$organizacion = Gestion_organizacion::ReadAll();


// echo $cu[0];
 ?>
<form action="../Controller/animal.controller.php" method="POST">
	<div class="input-field col s12 m6 l6" style="z-index:1;">
				<select name="ra_cod_raza">
					<option value="" disabled selected>raza</option>
					<?php
							foreach ($raza as $row){
									echo "<option value='".$row["ra_cod_raza"]."'>".$row["ra_nombre"]."</option>";
							}
					 ?>
				</select>
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
	<div class="form-group">
		<label class="form-label">Nombre</label>
		<input class="form-control" type="text" name="ani_nombre" required>
	</div>
  <div class="form-group">
		<label class="form-label">Esterilizado</label>
		<input class="form-control" type="text" name="ani_esterilizado" required>
	</div>
  <div class="form-group">
		<label class="form-label">Edad</label>
		<input class="form-control" type="text" name="ani_edad" required>
	</div>
  <div class="form-group">
		<label class="form-label">Descripcion</label>
		<input class="form-control" type="text" name="ani_descripcion" required>
	</div>
  <div class="form-group">
		<label class="form-label">Microchip</label>
		<input class="form-control" type="text" name="ani_numero_microchip" required>
	</div>
<div class="form-group">
<h4>sexo</h4>
		 <p>
      <input name="ani_sexo[]" type="radio" id="Macho" />
      <label for="Macho">Macho</label>
    </p>
    <p>
      <input name="ani_sexo[]" type="radio" id="Hembra" />
      <label for="Hembra">Hembra</label>
    </p>
	</div>

	<div class="form-group">
		<button name="accion" value="c" class="btn btn-primary">Registrar</button>
	</div>
</form>

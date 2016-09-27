<?php
require_once("../Model/conexion.php");
 require_once("../Model/animal.class.php");
 $animal =  gestion_animal::ReadbyID(base64_decode($_REQUEST["an"]));
 if ($animal == "") {
   header("Location: dashboard.php");
 }

// echo $cu[0];
 ?>
<form action="../Controller/animal.controller.php" method="POST" enctype="multipart/form-data">
  <input type="hidden" readonly name="ani_cod_animal" required value="<?php echo $animal[0] ?>">
	<div class="form-group">
		<input class="form-control" type="hidden" name="ra_cod_raza" required  value="<?php echo $animal[1] ?>">
		<input class="form-control" type="hidden" name="org_cod_organizacion" required  value="<?php echo $animal[8] ?>">
	</div> 
	<div class="input-field col s6">
		<label class="form-label">Nombre</label>
		<input class="form-control" type="text" name="ani_nombre" value="<?php echo $animal[2] ?>" required>
	</div>
  <div class="input-field col s6">
		<label class="form-label">Edad</label>
		<input class="form-control" type="number" name="ani_edad" value="<?php echo $animal[4] ?>"required>
	</div>
  <div class="input-field col s6">
    <select class="form-control" name="ani_esterilizado" value="<?php echo $animal[3] ?>">
      <option disabled selected>Seleccione una Opcion</option>
      <option value="si">Esterilizada</option>
      <option value="no">Sin Esterilizar</option>
    </select>
    <label class="form-label">Esterilizacion</label>
	</div>
  <div class="input-field col s6">
		<label class="form-label">Microchip</label>
		<input class="form-control" type="text" name="ani_numero_microchip" value="<?php echo $animal[6] ?>"required>
	</div>
  <div class="input-field col s12">
		<label class="form-label">Descripcion</label>
		<input class="form-control" type="text" name="ani_descripcion" value="<?php echo $animal[5] ?>"required>
	</div>
    
    

<div class="input-field col s6">
<h4>sexo</h4>
<p>
    <input name="ani_sexo[]" value="<?php echo $animal[7] ?>"type="radio" id="Macho" />
    <label for="Macho">Macho</label>
  </p>
  <p>
    <input name="ani_sexo[]" value="<?php echo $animal[7] ?>"type="radio" id="Hembra" />
    <label for="Hembra">Hembra</label>
  </p>
  	<input name="org_cod_organizacion" value="<?php echo $mi_organizacion[1]?>" hidden></input>
	</div>
	<div class="file-field input-field col s12">
				<div class="btn">
					<span>Imagenes</span>
					<input type="file" name="ani_imagen[]" class="form-control">
				</div>
				<div class="file-path-wrapper form-group">
					<input class="form-control file-path validate"  type="text" placeholder="Puede ingresas mas de una imagen" name="ani_imagen" value="<?php echo $animal[9] ?>">
				</div>
			</div>

	<div class="form-group">
		<button name="accion" value="u" class="btn btn-primary">Actualizar</button>
	</div>
</form>

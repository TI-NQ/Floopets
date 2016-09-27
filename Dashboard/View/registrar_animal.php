<?php

	//Validacion inicio de session
	if(!isset($_SESSION["usu_cod_usuario"])){
    	$msn = base64_encode("Debe iniciar sesion primero!");
		$tm=base64_encode("Advertencia");

    	header("Location: ../../index.php?ms=".$msn."tm=".$tm);
	};
	require_once("../Model/conexion.php");
 	require_once("../Model/raza.class.php");
 	require_once("../Model/organizacion.class.php");
 	require_once("../Model/usuarios.class.php");
	$raza = Gestion_raza::ReadAll();
	$mi_organizacion=Gestion_usuarios::Mi_Organizacion($_SESSION["usu_cod_usuario"]);

	


// echo $cu[0];
 ?>
 <h4 class="center animated zoomIn">Nueva Mascota</h4>
<form id="form" class="animated zoomIn" action="../Controller/animal.controller.php" method="POST" enctype="multipart/form-data">
	<div class="input-field col s12 m6 l6" style="z-index:1;">
				<select name="ra_cod_raza">
					<option disabled selected>Seleccione una Opcion</option>
					<?php
							foreach ($raza as $row){
									echo "<option value='".$row["ra_cod_raza"]."'>".$row["ra_nombre"]."</option>";
							}
					 ?>
				</select>
        <label>Raza</label>
			</div>
			 <div class="input-field col s12 m6 l6" style="z-index:1;">
				<select name="org_cod_organizacion">
					<option disabled selected>Seleccione una Opcion</option>
					<?php
							foreach ($organizacion as $row){
									echo "<option value='".$row["org_cod_organizacion"]."'>".$row["org_nombre"]."</option>";
							}
					 ?>
				</select>
        <label>Fundacion</label>
			</div> 
	<div class="input-field col s6">
		<label class="form-label">Nombre</label>
		<input class="form-control" type="text" name="ani_nombre" required>
	</div>
  <div class="input-field col s6">
		<label class="form-label">Edad</label>
		<input class="form-control" type="number" name="ani_edad" required>
	</div>
  <div class="input-field col s6">
    <select class="form-control" name="ani_esterilizado">
      <option disabled selected>Seleccione una Opcion</option>
      <option value="si">Esterilizada</option>
      <option value="no">Sin Esterilizar</option>
    </select>
    <label class="form-label">Esterilizacion</label>
	</div>
  <div class="input-field col s6">
		<label class="form-label">Microchip</label>
		<input class="form-control" type="text" name="ani_numero_microchip" required>
	</div>
  <div class="input-field col s12">
		<label class="form-label">Descripcion</label>
		<input class="form-control" type="text" name="ani_descripcion" required>
	</div>
    
    

<div class="input-field col s6">
<h4>sexo</h4>
<p>
    <input name="ani_sexo[]" type="radio" id="Macho" />
    <label for="Macho">Macho</label>
  </p>
  <p>
    <input name="ani_sexo[]" type="radio" id="Hembra" />
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
					<input class="form-control file-path validate"  type="text" placeholder="Puede ingresas mas de una imagen" name="ani_imagen" >
				</div>
			</div>

<div class="input-field col s12">
		<button name="accion" value="c" class="btn btn-primary">Registrar</button>
	</div>
</form>

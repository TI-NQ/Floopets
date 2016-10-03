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
	require_once("../Model/tipo_animal.class.php");
	$tipo_mascota=Gestion_tipo_animal::ReadAll();
	$raza = Gestion_raza::ReadAll();
	$mi_organizacion=Gestion_usuarios::Mi_Organizacion($_SESSION["usu_cod_usuario"]);

// print_r($mi_organizacion);


// echo $cu[0];
 ?>
 <script>
			$(document).ready(function() {
				$("#tipo_mascota").change(function(){
						var tipo_mascota = $("#tipo_mascota").val();
						$.post("con_raza.php", {tm: tipo_mascota}, function(result){
								$("#raza").html(result);
								$('#ra_cod_raza').material_select();
						});
				});
        $('.valida').click(function() {
                if ($('#fotos').val() == ''){
                  swal("MENSAJE DE FLOOPETS", "Selecciona una imagen", "info");
                  return false
                } else {
                    return true
                }
            });
  		});

			</script>

<form id="form" onsubmit="return valida()" class="animated zoomIn" action="../Controller/animal.controller.php" method="POST" enctype="multipart/form-data">
 <h4 class="center animated zoomIn">Nueva Mascota</h4>
	<div class="input-field col s12" style="z-index:1;">
		<div class="row">
			<div class="input-field col s6">
				<select id="tipo_mascota" name="tipo_mascota">
					<option disabled selected>Seleccione una Opcion</option>
					<?php
							foreach ($tipo_mascota as $row){
									echo "<option value='".$row[0]."'>".$row[1]."</option>";
							}
					 ?>
				</select>
        <label>Tipo de mascota</label>
			</div>
			<div class="input-field col s6" name="ra_cod_raza" id="raza">

			</div>
		</div>

			</div>
			<div class="input-field col s6">
				<label class="form-label">Nombre</label>
        <label id="campo1"></label>
				<input class="form-control" type="text" name="ani_nombre" id="nombre" required>
			</div>
			<div class="input-field col s6">
				<label class="form-label">Color</label>
				<input class="form-control" type="text" name="ani_color" required>
			</div>
			<div class="input-field col s6">
				<label class="form-label">Tamaño</label>
				<input class="form-control" type="text" name="ani_tamanio" required>
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
    <input name="ani_sexo[]" value="Macho" type="radio" id="Macho" />
    <label for="Macho">Macho</label>
  </p>
  <p>
    <input name="ani_sexo[]" value="Hembra" type="radio" id="Hembra" />
    <label for="H">Hembra</label>
  </p>
  </div>
  	<input name="org_cod_organizacion" value="<?php echo $mi_organizacion[1]?>" hidden>

	<div class="file-field input-field col s12">
				<div class="btn">
					<span>Imagenes</span>
					<input type="file" name="ani_imagen[]" class="form-control">
				</div>
				<div class="file-path-wrapper form-group">
					<input class="form-control file-path validate" id="fotos" type="text" placeholder="Puede ingresas mas de una imagen" name="ani_imagen" >
				</div>
			</div>

<div class="input-field col s12">
		<button name="accion" value="c" class="btn btn-primary right valida" id="btn-envio">Registrar</button>
	</div>

</form>

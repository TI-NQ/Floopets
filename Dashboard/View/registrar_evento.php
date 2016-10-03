


<?php
	require_once("../Model/conexion.php");
	require_once("../Model/tipo_evento.class.php");
	$eve = Gestion_tipo_evento::ReadAll();
?>
<script type="text/javascript">
$(document).ready(function()
    {
 		$("#fecha_fin").change(function() {
					fecha_inicio = $('#fecha_inicio').val();
					fecha_fin = $('#fecha_fin').val();
           if(fecha_fin < fecha_inicio){
						 $("#fecha_f").text("Debes seleccionar una fecha mayor a "+fecha_inicio);
					}else {
						$("#fecha_f").text("");
					}
         });
				 $("#hora_fin").change(function() {
		 					fecha_inicio = $('#fecha_inicio').val();
		 					fecha_fin = $('#fecha_fin').val();
							hora_fin = $('#hora_fin').val();
							hora_inicio = $('#hora_inicio').val();
		          if (hora_fin < hora_inicio && fecha_fin == fecha_inicio){
		 						 $("#hora_f").text("Debes seleccionar una hora mayor a "+hora_inicio);
		 					}else {
		 						$("#hora_f").text("");
		 					}
		          });
});
</script>
<script type="text/javascript">
function validacion() {
  fecha_inicio = $('#fecha_inicio').val();
  hora_inicio = $('#hora_inicio').val();
  fecha_fin = $('#fecha_fin').val();
  hora_fin = $('#hora_fin').val();
	tipo_evento = $('#tipo_evento').val();
  nombre = $('#nombre').val();
	descripcion_evento = $('#descripcion_evento').val();
	imagen = $('#imagenes').val();
	direccion = $('#direccion').val();
	fecha_actual = "<?php echo date('Y-m-d')?>";
	hora_actual = "<?php echo date('H:i');?>";
	if (hora_inicio < hora_actual) {
		$("#hora_ini").text("Debes seleccionar una hora mayor");
    $('#hora_inicio').focus();
    return false;
	}if (fecha_fin < fecha_inicio) {
		$("#fecha_f").text("Debes seleccionar una fecha mayor a "+fecha_inicio);
    $('#fecha_fin').focus();
    return false;
	}
	if (hora_fin < hora_inicio && fecha_fin == fecha_inicio) {
		$("#hora_f").text("Debes seleccionar una hora mayor a "+hora_inicio);
    $('#hora_fin').focus();
    return false;
	}
  if (fecha_inicio == "") {
    $("#fecha-ini").text("Este campo es obligatorio");
    $('#fecha_inicio').focus();
    return false;
  }if (hora_inicio == "") {
    $("#hora_ini").text("Este campo es obligatorio");
    $('#hora_inicio').focus();
    return false;
  }if (fecha_fin == "") {
    $("#fecha_f").text("Este campo es obligatorio");
    $('#fecha_fin').focus();
    return false;
  }if (hora_fin == "") {
    $("#hora_f").text("Este campo es obligatorio");
    $('#hora_fin').focus();
    return false;
  }if (tipo_evento == "" || tipo_evento == null) {
    $("#tipo_e").text("Selecciona un tipo de evento");
    $('#tipo_evento').focus();
    return false;
  }if (nombre == "") {
    $("#nombre_eve").text("Este campo es obligatorio");
    $('#nombre').focus();
    return false;
  }if (descripcion_evento == "") {
    $("#descripcion_e").text("Este campo es obligatorio");
    $('#descripcion_evento').focus();
    return false;
  }
	if (imagen == "") {
    $("#v_imagen").text("Debes seleccionar una imagen");
    return false;
  }if (direccion == "") {
    $("#direcc").text("Este campo es obligatorio");
    $('#direccion').focus();
    return false;
  }
	else {
    return true;
  }
};

</script>

 <!-- <?php
	if(isset($_GET["m"]))
	{
		echo "<script>swal( '".$_GET["m"]."');</script>";
	}
 ?> -->


<div class="row">
<form class="col s12 animated zoomIn" action="../Controller/evento.controller.php" method="POST" enctype="multipart/form-data" id="form">
	<h3>Registrar Evento</h3>

	<div class="row">
		<h5 class="center grey lighten-4">Fecha y Hora del Evento</h5>
		<div class="input-field col s3">
				<label>Fecha Inicio</label><br>
				<input type="date" name="eve_fecha" min="<?php echo date('Y-m-d');?>" value="<?php echo date('Y-m-d');?>" id="fecha_inicio" >
				<span id="fecha-ini" class="red-text accent-3 left"></span>
		</div>
		<div class="input-field col s3">
				<label>Hora Inicio</label><br>
				<input type="time" name="eve_hora" value="<?php echo date('H:i');?>" id="hora_inicio">
				<span id="hora_ini" class="red-text accent-3 left"></span>
		</div>

		<div class="input-field col s3">
			<label>Fecha Fin</label><br>
			<input type="date" name="eve_fecha_hasta" min="<?php echo date('Y-m-d');?>" id="fecha_fin">
			<span id="fecha_f" class="red-text accent-3 left"></span>
		</div>
		<div class="input-field col s3">
				<label>Hora Fin</label><br>
				<input type="time" name="eve_hora_hasta" id="hora_fin">
				<span id="hora_f" class="red-text accent-3 left"></span>
		</div>

	</div>

	<div class="row">
        <div class="input-field col s6">

					<select  name="te_cod_tipo_evento" id="tipo_evento">
						<option  disabled selected>Seleccione el Tipo de Evento</option>
							<?php
								foreach ($eve as $row) {
									echo "<option value = '".$row["te_cod_tipo_evento"]."'>".$row["te_nombre"]."</option>";
								}
							 ?>
					</select>
					<span id="tipo_e" class="red-text accent-3 left"></span>
        </div>
        <div class="input-field col s6">
					<label>Titulo del Evento</label>
					<input type="text" name="eve_nombre" id="nombre">
					<span id="nombre_eve" class="red-text accent-3 left"></span>
        </div>
      </div>

			<div class="row">
				<div class="input-field col s12">
							 <textarea id="descripcion_evento" class="materialize-textarea"  name="eve_descripcion" ></textarea>
							 <label for="descripcion_evento">Descripción del Evento</label>
							 <span id="descripcion_e" class="red-text accent-3 left"></span>
						 </div>

			</div>

		<div class="row">
			<div class="file-field col s6">
					<div class="btn left" id="btnlogin">
						<span>Adjuntar Imágenes</span>
						<input type="file" name="eve_imagen[]">
					</div>
					<span id="v_imagen" class="red-text accent-3 left"></span>
					<div class="file-path-wrapper">
						<input class="file-path validate" type="text" name="eve_imagen" id="imagenes" hidden>
					</div>
				</div>
			<div class="input-field col s6">
				<label>Dirección</label>
				<input type="text" name="eve_direccion"  placeholder="Use # y -" id="direccion">
				<span id="direcc" class="red-text accent-3 left"></span>

			</div>
					<!-- <input type="hidden" value="" name="Geo_x" id="ltn">
								<input type="hidden" value="" name="Geo_y" id="lng"> -->
						<!-- <div class="input-field col s16">
							<select id="first_name" type="text" class="validate" required name="eve_estado">
								<option value=""disabled selected>Seleccione un Estado</option>
								<option value="pendiente">Pendiente</option>
								<option value="publicado">Publicado</option>
								<option value="terminado">Terminado</option>
							</select>
						</div> -->
						<input type="text" name="eve_estado" value="Pendiente" hidden>


		</div>
		<div class="col s11">
			<button name="accion" value="c" class="btn btn-primary btn-envia"  id="btnlogin" onclick="return validacion()">Guardar</button>
		</div>

</form>
</div>

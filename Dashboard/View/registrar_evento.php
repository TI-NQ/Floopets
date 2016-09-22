


<?php
	require_once("../Model/conexion.php");
	require_once("../Model/tipo_evento.class.php");
	$eve = Gestion_tipo_evento::ReadAll();
?>

<form action="../Controller/evento.controller.php" method="POST" enctype="multipart/form-data">
	<h1>Registrar Evento</h1>

	<div class="form-group">

		<label>Tipo evento:</label>
		<select name="te_cod_tipo_evento" required>
				<?php
					foreach ($eve as $row) {
						echo "<option value = '".$row["te_cod_tipo_evento"]."'>".$row["te_nombre"]."</option>";
					}
				 ?>
		</select>
		</div>
		<br>
		<div class="form-group">
		<label class="form-label">nombre</label>
		<input class="form-control" type="text" name="eve_nombre" required>
	</div>
		<br>
		<div class="form-group">
		<label class="form-label">direccion</label>
		<input class="form-control" type="text" name="eve_direccion" required>
	</div>
		<br>
		<div class="col s12 m12">
              <p class="center">fecha</p>
               <label>desde</label>
                  <input type="date" id="demo" name="eve_fecha" required>
                  <label>Hasta</label>
                  <input type="date" id="demo" name="eve_fecha_hasta" required>                 
            </div>
		<br>
		<div class="col s12 m12">
              <p class="center">Horario</p>
               <label>desde</label>
                  <input type="time" id="demo" name="eve_hora" required>
                  <label>Hasta</label>
                  <input type="time" id="demo" name="eve_hora_hasta" required>                 
            </div>
		<br>
		<div class="form-group">
		<label class="form-label">descripcion</label>
		<input class="form-control" type="text" name="eve_descripcion" required>
	</div>
		<br>
			<!-- <input type="hidden" value="" name="Geo_x" id="ltn"> 
            <input type="hidden" value="" name="Geo_y" id="lng"> -->
            <div class="input-field col s12">
          <select id="first_name" type="text" class="validate" required name="eve_estado"required><option value="">estado</option>
            <option value="pendiente">pendiente</option>
            <option value="publicado">publicado</option>
            <option value="terminado">terminado</option>
          </select>
        </div>
		<div class="file-field input-field col s12">
		    <div class="btn">
		      <span>imagen</span>
		      <input type="file" name="eve_imagen[]">
		    </div>
		    <div class="file-path-wrapper">
		      <input class="file-path validate"  type="text" placeholder="Puede subir mas de una imagen" name="eve_imagen"  >
		    </div>
		  </div>
	<div class="form-group">
		<button name="accion" value="c" class="btn btn-primary">Registrar</button>
	</div>
</form>

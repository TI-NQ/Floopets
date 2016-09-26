<?php 
	require_once("../Model/conexion.php");
    require_once("../Model/evento.class.php");
	$evento=Gestion_evento::ReadbyID(base64_decode($_REQUEST["eve"]));
	require_once("../Model/tipo_evento.class.php");
	$eve = Gestion_tipo_evento::ReadAll();
 ?>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<form action="../Controller/evento.controller.php" method="POST" enctype="multipart/form-data">
	<h1>Registrar Evento</h1>
	<input class="file-path validate"  type="hidden" name="eve_cod_evento" value="<?php echo $evento[0] ?>" >
	<div class="form-group">	

		<label>Tipo evento:</label>
		<select name="te_cod_tipo_evento"  required>
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
		<input class="form-control" type="text" name="eve_nombre" value="<?php echo $evento[2] ?>"  required>
	</div>
		<br>
		<div class="form-group">
		<label class="form-label">direccion</label>
		<input class="form-control" type="text" name="eve_direccion" value="<?php echo $evento[3] ?>" required>
	</div>
		<br>
		<div class="col s12 m12">
              <p class="center">fecha</p>
               <label>desde</label>
                  <input type="date" id="demo" name="eve_fecha" value="<?php echo $evento[4] ?>"  required>
                  <label>Hasta</label>
                  <input type="date" id="demo" name="eve_fecha_hasta" value="<?php echo $evento[5] ?>"  required>                 
            </div>
		<br>
		<div class="col s12 m12">
              <p class="center">Horario</p>
               <label>desde</label>
                  <input type="time" id="demo" name="eve_hora" value="<?php echo $evento[6] ?>"  required>
                  <label>Hasta</label>
                  <input type="time" id="demo" name="eve_hora_hasta" value="<?php echo $evento[7] ?>"  required>                 
            </div>
		<br>
		<div class="form-group">
		<label class="form-label">descripcion</label>
		<input class="form-control" type="text" name="eve_descripcion" value="<?php echo $evento[8] ?>"  required>
	</div>
		<br>
			<!-- <input type="hidden" value="" name="Geo_x" id="ltn"> 
            <input type="hidden" value="" name="Geo_y" id="lng"> -->
            <div class="input-field col s12">
          <select id="first_name" type="text" class="validate" required name="eve_estado" value="<?php echo $evento[12] ?>"required>
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
		      <input class="file-path validate"  type="text" placeholder="Puede subir mas de una imagen" name="eve_imagen" value="<?php echo $evento[9] ?>" >
		    </div>
		  </div>
	<div class="form-group">
		<button name="accion" value="u" class="btn btn-primary">Actualizar</button>
	</div>
</form>

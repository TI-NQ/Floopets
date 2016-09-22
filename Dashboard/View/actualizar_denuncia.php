<?php
require_once("../Model/conexion.php");
 require_once("../Model/denuncia.class.php");
 $denuncia =  Gestion_denuncia::ReadbyID(base64_decode($_REQUEST["dn"]));
 ?>
<form action="../Controller/denuncia.controller.php" method="POST">
  <input type="hidden" readonly name="de_cod_denuncia" required value="<?php echo $denuncia[0] ?>">
  <div class="form-group">
    <label>Tipo denuncia:</label>
    <select name="td_cod_tipo_denuncia" required>
        <option value="" selected>Seleccione una opcion</option>
        <?php
          require_once("../Model/tipo_denuncia.class.php");
          $den = Gestion_tipo_denuncia::ReadAll();
          foreach ($den as $row) {
            echo "<option value ='".$row["td_cod_tipo_denuncia"]."'>".$row["td_nombre"]."</option>";
          }
         ?>
    </select>
	</div>
	<div class="form-group">
		<label class="form-label">Descripcion</label>
		<input class="form-control" type="text" name="de_descripcion" required  value="<?php echo $denuncia[2] ?>">
	</div>
  <div class="form-group">
		<label class="form-label">Contacto</label>
		<input class="form-control" type="text" name="de_contacto" required  value="<?php echo $denuncia[3] ?>">
	</div>
  <div class="form-group">
		<label class="form-label">Telefono</label>
		<input class="form-control" type="number" name="de_telefono" required  value="<?php echo $denuncia[4] ?>">
	</div>
  <div class="form-group">
		<label class="form-label">Nombre de mascota</label>
		<input class="form-control" type="text" name="de_nombre" required  value="<?php echo $denuncia[5] ?>">
	</div>
	<div class="form-group">
		<!-- <label class="form-label">Fecha</label> -->
		<input class="form-control" type="hidden" name="de_fecha" required  value="<?php echo date("Y-m-d"); ?>" min="<?php echo date("Y-m-d"); ?>">
	</div>
	<div class="form-group">
    <div class="file-field input-field col s12 m6">
                    <div class="btn">
                      <span>Imagen</span>
                      <input type="file" multiple name="Imagen_Upload[]">
                    </div>
                    <div class="file-path-wrapper">
                      <input class="file-path validate"  type="text" placeholder="" name="de_imagen" value="<?php echo $denuncia[7] ?>" readonly>
                    </div>
      </div>    	
    <div class="form-group col m6">
      <label class="form-label">Estado :</label>
      <input class="form-control" type="text" name="de_estado" required  value="<?php echo $denuncia[8] ?>">
    </div>
  <div class="form-group">
		<button name="accion" value="u" class="btn btn-primary">Actualizar</button>
	</div>
</form>

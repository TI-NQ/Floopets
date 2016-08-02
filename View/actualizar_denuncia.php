<?php 
require_once("../Model/conexion.php");
 require_once("../Model/denuncia.class.php");
 $denuncia =  Gestion_denuncia::ReadbyID(base64_decode($_REQUEST["dn"]));
 ?>
<form action="../Controller/denuncia.controller.php" method="POST">
<input type="hidden" readonly name="de_cod_denuncia" required value="<?php echo $denuncia[0] ?>">
<input type="hidden" class="form-control" name="usu_cod_denuncia" required  value="<?php echo $denuncia[1] ?>">
	<div class="form-group">
		<label class="form-label">descripcion</label>
		<input class="form-control" type="text" name="de_descripcion" required  value="<?php echo $denuncia[2] ?>">
	</div>
	<div class="form-group">
		<label class="form-label">fecha</label>
		<input class="form-control" type="date" name="de_fecha" required  value="<?php echo $denuncia[3] ?>">
	</div>
	<div class="form-group">
		<button name="accion" value="u" class="btn btn-primary">Actualizar</button>
	</div>
</form>

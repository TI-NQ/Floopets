<?php
session_start();
  require_once("../Model/conexion.php");
  require_once("../Model/usuarios.class.php");
  require_once("../Model/rol.class.php");


  //Traemos la variable de Session usu_cod_usuario
   $rol = Gestion_rol::ReadAll();
  $us =  Gestion_usuarios::Readbyusu(base64_decode($_REQUEST["us"]));

?>
<form action="../Controller/usuarios.controller.php" method="POST" enctype="multipart/form-data">
		<input class="form-control"  hidden name="usu_cod_usuario" required readonly value="<?php echo $us[0]?>">
		

	<div class="form-group">
		<label class="form-label">Nombre :</label>
		<input class="form-control" type="text" name="usu_nombre" required value="<?php echo $us[1]?>">
	</div>
	<div class="form-group">
		<label class="form-label">Apellido :</label>
		<input class="form-control" type="text" name="usu_apellido" required value="<?php echo $us[2]?>">
	</div>
	<div class="form-group">
		<label class="form-label">Telefono :</label>
		<input class="form-control" type="number" name="usu_telefono" required value="<?php echo $us[3]?>">
	</div>
	<div class="form-group">
		<label class="form-label">Cedula :</label>
		<input class="form-control" type="number" name="usu_cedula" required value="<?php echo $us[4]?>">
	</div>
	<div class="form-group">
		<label class="form-label">Email :</label>
		<input class="form-control" type="email" name="usu_email" required value="<?php echo $us[5]?>">
	</div>
	<div class="form-group">
    <input name="cod_rol" value="Usuario"hidden>

	</div>
	<div class="form-group">
			<label>Contraseña :</label>
			<input class="form-control" type="number" name="usu_clave" required value="<?php echo $us[7]?>">
	</div>
	<div class="file-field input-field col s12 m12 form-group" style="margin-top:10px;">
               <div class="btn" id="btnlogin" >
                 <span>imagen</span>
                 <input type="file" name="usu_imagen[]" class="form-control">
               </div>
               <div class="file-path-wrapper form-group">
                 <input class="form-control file-path validate"  type="text" placeholder="" value="<?php echo $us[8]?>" name="usu_imagen" >
               </div>
            </div>
 
	<div class="form-group">
		<button name="accion" value="u" class="btn btn-primary">Actualizar</button>
	</div>
</form>

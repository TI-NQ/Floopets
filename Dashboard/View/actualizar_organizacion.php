<?php
	require_once("../Model/conexion.php");
    require_once("../Model/organizacion.class.php");
	$organizacion=Gestion_organizacion::ReadbyID(base64_decode($_REQUEST["org"]));
 ?>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

<div class="container">

<h3>Actualizar Organización</h3>

</div>
<br><br>
<form id="form" class="col s12" action="../Controller/organizacion.controller.php" method="POST">
  		<div class="row">
				<div class="row">
				<input type="hidden" name="org_cod_organizacion"value="<?php echo $organizacion[0] ?>" id="org_telefono" required>
				<input type="hidden" name="to_cod_tipo_organizacion"value="<?php echo $noticia[1] ?>" id="org_telefono" required>

				</div>
				<div class="row">
					<div class="input-field col s12">
						<input type="text" name="org_nombre" id="org_nombre"value="<?php echo $organizacion[2] ?>" required>
						<label for="org_nombre">Nombre Organizacion</label>
					</div>
				</div>
				<div class="row">
        	<div class="input-field col s12">
          <textarea id="textarea" class="materialize-textarea"value="<?php echo $organizacion[3] ?>" name="org_descripcion"></textarea>
          <label for="textarea">Descripcion Fundación</label>
      </div>
				</div>
				<div class="row">
					<div class="input-field col s12 m6 l6">
						<input type="email" name="org_email" id="org_email" value="<?php echo $organizacion[5] ?>"required>
								<label for="org_email">Correo Electronico</label>
	        </div>
					<div class="input-field col s12 m6 l6">
						<input type="number" name="org_telefono"value="<?php echo $organizacion[6] ?>" id="org_telefono" required>
								<label for="org_telefono">Telefono</label>
	        </div>
					<div class="input-field col s12 m6 l6">
						<input type="text" name="org_nit" id="org_nit"value="<?php echo $organizacion[4] ?>"required>
								<label for="org_nit">Nit</label>
	        </div>
					<div class="input-field col s12 m6 l6">
						<input type="text" name="org_direccion" id="org_direccion" value="<?php echo $organizacion[7] ?>"required>
								<label for="org_direccion">Direccion</label>
	        </div>
	        <div class="file-field input-field col s12 m6">
                      <div class="btn">
                        <span>Logo</span>
                        <input type="file" name="Imagen_Logo">
                      </div>
                      <div class="file-path-wrapper">
                          <input name="Logo"  id="demo" class="file-path validate"value="<?php echo $organizacion[8] ?>" type="text">
                      </div>
                  </div>
				</div>
				<a href="<?=$_SERVER['HTTP_REFERER'] ?>" class="waves-effect waves-light btn grey darken-2 left">Cancelar</a>
				<button class="waves-effect waves-light  btn right " name="accion" value="u" style="margin-right: 50px;">Actualizar</button>
  		</div>
	</form>

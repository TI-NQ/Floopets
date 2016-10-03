<?php
	require_once("../Model/conexion.php");
  require_once("../Model/donacion.php");
	require_once("../Model/organizacion.class.php");
	require_once("../Model/tipo_donacion.class.php");
$organizacion = Gestion_organizacion::ReadAll();
	$tipo_donacion = Gestion_tipo_donacion::ReadAll();

?>

<script type="text/javascript">
function validacion() {

  asunto = $('#asunto').val();
  descripcion = $('#descripcion').val();
  fecha = $('#descripcion').val();
  organizacion = $('#organizacion').val();

   if (asunto == "") {
    $("#asunto_don").text("Debe llenar el campo asunto");
    $('#asunto').focus();
    return false;
  }

  if (descripcion == "") {
    $("#descripcion_donacion").text("Debe llenar el campo descripcion");
    $('#descripcion').focus();
    return false;
  }

  if (fecha == "") {
    $("#fecha_don").text("Debe seleccionar una fecha superior");
    $('#fecha_donacion').focus();
    return false;
  }

  }if (organizacion == "" || organizacion == null) {
    $("#org_donacion").text("Seleccione una organizacion");
    $('#organizacion').focus();
    return false;
  }

  else {
    return true;
  }


};


</script>

<h2 class="center">Registrar Donación</h2>
<form id="form" action="../Controller/donacion.controller.php" method="post">
	<div class="form-group">
	        <label>Asunto</label>
	        <input type="text" name="don_nombre" id="asunto"></input>
	        <span id="asunto_don" class="red-text "></span>
	    </div>
			<div class="form-group">
				<label>Descripcion</label>
				<input type="text" name="don_descripcion" id="descripcion"></input>
		        <span id="descripcion_donacion" class="red-text "></span>
			</div>
<div class="input-field  col s6">
	<select name="org_cod_organizacion">
		<option disabled="" selected="">organizacion</option>
		<?php foreach ($organizacion as $fila) {
			echo "<option value='".$fila["org_cod_organizacion"]."'>".$fila["org_nombre"]."</option>";
		} ?>
	</select>
	<span id="org_donacion" class="red-text "></span>
</div>
<div class="input-field col s6">
	<select name="td_cod_tipo_donacion">
		<option disabled selected>Tipo de donacion</option>
		<?php foreach ($tipo_donacion as $fila) {
			echo "<option value='".$fila["td_cod_tipo_donacion"]."'>".$fila["td_nombre"]."</option>";
		} ?>
	</select>
	<span id="td_donacion" class="red-text "></span>
</div>
<div class="file-field input-field col s12 m6">
	 <div class="btn">
		 <span>Imagen</span>
		 <input type="file" class="form-control" name="don_imagen[]">
	 </div>
	 <div class="file-path-wrapper">
		 <input class="form-control file-path validate"  type="text" placeholder="" name="don_imagen">
	 </div>
</div>
	<button class="waves-effect waves-light btn boton right" name="accion" id="btnlogin" value="c" onclick="return validacion()">Registrar</button>
</form>
<!-- <form id="form" action="../Controller/donacion.controller.php" method="POST" enctype="multipart/form-data">
	<button name="accion" value="c"></button>




		<div class="form-group col s6">
                        <select  Required name="org_cod_organizacion" id="organizacion">
                            <option value="" disabled selected>Organizacion</option>
                            <?php



                                foreach ($organizacion as $row){
                                    echo "<option value='".$row["org_cod_organizacion"]."'>".$row["org_nombre"]."</option>";
                                }
                             ?>
                        </select>
                        <span id="org_donacion" class="red-text "></span>
                        <label></label>
                    </div>
                    <div class="form-group col s6">
                        <select  Required name="td_cod_tipo_donacion">
                            <option value="" disabled selected>Tipo donacion</option>
                            <?php


                                foreach ($tipo_donacion as $row){
                                    echo "<option value='".$row["td_cod_tipo_donacion"]."'>".$row["td_nombre"]."</option>";
                                }
                             ?>
                        </select>
                        <label></label>
                    </div>

										<div class="col s11" >
											<button class="waves-effect waves-light btn boton right" name="accion" id="btnlogin" value="c">Registrar</button>
										</div>
</form> -->

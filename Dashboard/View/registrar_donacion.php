<?php
	require_once("../Model/conexion.php");
	require_once("../Model/organizacion.class.php");
	require_once("../Model/tipo_donacion.class.php");
	$tipo_donacion = Gestion_tipo_donacion::ReadAll();
	$organizacion = Gestion_organizacion::ReadAll();
?>
<h2 class="center">Registrar Donación</h2>
<div class="row">
	<div class="fixed-action-btn horizontal click-to-toggle" style="position:relative;">
		<a class="btn-floating btn-large red darken-1 tooltipped" data-tooltip="Acciones" style="left:95%;">
			<i class="fa fa-plus" aria-hidden="true"></i>
		</a>
		<ul>
			<li><a href="dashboard.php?p=<?php echo base64_encode('actualizar_donacion')?>" class="btn-floating green tooltipped" data-tooltip="Actualizar"><i class="fa fa-pencil" aria-hidden="true"></i></a></li>
			<li><a href="dashboard.php?p=<?php echo base64_encode('gestion_donacion')?>" class="btn-floating blue tooltipped" data-tooltip="Gestionar"><i class="fa fa-cog" aria-hidden="true"></i></a></li>
		</ul>
	</div>
</div>
<form id="form" action="../Controller/donacion.controller.php" method="POST" enctype="multipart/form-data">
	<div class="form-group">
		<label>descripcion</label>
		<input type="text" name="don_descripcion"></input>
	</div>
    <div class="form-group">
        <label>fecha</label>
        <input type="date" name="don_fecha"></input>
    </div>
    <div class="file-field input-field col s12 m6">
       <div class="btn">
         <span>imagen</span>
         <input type="file" multiple name="Imagen_Upload[]">
       </div>
       <div class="file-path-wrapper">
         <input class="file-path validate"  type="text" placeholder="" name="don_imagen">
       </div>
    </div>

		<div class="form-group">
                        <select  Required name="org_cod_organizacion">
                            <option value="" disabled selected>organizacion</option>
                            <?php
                                 // Cargo la bd
                                 require_once("../Model/conexion.php");
                                // Cargo la clase tipo empresa
                                require_once("../Model/organizacion.class.php");

                                 $organizacion = Gestion_organizacion::ReadAll();

                                foreach ($organizacion as $row){
                                    echo "<option value='".$row["org_cod_organizacion"]."'>".$row["org_nombre"]."</option>";
                                }
                             ?>
                        </select>
                        <label></label>
                    </div>
                    <div class="form-group">
                        <select  Required name="td_cod_tipo_donacion">
                            <option value="" disabled selected>tipo donacion</option>
                            <?php
                                 // Cargo la bd
                                 require_once("../Model/conexion.php");
                                // Cargo la clase tipo donacion
                                require_once("../Model/tipo_donacion.class.php");

                                 $tipo_donacion = Gestion_tipo_donacion::ReadAll();

                                foreach ($tipo_donacion as $row){
                                    echo "<option value='".$row["td_cod_tipo_donacion"]."'>".$row["td_nombre"]."</option>";
                                }
                             ?>
                        </select>
                        <label></label>
                    </div>
                    <div class="form-group">
                        <select   name="usu_cod_usuario">
                            <option value="" disabled selected>usuario</option>
                            <?php
                                 // Cargo la bd
                                 require_once("../Model/conexion.php");
                                // Cargo la clase tipo empresa
                                require_once("../Model/usuarios.class.php");

                                 $usuarios = gestion_usuarios::ReadAll();

                                foreach ($usuarios as $row){
                                    echo "<option value='".$row["usu_cod_usuario"]."'>".$row["usu_nombre"]."</option>";
                                }
                             ?>
                        </select>
                        <label></label>
                    </div>
	<div class="form-group">
		<button name="accion" value="c" class="btn btn-primary">Registrar</button>
	</div>
</form> 

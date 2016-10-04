<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<form id="form"action="../Controller/raza.controller.php" method="POST" enctype="multipart/form-data">
	<h1>Registrar nueva raza</h1>
	<div class="form-group">
        <label class="form-label">Nombre de raza:</label>
        <input class="form-control" type="text" name="ra_nombre" required>
    </div>
		<div class="form-group">
                        <select  Required name="ta_cod_tipo_animal">
                            <option value="" disabled selected>tipo animal</option>
                            <?php
                                 // Cargo la bd
                                 require_once("../Model/conexion.php");
                                // Cargo la clase tipo empresa
                                require_once("../Model/tipo_animal.class.php");

                                 $tipo_animal = Gestion_tipo_animal::ReadAll();

                                foreach ($tipo_animal as $row){
                                    echo "<option value='".$row["ta_cod_tipo_animal"]."'>".$row["ta_nombre"]."</option>";
                                }
                             ?>
                        </select>
                        <label></label>
                    </div>
                    <div class="form-group">
                        <select  Required name="cu_cod_cuidado">
                            <option value="" disabled selected>cuidado</option>
                            <?php
                                 // Cargo la bd
                                 require_once("../Model/conexion.php");
                                // Cargo la clase raza
                                require_once("../Model/cuidado.class.php");

                                 $cuidado = Gestion_cuidado::ReadAll();

                                foreach ($cuidado as $row){
                                    echo "<option value='".$row["cu_cod_cuidado"]."'>".$row["cu_nombre"]."</option>";
                                }
                             ?>
                        </select>
                        <label></label>
                    </div>
<!-- <div class="form-group">
        <label class="form-label">Historia:</label>
        <input class="form-control" type="text" name="ra_historia" required>
    </div> -->
   <div class="file-field input-field col s12" >
       <div class="btn">
         <span>Galeria</span>
         <input type="file"  name="ra_imagen[]">
       </div>
       <div class="file-path-wrapper">
         <input class="file-path validate"  type="text" placeholder="Puede subir mas de una imagen" name="ra_imagen"  >
       </div>
		 </div>
	<div class="form-group">
		<button id="btnlogin"name="accion" value="c" class="btn btn-primary">Registrar</button>
	</div>
</form>

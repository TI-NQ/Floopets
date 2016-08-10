<form action="../Controller/adopcion.controller.php" method="POST">
	<div class="form-group">
		<label class="form-label">fecha</label>
		<input class="form-control" type="date" name="ado_fecha" required>
	</div>
	<div class="form-group">
		<label class="form-label">hora</label>
		<input class="form-control" type="time" name="ado_hora" required>
	</div>
	<div class="form-group">
       <div class="btn">
         <span>imagen</span>
         <input type="file" multiple name="Imagen_Upload[]">
       </div>
       <div class="file-path-wrapper">
         <input class="file-path validate"  type="text" placeholder="imagen" name="ado_imagen"  >
       </div>
    </div>
<div class="form-group">
                        <select  Required name="usu_cod_usuario">
                            <option value="" disabled selected>usuario</option>
                            <?php
                                 // Cargo la bd
                                 require_once("../Model/conexion.php");
                                // Cargo la clase tipo empresa
                                require_once("../Model/usuarios.class.php");

                                 $usuarios = gestion_usuarios::ReadAll();

                                foreach ($usuarios as $row){
                                    echo "<option value='".$row["usu_cod_usuario"]."'>".$row["nombre"]."</option>";
                                }
                             ?>
                        </select>
                        <label></label>
                    </div>
    <div class="form-group">
                        <select  Required name="ani_cod_animal">
                            <option value="" disabled selected>nombre</option>
                            <?php
                                 // Cargo la bd
                                 require_once("../Model/conexion.php");
                                // Cargo la clase tipo empresa
                                require_once("../Model/animal.class.php");

                                 $animal = gestion_animal::ReadAll();

                                foreach ($animal as $row){
                                    echo "<option value='".$row["ani_cod_animal"]."'>".$row["nombre"]."</option>";
                                }
                             ?>
                        </select>
                        <label></label>
                    </div>
    <div class="form-group">
        <button name="accion" value="c" class="btn btn-primary">Registrar</button>
    </div>
</form>
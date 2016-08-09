<form action="../Controller/tipo_animal.controller.php" method="POST">
	<div class="form-group">
		<label class="form-label">nombre</label>
		<input class="form-control" type="text" name="ta_nombre" required>
	</div>
	<div class="form-group">
		<label class="form-label">tamaño</label>
		<input class="form-control" type="text" name="tamano" required>
	</div>
	<div class="input-field col s12">
                        <select  Required name="cu_cod_cuidado">
                            <option value="" disabled selected>cuidado</option>
                            <?php
                                 // Cargo la bd
                                 require_once("../Model/conexion.php");
                                // Cargo la clase tipo empresa
                                require_once("../Model/cuidado.class.php");

                                 $tipo = Gestion_cuidado::ReadAll();

                                foreach ($tipo as $row){
                                    echo "<option value='".$row["cu_cod_cuidado"]."'>".$row["nombre"]."</option>";
                                }
                             ?>
                        </select>
                        <label></label>
                    </div>
	<div class="form-group">
		<button name="accion" value="c" class="btn btn-primary">Registrar</button>
	</div>
</form>
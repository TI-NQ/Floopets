<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<form action="../Controller/raza.controller.php" method="POST">
	<h1>Registrar Organización</h1>
	<div class="form-group">
		<label>nombre raza:</label>
		<input name="ra_nombre"></input>
		
		</div>
		<div class="input-field col s12">
                        <select  Required name="ta_cod_tipo_animal">
                            <option value="" disabled selected>tipo animal</option>
                            <?php
                                 // Cargo la bd
                                 require_once("../Model/conexion.php");
                                // Cargo la clase tipo empresa
                                require_once("../Model/tipo_animal.class.php");

                                 $tipo = Gestion_raza::ReadAll();

                                foreach ($tipo as $row){
                                    echo "<option value='".$row["ta_cod_tipo_animal"]."'>".$row["Nombre"]."</option>";
                                }
                             ?>
                        </select>
                        <label></label>
                    </div>

	</div>
	<div class="form-group">
		<button name="accion" value="c" class="btn btn-primary">Registrar</button>
	</div>
</form>

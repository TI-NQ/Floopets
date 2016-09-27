<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<form action="../Controller/noticias.controller.php" method="POST" enctype="multipart/form-data">
	<h1>Registrar Organización</h1>
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
        <label class="form-label">Titulo:</label>
        <input class="form-control" type="text" name="not_titulo" required>
    </div>
                    <div class="form-group">
        <label class="form-label">Portada:</label>
        <input class="form-control" type="text" name="not_portada" required>
    </div>
        <div class="form-group">
            <label class="form-label">Contenido:</label>
            <input class="form-control" type="text" name="not_contenido" required>
        </div>     
        <div class="form-group">
            <label class="form-label">palabras clave:</label>
            <input class="form-control" type="text" name="not_palabras_clave" required>
        </div>        

   <div class="file-field input-field col s12 m6">
       <div class="btn">
         <span>Galeria</span>
         <input type="file"  name="not_galeria[]">
       </div>
       <div class="file-path-wrapper">
         <input class="file-path validate"  type="text" placeholder="Puede subir mas de una imagen" name="not_galeria"  >
       </div>
	<div class="form-group">
		<button name="accion" value="c" class="btn btn-primary">Registrar</button>
	</div>
</form>


<?php 
require_once("../Model/conexion.php");
 require_once("../Model/noticias.class.php");
 $noticia =  Gestion_noticia::ReadbyID(base64_decode($_REQUEST["not"]));

// echo $cu[0];
 ?>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<form action="../Controller/noticias.controller.php" method="POST" enctype="multipart/form-data">
	<h1>Registrar Organización</h1>
	<input class="form-control" type="hidden" name="cod_noticia" value="<?php echo $noticia[0] ?>" required>
		 <div class="form-group">
                        <select   name="usu_cod_usuario" value="<?php echo $noticia[1] ?>">
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
        <input class="form-control" type="text" name="not_titulo" value="<?php echo $noticia[2] ?>" required>
    </div>
                    <div class="form-group">
        <label class="form-label">Portada:</label>
        <input class="form-control" type="text" name="not_portada" value="<?php echo $noticia[6] ?>" required>
    </div>
        <div class="form-group">
            <label class="form-label">Contenido:</label>
            <input class="form-control" type="text" name="not_contenido" value="<?php echo $noticia[3] ?>" required>
        </div>     
        <div class="form-group">
            <label class="form-label">palabras clave:</label>
            <input class="form-control" type="text" value="<?php echo $noticia[7] ?>" name="not_palabras_clave" required>
        </div>        

   <div class="file-field input-field col s12 m6">
       <div class="btn">
         <span>Galeria</span>
         <input type="file"  name="not_galeria[]">
       </div>
       <div class="file-path-wrapper">
         <input class="file-path validate"  type="text" placeholder="Puede subir mas de una imagen" name="not_galeria" value="<?php echo $noticia[5] ?>" >
       </div>
	<div class="form-group">
		<button name="accion" value="u" class="btn btn-primary">Actualizar</button>
	</div>
</form>
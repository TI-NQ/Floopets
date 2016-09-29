<?php 
    session_start();
    //Validacion inicio de session
    if(!isset($_SESSION["usu_cod_usuario"])){
        $msn = base64_encode("Debe iniciar sesion primero!");
        $tm=base64_encode("Advertencia");

        header("Location: ../../index.php?ms=".$msn."tm=".$tm);
    };
 ?>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<form action="../Controller/noticias.controller.php" method="POST" enctype="multipart/form-data">
	<h1>Registrar Noticia</h1>
		 <div class="form-group">
                        <input hidden  value="<?php echo $_SESSION["usu_cod_usuario"];?>" name="usu_cod_usuario">
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
       </div>
	<div class="form-group">
		<button name="accion" value="c" class="btn btn-primary">Registrar</button>
	</div>
</form>

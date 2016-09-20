<?php

  require_once("../Model/conexion.php");
  require_once("../Model/denuncia.class.php");
  $denuncia = Gestion_denuncia::ReadAll();
?>
<!-- <!DOCTYPE html>
<html>
<head>
  <title></title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />
    <link type="text/css" rel="stylesheet" href="../../WebFloopets/materialize/css/materialize.css"  media="screen,projection"/>
    <meta charset="UTF-8">       
    <link rel="stylesheet" type="text/css" href="../../WebFloopets/font-awesome-4.6.3/css/font-awesome.css">
    <script type="text/javascript" src="../../WebFloopets/js/jquery-1.12.1.min.js"></script>
    <script type="text/javascript" src="../../WebFloopets/materialize/js/materialize.js"></script>
    <link type="text/css" rel="stylesheet" href="recursos/css/estilos.css"> -->
    
<!-- </head>
<body -->
  <button type="button" name="button">
   <a href="registrar_denuncia.php" class="waves-light btn">Nuevo</a>
  </button>
<div>
<?php
      @$mensaje = $_REQUEST["m"];

      echo @$mensaje;

      foreach ($denuncia as $row)
      {
        echo"<div class='container descrip'>
                <div class='row'>
                  <div class='col l4 offset-l2 col m6'>
                      <div class='col l6'>
                        <label>Nombre de mascota</label>
                          <li>".$row["de_nombre"]."</li>
                      </div>
                      <div class='imagenmascota'>
                          <img class='img-circle' src=img/imagen_denuncia/".$row["de_imagen"].">                          
                      </div>
                      <div class='col l6'>
                        
                          <a href='../View/actualizar_denuncia.php?dn=".base64_encode($row["de_cod_denuncia"])."'>
                          <i class='small material-icons'>mode_edit</i>
                          </a>
                        
                      </div>
                      <div class='col l6'>
                        
                          <a href='../Controller/denuncia.controller.php?dn=".base64_encode($row["de_cod_denuncia"])."&accion=d'>
                          <i class='small material-icons'>delete</i>
                          </a>                        
                        
                      </div>                                            
                  </div>
                  <div class='col l4'>
                    <ul class='descrip'>
                      <label>Codigo</label>
                          <li>".$row["de_cod_denuncia"]."</li>
                      <label>Tipo de denuncia</label>
                          <li>".$row["td_nombre"]."</li>
                      <label>Descripcion</label>
                            <li>".$row["de_descripcion"]."</li>
                      <label>Contacto</label>
                            <li>".$row["de_contacto"]."</li>
                      <label>Telefono</label>
                            <li>".$row["de_telefono"]."</li>                      
                      <label>Fecha de denuncia</label>
                            <li>".$row["de_fecha"]."</li>
                    </ul>
                    
                  </div>
                </div>
              </div>                
                      
          ";
      }

?>
</div>

<!-- </body>
</html> -->

<?php

  require_once("../Model/conexion.php");
  require_once("../Model/denuncia.class.php");
  $denuncia = Gestion_denuncia::ReadAll();
?>
<!DOCTYPE html>
<html>
<head>
  <title></title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />

    <link rel="shortcut icon" type="image/x-icon" href="../WebFloopets/images/title-web.ico">
    <!-- Bootstrap core CSS     -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Animation library for notifications   -->
    <link href="assets/css/animate.min.css" rel="stylesheet"/>

    <!--  Light Bootstrap Table core CSS    -->
    <link href="assets/css/light-bootstrap-dashboard.css" rel="stylesheet"/>


    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="assets/css/demo.css" rel="stylesheet" />


    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
    <link href="assets/css/pe-icon-7-stroke.css" rel="stylesheet" />

    <!-- estilos formularios y dashboard-->
    <link rel="stylesheet" href="assets/css/estilos.css">
</head>
<body>
  <button type="button" name="button">
   <a href="registrar_denuncia.php">Nuevo</a>
 </button>
<div>
<?php
      @$mensaje = $_REQUEST["m"];

      echo @$mensaje;

      foreach ($denuncia as $row)
      {
        echo"<div class='container'>
              <div class='row'>
                <div class='fto col-md-4'>
                <label>Foto</label>
                <div class='imagenmascota'><img src=img/imagen_denuncia/".$row["de_imagen"]."></div>
                </div>
                <div class='col-md-8 '>
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
                    <label>Nombre de mascota</label>
                          <li>".$row["de_nombre"]."</li>
                    <label>Fecha de denuncia</label>
                          <li>".$row["de_fecha"]."</li>
                  </ul>
                </div>
              </div>
            </div>

            <td>
                        <a href='../View/actualizar_denuncia.php?dn=".base64_encode($row["de_cod_denuncia"])."'>actualizar</a>

                        <a href='../Controller/denuncia.controller.php?dn=".base64_encode($row["de_cod_denuncia"])."&accion=d'>eliminar</a>

          </tr>";
      }

?>
</div>

</body>
</html>

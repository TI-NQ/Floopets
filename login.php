<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <!--Import Google Icon Font-->
  <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!--Import materialize.css-->
  <link type="text/css" rel="stylesheet" href="WebFloopets/materialize/css/materialize.css"  media="screen,projection"/>
  <link rel="shortcut icon" type="image/x-icon" href="WebFloopets/images/title-web.ico">
  <link rel="stylesheet" type="text/css" href="WebFloopets/sweetalert/dist/sweetalert.css">
  <script type="text/javascript" src="WebFloopets/js/jquery-1.12.1.min.js"></script>
  <title>Iniciar Sesion</title>
  <link rel="stylesheet" type="text/css" href="WebFloopets/css/style.css" media="all">
  <link href='http://fonts.googleapis.com/css?family=Roboto:900,900italic,500,400italic,100,700italic,300,700,500italic,100italic,300italic,400' rel='stylesheet' type='text/css'>
  <!-- <div id="fback"> -->
  <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
  <script type="text/javascript" src="WebFloopets/sweetalert/dist/sweetalert.min.js"></script>
</head>
<body>
  <script type="text/javascript">
      $(document).ready(function()
      {

        <?php
          if(isset($_GET["m"]) and isset($_GET["tm"]))
          {
            echo "swal('".base64_decode($_GET["m"])."','','".base64_decode($_GET["tm"])."');";
          }
         ?>
        <!-- //ajax -->
         $("#Cc").keyup(function()
         {
             var usuario = $("#Cc").val();
             var accion = "existe_usuario";
             $.post("Dashboard/Controller/usuarios.controller.php", {Cc: usuario, accion: accion},

             function(result)
             {
                 $("#resultadobusqueda").html(result.msn);
                 if(result.ue == true)
                 {
                   $(".boton").prop("disabled",true);
                 }
                 else
                 {
                     $(".boton").prop("disabled",false);
                 }
             }, "json");
         });
      })
  </script>

    <div class="girisback"></div>
    <div class="kayitback"></div>
  </div>
  <a class="waves-effect waves-light btn" style="margin-top:25px !important;" id="btnlogin" href="index.php">Sitio Web</a>
  <div id="textbox">
    <div class="toplam">
      <div class="left">
        <div id="ic">
          <h2>Registrarse</h2>
          <div class="row">
            <form class="col s12" action="Dashboard/Controller/usuarios.controller.php" method="POST" enctype="multipart/form-data">
              <div class="row">
               <input type="hidden" value="1" name="cod_rol"/>
                <div class="input-field col s6">
                  <input id="nombre" name="usu_nombre" type="text" class="validate" required>
                  <label for="nombre">Nombre</label>
                </div>
                <div class="input-field col s6">
                  <input id="apellido" type="text" name="usu_apellido" class="validate" required>
                  <label for="apellido">Apellido</label>
                </div>
                <div class="input-field col s12">
                  <input class="col s12" id="telefono" type="number" name="usu_telefono" class="validate" required>
                  <label for="telefono">Telefono</label>
                </div>
                <div class="input-field col s12 m12">
                  <input id="Cc" id="usu_cedula" type="number" class="validate" name="usu_cedula" required>
                  <label for="usu_cedula">Documento de identidad</label>
                  <span id="resultadobusqueda" class="red-text accent-3 left"></span>
              </div>
              <div class="input-field col s12 m12" style="height:5px;">

              </div>
                <div class="input-field col s12">
                  <input id="email" type="email" name="usu_email" class="validate" required>
                  <label for="email">Correo Electronico</label>
                </div>

                <div class="input-field col s12">
                  <input id="contraseña" type="password" name="usu_clave" class="validate" required>
                  <label for="contraseña">Contraseña</label>
                </div>
                <div class="file-field input-field col s12 m12 form-group">
               <div class="btn " id="btnlogin" >
                 <span>imagen</span>
                 <input type="file" multiple name="usu_imagen[]" class="form-control">
               </div>
               <div class="file-path-wrapper form-group">
                 <input class="form-control file-path validate"  type="text" placeholder="" name="usu_imagen" >
               </div>
            </div>
                <div class="">
                  <button class="waves-effect waves-light btn boton" id="btnlogin" name="accion" value="c">Registrarse</button>
                  <a class="waves-effect waves-light btn" id="moveright">Iniciar sesion</a>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
      <div class="right">
        <div id="ic">
          <img src="WebFloopets/images/logo-negro.png" id="logo" />
          <h2>Iniciar sesion</h2>
          <div class="row">
            <form class="col s12" action="Dashboard/Controller/validarusuario.controller.php" method="post">
              <div class="row">
                <div class="input-field col s12">
                  <input id="usuario" type="email" name="usu_email" class="validate">
                  <label for="usuario">Email</label>
                </div>
                <div class="input-field col s12">
                  <input id="contraseña" type="password" name="usu_clave" class="validate">
                  <label for="contraseña">Contraseña</label>
                </div>
                <div class="">
                  <button class="waves-effect waves-light btn" id="btnlogin" name="accion" value="r">Iniciar sesion</button>
                  <a class="waves-effect waves-light btn" id="moveleft">Registrarse</a>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script type="text/javascript" src="WebFloopets/js/kayitgiris.js"></script>
  <script type="text/javascript" src="WebFloopets/materialize/js/materialize.js"></script>
  </body>
</html>

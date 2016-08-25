<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <!--Import Google Icon Font-->
  <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!--Import materialize.css-->
  <link type="text/css" rel="stylesheet" href="WebFloopets/materialize/css/materialize.css"  media="screen,projection"/>
  <link rel="shortcut icon" type="image/x-icon" href="WebFloopets/images/title-web.ico">
  <script type="text/javascript" src="WebFloopets/js/jquery-1.12.1.min.js"></script>
  <title>Iniciar Sesion</title>
  <link rel="stylesheet" type="text/css" href="WebFloopets/css/style.css" media="all">
  <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
</head>
<body>
  <link href='http://fonts.googleapis.com/css?family=Roboto:900,900italic,500,400italic,100,700italic,300,700,500italic,100italic,300italic,400' rel='stylesheet' type='text/css'>
  <div id="fback">
    <div class="girisback"></div>
    <div class="kayitback"></div>
  </div>
  <div id="textbox">
    <div class="toplam">
      <div class="left">
        <div id="ic">
          <h2>Registrarse</h2>
          <div class="row">
            <form class="col s12" action="Dashboard/Controller/usuarios.controller.php" method="POST">
              <div class="row">
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
                <div class="input-field col s12">
                  <input class="col s12" id="cedula" type="number" name="usu_cedula" class="validate" required>
                  <label for="cedula">Cedula</label>
                </div>
                <div class="input-field col s12">
                  <input id="email" type="email" name="usu_email" class="validate" required>
                  <label for="email">Correo Electronico</label>
                </div>
                <div class="input-field col s12">
                  <select name="cod_rol" required>
                    <option value="" disabled selected>Selecciona un rol</option>
                    <?php
                      require_once("Dashboard/Model/conexion.php");
                      require_once("Dashboard/Model/rol.class.php");

                      $rol = gestion_rol::ReadAll();
                      foreach ($rol as $row) {
                        echo "<option value = '".$row["cod_rol"]."'>".$row["rol_nombre"]."</option>";
                      }
                     ?>
                  </select>
                </div>
                <div class="input-field col s12">
                  <input id="contraseña" type="password" name="usu_clave" class="validate" required>
                  <label for="contraseña">Contraseña</label>
                </div>
                <div class="">
                  <button class="waves-effect waves-light btn" id="btnlogin" name="accion" value="c">Registrarse</button>
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
                  <button class="waves-effect waves-light btn" id="btnlogin" >Iniciar sesion</button>
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
  <script type="text/javascript">
    $(document).ready(function() {
      $('select').material_select();
    });
  </script>
</body>
</html>

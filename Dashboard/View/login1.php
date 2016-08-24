<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <!--Import Google Icon Font-->
  <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!--Import materialize.css-->
  <link type="text/css" rel="stylesheet" href="../WebFloopets/materialize/css/materialize.css"  media="screen,projection"/>
  <link rel="shortcut icon" type="image/x-icon" href="../WebFloopets/images/title-web.ico">
  <script type="text/javascript" src="../WebFloopets/js/jquery-1.12.1.min.js">
  </script>
  <script type="text/javascript" src="../WebFloopets/materialize/js/materialize.js"></script>
  <title>Iniciar Sesion</title>
  <link rel="stylesheet" type="text/css" href="../WebFloopets/css/style.css" media="all">
  <link rel="stylesheet" type="text/css" href="../WebFloopets/css/normalize.css" media="all">
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
            <form class="col s12">
              <div class="row">
                <div class="input-field col s6">
                  <input id="nombre" type="text" class="validate">
                  <label for="nombre">Nombre</label>
                </div>
                <div class="input-field col s6">
                  <input id="apellido" type="text" class="validate">
                  <label for="apellido">Apellido</label>
                </div>
                <div class="input-field col s12">
                  <input class="col s12" id="telefono" type="number" class="validate">
                  <label for="telefono">Telefono</label>
                </div>
                <div class="input-field col s12">
                  <input class="col s12" id="cedula" type="number" class="validate">
                  <label for="cedula">Cedula</label>
                </div>
                <div class="input-field col s12">
                  <input id="password" type="password" class="validate">
                  <label for="password">Password</label>
                </div>
                <div class="input-field col s12">
                  <input id="email" type="email" class="validate">
                  <label for="email">Email</label>
                </div>
              </div>
            </form>
          </div>
          <button id="moveright">Iniciar</button>
        </div>
      </div>
      <div class="right">
        <div id="ic">
          <img src="../WebFloopets/images/logo-negro.png" id="logo" />
          <h2>Iniciar sesion</h2>
          <div class="row">
            <form class="col s12" action="index.html" method="post">
              <div class="row">
                <div class="input-field col s6">
                  <input id="usuario" type="text" class="validate">
                  <label for="usuario">Usuario</label>
                </div>
                <div class="input-field col s6">
                  <input id="contraseña" type="text" class="validate">
                  <label for="contraseña">Contraseña</label>
                </div>
                <input type="submit" value="Login" class="girisbtn" id="btnlogin" tabindex="100">
              </div>
            </form>
            <button id="moveleft">Registrarse</button>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script type="text/javascript" src="../WebFloopets/js/kayitgiris.js"></script>
</body>
</html>
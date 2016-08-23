<!DOCTYPE html>
<html>
<head>
<link rel="shortcut icon" type="image/x-icon" href="../WebFloopets/images/title-web.ico">
  <title>Iniciar Sesion</title>
  <link rel="stylesheet" type="text/css" href="../WebFloopets/css/style.css" media="all">
  <link rel="stylesheet" type="text/css" href="../WebFloopets/css/normalize.css" media="all">
  <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
</head>
<body>
 <link href='http://fonts.googleapis.com/css?family=Roboto:900,900italic,500,400italic,100,700italic,300,700,500italic,100italic,300italic,400' rel='stylesheet' type='text/css'>

<div id="fback"><div class="girisback"></div><div class="kayitback"></div></div>

<div id="textbox">
  <div class="toplam">

    <div class="left">
      <div id="ic">
        <h2>Registrarse</h2>
        <!-- <p></p> -->
        <form id="girisyap" name="signup_form" id="signup_form" method="post" enctype="multipart/form-data" onsubmit="return false;">

          <div class="yarim form-group">
            <label class="control-label" for="inputNormal">Nombre</label>
            <input type="text" name="signup_username" id="signup_username" class="bp-suggestions form-control" cols="50" rows="10" ></input>
          </div>
        <div class="yarim sn form-group">
          <label class="control-label" for="inputNormal">Apellido</label>
          <input type="text" name="field_1" id="field_1" value="" class="bp-suggestions form-control" cols="50" rows="10"></input>
      </div>
      <div class="form-group">
        <label class="control-label" for="inputNormal">Telefono</label>
        <input type="number" name="signup_email" id="signup_email" class="bp-suggestions form-control" cols="50" rows="10"></input>
    </div>
    <div class="form-group">
      <label class="control-label" for="inputNormal">Cedula</label>
      <input type="number" name="signup_password" id="signup_password" value="" class="bp-suggestions form-control" cols="50" rows="10" ></input>
  </div>
  <div class="form-group soninpt">
    <label class="control-label" for="inputNormal">Correo Electronico</label>
    <input type="email" name="field_2" id="field_2" class="bp-suggestions form-control" cols="50" rows="10"></input>
</div>
<input type="submit" name="signup_submit" id="signup_submit" value="Registrarse" class="girisbtn"  />
</form>

<button id="moveright">Login</button>
</div>
</div>

<div class="right">
  <div id="ic">
    <h2>Login</h2>
    <!-- <p></p> -->
    <form name="login-form" id="girisyap" id="sidebar-user-login" method="post" onsubmit="return false;">

      <div class="form-group">
        <label class="control-label" for="inputNormal">Usuario</label>
        <input type="text" name="log" class="bp-suggestions form-control" cols="50" rows="10" ></input>
      </div>
    <div class="form-group soninpt">
      <label class="control-label" for="inputNormal">Contraseña</label>
      <input type="password" name="pwd" class="bp-suggestions form-control" cols="50" rows="10"></input>
  </div>
  <input type="submit" value="Login" class="girisbtn" tabindex="100" />
  </form>

<button id="moveleft">Registrarse</button>
</div>
</div>

</div>
</div>
<script type="text/javascript" src="../WebFloopets/js/kayitgiris.js"></script> 
</body>
</html>
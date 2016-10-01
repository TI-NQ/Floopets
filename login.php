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
  <link rel="stylesheet" type="text/css" href="WebFloopets/font-awesome-4.6.3/css/font-awesome.css">
  <script type="text/javascript" src="WebFloopets/js/jquery-1.12.1.min.js"></script>
  <title>Iniciar Sesion</title>
  <link rel="stylesheet" type="text/css" href="WebFloopets/css/style.css" media="all">
  <link href='http://fonts.googleapis.com/css?family=Roboto:900,900italic,500,400italic,100,700italic,300,700,500italic,100italic,300italic,400' rel='stylesheet' type='text/css'>
  <!-- <div id="fback"> -->
  <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
  <script type="text/javascript" src="WebFloopets/sweetalert/dist/sweetalert.min.js"></script>
<script >
          $(document).ready(function()
        {
          <?php
            if(isset($_GET["m"]) and isset($_GET["tm"]))
            {
              echo "swal('".base64_decode($_GET["m"])."','','".base64_decode($_GET["tm"])."');";
            }
           ?>
        });

      </script>
</head>
<body>
  <script type="text/javascript">
  function correo() {
    nombre = $('#nombre').val();
    apellido = $('#apellido').val();
    telefono = $('#telefono').val();
    Cc = $('#Cc').val();
    email = $('#emailr').val();
    contraseña=$('#contraseña').val();
    contrase2=$('#validacontra').val();
    expresion = /\w+@\w+\.+[a-z]/;
    if (nombre == "") {
      $("#confirman").text("Este campo es obligatorio");
      $('#nombre').focus();
      return false;
    }if(nombre != "") {
      $("#confirman").text("");
    }if (apellido == "") {
      $("#confirmaa").text("Este campo es obligatorio");
      $('#apellido').focus();
      return false;
    }if(apellido != "") {
      $("#confirmaa").text("");
    }
    if (telefono == "") {
      $("#confirmat").text("Este campo es obligatorio");
      $('#telefono').focus();
      return false;
    }if(telefono != "") {
      $("#confirmat").text("");
    }if (Cc == "") {
      $("#resultadobusqueda").text("Este campo es obligatorio");
      $('#Cc').focus();
      return false;
    }if(Cc != "") {
      $("#resultadobusqueda").text("");
    }if (email == "") {
      $("#confirmaemail").text("Este campo es obligatorio");
      $('#emailr').focus();
      return false;
    }if(email != "") {
      $("#confirmaemail").text("");
    }if (contraseña == "") {
      $("#confirmacontras").text("Este campo es obligatorio");
      $('#contraseña').focus();
      return false;
    }if(contraseña != "") {
      $("#confirmacontras").text("");
    }

    if (contrase2 != contraseña) {
      $("#validac").text("Las contraseñas no coinciden");
      $('#validacontra').focus();
      return false;
    }
    if(!expresion.test(email)){
      $("#confirmaemail").text("Por favor ingrese un correo valido. Ejemplo (floopets@mascotas.com)");
      $('#emailr').focus();
      return false;
    }else {
      return true;
    }
  }
  function validar(e) {
  tecla = (document.all) ? e.keyCode : e.which;
  if (tecla==8) return true;
  patron =/[A-Za-z\s]/;
  te = String.fromCharCode(tecla);
  return patron.test(te);
  }
  function solonumeros(e)
    {
    var keynum = window.event ? window.event.keyCode : e.which;
    if ((keynum == 8) || (keynum == 46))
    return true;
    return /\d/.test(String.fromCharCode(keynum));
  };


  </script>
  <script type="text/javascript">
      $(document).ready(function()
      {
        $('.modal-trigger').leanModal();
        $('.boton').prop('disabled', true);
        <!-- //ajax -->
         $("#Cc").change(function()
         {
             var usuario = $("#Cc").val();
             var accion = "existe_usuario";
             $.post("Dashboard/Controller/usuarios.controller.php", {Cc: usuario, accion: accion},

             function(result)
             {
                 $("#resultadobusqueda").html(result.msn);
             }, "json");
         });
         $( '#terminoscheck' ).on( 'change', function() {
           if( $(this).is(':checked') ){
             $('.boton').prop('disabled', false);
           }else{
             $('.boton').prop('disabled', true);
           }
 });
 $("#emailr").change(function()
 {
     var email = $("#emailr").val();
     var accion = "valida_correo";
     $.post("Dashboard/Controller/usuarios.controller.php", {em: email, accion: accion},

     function(result)
     {
         $("#confirmaemail").html(result.m);
         if(result.emi == true)
         {
           $(".boton").prop("disabled",true);
         }
     }, "json");
 });
 $('#validacontra').keyup(function(){
   var contra = $('#contraseña').val();
   var contra2 = $('#validacontra').val();
   if (contra2 != contra) {
     $("#validac").text("Las contraseñas no coinciden");
     return false;
   }else {
     $("#validac").text("");
   }
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
               <input type="hidden" value="5" name="cod_rol"/>
                <div class="input-field col s6">
                  <input id="nombre" name="usu_nombre" type="text" class="validate" required onkeypress="return validar(event)">
                  <label for="nombre">Nombre</label>
                  <span id="confirman" class="red-text accent-3 col s12 left"></span>
                </div>
                <div class="input-field col s6">
                  <input id="apellido" type="text" name="usu_apellido" class="validate" required onkeypress="return validar(event)">
                  <label for="apellido">Apellido</label>
                  <span id="confirmaa" class="red-text accent-3 col s12 left"></span>
                </div>
                <div class="input-field col s6">
                  <input class="col s12" id="telefono" type="text" name="usu_telefono" class="validate" required onkeypress="return solonumeros(event);">
                  <label for="telefono">Telefono</label>
                  <span id="confirmat" class="red-text accent-3 col s12 left"></span>
                </div>
                <div class="input-field col s6">
                  <input id="Cc" id="usu_cedula" type="text" class="validate" name="usu_cedula" required onkeypress="return solonumeros(event);">
                  <label for="usu_cedula">Documento de identidad</label>
                  <span id="resultadobusqueda" class="red-text accent-3 col s12 left"></span>
              </div>
              <!-- <div class="input-field col s12 m12" style="height:5px;">

              </div> -->
                <div class="input-field col s12">
                  <input id="emailr" type="email" name="usu_email" class="validate" required>
                  <label for="emailr">Correo Electronico</label>
                  <span id="confirmaemail" class="red-text accent-3 col s12 left"></span>
                </div>

                <div class="input-field col s12">
                  <input id="contraseña" type="password" name="usu_clave" class="validate" required>
                  <label for="contraseña">Contraseña</label>
                  <span id="confirmacontras" class="red-text accent-3 col s12 left"></span>
                </div>
                <div class="input-field col s12">
                  <input id="validacontra" type="password" class="validate" required>
                  <label for="contraseña">Vuelve a escribir la contraseña</label>
                  <span id="validac" class="red-text accent-3 col s12"></span>
                </div>
                <div class="file-field input-field col s12 m12 form-group" style="margin-top:10px;">
               <div class="btn" id="btnlogin" >
                 <span>imagen</span>
                 <input type="file" multiple name="usu_imagen[]" class="form-control">
               </div>
               <div class="file-path-wrapper form-group">
                 <input class="form-control file-path validate"  type="text" placeholder="" name="usu_imagen" >
               </div>
            </div>
            <div class="row">
              <p>
      <input type="checkbox" id="terminoscheck" />
      <label for="terminoscheck">Aceptar <a href="#terminos" class="modal-trigger">terminos y condiciones</a></label>
    </p>
  <div id="terminos" class="modal modal-fixed-footer">
    <div class="modal-content">
      <img src="WebFloopets/images/logo-negro.png" class="img-terminos">
      <h4 class="center">TÉRMINOS Y CONDICIONES</h4>
      <div class="col s12">
        <p>
          La presente declaración de derechos y responsabilidades contiene la declaración
          del servicio que rigen nuestra relación con los usuarios y con todos aquellos que
          interactúan con FLOOPETS, Así como al usarlo o al acceder al aplicativo, muestras tu
          conformidad con esta declaración.
        </p>
          <div class="row">
            <div class="col s12">
              <h6>1. Privacidad</h6><p>
                Tu privacidad es muy importante para nosotros. Por esta razón nos
                aseguramos de que ninguna persona externa tenga acceso a tu información,
                solo podrás compartir tu información con las fundaciones registradas solo
                si decides llenar alguno de sus formularios para aplicar en alguna de sus opciones.
              </p>

            </div>
          </div>
<div class="row">

            <h6>2. Compartir el contenido y la información</h6>
            <div class="col s10 offset-s1">
              <li><p>
                Cuando eliminas contenido, este se borra por completo del aplicativo,
                 no obstante, entiendes que es posible que el contenido eliminado pertenezca
                  en copias de seguridad durante un plazo de tiempo razonable, pero
                  (No estará disponible para terceros).

              </p></li>

            </div>
            <div class="col s10 offset-s1">
              <li><p>
                Cuando envías información a las fundaciones, estas pueden
                tener sus propios términos y condiciones de privacidad y al
                enviarlos aceptas condiciones externas, que se salen de nuestra
                jurisdicción.
              </p></li>

            </div>
            <div class="col s10 offset-s1">
              <li><p>
                Al publicar denuncias te comprometes a que tu contenido
                es verídico, y de no ser así podría conllevar a consecuencias jurídicas.

              </p></li>

            </div>

          </div>
          <div class="row">
            <h6>Seguridad</h6>
            <p>
              Hacemos todo lo posible para que Floopets sea un sitio seguro,
              pero no podemos garantizarlo completamente, por esta razón necesitamos
              de tu ayuda para que así sea, lo que implica los siguientes compromisos
              de tu parte.
            </p>
            <div class="col s10 offset-s1">
              <li><p>No publicaras denuncias falsas estas serán catalogadas como (spam).</p></li>
              <li><p>No recopilarás información o contenido de otros usuarios ni accederás
                 utilizando medios automáticos (como bots de recolección, robots o
                 software de pruebas carga) sin nuestro permiso previo.</p></li>
              <li><p>No publicaras virus ni código malicioso de ningún tipo.</p></li>
              <li><p>No pedirás información de inicio de sesión ni accederás a una cuenta perteneciente a otro usuario.</p></li>
              <li><p>No utilizarás Floopets para actos ilícitos, engañosos, malintencionados o discriminatorios.</p></li>
              <li><p>Mantendrás la información de contacto exacta y actualizada.</p></li>
              <li><p>No compartirás tu contraseña, no dejarás que otra persona acceda a tu cuenta, ni harás
                nada que pueda poner en peligro la seguridad de tu cuenta.</p></li>
            </div>
          </div>
          <div class="row">
            <h6> Protección de los derechos de otras personas.</h6>
            <div class="col s10 offset-s1">
              <li><p>
                Podemos retirar cualquier contenido o información que publiques en Floopets si consideramos que infringe esta Declaración o nuestras políticas.

              </p></li>
              <li><p>
                No publicarás contenido ni realizarás ninguna acción en Floopets que infrinja o vulnere los derechos de terceros o que vulnere la ley de algún modo.

              </p></li>
            </div>
          </div>
          <div class="row">
            <h6>Dispositivos móviles y otros dispositivos.
</h6>
<div class="col s10 offset-s1">
  <li><p>
    Actualmente ofrecemos nuestros servicios para dispositivos móviles de forma gratuita, pero ten en cuenta que se aplicarán las tarifas normales de tu operador.

  </p></li>
  <li><p>
    No publicarás contenido ni realizarás ninguna acción en Floopets que infrinja o vulnere los derechos de terceros o que vulnere la ley de algún modo.

  </p></li>
  <li><p>
    No modificarás nuestro código fuente ni llevarás a cabo con él trabajos derivados, como descompilar o intentar de algún otro modo extraer dicho código fuente.

  </p></li>
</div>
          </div>
          <div class="row">
            <h6>Terminación</h6>
            <div class="col s10 offset-s1">
              <li><p>
                Si infringes los términos y condiciones podríamos impedirte el acceso a Floopets total o parcialmente.

              </p></li>
            </div>
          </div>
          <div class="col s10 offset-s1 fin">
<h5>Al acceder a Floopets, nos permites recopilar y usar tu contenido e información de acuerdo con nuestras políticas.</h5>
          </div>
      </div>
    </div>
    <div class="modal-footer">
      <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat ">Salir</a>
    </div>
  </div>
            </div>
                <div >
                  <button class="waves-effect waves-light btn boton" id="btnlogin" name="accion" value="c" onclick="return correo()">Registrarse</button>
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

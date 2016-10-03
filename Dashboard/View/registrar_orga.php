<script type="text/javascript">
$(document).ready(function()
{
$("#Cc").change(function()
{
    var usuario = $("#Cc").val();
    var accion = "existe_usuario";
    $.post("../Controller/usuarios.controller.php", {Cc: usuario, accion: accion},

    function(result)
    {
        $("#resultadobusqueda").html(result.msn);
        if(result.ue == true)
        {
          $(".boton").prop("disabled",true);
        }else{
          $(".boton").prop("disabled",false);
        }
    }, "json");
});
$("#email").change(function()
{
    var email = $("#email").val();
    var accion = "valida_correo";
    $.post("../Controller/usuarios.controller.php", {em: email, accion: accion},

    function(result)
    {
        $("#confirmaemail").html(result.m);
        if(result.emi == true)
        {
          $(".boton").prop("disabled",true);
        }else{
          $(".boton").prop("disabled",false);
        }
    }, "json");
});
});
</script>
<script type="text/javascript">
function correo() {
  nombre = $('#nombre').val();
  apellido = $('#apellido').val();
  telefono = $('#telefono').val();
  Cc = $('#Cc').val();
  email = $('#email').val();
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
    $('#email').focus();
    return false;
  }if(email != "") {
    $("#confirmaemail").text("");
  }
  if(!expresion.test(email)){
    $("#confirmaemail").text("Por favor ingrese un correo valido. Ejemplo (floopets@mascotas.com)");
    $('#email').focus();
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
     <h3 class="center animated zoomIn">Nueva Organizacion</h3>

   <form id="form" class="col s12 animated zoomIn" action="../Controller/usuarios.controller.php" method="POST" enctype="multipart/form-data">
     <div class="row">
       <p class="red-text accent-3 left ">En el siguiente formulario se realiza el registro del administrador de la fundacion</p>

      <input type="hidden" value="6" name="cod_rol"/>
       <div class="input-field col s6">
         <input id="nombre" name="usu_nombre" type="text" class="validate" required onkeypress="return validar(event)">
         <label for="nombre">Nombre</label>
         <span id="confirman" class="red-text accent-3 left"></span>
       </div>
       <div class="input-field col s6">
         <input id="apellido" type="text" name="usu_apellido" class="validate" required onkeypress="return validar(event)">
         <label for="apellido">Apellido</label>
         <span id="confirmaa" class="red-text accent-3 left"></span>
       </div>
       <div class="input-field col s12 m12" style="height:5px;">

       </div>
       <div class="input-field col s6">
         <input class="col s12" id="telefono" type="text" name="usu_telefono" class="validate" required onkeypress="return solonumeros(event)">
         <label for="telefono">Telefono</label>
         <span id="confirmat" class="red-text accent-3 left"></span>
       </div>
       <div class="input-field col s6">
         <input id="Cc" id="usu_cedula" type="text" class="validate" name="usu_cedula" required onkeypress="return solonumeros(event)">
         <label for="usu_cedula">Documento de identidad</label>
         <span id="resultadobusqueda" class="red-text accent-3 left"></span>
     </div>
     <div class="input-field col s12 m12" style="height:5px;">

     </div>
       <div class="input-field col s12">
         <input id="email" type="email" name="usu_email" class="validate" required>
         <label for="email">Correo Electronico</label>
         <span id="confirmaemail" class="red-text accent-3 left"></span>
       </div>

       <div class="input-field col s6">
         <input id="contraseña" type="password" name="usu_clave" class="validate" value="1234" hidden>
       </div>
       <div class="file-field input-field col s12 m12 form-group" style="margin-top:10px;">
      <div class="file-path-wrapper form-group">
        <input class="form-control file-path validate"  type="text" name="usu_imagen" hidden>
      </div>
   </div>

       <div class="col s11" >
         <button class="waves-effect waves-light btn boton right" name="accion"  value="c" onclick="return correo()">Registrar</button>
       </div>
     </div>
   </form>

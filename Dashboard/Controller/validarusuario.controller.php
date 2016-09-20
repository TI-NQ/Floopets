<?php
  session_start();
  require_once("../Model/conexion.php");
  require_once("../Model/usuarios.class.php");


  $usu_email      = $_POST["usu_email"];
  $usu_clave      = $_POST["usu_clave"];

  try {
    $usuario = Gestion_Usuarios::ValidaUsuario($usu_email, $usu_clave);

    // El metodo count nos sirve para contar el numero de registros que retorno de la consulta
    $usuario_existe = count($usuario[0]);
    $clave_existe= count($usuario[7]);


    if($usuario_existe == 0||$clave_existe==0){
    // Header("Location: destino.php") redireccionar en php
    // Encriptacion a traves de base64_encode, base64_decode

       $msn = "Usuario o clave invalidos!";
       $tipo_msn = base64_encode("advertencia");

       header("Location:../../login.php?m=".$msn."&tm=".$tipo_msn);
    }else{

      // Creamos variables de SESSION
      $msn="Bienvenido ".$usuario[1]." ".$usuario[2];



      $_SESSION["usu_cod_usuario"]     = $usuario[0];
      $_SESSION["usu_nombre"]         = $usuario[1];
      $_SESSION["usu_apellido"]         = $usuario[2];
      $_SESSION["usu_telefono"]       = $usuario[3];
      $_SESSION["usu_cedula"]       = $usuario[4];
      $_SESSION["usu_email"]        = $usuario[5];
      $_SESSION["cod_rol"]         = $usuario[6];


     header("Location:../View/dashboard.php?m=".$msn);

    }
  } catch (Exception $e) {

   $msn = base64_encode("A ocurrido un error ".$e->getMessage());
   $tipo_msn = base64_encode("error");

   header("Location: ../login.php?m=".$msn."&tm=".$tipo_msn);
  }



?>

<?php
  session_start();
  require_once("../Model/conexion.php");
  require_once("../Model/usuarios.class.php");


  $usu_email      = $_POST["usu_email"];
  $usu_clave      = $_POST["usu_clave"];

  try {
    $usuario = Gestion_usuarios::ValidaUsuario($usu_email, $usu_clave);

    // El metodo count nos sirve para contar el numero de registros que retorno de la consulta
    $usuario_existe = count($usuario[0]);
    $clave_existe= count($usuario[7]);


    if($usuario_existe == 0||$clave_existe==0){
    // Header("Location: destino.php") redireccionar en php
    // Encriptacion a traves de base64_encode, base64_decode

      $msn = base64_encode("Usuario o Clave incorrectos");
      $tipo_msn = base64_encode("warning");

       header("Location: ../../login.php?m=".$msn."&tm=".$tipo_msn);
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
      if($usuario[6]==4 || $usuario[6]==6){
        $page = "../View/dashboard.php?p=".base64_encode("mi_perfil")."&m=".$msn;
        header("Location: $page");
      }
      // $page = "../View/dashboard.php?p=".base64_encode("mi_perfil")."&m=".$msn;

      elseif($_SESSION["cod_rol"] == 5){
            $organizacion = Gestion_usuarios::tieneorganizacion($_SESSION["usu_cod_usuario"]);

            if(($organizacion[0] == "")OR($organizacion[0] == null)){
              $page = "../View/dashboard.php?p=".base64_encode("registrar_organizacion");
              header("Location: ".$page);

      //$page = "../View/dashboard.php?p=".base64_encode("mi_perfil")."&m=".$msn;

            }else{
              $_SESSION["org_cod_organizacion"] = $organizacion[1];
              header("Location: ../View/dashboard.php?p=".base64_encode('mi_organizacion')."");
            }

          }


        //header("Location: ".$page);



    }
  } catch (Exception $e) {

   $msn = base64_encode("A ocurrido un error ".$e->getMessage());
   $tipo_msn = base64_encode("error");

   header("Location: ../login.php?m=".$msn."&tm=".$tipo_msn);
  }



?>

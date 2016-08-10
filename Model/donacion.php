<?php
    class Gestion_donacion
    {
        // Metodo Create()
        function Create($don_descripcion,$don_fecha,$don_imagen,$org_cod_organizacion,$td_cod_tipo_donacion,$usu_cod_usuario)
        {
            //Instanciamos y nos conectamos a la bd
            $conexion=floopets_BD::Connect();
            $conexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
            //Crear el query que vamos a realizar.
            $consulta ="INSERT INTO donacion (don_descripcion,don_fecha,don_imagen,org_cod_organizacion,td_cod_tipo_donacion,usu_cod_usuario) VALUES (?,?,?,?,?,?)";
            $query = $conexion->prepare($consulta);
            $query->execute(array($don_descripcion,$don_fecha,$don_imagen,$org_cod_organizacion,$td_cod_tipo_donacion,$usu_cod_usuario));
            floopets_BD::Disconnect();
        }
        function ReadAll()
        {
                //Instanciamos y nos conectamos a la bd
                $Conexion = floopets_BD::Connect();
                $Conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                //Crear el query que vamos a realizar
                $consulta = "SELECT * FROM donacion";
                $query = $Conexion->prepare($consulta);
                $query->execute();
                //Devolvemos el resultado en un arreglo
                //Fetch: es el resultado que arroja la consulta en forma de un vector o matriz segun sea el caso
                //Para consultar donde arroja mas de un dato el fatch debe ir acompañado con la palabra ALL
                $resultado = $query->fetchALL(PDO::FETCH_BOTH);
                return $resultado;
                floopets_BD::Disconnect();
        }
        function ReadbyID($don_cod_donacion)
            {
            //Instanciamos y nos conectamos a la bd
            $Conexion = floopets_BD::Connect();
            $Conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            //Crear el query que vamos a realizar
            $consulta = "SELECT * FROM donacion WHERE don_cod_donacion=?";
            $query = $Conexion->prepare($consulta);
            $query->execute(array($don_cod_donacion));
            //Devolvemos el resultado en un arreglo
            //Fetch: es el resultado que arroja la consulta en forma de un vector o matriz segun sea el caso
            //Para consultar donde arroja mas de un dato el fatch debe ir acompañado con la palabra ALL
            $resultado = $query->fetch(PDO::FETCH_BOTH);
            return $resultado;
            floopets_BD::Disconnect();
        }

        function Update($don_cod_donacion,$don_descripcion,$don_fecha,$don_imagen,$org_cod_organizacion,$td_cod_tipo_donacion)
        {
            //Instanciamos y nos conectamos a la bd
            $Conexion = floopets_BD::Connect();
            $Conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            //Crear el query que vamos a realizar
            $consulta = "UPDATE donacion SET don_descripcion=?,don_fecha=?,don_imagen=?,org_cod_organizacion=? WHERE don_cod_donacion = ?" ;
            $query = $Conexion->prepare($consulta);
            $query->execute(array($don_descripcion,$don_fecha,$don_imagen,$org_cod_organizacion,$don_cod_donacion));
            floopets_BD::Disconnect();
        }
            function Delete($don_cod_donacion)
            {
                //Instanciamos y nos conectamos a la bd
                $Conexion = floopets_BD::Connect();
                $Conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                //Crear el query que vamos a realizar
                $consulta = "DELETE FROM donacion WHERE don_cod_donacion = ?" ;
                $query = $Conexion->prepare($consulta);
                $query->execute(array($don_cod_donacion));
                floopets_BD::Disconnect();
        }

    }
?>

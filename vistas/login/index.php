<?php
    
        include_once PATH_HELPERS . '/database_helper.php';

        if ( isset($_POST["usr_user_name"] ) && isset($_POST["usr_password"] ) &&
            $_POST["usr_user_name"] != "" && $_POST["usr_password"] != ""){

            $conexion = getConexion();

            $consulta = "SELECT * " . 
                        "FROM usuarios " .
                        "WHERE usr_user_name = '" . $_POST["usr_user_name"] . "'" .
                        " AND usr_password = '" . $_POST["usr_password"] . "'";

            $resultado = $conexion->query ($consulta);

            if ($resultado->num_rows == 1){

                //OBTENGO EL NOMBRE DE USUARIO

                $usuario = $resultado->fetch_assoc();

                $_SESSION["usuario"] = $usuario["usr_user_name"];
                $_SESSION["id_usuario"] = $usuario["usr_id"];
                $_SESSION["nombre"] = $usuario["usr_name"];
                $_SESSION["apellido"] = $usuario["usr_apellido"];
                $_SESSION["email"] = $usuario["usr_email"];
            }

            else { ?>
                
                 <div class="alert alert-danger alert-dismissible fade show text-center m-0" role="alert">
                     <button type="button" class="close" data-dismiss="alert">&times;</button>
                        USUARIO Y/O CONTRASEÑA NO VÁLIDA.
                 </div>

    <?php    } 
        }

        $contenido_seccion = PATH_VIEWS . "/index/partials/jumbotron.inc.php";

        include(PATH_VIEWS . '/common/base.php');
?>

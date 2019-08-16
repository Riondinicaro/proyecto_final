<?php
  session_start();

  include ('config/config.php');

  $modulo = "index";

if ( isset($_REQUEST["m"]) )
  {
    if ($_REQUEST["m"] == "registrar" || $_REQUEST["m"] == "login"){

      switch( $_REQUEST["m"] ){

        case "registrar":
          $modulo = "registrar";
          break;

        case "login":
          $modulo = "login";
          break;

        case "default":
         echo "error404";
      }


    }

      else{

        if (isset($_SESSION["usuario"] ) ){

          switch ($_REQUEST["m"] ){

            case "registrar":
              $modulo = "registrar";
              break;

            case "login":
              $modulo = "login";
              break;

            case "logout":
              $modulo = "logout";
              break;

            case "autores":
              $modulo = "autores";
              break;

            case "libros":
              $modulo = "libros";
              break;

            case "editoriales":
              $modulo = "editoriales";
              break;

            case "show_libro":
              $modulo = "libro";
              break;

            case "show_autor":
              $modulo = "autor";
              break;

            case "default":
              echo "error404";
          }


        } else { ?>

          <div class="alert alert-dark alert-dismissible fade show text-center m-0" role="alert">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
                        DEBES INICIAR SESIÓN PARA ACCEDER A ESTE CONTENIDO 
          </div>

        <?php }

      }
  }
   
     include('vistas/' . $modulo . '/index.php'); 
?>
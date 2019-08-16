<?php
    session_start();

    include('../config/config.php');

    $modulo = "index";

    if ( isset($_REQUEST["m"]) )
    {
        
        switch( $_REQUEST["m"] ){


        	case "logout":
                $modulo = "logout";
                break;
                    
            case "default":
                echo "error404";

        }
    }

    include( PATH_VIEWS .'/admin/' . $modulo . '/index.php'); 

?>
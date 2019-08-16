<?php

    define('SITE_FOLDER', 'proyecto_final');

    define('ROOT_URL', strtolower(substr($_SERVER["SERVER_PROTOCOL"],0,5))=='https'?'https':'http'."://".$_SERVER['HTTP_HOST'] . "/" . SITE_FOLDER);

    define('SITE_ROOT', $_SERVER['DOCUMENT_ROOT'] . "/" . SITE_FOLDER) ;
    
    define("PATH_VIEWS", SITE_ROOT . "/vistas");

    define("PATH_HELPERS", SITE_ROOT . "/helpers");

    define("PATH_DAOS", SITE_ROOT . "/modelo/DAO");

    define("PATH_FILES", ROOT_URL . "/files");
    
    define("PATH_CSS", ROOT_URL . "/css");

    define("PATH_RECURSOS", ROOT_URL . "/resources");

    define("PATH_IMAGENES", ROOT_URL . "/resources/images");

    define("PATH_FONTS", ROOT_URL . "/resources/fonts");

    define("PATH_VENDOR", ROOT_URL . "/vendor");

?>
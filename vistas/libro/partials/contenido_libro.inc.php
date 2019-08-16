<?php

include_once( PATH_DAOS . "/librosDAO.php");
include_once( PATH_DAOS . "/autorDAO.php");

$registros = buscarLibro( $_REQUEST["id_libro"] );

$libro = mysqli_fetch_assoc($registros);

?>

<div id="body-libro" class="container-fluid">
    <div id="header-libro" class="row">
        <div class="col-md-4">
            <img id="libro" class="m-2 img-fluid img-thumbnail" src="<?=PATH_FILES. "/portadas_libro/" . $libro["portada_libro"]?>" />
        </div>



        <div class="col-md-6 my-5 p-2">
            <h2 class="libro">
                <?=$libro["titulo"] ?>
            </h2>
            <p class="libro">
                <?=$libro["resumen"] ?>
            </p>
        </div>
    </div>

        

        <div id="detalles" class="row justify-content-center">
            <h4 class="py-2 m-2">
            MÁS DETALLES DEL LIBRO
            </h4>
        </div>


        <div class="col-md-12 mx-2 p-2">
            <div class="row">
                <?php

                    $autores = obtenerAutoresLibro($_REQUEST["id_libro"]);

                   echo "<ul class='info-libro list-unstyled'>";
                   foreach ($autores as $autor){
                    echo "<li class='mx-2 py-2'>AUTOR: <a href='index.php?m=show_autor&id_autor=". $autor["id_autor"] . "'>" . $autor["nombre"] . " " . $autor ["apellido"] . "</a></li>";
                    echo "<li class='mx-2 py-2'>ISBN: " . $libro["isbn"] . "</li>";
                    echo "<li class='mx-2 py-2'>NÚMERO DE PÁGINAS: " . $libro["numero_paginas"] . "</li>";

                   }

                   echo "</ul>";
                ?>

            </div>
        </div>
</div>
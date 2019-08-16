<?php

include_once( PATH_DAOS . "/autorDAO.php");
include_once( PATH_DAOS . "/librosDAO.php");

$registros = buscarAutor( $_REQUEST["id_autor"] );

$autor = mysqli_fetch_assoc($registros);


?>
<div id="body-autor" class="container-fluid">
    <div id="header" class="row ">
        <div class="col-md-4 m-2 p-2">
            <img id="autor" class="m-2 img-fluid img-thumbnail" src="<?=PATH_FILES. "/autores/" . $autor["autor_img"]?>" />
        </div>

        <div class="col-md-6 my-5 p-2">
           <h2 class="autor-name">
               <?=$autor["nombre"] . " " . $autor["apellido"] ?>
           </h2>
           <p class="autor">
               <?=$autor["biografia"] ?>
           </p>
        </div>
    </div>
        

        
            <div id="otros" class="row justify-content-center">
                 <h4 class="title py-2 m-2">
                    TÍTULOS QUE TE PUEDEN INTERESAR
                 </h4>
             </div>

        
        

     <div class="col-md-12 mx-2 p-2 ">
        <div class="row">

            <?php
             $libros = obtenerLibrosAutor($_REQUEST["id_autor"]);
        

               if ($libros){

                foreach ($libros as $libro) {

                    crearCardLibro($libro['titulo'], $libro['isbn'], $libro['portada_libro'], $libro['id_libro'], $libro['id_genero'], $libro['numero_paginas'], $libro['resumen'],     $libro['id_editorial'],);    
                }
               }
            ?> 
        </div>
    </div>
</div>

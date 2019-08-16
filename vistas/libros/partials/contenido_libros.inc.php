

   <div id="content-libros" class="row mx-2 pt-2"> 
    
<?php

	include_once PATH_HELPERS . '/html_helper.php';

     include_once PATH_DAOS . '/librosDAO.php';




 	 $busqueda = "";

    if ( isset( $_GET["buscar"] ) ){

    	$busqueda = $_GET["buscar"];

    }

    $genero = -1;

	if ( isset( $_GET["genero"] ) ){

    	$genero = $_GET["genero"];

    }

    $libros = reordenarLibros();

    $libros = obtenerLibros($busqueda, $genero);

    
    

	if ($libros){

		foreach ($libros as $libro) {

			crearCardLibro($libro['titulo'], $libro['isbn'], $libro['portada_libro'], $libro['id_libro'], $libro['id_genero'], $libro['numero_paginas'], $libro['resumen'],                         $libro['id_editorial'],);	


		}

   }



?>

 </div> 


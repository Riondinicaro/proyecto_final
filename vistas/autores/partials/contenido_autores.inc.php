

   <div id="content-autores" class="row mx-2 pt-2"> 
    
<?php

	include_once PATH_HELPERS . '/html_helper.php';

     include_once PATH_DAOS . '/autorDAO.php';



 	 $busqueda = "";

    if ( isset( $_GET["buscar"] ) ){

    	$busqueda = $_GET["buscar"];

    }

    $genero = -1;

	if ( isset( $_GET["genero"] ) ){

    	$genero = $_GET["genero"];

    }

   

    $autores = obtenerAutores($busqueda, $genero);
    

	if ($autores){

		foreach ($autores as $autor) {

			crearCardAutor($autor['nombre'], $autor['apellido'], $autor['autor_img'], $autor['id_autor'], $autor['fecha_nacimiento'], $autor['id_pais_nacimiento'], $autor['id_genero'], 
                $autor['biografia']);	


		}

   }
?>

 </div> 


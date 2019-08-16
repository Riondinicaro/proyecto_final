<?php

	include_once PATH_HELPERS . '/database_helper.php';

	function obtenerLibros( $busqueda, $genero ){

        $conexion = getConexion();

        $consulta = "SELECT * FROM libros";

        if ( $busqueda != "" ){
        	$consulta .= " WHERE titulo LIKE '%$busqueda%'";
        }

        if ( $genero != -1 ){
        	
        	if ( $busqueda == "" ){
        	
        		$consulta .= " WHERE ";
        	}
        	else{
        		$consulta .= " AND ";
        	}

        	$consulta .= " id_genero = $genero";

        }

        $resultado = $conexion->query( $consulta );

        return $resultado;
	}

  function buscarLibro( $id ){
      $conexion = getConexion();

      $consulta = "SELECT * FROM libros WHERE id_libro = " .  $id ;

      $resultado = $conexion->query( $consulta );

      return $resultado;
  }

  function obtenerAutoresLibro($id_libro){

    $conexion = getConexion();

    $consulta = "SELECT * " .
          "FROM autores_libros, autores " .
          "WHERE autores_libros.id_autor = autores.id_autor" .
          " AND autores_libros.id_libro = $id_libro";
    
    $resultado = $conexion->query( $consulta );



    return $resultado;

  }

   function  obtenerLibrosAutor( $id_autor ){
      $conexion = getConexion();

      $consulta = "SELECT * FROM autores_libros, libros WHERE id_autor = " . $id_autor . 
                  " AND libros.id_libro = autores_libros.id_libro";

      $resultado = $conexion->query( $consulta );

      return $resultado;
  }

  



        function agregarLibro ( $libros ){

                $conexion = getConexion();

                $sql = "INSERT INTO libros " .
                        "(isbn, titulo, id_genero, numero_paginas, portada_libro, 
                          resumen, id_editorial)"
                          . " VALUES ('"
                          . $libros["isbn"] . "','"
                          . $libros["titulo"] . "','"
                          . $libros["id_genero"] . "','"
                          . $libros["numero_paginas"] . "','"
                          . $libros["portada_libro"] . "','"
                          . $libros["resumen"] . "','"
                          . $libros["id_editorial"] . "','"
                . ")";

                $conexion->query( $sql );
        }

        function modificarLibro ( $libros ){

                $conexion = getConexion();

                $sql = "UPDATE libros SET " .
                         "isbn= \"" . $libros["isbn"] . "\"" .
                         ", titulo=\"" . $libros["titulo"] . "\"" .
                         ", id_genero=" . $libros["id_genero"] .
                         ", numero_paginas\"" . $libros["numero_paginas"] . "\"".
                         ", resumen\"" . $libros["resumen"] . "\"" .
                         ", id_editorial" . $libros["id_editorial"];

                if ( $libros["imagen"] ){
                   $sql .= ", portada_libro=\"" . $libros["imagen"] . "\"";
                }

                $sql .= " WHERE id_libro =" . $libros["id"];

                $conexion->query( $sql );
        }

        function eliminarLibro ( $libro_id ){

                $conexion = getConexion();

                $sql = "DELETE FROM libros " .
                " WHERE id_libro = " . $libro_id;

                $resultado = $conexion->query( $sql );
        }
?>
<?php

	include_once PATH_HELPERS . '/database_helper.php';

	function obtenerAutores($busqueda, $genero){

		$conexion = getConexion();

		$consulta = "SELECT * FROM autores";

		if ( $busqueda != ""){

			$consulta .= " WHERE apellido LIKE '%$busqueda%'";
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

		$resultado = $conexion ->query( $consulta );

		return $resultado;
	}


	function buscarAutor($id_autor){

		$conexion = getConexion();

		$consulta = "SELECT * FROM autores WHERE id_autor = " . $id_autor;

		$resultado = $conexion ->query( $consulta );

		return $resultado;
	}

	

	




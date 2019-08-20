<?php

    include_once PATH_HELPERS . '/database_helper.php';

	function obtenerGeneros(){
		
        $conexion = getConexion();

        $consulta = "SELECT * " . 
                    "FROM generos " .
                    "ORDER BY nombre";
                    

        $resultado = $conexion->query( $consulta );

        return $resultado;

	}

   

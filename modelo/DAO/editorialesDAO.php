<?php

	include_once PATH_HELPERS . '/database_helper.php';

	function obtenerEditoriales(){

		$conexion = getConexion();

		$consulta = "SELECT * " .
					"FROM editoriales " .
					"ORDER BY nombre_edit";

		$resultado = $conexion->query( $consulta );

		return resultado;
	}
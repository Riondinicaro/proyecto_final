<?php

	define( 'HOST', 'localhost');
	define ( 'USER', 'root');
	define( 'PASSWORD', '');
	define( 'BD', 'bdmiweb');

	function getConexion(){

		$conexion = new mysqli ( HOST, USER, PASSWORD, BD );

		$conexion->set_charset('utf8');

		return $conexion;
	}
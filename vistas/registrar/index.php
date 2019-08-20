<?php

	if ( isset($_POST["registrate"] ) ){
	
		$nombre = $_POST["nombre"];
		$apellido = $_POST["apellido"];
		$nombre_user = $_POST["nombre_user"];
		$contrasena = $_POST["contrasena"];
		$mail = $_POST["mail"];

	include_once PATH_HELPERS . '/database_helper.php';

		$conexion = getConexion();

		$sql = "SELECT * FROM usuarios WHERE usr_user_name = '$nombre_user'";

		$resultado = $conexion->query ( $sql );

			if ( $resultado-> num_rows == 1) {?>

				<div class="alert alert-warning alert-dismissible fade show text-center m-0" role="alert">
					<button type="button" class="close" data-dismiss="alert">&times;</button>
							ESTE NOMBRE DE USUARIO YA ESTÁ REGISTRADO.
				</div>	
<?php       }

			else{

				$sql = "INSERT INTO usuarios (`usr_id`, `usr_name`, `usr_apellido`, `usr_user_name`, `usr_password`, `usr_email`) VALUES (NULL, '$nombre', '$apellido', '$nombre_user', '$contrasena', '$mail')";

				if ($sql){
					echo '<div class="alert alert-success alert-dismissable fade show text-center m-0" role="alert"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>TE HAS REGISTRADO CORRECTAMENTE</div>';
				}else{
					echo '<div class="alert alert-danger alert-dismissable fade show text-center m-0" role="alert"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>HUBO UN FALLO A LA HORA DE REGISTRARTE. INTENTALO NUEVAMENTE</div>';
				}

				$conexion->query( $sql );
			}
	}

	 $contenido_seccion = PATH_VIEWS . "/index/partials/jumbotron.inc.php";

	 include( PATH_VIEWS . '/common/base.php');
?>
		
		

<?php

function crearCardLibro($titulo, $isbn, $imagen, $id_libro){
?>


<?php
    $imagen = PATH_FILES . "/portadas_libro/" . $imagen;
?>

 <div class="col-md-3 mb-2 text-center d-flex align-items-stretch">
  
        <div class="card-group" style="width: 14rem;">

            <div class="card card-libro">
                
                <img src="<?=$imagen?>" class="card-img-top img-fluid">

                    <div class="card-body">
                        <h5 class="card-title mt-2"><?=$titulo?></h5>
                        <p class="card-text"></p>
                    </div>
                    <div class="card-footer">
                        <a href="index.php?m=show_libro&id_libro=<?=$id_libro?>" class="btn btn-dark btn-sm">Más información</a>
                    </div>
                </div>
            </div>
        </div>





<?php
}

function crearCardAutor($nombre, $apellido, $imagen, $id_autor){
?>


<?php
    $imagen = PATH_FILES . "/autores/" . $imagen;
?>

 <div class="col-md-3 mb-2 text-center d-flex align-items-stretch">
  
        <div class="card-group" style="width: 16rem;">

            <div class="card card-libro">
                
                <img src="<?=$imagen?>" class="card-img-top">

                    <div class="card-body">
                        <h5 class="card-title mt-2"><?=$nombre . " " . $apellido?></h5>
                        <p class="card-text"></p>
                    </div>
                    <div class="card-footer">
                        <a href="index.php?m=show_autor&id_autor=<?=$id_autor?>" class="btn btn-dark btn-sm">Más información</a>
                    </div>
                </div>
            </div>
        </div>





<?php
}



function getOptionsComboGeneros($incluir_opcion_todos = false, $id_item_seleccionado = null){
  
    include_once(PATH_HELPERS . "/database_helper.php");
    include_once (PATH_DAOS . '/generosDAO.php');

    $conexion = getConexion();

    $generos = obtenerGeneros();

    $opcionesCombo = "";

    if ($incluir_opcion_todos){
        $opcionesCombo .= '<option value="-1">Todas</option>';
    }
    
    foreach ( $generos as $genero ){
        $opcionesCombo .= '<option value="'. $genero["id_genero"] . '"';

        if( $id_item_seleccionado == $genero["id_genero"]){
            $opcionesCombo .=  ' selected="selected"';      
        }

        $opcionesCombo .= '>' . $genero["nombre_genero"] . '</option>';
    }

    return $opcionesCombo;    

}

 function getOptionsComboAutor($incluir_opcion_todos = false, $id_item_seleccionado = null){

    include_once(PATH_HELPERS . "database_helper.php");
    include_once(PATH_DAOS . "/autorDAO.php");

   $conexion = getConexion();

   $autores = obtenerAutores();

   $opcionesCombo = "";

   if ($incluir_opcion_todos){
        $opcionesCombo .= '<option value="-1">Todos</option>';
    }

    foreach ( $autores as $autor){
        $opcionesCombo .= '<option value="'. $autor["id_autor"] . '"';

        if($id_item_seleccionado == $autor["id_autor"]){
            $opcionesCombo .= ' selected="selected"';
        }

        $opcionesCombo .= '>' . $autor["apellido"] . '</option>';
    }

  return $opcionesCombo;
}

function getTablaHTML( $registros, $campos, $primary_key, $nombre_modulo ){

    $tablaHTML = "<table class=\" table table-hover\">";

        $tablaHTML .= "<thead><tr>";

        foreach ($campos as $campo => $label){
            $tablaHTML .= "<th>$label</th>";
        }

        $tablaHTML .= "<th>Acciones</th></tr></thead>";

        while ( $registro = $registros->fetch_assoc() ){

            $tablaHTML .= '<tr id="' . $registro[$primary_key] . '">';

            foreach ($campos as $campo => $label){

                $tablaHTML .= '<td>' . $registro["$campo"] . "</td>";
            }


            $tablaHTML .= "<td>";

            $tablaHTML .= "<button onclick=\"mostrarEditor('modificar', " . $registro[$primary_key] .");\"
                class=\"btn btn-success btn-sm\">Editar</button>";

            $tablaHTML .= "<a role=\"button\" class=\"btn btn-danger btn-sm ml-1 \" href= 'index.php?m=" . 
                $nombre_modulo . "&a=del&id=" . $registro[$primary_key] . "'>Eliminar</a>";
        }

        $tablaHTML .= "</table>";

        return $tablaHTML;
  }

?>












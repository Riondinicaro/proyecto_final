<script type="text/javascript">
    	
    	function enviarBusqueda(){

    		var urlBusqueda = 'index.php?m=autores&buscar=' + $("#buscar").val() +
    						  '&genero=' + $("#filtro").val() +
    						  '&orden=' + 1;

    		window.setTimeout( window.location = urlBusqueda, 100 );
    	
    	}

</script>
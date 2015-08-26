<?php

function conectarse() {
    if (!($conexion = pg_pconnect("host=localhost port=5432 dbname=catalogo user=postgres password=sisweb"))) {
    	exit();        
    } else {
        
    }
    return $conexion;
}

conectarse();
?>

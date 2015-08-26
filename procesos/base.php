<?php

function conectarse() {
<<<<<<< HEAD
    if (!($conexion = pg_pconnect("host=localhost port=5432 dbname=catalogo user=postgres password=rootdow"))) {
    	exit();        
=======
    if (!($conexion = pg_pconnect("host=localhost port=5432 dbname=ventas_catalogo user=postgres password=sisweb"))) {
        exit();
>>>>>>> origin/master
    } else {
        
    }
    return $conexion;
}

conectarse();
?>

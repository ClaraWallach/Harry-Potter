
<?php

/* error_reporting(E_ALL);
ini_set('display_errors', 1); */

require_once( 'functions.php' );

for ( $i = 0; $i < count( $characters ); $i++ ) {

    $id = $i;

    imprimir_personaje($characters, $id);

}



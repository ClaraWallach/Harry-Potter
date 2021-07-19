<?php


error_reporting(E_ALL);
ini_set('display_errors', 1); 

$apiresponse = file_get_contents('http://hp-api.herokuapp.com/api/characters');

if ($apiresponse !== false) {
    $characters = json_decode( $apiresponse, true );
}

function imprimir_personaje( $character, $index ) {

    echo '<article id="' . $index . ' ", class=" ' .  $character[$index]['house'] .  ' "> ';
    echo '<ul>';

    if ( !empty( $character[$index]['name'] ) ) {
        echo '<h3>' . $character[$index]['name'] . '</h3>';
    }

    if ( !empty($character[$index]['image'] ) ) {
        echo '<figure> <img src=" ' . $character[$index]['image'] . ' " alt= "imagen de" ' . $character[$index]['name'] . ' > </figure>';
    }

    if ( !empty( $character[$index]['species'] ) ) {
        echo '<li> <p> Especie: </p> <p>' . $character[$index]['species'] . '</p> </li>';
    }

    if (!empty( $character[$index]['gender'] ) ) {
        echo '<li> <p> Genero: </p> <p>' . $character[$index]['gender'] . '</p> </li>';
    }

    if ( !empty( $character[$index]['house'] ) ) {
        echo '<li> <p> Casa: </p> <p>' . $character[$index]['house'] . '</p> </li>';
    }

    if ( !empty( $character[$index]['dateOfBirth'] ) ) {
        echo '<li> <p> Nacimiento: </p> <p>' . $character[$index]['dateOfBirth'] . '</p> </li>';
    }

    if ( !empty( $character[$index]['patronus'] ) ) {
        echo '<li> <p> Patronus: </p> <p>' . $character[$index]['patronus'] . '</p> </li>';
    }

    if ( $character[$index]['hogwartsStudent'] == true ) {
        echo '<li> <p> Estudiante de Hogwarts </p> </li>';
    } elseif ( $character[$index]['hogwartsStaff'] == true ) {
            echo '<li> Staff de Hogwarts </li>';
        }

    if ( !empty( $character[$index]['actor'] ) ) {
        echo '<li> <p> Interpretado por: </p> <p>' . $character[$index]['actor'] . '</p> </li>';
    }

    echo '</ul>';
    echo '</article>';
}


function imprimir_por_nombre( $array, $name ) {
    
    for ($i = 0; $i < count( $array ); $i++) {

        switch ( $array[$i]['name'] ) {
        case $name;
        imprimir_personaje( $array, $i );

        }           
    }
}

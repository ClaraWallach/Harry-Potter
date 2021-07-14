
<?php

/* error_reporting(E_ALL);
ini_set('display_errors', 1); */


$apiresponse = file_get_contents('http://hp-api.herokuapp.com/api/characters');

if ($apiresponse !== false) {
    $characters = json_decode($apiresponse, true);
}

/* 
echo ('<pre>');
var_dump ($characters);   */

for ($i = 0; $i < count($characters); $i++) {

    echo '<article id="' . $i . ' ", class=" ' .  $characters[$i]['house'] .  ' "> ';
    echo '<ul>';

    if (!empty($characters[$i]['name'])) {
        echo '<h3>' . $characters[$i]['name'] . '</h3>';
    }

    if (!empty($characters[$i]['image'])) {
        echo '<figure> <img src=" ' . $characters[$i]['image'] . ' " alt= "imagen de" ' . $characters[$i]['name'] . ' > </figure>';
    }


    if (!empty($characters[$i]['species'])) {
        echo '<li> <p> Especie: </p> <p>' . $characters[$i]['species'] . '</p> </li>';
    }


    if (!empty($characters[$i]['gender'])) {
        echo '<li> <p> Genero: </p> <p>' . $characters[$i]['gender'] . '</p> </li>';
    }


    if (!empty($characters[$i]['house'])) {
        echo '<li> <p> Casa: </p> <p>' . $characters[$i]['house'] . '</p> </li>';
    }



    if (!empty($characters[$i]['dateOfBirth'])) {
        echo '<li> <p> Nacimiento: </p> <p>' . $characters[$i]['dateOfBirth'] . '</p> </li>';
    }


    if (!empty($characters[$i]['patronus'])) {
        echo '<li> <p> Patronus: </p> <p>' . $characters[$i]['patronus'] . '</p> </li>';
    }


    if ($characters[$i]['hogwartsStudent'] == true) {
        echo '<li> <p> Estudiante de Hogwarts </p> </li>';
    } else {
        if ($characters[$i]['hogwartsStaff'] == true) {
            echo '<li> Staff de Hogwarts </li>';
        }
    }

    if (!empty($characters[$i]['actor'])) {
        echo '<li> <p> Interpretado por: </p> <p>' . $characters[$i]['actor'] . '</p> </li>';
    }

    echo '</ul>';
    echo '</article>';
}
 

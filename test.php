<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mundo Harry Potter</title>
    <link rel="stylesheet" href="css/style.css">

</head>
<body>



<?php
/* 
error_reporting(E_ALL);
ini_set('display_errors', 1); */

$apiresponse = file_get_contents('http://hp-api.herokuapp.com/api/characters');

if ($apiresponse !== false) {
    $characters = json_decode($apiresponse, true);
}



/* Funcion para imprimir las tarjetas buscando por nombre del personaje */

function buscar_imprimir ($name, $array) {
    foreach ($array as $key => $value) {
        if ($value['name'] === $name) {

        echo '<article id="' . $key . ' ", class=" ' .  $array[$key]['house'] .  ' "> ';
        echo '<ul>';
    
        if (!empty($array[$key]['name'])) {
            echo '<h3>' . $array[$key]['name'] . '</h3>';
        }
    
        if (!empty($array[$key]['image'])) {
            echo '<figure> <img src=" ' . $array[$key]['image'] . ' " alt= "imagen de" ' . $array[$key]['name'] . ' > </figure>';
        }
       
        if (!empty($array[$key]['species'])) {
            echo '<li> <p> Especie: </p> <p>' . $array[$key]['species'] . '</p> </li>';
        }
    
    
        if (!empty($array[$key]['gender'])) {
            echo '<li> <p> Genero: </p> <p>' . $array[$key]['gender'] . '</p> </li>';
        }
    
    
        if (!empty($array[$key]['house'])) {
            echo '<li> <p> Casa: </p> <p>' . $array[$key]['house'] . '</p> </li>';
        }
    
    
    
        if (!empty($array[$key]['dateOfBirth'])) {
            echo '<li> <p> Nacimiento: </p> <p>' . $array[$key]['dateOfBirth'] . '</p> </li>';
        }
    
    
        if (!empty($array[$key]['patronus'])) {
            echo '<li> <p> Patronus: </p> <p>' . $array[$key]['patronus'] . '</p> </li>';
        }
    
    
        if ($array[$key]['hogwartsStudent'] == true) {
            echo '<li> Estudiante de Hogwarts </li>';
        } else {
            if ($array[$key]['hogwartsStaff'] == true) {
                echo '<li> Staff de Hogwarts </li>';
            }
        }
    
        if (!empty($array[$key]['actor'])) {
            echo '<li> <p> Interpretado por: </p> <p>' . $array[$key]['actor'] . '</p> </li>';
        }
    
        echo '</ul>';
        echo '<article>';

    
    }
    }
}
    
/* Procesando el formulario e imprimiendo la tarjeta del personaje */    

/* var_dump($_POST); */

$resultado = array ();

if (!empty($_POST) ) {
   
    foreach ($_POST as $respuesta => $valor ) {
        if ( !empty ($valor ) &&
        $valor=='10' ||
        $valor === '20' ||
        $valor=== '30' ||
        $valor === '40' ) {
           array_push($resultado, $valor);
        } 
    }
/* var_dump(count($resultado)); */

    if (  count($resultado) === 10 ) {
        if ( array_sum($resultado) >= 100 && array_sum ($resultado)<= 150 ) {
            buscar_imprimir ('Minerva McGonagall', $characters);
        } else {
            if (array_sum ($resultado) <150 && array_sum ($resultado) <= 200 ) {
                buscar_imprimir('Hermione Granger', $characters);
            } else {
                if (array_sum ($resultado) < 200 && array_sum ($resultado) <= 250 ) {
                    buscar_imprimir('Ron Weasley', $characters);
            } else {
                if (array_sum ($resultado) < 250 && array_sum ($resultado) <= 300 ) {
                    buscar_imprimir ('Harry Potter', $characters);
            } else {
                if (array_sum ($resultado) < 300 && array_sum ($resultado) <= 350 ) {
                    buscar_imprimir('Severus Snape', $characters);
            } else {
                if (array_sum ($resultado) < 350 && array_sum ($resultado) <= 400 ) {
                    buscar_imprimir('Draco Malfoy', $characters);
            } else {
                echo '<article> <p> algo salio mal </p> </article>';
            }
            
        }
    }
}   
            }
        }
    } else {
        echo '<article> <p> algo salio mal </p> </article>';
    }
}

?>



</body>
</html>

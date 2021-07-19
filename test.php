<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mundo Harry Potter</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<html>

<body id="resultado_test">

    <?php

    require_once('functions.php');

    $resultado = array();

    if (!empty($_POST)) {

        foreach ($_POST as $respuesta => $valor) {

            if (
                !empty($valor) &&
                $valor == '10' ||
                $valor === '20' ||
                $valor === '30' ||
                $valor === '40'
            ) {
                array_push($resultado, $valor);
            }
        }

        require_once('header.php');
        echo '<h2> Tu personaje es</h2>';


        if (count($resultado) === 10) {

            if (array_sum($resultado) >= 100 && array_sum($resultado) <= 150) {
                imprimir_por_nombre($characters, 'Minerva McGonagall');
                echo '<article> <a href="index.php">Volver al inicio </a> </article>';

            } elseif (array_sum($resultado) < 150 && array_sum($resultado) <= 200) {
                imprimir_por_nombre($characters, 'Hermione Granger');
                echo '<article> <a href="index.php">Volver al inicio </a> </article>';

            } elseif (array_sum($resultado) < 200 && array_sum($resultado) <= 250) {
                imprimir_por_nombre($characters, 'Ron Weasley');
                
            } elseif (array_sum($resultado) < 250 && array_sum($resultado) <= 300) {
                imprimir_por_nombre($characters, 'Harry Potter');
                echo '<article> <a href="index.php">Volver al inicio </a> </article>';

            } elseif (array_sum($resultado) < 300 && array_sum($resultado) <= 350) {
                imprimir_por_nombre($characters, 'Severus Snape');
                echo '<article> <a href="index.php">Volver al inicio </a> </article>';

            } elseif (array_sum($resultado) < 350 && array_sum($resultado) <= 400) {
                imprimir_por_nombre($characters, 'Draco Malfoy');
                echo '<article> <a href="index.php">Volver al inicio </a> </article>';

            } else {
                require_once('header.php');
                echo '<article> <p> algo salio mal </p> </article>';
                echo '<article> <a href="index.php">Volver al inicio </a> </article>';
            }

        } else {
            require_once('header.php');
            echo '<article> <p> algo salio mal </p> </article>';
            echo '<article> <a href="index.php">Volver al inicio </a> </article>';
        }
        
    } else {
        require_once('header.php');
        echo '<article> <p> algo salio mal </p> </article>';
        echo '<article> <a href="index.php">Volver al inicio </a> </article>';
    }

    ?>

</body>

</html>
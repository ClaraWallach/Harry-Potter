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


    <header>
        <h1> Bienvenido al mundo de Harry Potter </h1>

        <?php 
        require_once ('header.php')
        ?>

    </header>
    <main>

        <h2>Conoce a los personajes</h2>
        <section id="personajes">

            <?php

            include_once('characters.php')

            ?>

        </section>

        <h2>Que personaje sos?</h2>
        <section id="formulario">


            <?php

            include_once('form.php')

            ?>

        </section>

        

    </main>


</body>

</html>
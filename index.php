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
        <nav>
            <ul id="menu">
                </li>
                <li class="menu-item">
                    <a href="#personajes">
                        <p>Personajes</p>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="#formulario">
                        <p>Que personaje sos?</p>
                    </a>
                </li>
            </ul>
        </nav>
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

        <section>
            <?php

            include('test.php')

            ?>
        </section>

    </main>



</body>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Que personaje sos?</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <main>

    <h1>Que personaje sos?</h1>

    <p>Responde estas preguntas para averiguarlo</p>
    
    <form action="test.php" method="POST">

        <label> Que objeto preferis?
            <label>
                <input type="radio" name="respuesta1" value="10" required> Varita de Sauco
            </label>
            <label>
                <input type="radio" name="respuesta1" value="30"> Capa de invisivilidad
            </label>
            <label>
                <input type="radio" name="respuesta1" value="40"> Piedra de la resurrecion
            </label>
            <label>
                <input type="radio" name="respuesta1" value="20"> Gira Tiempos
            </label>
        </label>
        <label> Que materia preferis?
            <label>
                <input type="radio" name="respuesta2" value="10" required> Defensa contra las artes oscuras 
            </label>
            <label>
                <input type="radio" name="respuesta2" value="40"> Pociones 
            </label>
            <label>
                <input type="radio" name="respuesta2" value="20"> Encantamientos 
            </label>
            <label>
                <input type="radio" name="respuesta2" value="30"> Tranformaciones 
            </label>
        </label>
        <label> Que animal preferis?
            <label>
                <input type="radio" name="respuesta3" value="30" required> Leon
            </label>
            <label>
                <input type="radio" name="respuesta3" value="20"> Aguila
            </label>
            <label>
                <input type="radio" name="respuesta3" value="10"> Tejon
            </label>
            <label>
                <input type="radio" name="respuesta3" value="40"> Serpiente
            </label>
        </label>
        <label> A quien enfrentarias?
            <label>
                <input type="radio" name="respuesta4" value="30" required> Basilisco
            </label>
            <label>
                <input type="radio" name="respuesta4" value="10"> Dragon
            </label>
            <label>
                <input type="radio" name="respuesta4" value="20"> Argog
            </label>
            <label>
                <input type="radio" name="respuesta4" value="40"> Dementores
            </label>
        </label>
        <label> Que virtud te identifica mas?
            <label>
                <input type="radio" name="respuesta5" value="30" required> Valor y coraje
            </label>
            <label>
                <input type="radio" name="respuesta5" value="20"> Inteligencia y sentido del humor
            </label>
            <label>
                <input type="radio" name="respuesta5" value="40"> Astucia y confianza
            </label>
            <label>
                <input type="radio" name="respuesta5" value="10"> Amor y alegria
            </label>
        </label>
        <label> Que color te gusta mas?
            <label>
                <input type="radio" name="respuesta6" value="30" required> Rojo
            </label>
            <label>
                <input type="radio" name="respuesta6" value="20"> Azul
            </label>
            <label>
                <input type="radio" name="respuesta6" value="10"> Blanco
            </label>
            <label>
                <input type="radio" name="respuesta6" value="40"> Verde
            </label>
        </label>
        <label>
            <label> Que actividad preferis?
            <label>
                <input type="radio" name="respuesta7" value="30" required> Quiddich
            </label>
            <label>
                <input type="radio" name="respuesta7" value="20"> Ajedrez Magico
            </label>
            <label>
                <input type="radio" name="respuesta7" value="10"> Leer y estudiar magia
            </label>
            <label>
                <input type="radio" name="respuesta7" value="40"> Practicar Encantamientos
            </label>
        </label>
        <label> Elige una mascota
            <label>
                <input type="radio" name="respuesta8" value="10" required> Perro
            </label>
            <label>
                <input type="radio" name="respuesta8" value="30"> Gato
            </label>
            <label>
                <input type="radio" name="respuesta8" value="40"> Sapo
            </label>
            <label>
                <input type="radio" name="respuesta8" value="20"> Lechuza
            </label>
        </label>
        <label> Que tipo de pelicula preferis?
            <label>
                <input type="radio" name="respuesta9" value="40" required> Accion
            </label>
            <label>
                <input type="radio" name="respuesta9" value="30"> Terror
            </label>
            <label>
                <input type="radio" name="respuesta9" value="20"> Comedia
            </label>
            <label>
                <input type="radio" name="respuesta9" value="10"> Romance
            </label>
        </label>
        <label> Que transporte preferis?
            <label>
                <input type="radio" name="respuesta10" value="20" required> Carro Volador
            </label>
            <label>
                <input type="radio" name="respuesta10" value="10"> Tren
            </label>
            <label>
                <input type="radio" name="respuesta10" value="30"> Escoba voladora
            </label>
            <label>
                <input type="radio" name="respuesta10" value="40"> Autobus noctambulo
            </label>
        </label>
        <label>
            <input type="submit" value="enviar">
        </label>
    </form>

    <?php 
    
    include ('test.php')

    ?>

</main>

</body>

</html>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.cdnfonts.com/css/bergell-let" rel="stylesheet">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap-theme.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
        <title>Formulario</title>
    </head>
    <body>
        <style>
            :root{
                --color-de-fondo: #693784;
                --color-de-letras: #4b494a;
                --color-de-barra: #A31621;
                --color-de-botones: #1F7A8C;
                --color-extra: #DB222A;
                 --color-lertras: #f1f2f5; /* azul oscuro suave */
            --color-barra: #54056cd6
            }
            body{
                font-family:'Arial', sans-serif;
                background-color: var(--color-de-letras);
                color: #241720;
            }
            h2{
                font-family: 'Raleway', sans-serif;
                color: red;
            }
            form{
                width: 50%;
                margin: auto;
            }
            label{
                display: block;
                margin-bottom: 8px;
                color: #ededed;
            }


            input[type="text"],
            input[type="date"],
            textarea {
                width: 60%;
                padding: 10px;
                margin-bottom: 15px;
                border: 1px solid var(-color-extra); 
                border-radius: 5px;
                background-color: #1f1f1f; 
                color: #ffffff; 
            }


            input[type="submit"] {
            background-color: yellow; 
            color: #000; 
            padding: 10px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            }

            input[type="hidden"] {
            display: none;
            }
            
            #mensaje {
                margin-top: 15px;
                padding: 10px;
                border-radius: 5px;
            }
            body::before {
                content: "";
                position: fixed;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                z-index: -1;
                background: url('flores.png') center/cover no-repeat; 
                opacity: 0.3;
            }
            table{
                width: 100%;
                border-collapse: collapse;
                margin-top: 20px;
                font-size: 10px;
            }
            th, td {
                padding: 10px;
                text-align: center;
                border-bottom: 1px solid var(-color-extra);
            }
            th {
                background-color: var(-color-de-botones);
                color: #282a36;
            }
            tr:nth-child(even){
                background-color: var(-color-de-letras);
                color:;
            }
            tr:nth-child(odd){
                background-color: #834ea4;
            }

        </style>
        <div>
    <nav class="navbar navbar-light" style="background-color:var(--color-barra);">
        <div class="container">
            <a class="navbar-brand" href="index.html" style="color:var(--color-lertras); font-family: 'Times New Roman', Times, serif">Inicio</a>

            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="nav navbar-nav">

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Unidad 1
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink1">
                            <a class="dropdown-item" href="mostrar.php">Priemera Tabla</a><br>
                            <a class="dropdown-item" href="meterdatos.php">Formulario</a><br>
                            <a class="dropdown-item" href="tablafinal.php">Tabla de personajes</a>
                        </div>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Unidad 2
                        </a>
                         <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink2">
                            <a class="dropdown-item" href="relaciones01.php">relaciones 1</a><br>
                            <a class="dropdown-item" href="relaciones02.php">relaciones 2</a><br>
                            <a class="dropdown-item" href="relaciones03.php">relaciones 3</a><br>
                            <a class="dropdown-item" href="misql.php">Animes</a><br>
                            <a class="dropdown-item" href="CapturaDatosRelacionados.php">Captura Datos Relacionados</a><br>
                            <a class="dropdown-item" href="mangas.php">mangas de accion</a><br>
                            <a class="dropdown-item" href="cards.php">Registro de mangas</a>
                        </div>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Unidad 3
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink3">
                            <a class="dropdown-item" href="sofia07.html">le falta</a><br>
                            <a class="dropdown-item" href="sofia08.html">las dos patitas</a><br>
                            <a class="dropdown-item" href="sofia09.html">de atras.</a>
                        </div>
                    </li>

                </ul>
            </div>
        </div>
    </nav>
</div>

    <h2>Introduce los datos:</h2>

    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" id="formulario">

    <label for="nombrereal">Nombre del Superhéroe:</label>
    <input type="text" name="nombrereal" required><br>

    <label for="personaje">Personaje:</label>
    <input type="text" name="personaje" required><br>

    <label for="altura">Altura:</label>
    <input type="text" name="altura" required><br>

    <label for="peso">Peso:</label>
    <input type="text" name="peso" required><br>

    <label for="poderes">Poderes:</label>
    <input type="text" name="poderes" required><br>

    <label for="sexo">Sexo:</label>
    <input type="text" name="sexo" required><br>

    <label for="debilidad">Debilidad:</label>
    <input type="text" name="debilidad" required><br>

    <label for="creacion">Fecha de Creación:</label>
    <input type="date" name="creacion" required><br>

    <label for="biografia">Biografia:</label>
    <textarea name="biografia" required></textarea><br>

    <input type="submit" value="Guardar Datos">

    </form>

    <?php

    $username = "root";
    $password = "";
    $server = "Localhost";
    $database = "martes17";
    $conexion= new mysqli($server, $username, $password, $database);
    if($conexion->connect_error){
        die("Conexion fallida:". $conexion->connect_error);
        }
        
        if($_SERVER["REQUEST_METHOD"]=="POST"){
            $nombrereal = $_POST['nombrereal'];
            $personaje = $_POST['personaje'];
            $altura = $_POST['altura'];
            $peso = $_POST['peso'];
            $poderes = $_POST['poderes'];
            $sexo = $_POST['sexo'];
            $debilidad = $_POST['debilidad'];
            $creacion = $_POST['creacion'];
            $biografia = $_POST['biografia'];
            
            $sql = "INSERT INTO personajes (nombrereal, personaje, altura, peso, poderes, sexo, debilidad, creacion, biografia) VALUES ('$nombrereal', '$personaje', '$altura',
            '$peso', '$poderes', '$sexo', '$debilidad', '$creacion', '$biografia')";
            
            if($conexion->query($sql)==TRUE) {
                echo "Nuevo personaje creado con éxito.";
            }else{
                echo "Error al agregar al nuevo personaje.";
            }
        }
?>
        <?php
        
        $sql_mostrar = "SELECT * FROM personajes";
        $resultado = $conexion->query($sql_mostrar);
        
        if($resultado->num_rows >0){
            echo "<table>";
            echo "<tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Personaje</th>
            <th>Altura</th>
            <th>Peso</th>
            <th>Poderes</th>
            <th>Sexo</th>
            <th>Debilidad</th>
            <th>Creacion</th>
            <th>Biografia</th>
            </tr>";
            while($fila = $resultado->fetch_assoc()){
                echo "<tr>
                <td>{$fila['id']}</td>
                <td>{$fila['nombrereal']}</td>
                <td>{$fila['personaje']}</td>
                <td>{$fila['altura']}</td>
                <td>{$fila['peso']}</td>
                <td>{$fila['poderes']}</td>
                <td>{$fila['sexo']}</td>
                <td>{$fila['debilidad']}</td>
                <td>{$fila['creacion']}</td>
                <td>{$fila['biografia']}</td>
                </tr>";
            }
                echo "</table>";
            }else{
                echo "No se encontraron registros en la base de datos";
            }
?>

    </body>
</html>
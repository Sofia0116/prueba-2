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
<center>
    <title>Bryana Sofia Antonio del Angel</title>

    <style>
            :root{
                --color-de-fondo: #8c61e2c2 ;
                --color-de-letras: #f6f3f4;
                --color-de-barra: #A31621;
                --color-de-botones: #1F7A8C;
                --color-extra: #DB222A;
                 --color-lertras: #f1f2f5; /* azul oscuro suave */
            --color-barra: #54056cd6
            }
            body{
                font-family:'Arial', sans-serif;
                background-color: var(--color-de-fondo);
                color: #f5f2f5;
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
</head>

<body>

<div>
    <nav class="navbar navbar-light" style="background-color:var(--color-barra);">
        <div class="container">
            <a class="navbar-brand" href="index.html" style="color:var(--color-de-lertras); font-family: 'Times New Roman', Times, serif">Inicio</a>

            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="nav navbar-nav">

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Unidad 1
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink1">
                            <a class="dropdown-item" href="mostrar.php">Primera Tabla</a><br>
                            <a class="dropdown-item" href="meterdatos02.php">Formulario</a><br>
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

<div class="container">
    <h1>Agregar Perasonajes de Marvel</h1>
    <form action="insertar_datos.php" method="POST">
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" required>

         <label for="alias">Alias:</label>
        <input type="text" id="alias" name="alias" required>

         <label for="fechacreacion">Fecha de Creacion:</label>
        <input type="date" id="fechacreacion" name="fechacreacion" required>

         <label for="descripcion">Descripcion:</label>
        <textarea id="descripcion" name="descripcion" required></textarea>

         <label for="comics">Comics (separados por comas):</label>
        <input type="text" id="comics" name="comics"  placeholder="ejemplo: spiderman, iron man" required>

         <label for="superpoderes">Superheroes (separados por comas):</label>
        <input type="text" id="superpoderes" name="superpoderes"  placeholder="ejemplo: fuerza,  velocidad"required>

        <input type="submit" value="Guardar Personajes">

    </form>

</div>

</center>
</body>
</html>
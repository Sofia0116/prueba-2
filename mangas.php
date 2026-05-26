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

    <link rel="stylesheet" href="stylemangas.css">

    <title>Bryana Sofia Antonio del Angel</title>

   
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

     <div class="container1">
        <form action="proceso.php" method="POST" enctype="multipart/form-data"> 
            <!-- el metod POST para enviar datos de forma segura especialmente archivos, que seran las fotos, 
            lo que enctype es obligatorio cuando el formulario incluye estos archivosde imagen u otro tipo de 
            archivo y el de "proceso.html" es el que va procesar los datos -->
            
        <div class="form-group">
            <label for="titulo">Titulo del Manga</label>
            <input type="text" name="titulo" id="titulo" placeholder="Ej. one piece" required>
        </div>

        <div class="form-group">
            <label for="autor">Nombre del Autor</label>
            <input type="text" name="autor" id="autor" placeholder="Ej. Eichiro Oda" required>
        </div>

        <div class="form-group">
            <label for="capitulos">Capitulos totales del Manga</label>
            <input type="text" name="capitulos" id="capitulos" placeholder="Ej. 1000 capitulos" required>
        </div>

        <div class="form-group">
            <label for="sinopsis">Sipnosis</label>
            <textarea type="text" name="sinopsis" id="sinopsis" placeholder="Ej. De que trata el manga" required></textarea>
        </div>

        <div class="form-group">
            <label for="imagen">Portada del Manga</label>
            <input type="file" name="imagen" id="imagen" accept="image/*" required>
        </div>

        <div style="text-align: center;">
            <button type="submit" class="btn" name="submit">REGISTRO DE MANGAS</button>
        </div>
        </form>
     </div>

</body>
</html>
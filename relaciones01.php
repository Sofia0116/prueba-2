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

    <title>Bryana Sofia Antonio del Angel</title>

    <style>
         :root{
    --color-de-fondo: #b3c7f5;   /* azul gris pastel */
    --color-de-lertras: #f1f2f5; /* azul oscuro suave */
    --color-barra: #54056cd6;      /* azul pastel medio */
    --color-boton: #E07A7A;     /* rojo coral pastel */
    --color-extra: #110606;     /* rojo suave */
}


        body{
            background-color: #8c61e2c2 ;
        }
        h1,h2{
            font-family: 'Bergell LET', sans-serif;
            color: var();
            text-align: center;
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
<body>
    <style>
        h1,h2{
    margin-top: 30px;
    font-size: 40px;
    text-shadow: 2px 2px 5px black;
}

table{
    margin: auto;
    border-collapse: collapse;
    width: 95%;
    background-color: rgba(243, 119, 74, 0.85);
    backdrop-filter: blur(5px);
    box-shadow: 0px 0px 15px black;
}

th{
    background-color: #b6097f;
    padding: 10px;
}

td{
    padding: 8px;
}

tr:nth-child(even){
    background-color: rgba(255,255,255,0.1);
}

tr:hover{
    background-color: rgba(255,255,255,0.3);
    transition: 0.3s;
}

    </style>

    <h1>Personajes de Marvel</h1>
    <h2>Personajes </h2>
    <table>
        <tr>
           
                <th>ID</th>
                <th>Nombre</th>
                <th>Alias</th>
                <th>Fecha de Creacion</th>
                <th>Descripcion</th>
                <th>Ttitulo del comic</th>
                <th>Nombre del Superheroe</th>
           
        </tr>

    <?php
        $username = "root";
        $password = "";
        $server = "localhost";
        $database = "miercoles";
        $conexion = new mysqli($server, $username, $password, $database);

        if ($conexion->connect_error) {
            die("Conexion fallida: " . $conexion->connect_error);
        }  
        $sql = "SELECT
        p.personajeID AS personajeID,
        p.nombre AS nombre,
        p.alias AS alias,
        p.descripcion AS descripcion,
        p.fechacreacion As fechacreacion,
        c.comicID AS comicID,
        c.titulo AS titulo,
        s.superpoderID AS superpoderID,
        s.nombre AS nombre_superpoder

        FROM personajes p
        LEFT JOIN personajecomic pc ON p.personajeID = pc.personajeID
        LEFT JOIN comics c ON pc.comicID = c.comicID
        LEFT JOIN personajesuperpoder ps ON p.personajeID = ps.personajeID
        LEFT JOIN superpoderes s ON ps.superpoderID = s.superpoderID";

        $result = $conexion->query($sql);

        if($result->num_rows >0){
            while ($row = $result->fetch_assoc()){
                echo "<tr>";
                echo"<td>" . $row['personajeID'] ."</td>";
                echo"<td>" . $row['nombre'] ."</td>";
                echo"<td>" . $row['alias'] ."</td>";
                echo"<td>" . $row['fechacreacion'] ."</td>";
                echo"<td>" . $row['descripcion'] ."</td>";
                echo"<td>" . $row['titulo'] ."</td>";
                echo"<td>" . $row['nombre_superpoder'] ."</td>";
                echo "<tr>";
            }
            }else{
                 echo "<tr><td colspan='9'> No se encontraron personajes. </td></tr>";
            }
            $conexion->close();
        
    ?>
      </table>
</body>
</html>
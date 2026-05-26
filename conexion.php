<?php
// Bryana Sofia Antonio del Anegel

        $username = "root";
        $password = "";
        $server = "localhost";
        $database = "mangas01";

        try {
            //Creamos la conexion con el driver MySQL
            $pdo = new PDO("mysql:host=$server;dbname=$database;charset=utf8", $username, $password);

            //Configuramos para que lance excepciones en caso de errror
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            //definimos el modo de obtencion de datos por defecto como array asociativo
            $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

        } catch (PDOException $e){
         //Si hay un error, lo mostramos y detenemos la ejecucion 
         die("Error de conexion" . $e->getMessage());
         }
?>
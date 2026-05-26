<?php
//Bryana Sofia Antonio del Angel
require_once 'conexion.php';

if(isset($_POST['submit'])){
    // 1. Recoleccion de datos
    $titulo = $_POST['titulo'] ?? '';
    $autor = $_POST['autor'] ?? '';
    $capitulos = $_POST['capitulos'] ?? '';
    $sinopsis = $_POST['sinopsis'] ?? '';


    // 2. Procesar la imagen
    if(isset($_FILES['imagen']) && $_FILES['imagen']['error']=== 0){

        $img_tmp_name = $_FILES['imagen']['tmp_name'];
        $img_name = $_FILES['imagen']['name'];

        $img_content = file_get_contents($img_tmp_name);

        $upload_dir = 'uploads/';
        if(!is_dir($upload_dir)){
            mkdir($upload_dir, 0777, true);
        }
        move_uploaded_file($img_tmp_name, $upload_dir . $img_name);

    } else {
        die("Error al subir imagen.");
    }
    
    // 3. Guarda en Basa de Datos
    try {
        //Asegurate que los nombres en VALUES (:nombre, etc) coincidan con bindParam
        $sql = "INSERT INTO mangas (titulo, autor, capitulos, sinopsis,
        imagen)
                VALUES (:titulo, :autor, :capitulos, :sinopsis, :imagen)";

        $stmt = $pdo->prepare($sql);

        $stmt->bindParam(':titulo', $titulo);
        $stmt->bindParam(':autor', $autor);
        $stmt->bindParam(':capitulos', $capitulos);
        $stmt->bindParam(':sinopsis', $sinopsis);
        $stmt->bindParam(':imagen', $img_content, PDO::PARAM_LOB);
    
        //Error corregidos: PDO::PARAM_LOB (doble punto)
        $stmt->execute();

        header("Location: cards.php?success=1");
        exit();
    }catch (PDOException $e) {
        die("Error en la Base de Datos: " . $e->getMessage() .
            "<br><br> Asegurate de que tu tabla 'equipoazul' tenga la columna 'altura'.
            Puedes agegarla con: ALTER TABLE equipoazul ADO COLUMN altura VARCHAR(50);");
    }
} else {
    header("Location: mangas.php");
    exit();
}
?>
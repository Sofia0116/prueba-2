<?php
// Bryana Sofia Antonio del Angel
require_once 'conexion.php';
include 'header.php';
//Consultamos todos los personajes usando un LEFT JOINT para traer el nombre del equipo


try{
   $sql = "SELECT m.*, e.nombre_estudio
            FROM mangas m
            LEFT JOIN estudios e ON m.estudio_id = e.id
            ORDER BY m.id DESC";


    $stmt = $pdo->query($sql);
    $personajes = $stmt->fetchAll();
} catch (PDOException $e){
    $personajes = [];
}
?>
<div class="container-fluid">
       <h1>Archivo Manga: Coleccion 1990s ></h1>
       <p style="text-align: center; color: var(--color de letras);">Consulta de registros relacionados - Base de datos</p>

    <div class="cards-grid">
        
            <?php foreach($personajes as $p): ?>
                <div class="x-card">
                    <div class="card-header">
                        <?php echo htmlspecialchars($p['titulo']); ?>
                    </div>
                    <div class="card-img-container">
                        <?php if ($p['imagen']): ?>
                            <img src="data:image/jpeg;base64,<?php echo base64_encode($p
                            ['imagen']); ?>" class="card-img">
                        <?php else: ?>
                            <div style="text-align:center; padding-top: 80px;">Sin Imagen</div>
                        <?php endif; ?>
                    </div>


                    <div class="card-body">

                            <p><span class="stat-label">Titulo:</span><?php echo htmlspecialchars($p
                            ['titulo'] ?? 'Independiente'); ?></p>

                             <p><span class="stat-label">Autor:</span><?php echo htmlspecialchars($p
                            ['autor']); ?></p>

                             <p><span class="stat-label">Capitulos:</span><?php echo htmlspecialchars($p
                            ['capitulos']);?></p>
                            <hr>
                            <P class="small"><em><?php echo nl2br(htmlspecialchars($p['sinopsis'])); ?></em>
                            </P>
                            

                    </div>
                </div>


            <?php endforeach; ?>
        </div>
    </div>
    </body>
    </html>


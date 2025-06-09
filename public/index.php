<?php
require_once __DIR__ . '/../src/db.php';


// Fetch disciplines from database
$disciplines = $db->query('SELECT * FROM disciplinas');

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Federacion de Patinaje</title>
</head>
<body>
    <h1>Bienvenido a la Federacion de Patinaje</h1>
    <h2>Disciplinas</h2>
    <ul>
        <?php while ($row = $disciplines->fetch_assoc()) : ?>
            <li><?php echo htmlspecialchars($row['nombre']); ?></li>
        <?php endwhile; ?>
    </ul>
</body>
</html>

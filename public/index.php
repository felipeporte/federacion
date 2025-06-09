<?php
require_once __DIR__ . '/../src/db.php';

// Fetch disciplines from database
$disciplines = $db->query('SELECT * FROM disciplinas');

require_once __DIR__ . '/../templates/header.php';
?>
<main class="container mt-4">
    <h1>Bienvenido a la Federación de Patinaje</h1>
    <h2>Disciplinas</h2>
    <ul>
        <?php while ($row = $disciplines->fetch_assoc()) : ?>
            <li><?php echo htmlspecialchars($row['nombre']); ?></li>
        <?php endwhile; ?>
    </ul>
</main>
<?php
require_once __DIR__ . '/../templates/footer.php';
?>

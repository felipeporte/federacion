<?php
session_start();
require_once __DIR__ . '/../src/db.php';

$extra_head = '<link rel="stylesheet" href="css/login.css">';
$extra_footer = '<script src="js/login.js"></script>';
$body_class = 'login-page';
$errors = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $user = $_POST['username'] ?? '';
    $pass = $_POST['password'] ?? '';

    if ($user === $_ENV['ADMIN_USER'] && $pass === $_ENV['ADMIN_PASS']) {
        $_SESSION['user'] = $user;
        header('Location: index.php');
        exit;
    } else {
        $errors = 'Credenciales incorrectas';
    }
}

require_once __DIR__ . '/../templates/header.php';
?>
<main class="login-container">
    <h2 class="text-center mb-4">Iniciar sesión</h2>
    <?php if ($errors): ?>
        <div class="alert alert-danger" role="alert">
            <?php echo htmlspecialchars($errors); ?>
        </div>
    <?php endif; ?>
    <form method="post">
        <div class="mb-3">
            <label for="username" class="form-label">Usuario</label>
            <input type="text" class="form-control" id="username" name="username" required>
        </div>
        <div class="mb-3 position-relative">
            <label for="password" class="form-label">Contraseña</label>
            <input type="password" class="form-control" id="password" name="password" required>
            <span id="togglePassword" class="toggle-password text-primary">Mostrar</span>
        </div>
        <button type="submit" class="btn btn-primary w-100">Ingresar</button>
    </form>
</main>
<?php require_once __DIR__ . '/../templates/footer.php'; ?>

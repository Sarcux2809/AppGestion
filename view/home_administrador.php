
<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header('Location: login.php');
    exit();
}

// Dependiendo del rol, puedes mostrar diferentes secciones o menús
$role = $_SESSION['role'];
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard de Administración</title>
    <link rel="stylesheet" href="../css/styles.css"> <!-- Ajusta la ruta según tu estructura -->
</head>

<body>
    <header class="banner">
        <h1>Dashboard de Administración - Almacén de Peluches</h1>
    </header>

    <nav class="navigation">
        <ul>
            <li><a href="usuarios.php">Gestión de Usuarios</a></li>
            <li><a href="roles.php">Gestión de Roles</a></li>
            <li><a href="permisos.php">Gestión de Permisos</a></li>
            <li><a href="acceso.php">Control de Acceso</a></li>
            <li><a href="dashboard.php">Panel de Administración</a></li>
            <li><a href="../view/index.php">Cerrar Sesión</a></li>
        </ul>
    </nav>
    <main>
        <h2>Bienvenido al sistema de administración del almacén de peluches</h2>
        <?php if ($role == 'Administrador'): ?>
            <h2>Panel de Administrador</h2>
            <!-- Contenido específico para el Administrador -->
        <?php elseif ($role == 'Editor'): ?>
            <h2>Panel de Editor</h2>
            <!-- Contenido específico para el Editor -->
        <?php else: ?>
            <h2>Panel de Usuario Regular</h2>
            <!-- Contenido específico para el Usuario Regular -->
        <?php endif; ?>
        <section>
            <p>Selecciona una opción del menú para comenzar.</p>
        </section>
        <section class="image-section">
            <img src="../public/pelucheshome.png" alt="Almacén de Peluches" />
        </section>
    </main>


    <footer>
        <p>© 2024 Almacén de Peluches. Todos los derechos reservados.</p>
    </footer>
</body>

</html>
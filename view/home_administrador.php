<?php
session_start();
require_once '../config/database.php';

// Verificar si el usuario ha iniciado sesión y es administrador
if (!isset($_SESSION['user_id']) || $_SESSION['role'] !== 'Administrador') {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel de Administrador</title>
    <link rel="stylesheet" href="../css/styles.css">
</head>
<body>

    <header>
        <h1>Panel de Administración</h1>
    </header>

    <section>
        <h2>Bienvenido, Admin</h2>
        <p>Desde este panel, puedes gestionar todas las funcionalidades del sistema.</p>

        <div>
            <h3>Acciones rápidas:</h3>
            <ul class="actions">
                <li><a href="../view/acciones_administrador/add-user.php">Agregar nuevo usuario</a></li>
                <li><a href="add-content.php">Crear nuevo contenido</a></li>
                <li><a href="global-settings.php">Modificar configuraciones globales</a></li>
            </ul>
        </div>

        <div>
            <h3>Gestión de Usuarios y Roles:</h3>
            <ul class="actions">
                <li><a href="view-all-users.php">Ver todos los usuarios registrados</a></li>
                <li><a href="../view/acciones_administrador/assign-roles.php">Asignar o revocar roles a los usuarios</a></li>
                <li><a href="create-roles.php">Crear nuevos roles y asignar permisos</a></li>
                <li><a href="audit-log.php">Consultar registro de auditoría</a></li>
            </ul>
        </div>
    </section>

    <footer>
        <p>© 2024 Administración del Sistema. Todos los derechos reservados.</p>
    </footer>

</body>
</html>

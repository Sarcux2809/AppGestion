<?php
session_start();
require_once '../../config/database.php';

$database = new Database();
$conn = $database->getConnection();

// Verifica si el usuario es administrador
if ($_SESSION['role'] !== 'Administrador') {
    header("Location: home_administrador.php");
    exit();
}

// Obtener la lista de usuarios y roles para los select
$queryUsuarios = "SELECT id, nombre FROM usuarios";
$queryRoles = "SELECT id, nombre FROM roles";
$usuarios = $conn->query($queryUsuarios)->fetchAll(PDO::FETCH_ASSOC);
$roles = $conn->query($queryRoles)->fetchAll(PDO::FETCH_ASSOC);

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $usuario_id = $_POST['usuario_id'];
    $rol = $_POST['role'];

    // Obtener el ID del rol seleccionado
    $queryRol = "SELECT id FROM roles WHERE nombre = ?";
    $stmtRol = $conn->prepare($queryRol);
    $stmtRol->execute([$rol]);
    $rolData = $stmtRol->fetch(PDO::FETCH_ASSOC);

    if ($rolData) {
        // Asignar el rol al usuario
        $queryAsignarRol = "INSERT INTO usuarios_roles (usuario_id, rol_id) VALUES (?, ?)";
        $stmtAsignarRol = $conn->prepare($queryAsignarRol);
        $stmtAsignarRol->execute([$usuario_id, $rolData['id']]);
        $message = "Rol asignado con éxito.";
    } else {
        $message = "Error: rol no encontrado.";
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Asignar Roles</title>
    <link rel="stylesheet" href="../../css/styles_adduser.css">
</head>
<body>
    <div class="container">
        <h1>Asignar Rol a Usuario</h1>
        <?php if (isset($message)): ?>
            <div class="message"><?php echo $message; ?></div>
        <?php endif; ?>
        
        <form action="assign-roles.php" method="POST" class="form">
            <div class="form-group">
                <label>Seleccionar Usuario:</label>
                <select name="usuario_id" required>
                    <option value="">Seleccione un usuario</option>
                    <?php foreach ($usuarios as $usuario): ?>
                        <option value="<?php echo $usuario['id']; ?>"><?php echo $usuario['nombre']; ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
            <div class="form-group">
                <label>Seleccionar Rol:</label>
                <select name="role" required>
                    <option value="">Seleccione un rol</option>
                    <?php foreach ($roles as $role): ?>
                        <option value="<?php echo $role['nombre']; ?>"><?php echo $role['nombre']; ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
            <button type="submit" class="btn">Asignar Rol</button>
        </form>
        
        <!-- Botón para regresar al panel de administración -->
        <a href="../../view/home_administrador.php" class="btn back-btn">Regresar al Panel</a>
    </div>
</body>
</html>

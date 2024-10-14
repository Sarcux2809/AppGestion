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

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
    $role = $_POST['role'];

    // Ingresar el nuevo usuario
    $query = "INSERT INTO usuarios (nombre, email, password) VALUES (?, ?, ?)";
    $stmt = $conn->prepare($query);
    $stmt->execute([$name, $email, $password]);

    // Obtener el ID del nuevo usuario
    $usuario_id = $conn->lastInsertId();

    // Obtener el ID del rol seleccionado
    $queryRol = "SELECT id FROM roles WHERE nombre = ?";
    $stmtRol = $conn->prepare($queryRol);
    $stmtRol->execute([$role]);
    $rol = $stmtRol->fetch(PDO::FETCH_ASSOC);
    
    if ($rol) {
        // Asignar el rol al nuevo usuario
        $queryAsignarRol = "INSERT INTO usuarios_roles (usuario_id, rol_id) VALUES (?, ?)";
        $stmtAsignarRol = $conn->prepare($queryAsignarRol);
        $stmtAsignarRol->execute([$usuario_id, $rol['id']]);
        $message = "Usuario agregado con éxito.";
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
    <title>Agregar Usuario</title>
    <link rel="stylesheet" href="../../css/styles_adduser.css">
</head>
<body>
    <div class="container">
        <h1>Agregar Nuevo Usuario</h1>
        <?php if (isset($message)): ?>
            <div class="message"><?php echo $message; ?></div>
        <?php endif; ?>
        
        <form action="add-user.php" method="POST" class="form">
            <div class="form-group">
                <label>Nombre:</label>
                <input type="text" name="name" required>
            </div>
            <div class="form-group">
                <label>Email:</label>
                <input type="email" name="email" required>
            </div>
            <div class="form-group">
                <label>Contraseña:</label>
                <input type="password" name="password" required>
            </div>
            <div class="form-group">
                <label>Rol:</label>
                <select name="role">
                    <option value="Usuario">Usuario Regular</option>
                    <option value="Editor">Editor</option>
                    <option value="Administrador">Administrador</option>
                </select>
            </div>
            <button type="submit" class="btn">Agregar Usuario</button>
        </form>
        
        <!-- Botón para regresar al panel de administración -->
        <a href="../../view/home_administrador.php" class="btn back-btn">Regresar al Panel</a>
    </div>
</body>
</html>

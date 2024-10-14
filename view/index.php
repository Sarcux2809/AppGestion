<?php
session_start();
include '../config/database.php';

$database = new Database();
$conn = $database->getConnection();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Consulta para verificar usuario y obtener su rol
    $query = "
        SELECT r.nombre AS role
        FROM usuarios u
        JOIN usuarios_roles ur ON u.id = ur.usuario_id
        JOIN roles r ON ur.rol_id = r.id
        WHERE u.email = :email AND u.password = :password
    ";
    
    $stmt = $conn->prepare($query);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':password', $password);
    $stmt->execute();

    if ($stmt->rowCount() == 1) {
        $user = $stmt->fetch(PDO::FETCH_ASSOC);
        $_SESSION['role'] = $user['role'];

        // Redirección basada en el rol
        switch ($_SESSION['role']) {
            case 'Administrador':
                header('Location: home_administrador.php');
                break;
            case 'Usuario':
                header('Location: home_clientes.php');
                break;
            case 'Editor':
                header('Location: home_editor.php');
                break;
            default:
                header('Location: home_default.php');
                break;
        }
        exit();
    } else {
        $error = "Credenciales incorrectas";
    }
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Almacén de Peluches</title>
    <link rel="stylesheet" href="../css/styles_index.css">
</head>
    <div class="login-container">
        <h2>Iniciar Sesión</h2>
        <?php if (!empty($error)) { echo "<p class='error'>$error</p>"; } ?>
        <form method="POST" action="">
            <label for="email">Email:</label>
            <input type="email" name="email" required>
            <label for="password">Contraseña:</label>
            <input type="password" name="password" required>
            <button type="submit">Ingresar</button>
        </form>
        <p>¿No tienes cuenta? <a href="../view/user_auth/registro.php">Regístrate aquí</a></p>
    </div>
</body>
</html>

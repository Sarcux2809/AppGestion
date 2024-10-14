<?php
session_start();
include '../config/database.php';

$database = new Database();
$conn = $database->getConnection();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Consulta para verificar usuario y rol
    $query = "SELECT * FROM usuarios WHERE email = :email AND password = :password";
    $stmt = $conn->prepare($query);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':password', $password);
    $stmt->execute();

    if ($stmt->rowCount() == 1) {
        $user = $stmt->fetch(PDO::FETCH_ASSOC);
        $_SESSION['user_id'] = $user['id'];
        $_SESSION['role'] = $user['role']; // Asumiendo que tienes una columna 'role' en la tabla de usuarios

        header('Location: home_administrador.php');
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
    <link rel="stylesheet" href="../css/styles_index.css"> <!-- Ajusta la ruta según tu estructura -->
</head>
<body>
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
    </div>
</body>
</html>

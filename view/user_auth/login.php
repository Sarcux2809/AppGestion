<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestión de Usuarios</title>
</head>
<body>
    <h2>Registrar Nuevo Usuario</h2>
    <form action="../controller/UsuarioController.php" method="POST">
        <label>Nombre:</label>
        <input type="text" name="nombre" required><br>
        
        <label>Email:</label>
        <input type="email" name="email" required><br>
        
        <label>Contraseña:</label>
        <input type="password" name="password" required><br>
        
        <input type="submit" value="Registrar">
    </form>
    <br>
    
    <h2>Iniciar Sesión</h2>
    <form action="../controller/LoginController.php" method="POST">
        <label>Email:</label>
        <input type="email" name="email" required><br>
        
        <label>Contraseña:</label>
        <input type="password" name="password" required><br>
        
        <input type="submit" value="Iniciar Sesión">
    </form>
    <br>
    
    <a href="recuperar_password.php">¿Olvidaste tu contraseña?</a>
</body>
</html>

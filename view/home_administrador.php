<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel de Administrador</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }
        header {
            background-color: #333;
            color: #fff;
            padding: 10px 0;
            text-align: center;
        }
        nav {
            margin: 20px;
            background-color: #333;
            padding: 10px;
        }
        nav ul {
            list-style: none;
            padding: 0;
        }
        nav ul li {
            display: inline;
            margin-right: 20px;
        }
        nav ul li a {
            color: white;
            text-decoration: none;
        }
        section {
            margin: 20px;
        }
        footer {
            background-color: #333;
            color: white;
            text-align: center;
            padding: 10px 0;
            position: fixed;
            bottom: 0;
            width: 100%;
        }
        h2 {
            color: #333;
        }
        ul.actions {
            list-style: none;
            padding: 0;
        }
        ul.actions li {
            margin-bottom: 10px;
        }
        ul.actions li a {
            text-decoration: none;
            background-color: #007BFF;
            color: white;
            padding: 10px;
            display: inline-block;
            border-radius: 5px;
        }
        ul.actions li a:hover {
            background-color: #0056b3;
        }
    </style>
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
                <li><a href="add-user.php">Agregar nuevo usuario</a></li>
                <li><a href="add-content.php">Crear nuevo contenido</a></li>
                <li><a href="global-settings.php">Modificar configuraciones globales</a></li>
            </ul>
        </div>

        <div>
            <h3>Gestión de Usuarios y Roles:</h3>
            <ul class="actions">
                <li><a href="view-all-users.php">Ver todos los usuarios registrados</a></li>
                <li><a href="assign-roles.php">Asignar o revocar roles a los usuarios</a></li>
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

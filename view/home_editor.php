<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel de Editor</title>
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
        <h1>Panel de Editor</h1>
    </header>

    <nav>
        <ul>
            <li><a href="create-content.php">Crear Contenido</a></li>
            <li><a href="edit-content.php">Editar Contenido</a></li>
            <li><a href="delete-content.php">Eliminar Contenido</a></li>
            <li><a href="logout.php">Cerrar Sesión</a></li>
        </ul>
    </nav>

    <section>
        <h2>Bienvenido, Editor</h2>
        <p>Desde este panel, puedes gestionar el contenido del sistema. No tienes acceso a la gestión de usuarios ni a la configuración global.</p>

        <div>
            <h3>Acciones de Contenido:</h3>
            <ul class="actions">
                <li><a href="create-content.php">Crear nuevo contenido</a></li>
                <li><a href="edit-content.php">Editar contenido existente</a></li>
                <li><a href="delete-content.php">Eliminar contenido</a></li>
            </ul>
        </div>
    </section>

    <footer>
        <p>© 2024 Gestión de Contenidos. Todos los derechos reservados.</p>
    </footer>

</body>
</html>

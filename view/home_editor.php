<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel de Editor</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f9f9f9; /* Color de fondo más claro */
            margin: 0;
            padding: 0;
            display: flex; /* Usar flexbox para la disposición */
        }
        header {
            background-color: #333;
            color: #fff;
            padding: 10px 0;
            text-align: center;
            width: 100%;
            position: fixed; /* Fijar el encabezado en la parte superior */
            top: 0;
            z-index: 1000; /* Asegurarse de que esté por encima de otros elementos */
        }
        nav {
            background-color: #444; /* Color un poco más claro */
            padding: 10px;
            width: 200px; /* Ancho de la barra lateral */
            position: fixed; /* Fijar la barra lateral */
            top: 50px; /* Colocar debajo del encabezado */
            bottom: 0; /* Extender hasta el final de la página */
            overflow-y: auto; /* Permitir desplazamiento si es necesario */
        }
        nav ul {
            list-style: none;
            padding: 0;
            margin: 0;
        }
        nav ul li {
            margin-bottom: 10px;
        }
        nav ul li a {
            color: white;
            text-decoration: none;
            display: block; /* Hacer que el enlace ocupe todo el ancho */
            padding: 10px; /* Añadir padding */
            transition: background 0.3s; /* Transición suave */
        }
        nav ul li a:hover {
            background-color: #0056b3; /* Color de fondo al pasar el mouse */
        }
        section {
            margin-left: 220px; /* Espacio para la barra lateral */
            padding: 20px;
            background-color: white; /* Fondo blanco para el contenido */
            border-radius: 8px; /* Bordes redondeados */
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1); /* Sombra suave */
            flex: 1; /* Para que la sección ocupe el espacio restante */
            margin-top: 60px; /* Espacio debajo del encabezado */
            margin-bottom: 60px; /* Espacio encima del pie de página */
        }
        footer {
            background-color: #333;
            color: white;
            text-align: center;
            padding: 10px 0;
            position: fixed;
            bottom: 0;
            left: 0;
            right: 0;
        }
        h2 {
            color: #333;
        }
    </style>
</head>
<body>

    <header>
        <h1>Panel de Editor</h1>
    </header>

    <nav>
        <ul>
            <li><a href="crear contenido.php">Crear Contenido</a></li>
            <li><a href="editar contenido.php">Editar Contenido</a></li>
            <li><a href="eliminar contenido.php">Eliminar Contenido</a></li>
            <li><a href="logout.php">Cerrar Sesión</a></li>
        </ul>
    </nav>

    <section>
        <h2>Bienvenido, Editor</h2>
        <p>Desde este panel, puedes gestionar el contenido del sistema. No tienes acceso a la gestión de usuarios ni a la configuración global.</p>
    </section>

    <footer>
        <p>© 2024 Gestión de Contenidos. Todos los derechos reservados.</p>
    </footer>

</body>
</html>

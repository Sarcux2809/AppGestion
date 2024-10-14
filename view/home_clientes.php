<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tienda de Peluches</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }
        header {
            background-color: #ff6699;
            color: #fff;
            padding: 20px;
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
        .peluche {
            display: inline-block;
            width: 30%;
            margin: 15px;
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center;
            padding: 20px;
        }
        .peluche img {
            width: 80%;
            border-radius: 8px;
        }
        .peluche h3 {
            color: #ff6699;
            margin-top: 15px;
        }
        .peluche p {
            color: #555;
        }
        .peluche a {
            display: inline-block;
            margin-top: 10px;
            padding: 10px 20px;
            background-color: #ff6699;
            color: white;
            border-radius: 5px;
            text-decoration: none;
        }
        .peluche a:hover {
            background-color: #cc0066;
        }
    </style>
</head>
<body>

    <header>
        <h1>Tienda de Peluches</h1>
        <p>¡Bienvenido a nuestra tienda! Explora nuestra adorable colección de peluches.</p>
    </header>

    <nav>
        <ul>
            <li><a href="user_view.php">Volver al Panel</a></li>
            <li><a href="logout.php">Cerrar Sesión</a></li>
        </ul>
    </nav>

    <section>
        <h2>Nuestra Colección</h2>

        <div class="peluche">
            <img src="peluche1.jpg" alt="Oso de peluche">
            <h3>Oso de Peluche</h3>
            <p>Un tierno y suave oso de peluche. Perfecto para abrazar.</p>
            <p>Precio: $15.00</p>
            <a href="#">Ver detalles</a>
        </div>

        <div class="peluche">
            <img src="peluche2.jpg" alt="Peluche de unicornio">
            <h3>Peluche de Unicornio</h3>
            <p>Un peluche mágico de unicornio con colores brillantes.</p>
            <p>Precio: $20.00</p>
            <a href="#">Ver detalles</a>
        </div>

        <div class="peluche">
            <img src="peluche3.jpg" alt="Peluche de panda">
            <h3>Peluche de Panda</h3>
            <p>Este panda adorable será el mejor compañero de tus siestas.</p>
            <p>Precio: $18.00</p>
            <a href="#">Ver detalles</a>
        </div>

        <div class="peluche">
            <img src="peluche4.jpg" alt="Peluche de conejo">
            <h3>Peluche de Conejo</h3>
            <p>Un lindo conejito con orejas largas y suaves.</p>
            <p>Precio: $12.00</p>
            <a href="#">Ver detalles</a>
        </div>

    </section>

    <footer>
        <p>© 2024 Tienda de Peluches. Todos los derechos reservados.</p>
    </footer>

</body>
</html>

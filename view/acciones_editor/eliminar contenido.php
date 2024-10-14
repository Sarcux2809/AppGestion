<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eliminar Contenido</title>
    <style>
        /* Misma hoja de estilo que en create-content.php */
    </style>
</head>
<body>

<h2>Eliminar Producto de Peluche</h2>
<form action="remove-product.php" method="POST">
    <label for="name">Nombre del Producto a Eliminar:</label>
    <input type="text" id="name" name="name" required>

    <p>¿Estás seguro de que deseas eliminar este producto?</p>

    <input type="submit" value="Eliminar Producto">
</form>

</body>
</html>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Contenido</title>
    <style>
        /* Misma hoja de estilo que en create-content.php */
    </style>
</head>
<body>

<h2>Editar Producto de Peluche</h2>
<form action="update-product.php" method="POST">
    <label for="name">Nombre del Producto:</label>
    <input type="text" id="name" name="name" value="Peluche Tigre" required>

    <label for="description">Descripción:</label>
    <textarea id="description" name="description" rows="4" required>Peluche de tigre suave y abrazable, perfecto para niños.</textarea>

    <label for="price">Precio:</label>
    <input type="number" id="price" name="price" step="0.01" value="29.99" required>

    <label for="stock">Cantidad en Stock:</label>
    <input type="number" id="stock" name="stock" value="15" required>

    <input type="submit" value="Actualizar Producto">
</form>

</body>
</html>

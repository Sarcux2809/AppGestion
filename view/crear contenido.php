<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Contenido</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f9f9f9;
            margin: 0;
            padding: 20px;
        }
        form {
            background: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }
        input[type="text"], input[type="number"], textarea {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        input[type="submit"] {
            background-color: #007BFF;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>

<h2>Crear Nuevo Producto de Peluche</h2>
<form action="submit-product.php" method="POST">
    <label for="name">Nombre del Producto:</label>
    <input type="text" id="name" name="name" required>

    <label for="description">Descripción:</label>
    <textarea id="description" name="description" rows="4" required></textarea>

    <label for="price">Precio:</label>
    <input type="number" id="price" name="price" step="0.01" required>

    <label for="stock">Cantidad en Stock:</label>
    <input type="number" id="stock" name="stock" required>

    <input type="submit" value="Crear Producto">
</form>

</body>
</html>

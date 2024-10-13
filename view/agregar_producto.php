<form action="../controller/ProductoController.php" method="POST">
    <label>Nombre del Producto:</label><input type="text" name="nombre" required><br>
    <label>Descripción:</label><textarea name="descripcion" required></textarea><br>
    <label>Precio:</label><input type="number" name="precio" step="0.01" required><br>
    <label>Cantidad:</label><input type="number" name="cantidad" required><br>
    <input type="submit" value="Agregar Producto">
</form>

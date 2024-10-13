<?php
include_once '../config/database.php';
include_once '../model/Producto.php';

$database = new Database();
$db = $database->getConnection();

$producto = new Producto($db);

if ($_POST) {
    $producto->nombre = $_POST['nombre'];
    $producto->descripcion = $_POST['descripcion'];
    $producto->precio = $_POST['precio'];
    $producto->cantidad = $_POST['cantidad'];
    
    if($producto->crearProducto()) {
        echo "Producto creado exitosamente.";
    } else {
        echo "Error al crear el producto.";
    }
}
?>

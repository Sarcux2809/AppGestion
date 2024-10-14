<?php
session_start();
require_once '../../config/database.php';

// Verifica si el usuario es administrador
if ($_SESSION['role'] !== 'Administrador') {
    header("Location: home_administrador.php");
    exit();
}

// Lógica para asignar roles
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $user_id = $_POST['user_id'];
    $new_role = $_POST['role'];
    
    $query = "UPDATE usuarios SET role = ? WHERE id = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("si", $new_role, $user_id);

    if ($stmt->execute()) {
        echo "Rol actualizado con éxito.";
    } else {
        echo "Error al actualizar el rol.";
    }
}
?>

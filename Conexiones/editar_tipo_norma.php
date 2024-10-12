<?php
include 'conexion.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Obtener los datos del formulario
    $id = $_POST['id'];
    $nombre = $_POST['nombre'];

    try {
        // Preparar la consulta
        $stmt = $conn->prepare("UPDATE tipo_norma SET nombre = :nombre WHERE id = :id");
        $stmt->bindParam(':nombre', $nombre);
        $stmt->bindParam(':id', $id);

        // Ejecutar la consulta
        if ($stmt->execute()) {
            echo "Tipo de norma actualizado con éxito.";
        } else {
            echo "Error al actualizar el tipo de norma.";
        }
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
}
?>

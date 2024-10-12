<?php
// Conexión a la base de datos
include 'conexion.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'];

    try {
        $sql = "DELETE FROM tipo_norma WHERE id = :id";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':id', $id);
        $stmt->execute();

        echo "<script>alert('Registro eliminado exitosamente.'); window.location.href='../cargue.php';</script>";
    } catch (PDOException $e) {
        echo "Error al eliminar el registro: " . $e->getMessage();
    }
} else {
    echo "Método de solicitud no válido.";
}
?>

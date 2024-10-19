<?php
// Conexión a la base de datos
include 'conexion.php'; // Incluye el archivo que contiene la conexión a la base de datos.

if ($_SERVER['REQUEST_METHOD'] === 'POST') { // Verifica si el método de solicitud es POST.
    $id = $_POST['id']; // Obtiene el ID del registro a eliminar desde los datos del formulario.

    try {
        // Define la consulta SQL para eliminar un registro de la tabla tipo_norma basado en el ID.
        $sql = "DELETE FROM tipo_norma WHERE id = :id";
        
        // Prepara la consulta SQL usando el objeto de conexión.
        $stmt = $conn->prepare($sql);
        
        // Asocia el valor del ID al marcador de posición :id en la consulta.
        $stmt->bindParam(':id', $id);
        
        // Ejecuta la consulta preparada.
        $stmt->execute();

        // Muestra un mensaje de éxito y redirige al usuario a la página cargue.php.
        echo "<script>alert('Registro eliminado exitosamente.'); window.location.href='../cargue.php';</script>";
    } catch (PDOException $e) {
        // Captura cualquier error que ocurra durante la ejecución de la consulta.
        echo "Error al eliminar el registro: " . $e->getMessage(); // Muestra el mensaje de error.
    }
} else {
    // Si el método de solicitud no es POST, muestra un mensaje de error.
    echo "Método de solicitud no válido.";
}
?>

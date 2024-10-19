<?php
// Incluye el archivo de conexión a la base de datos.
include 'conexion.php';

// Verifica si la solicitud es de tipo POST.
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Obtiene el ID y el nombre del tipo de norma desde los datos del formulario enviado.
    $id = $_POST['id'];
    $nombre = $_POST['nombre'];

    try {
        // Prepara la consulta SQL para actualizar el nombre del tipo de norma en la base de datos.
        $stmt = $conn->prepare("UPDATE tipo_norma SET nombre = :nombre WHERE id = :id");
        
        // Asocia el valor de la variable $nombre al marcador de posición :nombre en la consulta.
        $stmt->bindParam(':nombre', $nombre);
        
        // Asocia el valor de la variable $id al marcador de posición :id en la consulta.
        $stmt->bindParam(':id', $id);

        // Ejecuta la consulta preparada.
        if ($stmt->execute()) {
            // Si la ejecución fue exitosa, muestra un mensaje de éxito.
            echo "Tipo de norma actualizado con éxito.";
        } else {
            // Si hubo un error al ejecutar la consulta, muestra un mensaje de error.
            echo "Error al actualizar el tipo de norma.";
        }
    } catch (PDOException $e) {
        // Captura cualquier excepción lanzada por PDO y muestra el mensaje de error.
        echo "Error: " . $e->getMessage();
    }
}
?>

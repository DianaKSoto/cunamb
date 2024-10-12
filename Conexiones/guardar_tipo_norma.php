<?php
header('Content-Type: application/json'); // Asegurarse de devolver JSON

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Verificar si el campo "nombre_tipo_norma" está presente y no está vacío
    if (!empty($_POST['nombre_tipo_norma'])) {
        // Obtener el valor del formulario
        $nombre_tipo_norma = $_POST['nombre_tipo_norma'];

        // Incluir la conexión a la base de datos
        require 'conexion.php';

        try {
            // Preparar y ejecutar la inserción en la base de datos
            $sql = "INSERT INTO tipo_norma (nombre) VALUES (:nombre_tipo_norma)";
            $stmt = $conn->prepare($sql);
            $stmt->bindParam(':nombre_tipo_norma', $nombre_tipo_norma, PDO::PARAM_STR);
            $stmt->execute();

            // Respuesta JSON de éxito
            echo json_encode([
                'status' => 'success',
                'message' => 'Tipo de norma guardado con éxito.'
            ]);
        } catch (PDOException $e) {
            // Respuesta JSON de error
            echo json_encode([
                'status' => 'error',
                'message' => 'Error al guardar el tipo de norma: ' . $e->getMessage()
            ]);
        }
    } else {
        // Respuesta JSON si el campo está vacío
        echo json_encode([
            'status' => 'error',
            'message' => 'El campo "Nombre del Tipo de Norma" no puede estar vacío.'
        ]);
    }
} else {
    echo json_encode([
        'status' => 'error',
        'message' => 'Método de solicitud no válido.'
    ]);
}
?>

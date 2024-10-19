<?php
header('Content-Type: application/json'); // Establece el encabezado de la respuesta para que sea JSON.

if ($_SERVER['REQUEST_METHOD'] == 'POST') { // Verifica si la solicitud es de tipo POST.
    // Verificar si el campo "nombre_tipo_norma" está presente y no está vacío.
    if (!empty($_POST['nombre_tipo_norma'])) { 
        // Obtener el valor del formulario del campo "nombre_tipo_norma".
        $nombre_tipo_norma = $_POST['nombre_tipo_norma']; 

        // Incluir la conexión a la base de datos.
        require 'conexion.php'; 

        try {
            // Preparar la consulta SQL para insertar un nuevo tipo de norma.
            $sql = "INSERT INTO tipo_norma (nombre) VALUES (:nombre_tipo_norma)"; 
            
            // Prepara la consulta usando la conexión a la base de datos.
            $stmt = $conn->prepare($sql); 
            
            // Asocia el valor del nombre del tipo de norma al marcador de posición en la consulta.
            $stmt->bindParam(':nombre_tipo_norma', $nombre_tipo_norma, PDO::PARAM_STR); 
            
            // Ejecuta la consulta.
            $stmt->execute(); 

            // Respuesta JSON de éxito si la inserción es correcta.
            echo json_encode([
                'status' => 'success', // Indica que la operación fue exitosa.
                'message' => 'Tipo de norma guardado con éxito.' // Mensaje de éxito.
            ]);
        } catch (PDOException $e) {
            // Respuesta JSON de error si ocurre una excepción.
            echo json_encode([
                'status' => 'error', // Indica que hubo un error.
                'message' => 'Error al guardar el tipo de norma: ' . $e->getMessage() // Mensaje de error con detalles.
            ]);
        }
    } else {
        // Respuesta JSON si el campo está vacío.
        echo json_encode([
            'status' => 'error', // Indica que hubo un error.
            'message' => 'El campo "Nombre del Tipo de Norma" no puede estar vacío.' // Mensaje informando que el campo no puede estar vacío.
        ]);
    }
} else {
    // Respuesta JSON si el método de solicitud no es válido.
    echo json_encode([
        'status' => 'error', // Indica que hubo un error.
        'message' => 'Método de solicitud no válido.' // Mensaje informando que el método no es aceptado.
    ]);
}
?>

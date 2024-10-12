<?php
// Incluir el archivo de conexión
include 'conexion.php';

// Comprobar si la conexión es exitosa
if ($pdo) {
    echo "Conexión a la base de datos exitosa";
} else {
    echo "Error al conectar a la base de datos";
}
?>

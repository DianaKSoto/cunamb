<?php
$host = 'localhost'; // Cambia esto si tu base de datos está en otro servidor
$dbname = 'cunamb'; // Nombre de tu base de datos
$username = 'root'; // Tu usuario de MySQL
$password = ''; // Tu contraseña de MySQL

try {
    $conn = new PDO("mysql:host=localhost;dbname=cunamb", "root", "");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} 
 catch (PDOException $e) {
    // Captura el error y muestra un mensaje
    echo "Error de conexión: " . $e->getMessage();
    die();
}
?>

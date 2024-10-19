<?php
// Define la variable $host con el valor 'localhost'.
// Esto se usa para especificar la dirección del servidor de la base de datos.
$host = 'localhost'; // Cambia esto si tu base de datos está en otro servidor

// Define la variable $dbname con el nombre de la base de datos a la que se conectará.
$dbname = 'cunamb'; // Nombre de tu base de datos

// Define la variable $username con el nombre de usuario para la conexión a MySQL.
$username = 'root'; // Tu usuario de MySQL

// Define la variable $password con la contraseña correspondiente al usuario de MySQL.
$password = ''; // Tu contraseña de MySQL

try {
    // Intenta crear una nueva conexión PDO con los parámetros especificados.
    $conn = new PDO("mysql:host=localhost;dbname=cunamb", "root", "");
    
    // Configura el modo de error de PDO para lanzar excepciones en caso de error.
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} 
catch (PDOException $e) {
    // Captura la excepción si hay un error al intentar conectar a la base de datos.
    
    // Muestra un mensaje de error que incluye el mensaje de la excepción.
    echo "Error de conexión: " . $e->getMessage();
    
    // Termina la ejecución del script en caso de error.
    die();
}
?>

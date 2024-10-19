<?php
// Conexión a la base de datos
include 'conexion.php'; // Incluye el archivo de conexión a la base de datos.

// Define la consulta SQL para seleccionar el id y nombre de la tabla tipo_norma.
$sql = "SELECT id, nombre FROM tipo_norma"; 

// Prepara la consulta utilizando la conexión a la base de datos.
$stmt = $conn->prepare($sql); 

// Ejecuta la consulta preparada.
$stmt->execute(); 

// Obtiene todos los resultados de la consulta en forma de array asociativo.
$result = $stmt->fetchAll(PDO::FETCH_ASSOC); 

// Itera sobre cada fila del resultado obtenido.
foreach ($result as $row) { 
    echo "<tr>"; // Inicia una nueva fila de tabla.
    
    // Imprime el ID de la norma, escapando caracteres especiales para evitar XSS.
    echo "<td>" . htmlspecialchars($row['id']) . "</td>"; 
    
    // Imprime el nombre de la norma, también escapando caracteres especiales.
    echo "<td>" . htmlspecialchars($row['nombre']) . "</td>"; 
    
    // Crea una celda que contiene un formulario para eliminar el registro.
    echo "<td>
            <form method='POST' action='../Cunamb/Conexiones/eliminar_tipo_norma.php' style='display:inline;'>
                <input type='hidden' name='id' value='" . htmlspecialchars($row['id']) . "'>
                <button type='submit' class='btn btn-danger btn-sm' onclick='return confirm(\"¿Estás seguro de que deseas eliminar este registro?\");'>Eliminar</button>
            </form>
            <button class='btn btn-info btn-sm btn-editar' data-id='{$row['id']}' data-nombre='{$row['nombre']}'>Editar</button>
          </td>"; // Cierra la celda.
    
    echo "</tr>"; // Cierra la fila de tabla.
}
?>

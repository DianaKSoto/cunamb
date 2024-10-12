<?php
// Conexión a la base de datos
include 'conexion.php';

$sql = "SELECT id, nombre FROM tipo_norma";
$stmt = $conn->prepare($sql);
$stmt->execute();
$result = $stmt->fetchAll(PDO::FETCH_ASSOC);

foreach ($result as $row) {
    echo "<tr>";
    echo "<td>" . htmlspecialchars($row['id']) . "</td>";
    echo "<td>" . htmlspecialchars($row['nombre']) . "</td>";
    echo "<td>
            <form method='POST' action='../Cunamb/Conexiones/eliminar_tipo_norma.php' style='display:inline;'>
                <input type='hidden' name='id' value='" . htmlspecialchars($row['id']) . "'>
                <button type='submit' class='btn btn-danger btn-sm' onclick='return confirm(\"¿Estás seguro de que deseas eliminar este registro?\");'>Eliminar</button>
            </form>
            <button class='btn btn-info btn-sm btn-editar' data-id='{$row['id']}' data-nombre='{$row['nombre']}'>Editar</button>
          </td>";
    echo "</tr>";
}
?>

<?php
require_once 'conexion.php';
try {
    // Crear una instancia de la conexión
    $conexion = new Conexion();

    // Escribir la consulta SQL
    $consulta = "SELECT id_estudiante, cedula, apellidos, nombres, fecha_nacimiento, 
                        lugar_nacimiento, residencia, direccion, sector, foto, 
                        id_paralelo, id_periodo, id_padre, id_madre, id_representante
                 FROM escuela.estudiantes";

    // Ejecutar la consulta y obtener los datos
    $estudiantes = $conexion->obtenerDatos($consulta);

    // Mostrar los resultados en formato JSON
    header('Content-Type: application/json');
    echo json_encode($estudiantes);

} catch (Exception $e) {
    // Manejo de errores
    echo "Error: " . $e->getMessage();
}

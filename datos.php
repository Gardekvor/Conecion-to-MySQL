<?php
include('conexion.php'); // Incluye el archivo de conexión

// Establecer conexión
$conexion = conectaDB();

// Consulta SQL para obtener datos
$sql = "SELECT * FROM productos";
$resultado = mysqli_query($conexion, $sql);

// Crear un array para almacenar los datos
$datos = array();
while ($fila = mysqli_fetch_assoc($resultado)) {
    $datos[] = $fila;
}

// Convertir los datos a formato JSON y enviarlos al frontend
echo json_encode($datos);

// Cerrar conexión
mysqli_close($conexion);
?>
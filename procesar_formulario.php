<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "solicitudes";

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Preparar y enlazar
$stmt = $conn->prepare("INSERT INTO solicitudes (solicitud, correo_facturacion) VALUES (?, ?)");
$stmt->bind_param("ss", $solicitud, $correo_facturacion);

// Establecer parámetros y ejecutar
$solicitud = $_POST['solicitud'];
$correo_facturacion = $_POST['correo_facturacion'];

$stmt->execute();

echo "Nuevo registro creado exitosamente";

$stmt->close();
$conn->close();
?>

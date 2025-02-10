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
$stmt = $conn->prepare("INSERT INTO solicitudes (solicitud, asesor, atiende_pedido, oc, arte, base_datos_1, base_datos_2, cantidad, cliente, empresa, marca, tecnica, num_caras, largo, fecha_solicitud, fecha_entrega, observaciones, tipo_prenda, material, ancho, color_frente, color_reverso, modo_empaque, informacion_precio, documento_abono, costura, notas, correo_solicitante, correo_facturacion) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
$stmt->bind_param("ssssssssissssissssssssssssss", $solicitud, $asesor, $atiende_pedido, $oc, $arte, $base_datos_1, $base_datos_2, $cantidad, $cliente, $empresa, $marca, $tecnica, $num_caras, $largo, $fecha_solicitud, $fecha_entrega, $observaciones, $tipo_prenda, $material, $ancho, $color_frente, $color_reverso, $modo_empaque, $informacion_precio, $documento_abono, $costura, $notas, $correo_solicitante, $correo_facturacion);

// Establecer parámetros y ejecutar
$solicitud = $_POST['solicitud'];
$asesor = $_POST['asesor'];
$atiende_pedido = $_POST['atiende_pedido'];
$oc = $_POST['oc'];
$arte = $_POST['arte'];
$base_datos_1 = $_POST['base_datos_1'];
$base_datos_2 = $_POST['base_datos_2'];
$cantidad = $_POST['cantidad'];
$cliente = $_POST['cliente'];
$empresa = $_POST['empresa'];
$marca = $_POST['marca'];
$tecnica = $_POST['tecnica'];
$num_caras = $_POST['num_caras'];
$largo = $_POST['largo'];
$fecha_solicitud = $_POST['fecha_solicitud'];
$fecha_entrega = $_POST['fecha_entrega'];
$observaciones = $_POST['observaciones'];
$tipo_prenda = $_POST['tipo_prenda'];
$material = $_POST['material'];
$ancho = $_POST['ancho'];
$color_frente = $_POST['color_frente'];
$color_reverso = $_POST['color_reverso'];
$modo_empaque = $_POST['modo_empaque'];
$informacion_precio = $_POST['informacion_precio'];
$documento_abono = $_POST['documento_abono'];
$costura = $_POST['costura'];
$notas = $_POST['notas'];
$correo_solicitante = $_POST['correo_solicitante'];
$correo_facturacion = $_POST['correo_facturacion'];

$stmt->execute();

echo "Nuevo registro creado exitosamente";

$stmt->close();
$conn->close();
?>

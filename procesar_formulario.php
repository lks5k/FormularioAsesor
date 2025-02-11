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

// Sanitizar y validar datos
$solicitud = filter_input(INPUT_POST, 'solicitud', FILTER_SANITIZE_STRING);
$asesor = filter_input(INPUT_POST, 'asesor', FILTER_SANITIZE_STRING);
$atiende_pedido = filter_input(INPUT_POST, 'atiende_pedido', FILTER_SANITIZE_STRING);
$oc = filter_input(INPUT_POST, 'oc', FILTER_SANITIZE_STRING);
$arte = filter_input(INPUT_POST, 'arte', FILTER_SANITIZE_STRING);
$base_datos_1 = filter_input(INPUT_POST, 'base_datos_1', FILTER_SANITIZE_STRING);
$base_datos_2 = filter_input(INPUT_POST, 'base_datos_2', FILTER_SANITIZE_STRING);
$cantidad = filter_input(INPUT_POST, 'cantidad', FILTER_VALIDATE_INT);
$cliente = filter_input(INPUT_POST, 'cliente', FILTER_SANITIZE_STRING);
$empresa = filter_input(INPUT_POST, 'empresa', FILTER_SANITIZE_STRING);
$marca = filter_input(INPUT_POST, 'marca', FILTER_SANITIZE_STRING);
$tecnica = filter_input(INPUT_POST, 'tecnica', FILTER_SANITIZE_STRING);
$num_caras = filter_input(INPUT_POST, 'num_caras', FILTER_VALIDATE_INT);
$largo = filter_input(INPUT_POST, 'largo', FILTER_SANITIZE_STRING);
$fecha_solicitud = filter_input(INPUT_POST, 'fecha_solicitud', FILTER_SANITIZE_STRING);
$fecha_entrega = filter_input(INPUT_POST, 'fecha_entrega', FILTER_SANITIZE_STRING);
$observaciones = filter_input(INPUT_POST, 'observaciones', FILTER_SANITIZE_STRING);
$tipo_prenda = filter_input(INPUT_POST, 'tipo_prenda', FILTER_SANITIZE_STRING);
$material = filter_input(INPUT_POST, 'material', FILTER_SANITIZE_STRING);
$ancho = filter_input(INPUT_POST, 'ancho', FILTER_SANITIZE_STRING);
$color_frente = filter_input(INPUT_POST, 'color_frente', FILTER_SANITIZE_STRING);
$color_reverso = filter_input(INPUT_POST, 'color_reverso', FILTER_SANITIZE_STRING);
$modo_empaque = filter_input(INPUT_POST, 'modo_empaque', FILTER_SANITIZE_STRING);
$informacion_precio = filter_input(INPUT_POST, 'informacion_precio', FILTER_SANITIZE_STRING);
$documento_abono = filter_input(INPUT_POST, 'documento_abono', FILTER_SANITIZE_STRING);
$costura = filter_input(INPUT_POST, 'costura', FILTER_SANITIZE_STRING);
$notas = filter_input(INPUT_POST, 'notas', FILTER_SANITIZE_STRING);
$correo_solicitante = filter_input(INPUT_POST, 'correo_solicitante', FILTER_VALIDATE_EMAIL);
$correo_facturacion = filter_input(INPUT_POST, 'correo_facturacion', FILTER_VALIDATE_EMAIL);

$stmt->bind_param("ssssssssissssissssssssssssss", $solicitud, $asesor, $atiende_pedido, $oc, $arte, $base_datos_1, $base_datos_2, $cantidad, $cliente, $empresa, $marca, $tecnica, $num_caras, $largo, $fecha_solicitud, $fecha_entrega, $observaciones, $tipo_prenda, $material, $ancho, $color_frente, $color_reverso, $modo_empaque, $informacion_precio, $documento_abono, $costura, $notas, $correo_solicitante, $correo_facturacion);

$stmt->execute();

echo "Nuevo registro creado exitosamente";

$stmt->close();
$conn->close();
?>

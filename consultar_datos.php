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

// Consultar datos
$sql = "SELECT id, solicitud, asesor, atiende_pedido, oc, arte, base_datos_1, base_datos_2, cantidad, cliente, empresa, marca, tecnica, num_caras, largo, fecha_solicitud, fecha_entrega, observaciones, tipo_prenda, material, ancho, color_frente, color_reverso, modo_empaque, informacion_precio, documento_abono, costura, notas, correo_solicitante, correo_facturacion FROM solicitudes";
$result = $conn->query($sql);
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consultar Datos</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .container {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 1200px;
            overflow-x: auto;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }
        table, th, td {
            border: 1px solid #ddd;
        }
        th, td {
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #007BFF;
            color: white;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Datos de Solicitudes</h1>
        <?php
        if ($result->num_rows > 0) {
            echo "<table>
                    <tr>
                        <th>ID</th>
                        <th>Solicitud</th>
                        <th>Asesor</th>
                        <th>Atiende Pedido</th>
                        <th>O.C.</th>
                        <th>Arte</th>
                        <th>Base de Datos 1</th>
                        <th>Base de Datos 2</th>
                        <th>Cantidad</th>
                        <th>Cliente</th>
                        <th>Empresa</th>
                        <th>Marca</th>
                        <th>Técnica</th>
                        <th>Número de Caras</th>
                        <th>Largo</th>
                        <th>Fecha de Solicitud</th>
                        <th>Fecha de Entrega</th>
                        <th>Observaciones</th>
                        <th>Tipo de Prenda</th>
                        <th>Material</th>
                        <th>Ancho</th>
                        <th>Color Frente</th>
                        <th>Color Reverso</th>
                        <th>Modo de Empaque</th>
                        <th>Información Precio Cotizado</th>
                        <th>Documento Abono</th>
                        <th>Costura</th>
                        <th>Notas</th>
                        <th>Correo Solicitante</th>
                        <th>Correo Facturación</th>
                    </tr>";
            // Mostrar datos de cada fila
            while($row = $result->fetch_assoc()) {
                echo "<tr>
                        <td>" . $row["id"]. "</td>
                        <td>" . $row["solicitud"]. "</td>
                        <td>" . $row["asesor"]. "</td>
                        <td>" . $row["atiende_pedido"]. "</td>
                        <td>" . $row["oc"]. "</td>
                        <td>" . $row["arte"]. "</td>
                        <td>" . $row["base_datos_1"]. "</td>
                        <td>" . $row["base_datos_2"]. "</td>
                        <td>" . $row["cantidad"]. "</td>
                        <td>" . $row["cliente"]. "</td>
                        <td>" . $row["empresa"]. "</td>
                        <td>" . $row["marca"]. "</td>
                        <td>" . $row["tecnica"]. "</td>
                        <td>" . $row["num_caras"]. "</td>
                        <td>" . $row["largo"]. "</td>
                        <td>" . $row["fecha_solicitud"]. "</td>
                        <td>" . $row["fecha_entrega"]. "</td>
                        <td>" . $row["observaciones"]. "</td>
                        <td>" . $row["tipo_prenda"]. "</td>
                        <td>" . $row["material"]. "</td>
                        <td>" . $row["ancho"]. "</td>
                        <td>" . $row["color_frente"]. "</td>
                        <td>" . $row["color_reverso"]. "</td>
                        <td>" . $row["modo_empaque"]. "</td>
                        <td>" . $row["informacion_precio"]. "</td>
                        <td>" . $row["documento_abono"]. "</td>
                        <td>" . $row["costura"]. "</td>
                        <td>" . $row["notas"]. "</td>
                        <td>" . $row["correo_solicitante"]. "</td>
                        <td>" . $row["correo_facturacion"]. "</td>
                      </tr>";
            }
            echo "</table>";
        } else {
            echo "0 resultados";
        }

        $conn->close();
        ?>
    </div>
</body>
</html>

CREATE DATABASE IF NOT EXISTS solicitudes;

USE solicitudes;

CREATE TABLE IF NOT EXISTS solicitudes (
    id INT AUTO_INCREMENT PRIMARY KEY,
    solicitud VARCHAR(255),
    asesor VARCHAR(255),
    atiende_pedido VARCHAR(255),
    oc VARCHAR(255),
    arte VARCHAR(255),
    base_datos_1 VARCHAR(255),
    base_datos_2 VARCHAR(255),
    cantidad INT,
    cliente VARCHAR(255),
    empresa VARCHAR(255),
    marca VARCHAR(255),
    tecnica VARCHAR(255),
    num_caras INT,
    largo VARCHAR(255),
    fecha_solicitud DATE,
    fecha_entrega DATE,
    observaciones TEXT,
    tipo_prenda VARCHAR(255),
    material VARCHAR(255),
    ancho VARCHAR(255),
    color_frente VARCHAR(255),
    color_reverso VARCHAR(255),
    modo_empaque VARCHAR(255),
    informacion_precio VARCHAR(255),
    documento_abono VARCHAR(255),
    costura VARCHAR(255),
    notas TEXT,
    correo_solicitante VARCHAR(255),
    correo_facturacion VARCHAR(255)
);

CREATE TABLE IF NOT EXISTS users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(255) NOT NULL,
    password VARCHAR(255) NOT NULL
);

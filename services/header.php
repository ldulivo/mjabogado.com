<?php

$allowedOrigins = [
    "https://mjabogado.com",
    "https://www.mjabogado.com"
];

// Capturar el origin
$origin = isset($_SERVER['HTTP_ORIGIN']) ? $_SERVER['HTTP_ORIGIN'] : (
    isset($_SERVER['HTTP_ACCESS_CONTROL_ALLOW_ORIGIN']) ? $_SERVER['HTTP_ACCESS_CONTROL_ALLOW_ORIGIN'] : null
);

header("Access-Control-Allow-Methods: GET, POST, OPTIONS");
header("Access-Control-Allow-Headers: Content-Type, Authorization");

// Si estás en modo desarrollo, permitir todo
if ($env["isDevelopment"]) {
    header("Access-Control-Allow-Origin: *");
    return;
}

// Validar el origin
if ($origin && !in_array($origin, $allowedOrigins)) {
    header("HTTP/1.1 403 Forbidden");
    echo json_encode(["error" => "CORS no permitido.", "origin" => $origin]);
    exit;
}

// Si todo está permitido, permitir origen
if ($origin) {
    header("Access-Control-Allow-Origin: $origin");
    return;
} else {
    header("HTTP/1.1 400 Bad Request");
    echo json_encode(["error" => "No se recibió el encabezado Origin."]);
    exit;
}

echo json_encode(["success" => true, "origin" => $origin]);

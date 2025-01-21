<?php
require_once "../env.php";

if (substr_count($_SERVER['HTTP_ACCEPT_ENCODING'], 'gzip')) {
  ob_start("ob_gzhandler"); // Inicia salida con compresión gzip
} else {
  ob_start(); // Inicia salida sin compresión
}

$url = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$url = explode("?", $url);
$url = $url[0];
$url = trim($url, "/");
$url = explode("/", $url);

if ($url[0] === "services") {
  require_once "services/index.php";
  exit;
}

/**
 * Se evita que el motor de búsqueda indexa el sitio web
 * mientras se está desarrollando
 */
if ($env["isDevelopment"] || $url[0] === "serviciosdestacados") {
    header('X-Robots-Tag: noindex');
} else {
  header("X-Robots-Tag: index");
}

require_once "core/main.php";

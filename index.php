<?php
require_once "../env.php";

$url = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
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
}

require_once "core/main.php";

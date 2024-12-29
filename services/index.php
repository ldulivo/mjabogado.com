<?php

require_once "services/header.php";

/**
 * detectar la url ya que todo lo maneja este archivo index.php
 */
$url = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$url = trim($url, "/");
$url = explode("/", $url);

if (!file_exists("services/" . $url[1] . ".php")) {
  http_response_code(404);
  exit;
}

require_once "services/" . $url[1] . ".php";
serviceApi::api($url[1], $env);
$response = serviceApi::get();
echo $response;
exit;

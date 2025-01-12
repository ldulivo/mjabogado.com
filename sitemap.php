<?php

require_once "config.php";

function getData($url) {  
  // Hacer la solicitud GET
  $options = [
      "http" => [
          "method" => "GET",
          "header" => "Content-Type: application/json\r\n" .
                      "Access-Control-Allow-Origin: https://mjabogado.com\r\n"
      ]
  ];
  
  $context = stream_context_create($options);
  $response = file_get_contents($url, false, $context);
  
  if ($response === false) {
    return date('Y-m-d'); // Usar la fecha actual como respaldo
  }
  
  // Decodificar la respuesta JSON
  $data = json_decode($response, true);
  
  return $data;

}

// Función para obtener la última fecha de publicación
function getLastVideoDate() {
  // URL del servicio de videos de YouTube
  $url = "https://mjabogado.com/services/youtube_videos";

  $data = getData($url);

  // Verificar que los datos sean válidos
  if (!isset($data['items']) || !is_array($data['items'])) {
    return date('Y-m-d'); // Usar la fecha actual como respaldo
  }

  $videos = $data['items'];

  $latestTime = 0; // Inicializamos con un valor muy bajo para encontrar el máximo

  foreach ($videos as $video) {
      if (isset($video['snippet']['publishTime'])) {
          $time = strtotime($video['snippet']['publishTime']);
          if ($time > $latestTime) {
              $latestTime = $time;
          }
      }
  }

  return $latestTime > 0 ? date('Y-m-d', $latestTime) : date('Y-m-d');
}

// Función para obtener la última fecha de las reseñas
function getLastReviewDate() {
  // URL del servicio de Google Reviews
  $url = "https://mjabogado.com/services/google_reviews";
  $data = getData($url);

  // Verificar que los datos sean válidos
  if (!isset($data['result']['reviews']) || !is_array($data['result']['reviews'])) {
    return date('Y-m-d'); // Usar la fecha actual como respaldo
  }
  
  $reviews = $data['result']['reviews'];

    $latestTime = 0; // Inicializamos con un valor muy bajo para encontrar el máximo

    foreach ($reviews as $review) {
        if (isset($review['time']) && $review['time'] > $latestTime) {
            $latestTime = $review['time'];
        }
    }

    return $latestTime > 0 ? date('Y-m-d', $latestTime) : date('Y-m-d');
}

// Obtener la última fecha de los videos
$lastVideoDate = getLastVideoDate($videos);

// Obtener la última fecha
$lastReviewDate = getLastReviewDate($reviews);

$lastModifiedHome = $config['lastModified']['home'] ?? date('Y-m-d');
$lastModifiedOnline = $config['lastModified']['online'] ?? date('Y-m-d');



// Establecer encabezados
header("Content-Type: application/xml; charset=utf-8");

// Obtener la URL base desde la configuración
$baseUrl = $config["url"];

// Generar el sitemap en formato XML
echo '<?xml version="1.0" encoding="UTF-8"?>';
echo '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">';

// Página principal (home)
echo '<url>';
echo '<loc>https://mjabogado.com/</loc>';
echo '<lastmod>' . $lastModifiedHome . '</lastmod>'; // Fecha fija definida en config.php
echo '<changefreq>monthly</changefreq>';
echo '<priority>1.0</priority>';
echo '</url>';

// Página "Sobre mí"
echo '<url>';
echo '<loc>https://mjabogado.com/sobremi</loc>';
echo '<lastmod>' . $lastReviewDate . '</lastmod>'; // Fecha de última reseña
echo '<changefreq>weekly</changefreq>';
echo '<priority>0.8</priority>';
echo '</url>';

// Página "Online"
echo '<url>';
echo '<loc>https://mjabogado.com/online</loc>';
echo '<lastmod>' . $lastModifiedOnline . '</lastmod>'; // Fecha fija definida en config.php
echo '<changefreq>monthly</changefreq>';
echo '<priority>0.6</priority>';
echo '</url>';

// Página "Videos"
echo '<url>';
echo '<loc>https://mjabogado.com/videos</loc>';
echo '<lastmod>' . $lastVideoDate . '</lastmod>'; // Fecha de último video
echo '<changefreq>weekly</changefreq>';
echo '<priority>0.7</priority>';
echo '</url>';

// Finalizar el sitemap
echo '</urlset>';

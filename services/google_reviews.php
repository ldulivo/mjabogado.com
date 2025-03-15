<?php

class serviceApi {
  public static $env;

  public static function api($url = null, $env = null) {
    if ($env) {
      self::$env = $env;
    }
  }
  public static function get() {
    
    $apiKey = self::$env["googleMaps"]["apiKey"];
    $placeId = self::$env["googleMaps"]["placeId"];

    // Construir la URL de la API de Google
    $googleApiUrl = "https://maps.googleapis.com/maps/api/place/details/json?place_id=$placeId&fields=name,rating,reviews,user_ratings_total&language=es&key=$apiKey";

    // Realizar la solicitud a la API de Google
    $response = file_get_contents($googleApiUrl);

    if ($response === FALSE) {
      echo json_encode(["error" => "No se pudo obtener información de la API de Google."]);
      http_response_code(500);
      exit;
    }

    return $response;
  }
}
?>

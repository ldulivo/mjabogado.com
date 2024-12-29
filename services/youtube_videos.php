<?php

class serviceApi {
  public static $apiKey;
  public static $channelId;
  public static $url;

  public static function api($url = null, $env = null) {
    if ($env) {
      self::$apiKey = $env["youtube"]["apiKey"];
      self::$channelId = $env["youtube"]["channelId"];
    }
  }

  public static function get() {
    $order = isset($_GET['order']) ? $_GET['order'] : "date";
    switch ($order) {
      case "featured":
        $url_content = self::getFeaturedVideos();
        break;
      case "playlists":
        $url_content = self::getPlaylists();
        break;
      case "details":
        $videoIds = isset($_GET['ids']) ? explode(',', $_GET['ids']) : [];
        $url_content = self::getVideoDetails($videoIds);
        break;
      default:
        $url_content = self::getRecentVideos();
        break;
      }

    $response = file_get_contents($url_content);

    return $response;
  }

  // obtener videos recientes
  private static function getRecentVideos($maxResults = 10) {
    return "https://www.googleapis.com/youtube/v3/search?key=" . self::$apiKey . "&channelId=" . self::$channelId . "&part=snippet&type=video&order=date&maxResults={$maxResults}";  
  }

  // obtener videos destacados
  private static function getFeaturedVideos($maxResults = 10) {
    return "https://www.googleapis.com/youtube/v3/search?key=" . self::$apiKey . "&channelId=" . self::$channelId . "&part=snippet&type=video&order=viewCount&maxResults={$maxResults}";
  }

  // obtener playlists
  private static function getPlaylists($maxResults = 10) {
    return "https://www.googleapis.com/youtube/v3/playlists?part=snippet&channelId=" . self::$channelId . "&maxResults={$maxResults}&key=" . self::$apiKey;
  }

  // obtener detalles de videos por ID (útil para los shortcuts)
  private static function getVideoDetails($videoIds) {
    $ids = implode(',', $videoIds);
    return "https://www.googleapis.com/youtube/v3/videos?part=snippet,contentDetails&id={$ids}&key=" . self::$apiKey;
  }
}

?>
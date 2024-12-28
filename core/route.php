<?php
namespace core;

class Route
{
  /**
   * @param string $ruta
   * @return string
   * - index.php
   * - sobremi.php
   * - servicios.php
   * - online.php
   * - videos.php
   */
  public static function getFileName()
  {

    $ruta = self::getUrl();
    $ruta = trim($ruta, "/");
    $ruta = explode(".", $ruta);
    return isset($ruta[0]) && $ruta[0] != "" ? $ruta[0] : "index";
  }

  /**
   * obtiene la url de la ruta
  */
  public static function getUrl()
  {
    $url = $_SERVER['REQUEST_URI'];
    return $url;
  }
}
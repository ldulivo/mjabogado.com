<?php

namespace core;

class Conf
{
  private static $data = null;

  public static function init($data)
  {
    self::$data = $data;
  }
  public static function get($key)
  {
    return self::$data[$key];
  }
}
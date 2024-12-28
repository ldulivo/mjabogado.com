<?php
namespace core;

class Utils
{
  public static function detectKey($array, $keyToFind) {
    foreach ($array as $item) {
        if (array_key_exists($keyToFind, $item)) {
            return true;
        }
    }
    return false;
  }
}
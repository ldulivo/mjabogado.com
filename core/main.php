<?php

require_once "config.php";
require_once "core/conf.php";
require_once "core/utils.php";
require_once "core/route.php";

require_once "src/components/head.php";
require_once "src/components/navbar.php";
require_once "src/components/footer.php";
require_once "src/components/dialog.php";
require_once "src/components/whatsapp.php";

require_once "src/layout/layout.php";

use core\Conf;
use core\Route;

$archivo = Route::getFileName();
Conf::init($config);

if (!file_exists("src/pages/" . $archivo . ".php")) {
  $archivo = "404";
}

echo "<!DOCTYPE html>";
echo "<html lang=\"es-ES\">";
layout($archivo);
echo "</html>";

exit;
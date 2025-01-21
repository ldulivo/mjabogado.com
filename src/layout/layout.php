<?php
// use components\Navbar;
// use components\Footer;
// use components\Whatsapp;

use components\Dialog;
use components\Footer;
use components\Head;
use components\Navbar;
use components\Whatsapp;

function layout($ruta)
{
  include "src/pages/" . $ruta . ".php";

  Head::head($title, $metaDescription, $ogTitle, $ogDescription, $ogImage, $ogUrl);
  echo "<body>";

  Navbar::navbar($ruta);
  echo "<header id=\"root_header\">";
  pageHeader();
  echo "</header>";
  echo "<main>";
  pageMain();
  echo "</main id=\"root_main\">";

  Dialog::dialog();
  Whatsapp::whatsapp();
  Footer::footer();

  echo "</body>";
}

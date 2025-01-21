<?php
namespace components;

use core\Conf;

class Head
{
  public static function head(
    $title = "",
    $metaDescription = "",
    $ogTitle = "",
    $ogDescription = "",
    $ogImage = "",
    $ogUrl = ""
  )
  {
    // si viene un titulo, es decir que $title no es vacío, entonces se usa el título
    // en caso contrario, se usa el título por defecto que está en la configuración
    $title = $title != "" ? $title : Conf::get("title");
    $metaDescription = $metaDescription != "" ? $metaDescription : Conf::get("description");
    $ogTitle = $ogTitle != "" ? $ogTitle : Conf::get("ogTitle");
    $ogDescription = $ogDescription != "" ? $ogDescription : Conf::get("ogDescription");
    $ogImage = $ogImage != "" ? $ogImage : Conf::get("ogImage");
    $ogUrl = $ogUrl != "" ? $ogUrl : Conf::get("ogUrl");
    
    ?>
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title; ?></title>
  
    <!-- Meta Description for SEO -->
    <meta name="description"
      content="<?php echo $metaDescription; ?>">
  
    <!-- Meta Keywords (optional) -->
    <meta name="keywords"
      content="<?php echo Conf::get("keywords"); ?>">
  
    <!-- Author -->
    <meta name="author" content="<?php echo Conf::get("author"); ?>">
  
    <!-- Open Graph Meta Tags for Social Media -->
    <meta property="og:title" content="<?php echo $ogTitle; ?>"> 
    <meta property="og:description"
      content="<?php echo $ogDescription; ?>">
    <meta property="og:image" content="<?php echo $ogImage; ?>">
    <meta property="og:url" content="<?php echo $ogUrl; ?>">
    <meta property="og:type" content="website">
  
    <!-- Twitter Card Meta Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="<?php echo $ogTitle; ?>">
    <meta name="twitter:description" content="<?php echo $ogDescription; ?>">
    <meta name="twitter:image" content="<?php echo $ogImage; ?>">
  
    <!-- Canonical URL -->
    <link rel="canonical" href="<?php echo $ogUrl; ?>">
  
    <!-- Favicon -->
    <link rel="icon" href="/assets/img/favicon.ico" sizes="any">
    <link rel="icon" href="/assets/img/favicon.svg" type="image/svg+xml">
  
    <!-- Stylesheet -->
    <link rel="stylesheet" href="/assets/css/styles.css?<?php echo Conf::get("filecontrol"); ?>">
  
    <!-- Schema Markup for SEO (JSON-LD) -->
     <?php
     /**
      * construir el json-ld con la información de config.php
      */
      $address = Conf::get("address");
      $sameAs = Conf::get("sameAs");
      echo "<script type='application/ld+json'>";
      echo "\n{";
      echo "\n\"@context\": \"https://schema.org\",";
      echo "\n\"@type\": \"LegalService\",";
      echo "\n\"name\": \"Mauricio Jiménez Abogado\",";
      echo "\n\"url\": \"" . Conf::get("url") . "\",";
      echo "\n\"address\": {";
      echo "\n\"@type\": \"PostalAddress\",";
      echo "\n\"streetAddress\": \"" . $address["streetAddress"] . "\",";
      echo "\n\"addressLocality\": \"" . $address["addressLocality"] . "\",";
      echo "\n\"postalCode\": \"" . $address["postalCode"] . "\",";
      echo "\n\"addressCountry\": \"" . $address["addressCountry"] . "\"";
      echo "\n},";
      echo "\n\"areaServed\": \"" . Conf::get("areaServed") . "\",";
      echo "\n\"telephone\": \"" . Conf::get("telephone") . "\",";
      echo "\n\"image\": \"" . Conf::get("image") . "\",";
      echo "\n\"description\": \"" . Conf::get("description") . "\",";
      echo "\n\"founder\": \"" . Conf::get("author") . "\",";
      echo "\n\"sameAs\": [";

      $lastIndex = count($sameAs) - 1;
      foreach ($sameAs as $index => $url) {
        echo "\n\"" . $url . "\"";
        if ($index != $lastIndex) {
          echo ",";
        }
      }

      echo "\n]";
      echo "\n}";
      echo "</script>";
     ?>
  
     <script src="/assets/js/script.js?<?php echo Conf::get("filecontrol"); ?>" defer></script>
     <script src="/assets/js/whatsapp.js?<?php echo Conf::get("filecontrol"); ?>" defer></script>
     <script src="/assets/js/contactMe.js?<?php echo Conf::get("filecontrol"); ?>" defer></script>
     <script src="/assets/js/navbar.js?<?php echo Conf::get("filecontrol"); ?>" defer></script>
    </head>
    <?php
  }
}
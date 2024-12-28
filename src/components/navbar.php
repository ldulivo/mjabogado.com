<?php
namespace components;

class Navbar
{
  public static function navbar($url)
  {
    $ruta = explode("/", trim($url, "/"));
    $ruta = $ruta[0];

    $baseUrl = $_SERVER['REQUEST_SCHEME'] . "://" . $_SERVER['HTTP_HOST'];
    ?>
    <nav aria-label="Menu principal" id="navbar">
      <div class="nav-content">
        <div class="logo">
          <a aria-current="<?php echo $ruta == 'index' ? 'page' : 'false'; ?>" href="/index">
            <img src="/assets/img/logo_mauricio.svg" loading="lazy" alt="Logo de Mauricio Jiménez Abogado">
          </a>
        </div>
        <input type="checkbox" id="menu-toggle">
        <label for="menu-toggle" class="menu-toggle">
          <span></span>
          <span></span>
          <span></span>
        </label>

        <ul>
          <li><a class=<?php echo $ruta == "sobremi" ? "'active'" : "''" ?> aria-current="<?php echo $ruta == 'sobremi' ? 'page' : 'false'; ?>" href="<?php echo $baseUrl ?>/sobremi" aria-current="page">Sobre mí</a></li>   
          <li><a class=<?php echo $ruta == "serviciosdestacados" ? "'active'" : "''" ?> aria-current="<?php echo $ruta == '/serviciosdestacados' ? 'page' : 'false'; ?>" href="<?php echo $baseUrl ?>/serviciosdestacados">Servicios destacados</a></li>
          <li><a class=<?php echo $ruta == "online" ? "'active'" : "''" ?> aria-current="<?php echo $ruta == 'online' ? 'page' : 'false'; ?>" href="<?php echo $baseUrl ?>/online">Online</a></li>
          <li><a class=<?php echo $ruta == "videos" ? "'active'" : "''" ?> aria-current="<?php echo $ruta == 'videos' ? 'page' : 'false'; ?>" href="<?php echo $baseUrl ?>/videos">Videos</a></li>
        </ul>
      </div>
    </nav>
    <?php
  }
}


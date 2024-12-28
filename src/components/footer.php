<?php
namespace components;

use core\Conf;

class Footer
{
  public static function footer()
  {
    $socialmedia = Conf::get("sameAs");
    ?>
    <footer>
      <div class="footer-info-content">
        <div class="footer--info--socialmedia">
          <div class="socialmedia">
            <a href="<?php echo $socialmedia[0]; ?>" target="_blank">
              <img src="/assets/img/socialmedia/linkedin-svgrepo-com.svg" loading="lazy" alt="Logo de LinkedIn">
            </a>
            <a href="<?php echo $socialmedia[1]; ?>" target="_blank">
              <img src="/assets/img/socialmedia/instagram-svgrepo-com.svg" loading="lazy" alt="Logo de Instagram">
            </a>
            <a href="<?php echo $socialmedia[2]; ?>" target="_blank">
              <img src="/assets/img/socialmedia/tiktok-svgrepo-com.svg" loading="lazy" alt="Logo de TikTok">
            </a>
            <a href="<?php echo $socialmedia[3]; ?>" target="_blank">
              <img src="/assets/img/socialmedia/youtube-svgrepo-com.svg" loading="lazy" alt="Logo de YouTube">
            </a>
          </div>
          <p>Colegiado ICAMUR nº. 8153</p>
        </div>
        <div class="footer--info--contact">
          <div>
            <a href="https://maps.app.goo.gl/P5yyJFe6HeXouGBP9" target="_blank" rel="noopener">
              <img src="/assets/img/ico_map.svg" loading="lazy" alt="Logo de geolocalización">
              <p><?php echo Conf::get("address")["streetAddress"]; ?></p>
            </a>
          </div>
          <div>
            <img src="/assets/img/ico_email.svg" loading="lazy" alt="Logo de correo electrónico">
            <p><?php echo Conf::get("email"); ?></p>
          </div>
          <div>
            <img src="/assets/img/ico_phone.svg" loading="lazy" alt="Logo de teléfono de contacto">
            <p><?php echo Conf::get("telephone"); ?></p>
          </div>
        </div>
      </div>
    </footer>
    <?php
  }
}
<?php
namespace components;

use core\Conf;

class Whatsapp
{
  public static function whatsapp()
  {
    ?>
    <div class="whatsapp">
      <button
        id="whatsapp_content"
        class="whatsapp-content"
        data-whatsapp="<?php echo Conf::get("whatsapp"); ?>"
      >
        <div class="whatsapp-image">
          <img src="/assets/img/whatsapp.svg" loading="lazy" alt="Whatsapp">
          <span>Contactar</span>
        </div>
      </button>
    </div>
    <?php
  }

}
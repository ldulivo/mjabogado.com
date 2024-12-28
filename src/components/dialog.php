<?php
namespace components;

class Dialog
{
  public static function dialog()
  {
    ?>
    <div id="dialog_backdrop" class="dialog-backdrop"></div>
    <dialog id="dialog" class="dialog">
      <div class="dialog-close--content">
        <div id="dialog_close" class="dialog-close">X</div>
      </div>
      <div id="dialog_content" class="dialog-content">
      </div>
      <h2>¡Contacta con nosotros!</h2>
      <p>Para consultas gratuitas, solo tienes que ingresar tus datos y hacer clic en el botón enviar.</p>
      <div class="dialog-form">
        <input id="dialog_name" type="text" placeholder="Nombre" required>
        <input id="dialog_phone" type="tel" placeholder="Teléfono o correo electrónico" required>
        <textarea id="dialog_message" placeholder="Mensaje" required></textarea>
        <button id="dialog_send" class="button">Enviar</button>
      </div>
      <div id="successMessage" class="success-message">
        <h3>¡Mensaje enviado correctamente!</h3>
        <p>Nos pondremos en contacto contigo a la brevedad posible.</p>
        <p>Gracias!</p>
      </div>
    </dialog>
    <?php
  }
}
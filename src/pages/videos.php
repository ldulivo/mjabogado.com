<?php

$title = "Videos - Mauricio Jiménez";
$metaDescription = "Explora los videos de Mauricio Jiménez, abogado en Murcia. Consejos legales, tips para rellenar formularios, curiosidades y más en su canal de YouTube. Aprende y resuelve tus dudas legales con contenido práctico y de calidad.";
$ogTitle = "Videos Legales - Consejos y Tips de Mauricio Jiménez";
$ogDescription = "Descubre videos legales de calidad sobre consejos, tips y curiosidades del mundo jurídico. Aprende de Mauricio Jiménez, abogado en Murcia.";
$ogImage = "";
$ogUrl = "https://mjabogado.com/videos";

use core\Conf;

function pageHeader()
{
  ?>
  <div class="global-header">
    <div class="content">
      <h1>Videos</h1>
    </div>
  </div>
  <?php
}

function pageMain()
{
  ?>
  <div class="videos">
    <dialog class="videos-dialog" id="videosDialog">
      <button class="dialog-close video-dialog-close" id="videoDialogClose">&times;</button>
      <div class="videos-dialog-content" id="videosDialogContent">
      </div>
    </dialog>
    <div class="content">
      <section class="videos-header">
        <div class="VideoApiDialogContent" data-video="oFRzhkjhACg">
          <div class="loader-content">
            <div class="loader"></div>
          </div>
        </div>
      </section>
      <section class="videos-container">
        <div class="videos-btn">
          <button data-query = "recent" class="recent">Recientes</button>
          <button data-query = "featured" class="featured">Destacados</button>
          <button data-query = "playlists" class="playlists">Listas</button>
        </div>
        <div class="videos-content" id="videosContent">
          <div class="loader-content">
            <div class="loader"></div>
          </div>
        </div>
      </section>
    </div>
  </div>
  <script src="/assets/js/full_youtube.js?<?php echo Conf::get("filecontrol"); ?>" defer></script>
  <?php
}
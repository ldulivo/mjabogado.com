<?php

$title = "Servicios online - Mauricio Jiménez";
$metaDescription = "Accede a asesoramiento legal online con Mauricio Jiménez, abogado en Murcia. Resuelve tu caso desde casa con seguridad, agilidad y respaldo profesional. Control total, transparencia y respuestas rápidas para proteger tus derechos en todo momento.";
$ogTitle = "Asesoramiento Legal Online - Mauricio Jiménez Abogado";
$ogDescription = "Resuelve tu caso sin moverte de casa. Obtén asesoramiento legal online con seguridad, agilidad y transparencia. Calidad profesional desde cualquier lugar.";
$ogImage = "";
$ogUrl = "https://www.mjabogado.com/online";

use core\Conf;

function pageHeader()
{
  ?>
  <div class="global-header">
    <div class="content">
      <h1>Online</h1>
    </div>
  </div>
  <?php
}

function pageMain()
{
  ?>
  <div class="online">
    <div class="content">
      <section>
        <h2>Resuelve tu caso sin moverte de casa</h2>
      </section>
      <section>
        <div class="online-cards">
          <div class="text">
            <p>El <span>asesoramiento legal online</span> es una <span>solución</span> que brinda <span>seguridad, agilidad y respaldo profesional</span> en cada paso. <span>Ahorra tiempo y recursos.</span> Obtén el acompañamiento jurídico de calidad que mereces, con la tranquilidad de saber que tus derechos están protegidos y al alcance de tu mano, desde cualquier parte, en todo momento.</p>
            <p>Con <span>transparencia</span> en cada paso, <span>accesibilidad</span> total y <span>seguimiento en tiempo real</span>, podrás mantener el control absoluto de tu caso y recibir respuestas rápidas para resolverlo.</p>          
          </div>
          <div class="image">
            <picture>
              <source srcset="/assets/img/Imagen_online.webp" type="image/webp">
              <img src="/assets/img/Imagen_online.jpg" loading="lazy" alt="Ordenador portátil">
            </picture>
          </div>
        </div>
      </section>
      <section>
        <div
          class="videoApi"
          data-video="oFRzhkjhACg"
          onclick="openVideo(this)"
        >
          <img
            src="https://i.ytimg.com/vi/oFRzhkjhACg/hqdefault.jpg"
            loading="lazy"
            alt="Mauricio Jiménez Abogado: Sobre mi"
            >
            <button class="play-button">&#9658;</button>
        </div>
      </section>
    </div>
    <script src="./assets/js/youtube.js?<?php echo Conf::get("filecontrol"); ?>" defer></script>
  </div>
  <?php
}
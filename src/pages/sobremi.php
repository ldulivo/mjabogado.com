<?php

$title = "Sobre mí - Mauricio Jiménez";
$metaDescription = "Conoce a Mauricio Jiménez, abogado en Murcia especializado en Derecho Civil, Penal y Laboral. Atención personalizada, resultados comprobados y experiencia colaborando con profesionales de más de 20 años. ¡Tu tranquilidad legal comienza con la primera consulta gratuita!";
$ogTitle = "Sobre mí - Mauricio Jiménez | Abogado en Murcia";
$ogDescription = "Soy Mauricio Jiménez, abogado especializado en temas civiles, penales y laborales. Compromiso, experiencia y atención personalizada para resolver tus problemas legales.";
$ogImage = "https://www.mjabogado.com/assets/img/Imagen_sobre_mi.jpeg";
$ogUrl = "https://www.mjabogado.com/sobremi";

use core\Conf;

function pageHeader()
{
  ?>
  <div class="global-header">
    <div class="content">
      <h1>Sobre mí</h1>
    </div>
  </div>
  <?php
}

function pageMain()
{
  ?>
  <div class="sobremi">
    <div class="content">
      <section class="sobremi-image">
        <div class="sobremi-image-text">
          <p>Querido o querida, me presento:</p>
          <p>Abogado en Murcia, especializado en temas civiles, penales y laborales.</p>
          <p>Mi compromiso contigo es brindarte soluciones legales y un asesoramiento jurídico cercano, profesional y eficaz, adaptado a cada situación particular.</p>
        </div>
        <div class="sobremi-image-img">
          <img src="/assets/img/Imagen_sobre_mi.jpeg" loading="lazy" alt="Sobre mi">
        </div>
      </section>
      <section>
        <h2>¿Por qué elegirme?</h2>
        <p>Atención personalizada: Accidentes, herencias, civil, penal, laboral, seguros, inmigración… da igual el problema, trataré tu caso de manera personalizada y única, tratándote como un socio/a y no como un/a cliente.</p>
        <p>Resultados comprobados: he ayudado a numerosas personas en sus problemas legales, con experiencia contrastada y colaborando con abogados con más de 20 años de experiencia.</p>
        <p>¡Tu tranquilidad legal está a un clic de distancia!</p>
        <p>Si buscas un abogado profesional y dedicado, estoy listo para escucharte y apoyarte. Contacta conmigo y da el primer paso para resolver tu problema, la primera consulta es gratuita.</p>
      </section>
      <section>
        <div class="loader-content">
          <div class="loader"></div>
        </div>
        <button
          class="videoApi"
          data-video="oFRzhkjhACg"
        >
          <img
            src="https://i.ytimg.com/vi/oFRzhkjhACg/hqdefault.jpg"
            loading="lazy"
            alt="Mauricio Jiménez Abogado - Video de: Sobre mi" 
          >
          <div class="play-button">&#9658;</div>
        </button>
      </section>
      <section>
        <div class="reviews-section">
          <h2>Opinión de los clientes</h2>
          <div class="reviews-list">
            <div class="review" id="about_me_review">
            </div>
            <button id="review_next_left" class="slide-left"></button>
            <button id="review_next_right" class="slide-right"></button>
          </div>
          <div class="more-reviews">
            <a href="https://www.google.com/maps/place/Mauricio+Jim%C3%A9nez.+Abogado/@37.9936512,-1.116685,17z/data=!3m1!5s0xd63826a8c0e7e6f:0xd3dd5f51814f09a8!4m8!3m7!1s0xd63833fb455c827:0xcb2fa312988278cb!8m2!3d37.993647!4d-1.1141101!9m1!1b1!16s%2Fg%2F11wqr73qhh?entry=ttu&g_ep=EgoyMDI0MTIxMS4wIKXMDSoASAFQAw%3D%3D"
               id="more_reviews"
               class="more-reviews-button"
               target="_blank"
               rel="noopener noreferrer">Ver más reseñas</a>
          </div>
        </div>
      </section>
    </div>
  </div>
  <script src="/assets/js/youtube.js?<?php echo Conf::get("filecontrol"); ?>" defer></script>
  <script src="/assets/js/google_reviews.js?<?php echo Conf::get("filecontrol"); ?>" defer></script>
  <?php
}

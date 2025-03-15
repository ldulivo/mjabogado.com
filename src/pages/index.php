<?php

$title = "";
$metaDescription = "";
$ogTitle = "";
$ogDescription = "";
$ogImage = "";
$ogUrl = "";

use core\Conf;

function pageHeader()
{
  ?>
  <div class="home">
    <div class="content">
      <h2>Bienvenido/a a</h2>
      <h1>Mauricio Jiménez <span>Abogado</span></h1>
    </div>
  </div>
  <?php
}

function pageMain()
{
  ?>
  <div class="home">
    <div class="content">

    <section>
        <div class="reviews-section">
          <h2>Opinión de los clientes</h2>
          <div id="user_ratings_total_content" class="user_ratings_total_content">
          </div>
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

      <section>
        <div class="index-main--primer-consulta-gratis">
          <button class="index-main--primer-consulta-gratis-content dialog-button" data-dialog="">
            <span>Primera consulta es gratis, ¡hablemos!</span>
          </button>
        </div>
      </section>

      <section class="section-reverse">
        <h2>Servicios destacados</h2>
        <div class="index-main--servicios-destacados">
         <ul>
            <li>
              <h3>Derecho civil</h3>
              <p>Protegemos tus derechos en cualquier materia civil. Encontramos <span>soluciones sólidas</span>, <span>cercanas</span> y <span>efectivas</span>, proporcionándote la <span>tranquilidad</span> que mereces.</p>
            </li>
            <li>
              <h3>Derecho penal</h3>
              <p>Entendemos la importancia que tiene <span>una defensa firme y personalizada</span>. Te brindamos <span>una protección integral</span> con compromiso y transparencia.</p>
            </li>
            <li>
              <h3>Accidentes de tráfico</h3>
              <p>Junto con nuestros profesionales colaboradores <span>gestionamos</span> y buscamos que <span>recibas la compensación que te corresponde</span>. Te mantenemos <span>informado</span> y <span>asesorado</span> en cada paso que vayamos dando.</p>
            </li>
            <li>
              <h3>Derecho de familia</h3>
              <p>Te <span>apoyamos</span> y <span>cuidamos</span> en los momentos más <span>sensibles</span>. Cuidamos de ti de forma honesta para <span>resolver</span> cada situación de forma <span>efectiva</span> y <span>justa</span>.</p>
            </li>
            <li>
              <h3>Derecho laboral</h3>
              <p>Te brindamos una <span>visión realista de tus opciones</span>, asegurándonos que entiendes el proceso y <span>luchamos por lo que a tu derecho corresponde</span>, dándote el <span>control en cada paso</span>.</p>
            </li>
            <li>
              <h3>Derecho inmobiliario</h3>
              <p>Sabemos la importancia que tienen los inmuebles y los muchos problemas que generan. Te asesoramos para que sigas la <span>mejor estrategia</span> para <span>alcanzar tus objetivos</span> y <span>defender tus derechos</span>.</p>
            </li>
         </ul> 
        </div>
      </section>
      
      <section>
        <div class="index-main--nuestros-servicios">
          <div class="image"></div>
          <div class="text">
            <h2>Nuestros valores</h2>
            <p>La <span>transparencia</span>, la <span>cercanía</span> y la <span>implicación</span> real en tu caso son nuestras prioridades.</p>
            <p>Creemos firmemente que un servicio legal es un derecho que debe ser <span>accesible a todos</span>, te trataremos como un socio y no como un número, Cuando deposites tu confianza en nosotros tu problema estará cuidado y dirigido con genuina <span>atención y cariño personal</span>.</p>
            <p>La <span>precisión</span> y la <span>excelencia</span> en todas nuestras actuaciones son dos líneas de trabajo que nos definen, buscando a tu lado la opción más acorde a tus intereses.</p>
          </div>
        </div>
      </section>

      <section>
        <div class="index-main--primer-consulta-gratis">
          <button class="index-main--primer-consulta-gratis-content dialog-button" data-dialog="">
            <span>¿Tienes dudas? Consulta gratis ahora</span>
          </button>
        </div>
      </section>

    </div>
  </div>
  <script src="/assets/js/google_reviews.js?<?php echo Conf::get("filecontrol"); ?>" defer></script>
  <?php
}


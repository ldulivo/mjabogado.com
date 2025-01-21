<?php

$title = "Servicios destacados";

function pageHeader()
{
  ?>
  <div class="global-header">
    <div class="content">
      <h1>Principales Servicios</h1>
    </div>
  </div>
  <?php
}

function pageMain()
{
  ?>
  <div class="featured-services">
    <div class="content">
      <!-- Derecho civil -->
      <section>
        <div class="featured-cards" >
          <div class="image">
            <h2>Derecho <span>civil</span></h2>
            <picture>
              <source srcset="/assets/img/services/manos.webp" type="image/webp">
              <img src="/assets/img/services/manos.jpg" loading="lazy" alt="">
            </picture>
          </div>
          <div class="text">
            <p>Protegemos tus derechos en cualquier materia civil. Encontramos <span>soluciones sólidas</span>, <span>cercanas</span> y <span>efectivas</span>, proporcionándote la <span>tranquilidad</span> que mereces.</p>
          </div>
          <div class="featured-cards-buttons">
            <button class="dialog-button" data-dialog="civil">
              Consultar
            </button>
          </div>
        </div>
      </section>
      <!-- Derecho penal -->
      <section>
        <div class="featured-cards" >
          <div class="image">
            <h2>Derecho <span>penal</span></h2>
            <picture>
              <source srcset="/assets/img/services/martillo.webp" type="image/webp">
              <img src="/assets/img/services/martillo.jpg" loading="lazy" alt="">
            </picture>
          </div>
          <div class="text">
            <p>Entendemos la importancia que tiene <span>una defensa firme y personalizada</span>. Te brindamos <span>una protección integral</span> con compromiso y transparencia.</p>
          </div>
          <div class="featured-cards-buttons">
            <button class="dialog-button" data-dialog="penal">
              Consultar
            </button>
          </div>
        </div>
      </section>
      <!-- Accidentes de tráfico -->
      <section>
        <div class="featured-cards" >
          <div class="image">
            <h2>Accidentes <span>de tráfico</span></h2>
            <picture>
              <source srcset="/assets/img/services/coche.webp" type="image/webp">
              <img src="/assets/img/services/coche.jpg" loading="lazy" alt="">
            </picture>
          </div>
          <div class="text">
            <p>Junto con nuestros profesionales colaboradores <span>gestionamos</span> y buscamos que <span>recibas la compensación que te corresponde</span>. Te mantenemos <span>informado</span> y <span>asesorado</span> en cada paso que vayamos dando.</p>
          </div>
          <div class="featured-cards-buttons">
            <button class="dialog-button" data-dialog="tráfico">
              Consultar
            </button>
          </div>
        </div>
      </section>
      <!-- Derecho de familia -->
      <section>
        <div class="featured-cards" >
          <div class="image">
            <h2>Derecho <span>de familia</span></h2>
            <picture>
              <source srcset="/assets/img/services/divorcio.webp" type="image/webp">
              <img src="/assets/img/services/divorcio.jpg" loading="lazy" alt="">
            </picture>
          </div>
          <div class="text">
            <p>Te <span>apoyamos</span> y <span>cuidamos</span> en los momentos más <span>sensibles</span>. Cuidamos de ti de forma honesta para <span>resolver</span> cada situación de forma <span>efectiva</span> y <span>justa</span>.</p>
          </div>
          <div class="featured-cards-buttons">
            <button class="dialog-button" data-dialog="familia">
              Consultar
            </button>
          </div>
        </div>
      </section>
      <!-- Derecho Laboral -->
      <section>
        <div class="featured-cards" >
          <div class="image">
            <h2>Derecho <span>Laboral</span></h2>
            <picture>
              <source srcset="/assets/img/services/mauricio2.webp" type="image/webp">
              <img src="/assets/img/services/mauricio2.png" loading="lazy" alt="">
            </picture>
          </div>
          <div class="text">
            <p>Te brindamos una <span>visión realista de tus opciones</span>, asegurándonos que entiendes el proceso y <span>luchamos por lo que a tu derecho corresponde</span>, dándote el <span>control en cada paso</span>.</p>
          </div>
          <div class="featured-cards-buttons">
            <button class="dialog-button" data-dialog="laboral">
              Consultar
            </button>
          </div>
        </div>
      </section>
      <!-- Derecho inmobiliario -->
      <section>
        <div class="featured-cards" >
          <div class="image">
            <h2>Derecho <span>inmobiliario</span></h2>
            <picture>
              <source srcset="/assets/img/services/edificio.webp" type="image/webp">
              <img src="/assets/img/services/edificio.jpg" loading="lazy" alt="">
            </picture>
          </div>
          <div class="text">
            <p>Sabemos la importancia que tienen los inmuebles y los muchos problemas que generan. Te asesoramos para que sigas la <span>mejor estrategia</span> para <span>alcanzar tus objetivos</span> y <span>defender tus derechos</span>.</p>
          </div>
          <div class="featured-cards-buttons">
            <button class="dialog-button" data-dialog="inmobiliario">
              Consultar
            </button>
          </div>
        </div>
      </section>
    </div>
  </div>
  <?php
}
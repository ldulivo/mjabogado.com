<?php

$title = "";

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
        <h2>Servicios destacados</h2>
        <div class="index-main--servicios-destacados">
         <ul>
           <li>
              Derecho civil
              <button class="dialog-button" data-dialog="civil">
                conoce más
              </button>
            </li>
           <li>
              Derecho penal
              <button class="dialog-button" data-dialog="penal">
                conoce más
              </button>
            </li>
           <li>
              Accidentes <span>de tráfico</span>
              <button class="dialog-button" data-dialog="tráfico">
                conoce más
              </button>
            </li>
           <li>
              Derecho <span>de familia</span>
              <button class="dialog-button" data-dialog="familia">
                conoce más
              </button>
            </li>
           <li>
              Derecho <span>laboral</span>
              <button class="dialog-button" data-dialog="laboral">
                conoce más
              </button>
            </li>
           <li>
              Derecho <span>inmobiliario</span>
              <button class="dialog-button" data-dialog="inmobiliario">
                conoce más
              </button>
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
            <h2>Primera consulta gratis ¡Contáctanos!</h2>
          </button>
          </div>
          <!-- <p>Para consultas gratuitas, solo tienes que ingresar tus datos y hacer clic en el botón de contacto.</p> -->
        </div>
      </section>
    </div>
  </div>
  <?php
}


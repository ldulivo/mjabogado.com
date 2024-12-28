<?php
/**
 * 404 Error
 * 
 * Declarar función pageHeader() y pageMain() para mostrar la página 404
 */

$title = "Página no encontrada";

 function pageHeader()
 {
   ?>
   <div class="page-not-found">
     <div class="content">
       <h2>404</h2>
       <h1>Página no encontrada</h1>
     </div>
   </div>
   <?php
 }

 function pageMain()
 {
   ?>
   <div class="page-not-found">
     <div class="content">
       <section>
         <h2>Página no encontrada</h2>
         <p>La página que estás buscando no existe o ha sido eliminada.</p>
         <p>Si crees que esto es un error, por favor contacta con nosotros.</p>
       </section>
     </div>
   </div>
   <?php
 }
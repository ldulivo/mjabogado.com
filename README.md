# Proyecto Web: Mauricio Jiménez Abogado

Este proyecto es una página web profesional diseñada para el abogado Mauricio Jiménez. El sitio permite a los usuarios conocer los servicios ofrecidos, obtener información sobre la ubicación, leer reseñas de Google y visualizar videos del canal de YouTube del abogado.

## Despliegue del Proyecto
El proyecto está desplegado en la siguiente dirección:

🔗 [https://mjabogado.com/](https://mjabogado.com/)

---

## Tecnologías Utilizadas
El proyecto ha sido desarrollado utilizando las siguientes tecnologías:

- **PHP:** Backend y manejo del enrutamiento.
- **HTML:** Estructura del contenido.
- **JavaScript:** Funcionalidad interactiva y consumo de APIs externas.
- **Sass:** Preprocesador de CSS para estilos personalizados.

---

## Servicios Utilizados
Este proyecto utiliza los siguientes servicios para mejorar su funcionalidad:

1. **Envío de correos electrónicos:**
   - Protocolo: SMTP
   - Función: Permite a los usuarios enviar consultas desde el formulario de contacto.

2. **Google Maps Place API:**
   - Función: Muestra la ubicación del abogado y permite ver reseñas verificadas desde Google.

3. **YouTube Data API v3:**
   - Función: Obtiene y muestra videos recientes del canal de YouTube del abogado.

---

## Estructura del Proyecto
El punto de partida del proyecto es el archivo `index.php`, que actúa como enrutador para las distintas secciones del sitio web. 

### Principales Directorios
- **`assets/`:** Contiene archivos estáticos como imágenes, estilos CSS y scripts JavaScript.
- **`src/`:** Contiene los componentes PHP y las páginas del sitio.
- **`services/`:** Contiene los servicios backend, como la integración con APIs externas y el envío de correos electrónicos.
- **`core/`:** Incluye configuraciones y utilidades para el proyecto.

---

## Autor
Este proyecto fue desarrollado por:

**Nombre:** Leonardo Ariel  
**Apellido:** D'Ulivo  

---

## Cómo Usar el Proyecto
1. Descargar o clonar el repositorio.
2. Configurar las claves API necesarias en el archivo `env.php`.
3. Asegurarse de tener un servidor con soporte PHP (versión 8.x recomendada).
4. Colocar el proyecto en el servidor y acceder a la URL correspondiente.

---

## Requisitos del Sistema
- **PHP:** Versión 8.x o superior.
- **Servidor Web:** Apache/Nginx con soporte para `.htaccess`.
- **Conexión a Internet:** Para acceder a las APIs de Google Maps y YouTube.

---

## Licencia
Este proyecto es privado y no está disponible para distribución pública.

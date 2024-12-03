/**
 * maps
 * 
 * placeId: ID del lugar de Google Maps
 */
const apiUrlMaps = "https://dulivo.com/google_reviews.php";
const placeId = "ChIJJ8hVtD-DYw0Ry3iCmBKjL8s";

fetch(`${apiUrlMaps}?place_id=${placeId}`)
  .then(response => {
    if (!response.ok) {
      throw new Error("Error al obtener los datos de reseñas.");
    }
    return response.json();
  })
  .then(data => {
    console.log("Datos obtenidos:", data);
    // TODO: Aquí puedes mostrar los datos de reseñas en el frontend
  })
  .catch(error => {
    console.error("Error:", error);
  });
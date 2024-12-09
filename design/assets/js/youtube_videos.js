/**
 * Youtube
 * 
 * channelId: Channel ID del canal de YouTube
 */
const apiUrlYoutube = "https://dulivo.com/youtube_videos.php";
const channelId = "UC_WKuiXrIDIySWJX0dhETEg";

fetch(`${apiUrlYoutube}?channel_id=${channelId}`)
  .then(response => {
    if (!response.ok) {
      throw new Error("Error al obtener los videos de YouTube.");
    }
    return response.json();
  })
  .then(data => {
    console.log("Videos obtenidos:", data);
    // TODO: Aquí puedes mostrar los videos en el frontend
  })
  .catch(error => {
    console.error("Error:", error);
  });
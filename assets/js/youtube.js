const openVideoApi = (video) => {
  const videoId = video.dataset.video;

  video.innerHTML = `
    <iframe 
      width="480" 
      height="360" 
      src="https://www.youtube.com/embed/${videoId}?autoplay=1" 
      frameborder="0" 
      allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
      allowfullscreen
    ></iframe>
  `;
};

const videoApi = document.querySelectorAll(".videoApi");
videoApi.forEach((video) => {
  video.addEventListener("click", (e) => {
    openVideoApi(video);
  });
})


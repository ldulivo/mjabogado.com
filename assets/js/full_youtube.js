const videoApiDialog = document.querySelectorAll(".VideoApiDialogContent");
const videosContent = document.getElementById("videosContent");
const videosBtn = document.querySelectorAll(".videos-btn button");

const videosDialog = document.getElementById("videosDialog");
const videosDialogContent = document.getElementById("videosDialogContent");

function formatDate(isoDate) {
  const date = new Date(isoDate);
  const options = { year: 'numeric', month: 'long', day: 'numeric' };
  return date.toLocaleDateString('es-ES', options);
}

const openVideoApiDialog = (video, isPlaylist = false) => {
  const videoId = video.dataset.video;
  videosDialog.style.display = "flex";
  videosDialogContent.innerHTML = renderLoading();

  const url = isPlaylist
    ? `https://www.youtube.com/embed?list=${videoId}&autoplay=1`
    : `https://www.youtube.com/embed/${videoId}?autoplay=1`;
  
  videosDialogContent.innerHTML += `
    <iframe 
      width="480" 
      height="360" 
      src="${url}"
      frameborder="0" 
      allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
      allowfullscreen
    ></iframe>
  `;
  
  setTimeout(() => {
    videosDialogContent.querySelector(".loader-content").style.display = "none";
    videosDialogContent.querySelector("iframe").style.display = "block";
  }, 700);
};

const renderLoading = () => {
  return (
    `
    <div class="loader-content">
      <div class="loader"></div>
    </div>
    `
  )
}

const renderVideos = (videoTitle, videoPublishedAt, videoThumbnailDefault) => {
  return (
    `
    <button
      class="VideoApiDialog"
    >
      <img
        src="${videoThumbnailDefault}"
        loading="lazy"
        alt="${videoTitle}" 
      >
      <div class="play-button">&#9658;</div>
    </button>
    <div class="VideoApiDialogContent-info">
      <h2 class="title">${videoTitle}</h2>
      <p class="autor">Mauricio Jiménez Abogado</p>
      <span class="publishedAt">${formatDate(videoPublishedAt)}</span>
    </div>`
  )
}

const getVideoInfo = async (video, order = "details") => {
  const videoId = video.dataset.video;
  const url = `services/youtube_videos?order=${order}${order === "details" ? `&ids=${videoId}` : ""}`;
  await fetch(`${url}`,
    {
      method: 'GET',
      headers: {
        'Content-Type': 'application/json',
        'Access-Control-Allow-Origin': window.location.origin
      }
    }
  )
    .then(response => response.json())
    .then(data => {
      if (data.items.length > 0) {
        const videoTitle = data.items[0].snippet.title;
        const videoPublishedAt = data.items[0].snippet.publishedAt;
        const videoThumbnails = data.items[0].snippet.thumbnails;
        const videoThumbnailDefault = videoThumbnails.medium.url;

        video.innerHTML = renderVideos(
          videoTitle,
          videoPublishedAt,
          videoThumbnailDefault
        )
      }
    })
    .catch(error => {
      console.error("Error:", error);
    });
};

const getAllVideos = async (order = "recent") => {
  const isPlaylist = order === "playlists";
  const url = `services/youtube_videos${order !== "recent" ? "?order=" + order : ""}`;
  await fetch(`${url}`,
    {
      method: 'GET',
      headers: {
        'Content-Type': 'application/json',
        'Access-Control-Allow-Origin': window.location.origin
      }
    }
  )
    .then(response => response.json())
    .then(data => {
      if (data.items.length > 0) {
        videosContent.innerHTML = "";
        data.items.forEach((video) => {
          const videoId = isPlaylist ? video.id :video.id.videoId;
          const videoThumbnails = video.snippet.thumbnails;
          const videoThumbnailDefault = videoThumbnails.medium.url;
          const videoTitle = video.snippet.title;
          const videoPublishedAt = video.snippet.publishedAt;
  
          const videosHTML = document.createElement('div');
          videosHTML.dataset.video = videoId;
          videosHTML.classList.add('VideoApiDialogContent');
          videosHTML.innerHTML = renderVideos(
            videoTitle,
            videoPublishedAt,
            videoThumbnailDefault
          );
          videosHTML.addEventListener("click", (e) => {
            openVideoApiDialog(videosHTML, isPlaylist);
          });
          videosContent.appendChild(videosHTML);
        });
      }
    })
    .catch(error => {
      console.error("Error:", error);
    });
}

videoApiDialog.forEach((video) => {
  video.addEventListener("click", (e) => {
    openVideoApiDialog(video, false);
  });

  getVideoInfo(video);
})

// buttons filter
videosBtn.forEach((btn) => {
  btn.addEventListener("click", (e) => {
    videosContent.innerHTML = renderLoading();
    const query = e.target.dataset.query;
    getAllVideos(query);
  })
});

// close dialog
videosDialog.addEventListener("click", (e) => {
  videosDialogContent.innerHTML = "";
  videosDialog.style.display = "none";
})

getAllVideos();
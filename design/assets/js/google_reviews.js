/**
 * maps
 * 
 * placeId: ID del lugar de Google Maps
 */
const apiUrlMaps = "https://dulivo.com/google_reviews.php";
const placeId = "ChIJJ8hVtD-DYw0Ry3iCmBKjL8s";

const getReviews = () => {
  fetch(`${apiUrlMaps}?place_id=${placeId}`)
    .then(response => {
      if (!response.ok) {
        throw new Error("Error al obtener los datos de reseñas.");
      }
      return response.json();
    })
    .then(data => {
      console.log("Datos obtenidos:", data);
      if (data?.result?.reviews) { 
        const reviewsHTML = document.getElementById('about_me_review');
        const reviews = data.result.reviews;
        console.log({reviews})
        reviews.map((review, index) => {
          const ratingPoints = review.rating;
          console.log(review);
          const slide = document.createElement('div');
          slide.classList.add('slide');

          // rating
          const rating = document.createElement('div');
          rating.classList.add('slide-rating');
          rating.dataset.rating = rating;
          
          for (let i = 0; i < 5; i++) {
            const star = document.createElement('span');
            star.classList.add('slide-rating-stars');
            if (i < Math.floor(ratingPoints)) {
              star.classList.add('slide-rating-stars-filled');
            } else if (i < ratingPoints) {
              star.classList.add('slide-rating-stars-half');
            }
            rating.appendChild(star);
          }
          slide.appendChild(rating);

          // text
          const text = document.createElement('div');
          text.classList.add('slide-text');
          text.innerHTML = review.text;
          slide.appendChild(text);
          
          // author
          const authorDate = new Date(review.time * 1000);
          const date = authorDate.toLocaleDateString('es-ES');
          const author = document.createElement('div');
          author.classList.add('slide-author');
          author.innerHTML = `
            <img src="${review.profile_photo_url}" loading="lazy" alt="Foto de ${review.author_name}">
            <div>
              <p class="slide-author-name">${review.author_name}</p>
              <p class="slide-author-date">${date}</p>
            </div>
          `;
          slide.appendChild(author);


          reviewsHTML.appendChild(slide);
        });
      }
    })
    .catch(error => {
      console.error("Error:", error);
    });
};

document.body.style.backgroundColor = "#fdf7e8ff";
getReviews();



// // carga los datos de reseñas cuando la etiqueta sea visible
// reviews.addEventListener('intersectionchange', (e) => {
//   if (e.intersectionRatio > 0) {
//     getReviews();
//   }
// });




/**
 * maps
 * 
 */
const apiUrlMaps = "services/google_reviews";
const aboutMeReview = document.getElementById('about_me_review');

const btn_left = document.getElementById("review_next_left");
const btn_right = document.getElementById("review_next_right");

let intervalSlideReviews;
let restartSlidesReviews;
let count = 0;

const getReviews = () => {
  fetch(`${apiUrlMaps}`,
    {
      method: 'GET',
      headers: {
        'Content-Type': 'application/json',
        'Access-Control-Allow-Origin': window.location.origin
      }
    }
  )
    .then(response => {
      if (!response.ok) {
        throw new Error("Error al obtener los datos de reseñas.");
      }
      return response.json();
    })
    .then(data => {
      if (data?.result?.reviews) {
        // review totales
        allReviews(data.result.rating, data.result.user_ratings_total);
        
        // review por usuario
        const reviewsHTML = document.getElementById('about_me_review');
        const reviews = data.result.reviews;
        reviews.map((review, index) => {
          const ratingPoints = review.rating;
          const slide = document.createElement('div');
          slide.classList.add('slide');
          if (index === 0) {
            slide.classList.add('slide-active');
          }

          // header
          const header = document.createElement('div');
          header.classList.add('slide-header');

          // image logo google del archivo assets/img/google-svgrepo-com.svg
          const image = document.createElement('img');
          image.src = "assets/img/google-svgrepo-com.svg";
          image.alt = "logo de google";

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
          header.appendChild(rating);
          header.appendChild(image);

          slide.appendChild(header);

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
      reviewAnimateSlides();
    })
    .catch(error => {
      console.error("Error:", error);
    });
};

// all reviews
const allReviews = (rating, users) => {
  const userRatingsTotalContent = document.getElementById('user_ratings_total_content');

  // crear h3 con el total de reviews
  const userRatingsTotal = document.createElement('h3');
  userRatingsTotal.dataset.rating = users;
  userRatingsTotal.innerHTML = users;
  userRatingsTotalContent.appendChild(userRatingsTotal);

  // agregar img de google
  const googleImg = document.createElement('img');
  googleImg.src = "assets/img/google-svgrepo-com.svg";
  googleImg.alt = "logo de google";
  googleImg.srcset = "assets/img/google-svgrepo-com.svg";
  userRatingsTotal.appendChild(googleImg);

  // crear div con el rating
  const startRatingsTotal = document.createElement('div');
  startRatingsTotal.classList.add('slide-rating');
  startRatingsTotal.dataset.rating = rating;
  
  for (let i = 0; i < 5; i++) {
    const star = document.createElement('span');
    star.classList.add('slide-rating-stars');
    if (i < Math.floor(rating)) {
      star.classList.add('slide-rating-stars-filled');
    } else if (i < rating) {
      star.classList.add('slide-rating-stars-half');
    }
    startRatingsTotal.appendChild(star);
  }
  userRatingsTotalContent.appendChild(startRatingsTotal);
}

// animar las diapositivas
const reviewAnimateSlides = () => {
  clearTimeout(restartSlidesReviews);
  const widthSlide = reviewWidthSlide();
  
  intervalSlideReviews = setInterval(() => {
    if (count >= 4) count = -1;
    count++;
    aboutMeReview.style.transform = `translateX(-${widthSlide * count}px)`;

    for(let i = 0; i < aboutMeReview.children.length; i++) {
      if (i === count) {
        aboutMeReview.children[i].classList.add('slide-active');
      } else {
        aboutMeReview.children[i].classList.remove('slide-active');
      }
    }

    // if (count >= 4) {
    //   count = -1;
    // }
  }, 5000);
};

const reviewWidthSlide = () => {
  const slides = document.querySelectorAll('.slide');
  return slides[0].clientWidth + 36;
}

const reviewStopSlides = () => {
  clearInterval(intervalSlideReviews);
};

const reviewChangeSlide = (num) => {
  clearTimeout(restartSlidesReviews);
  reviewStopSlides();
  
  count = count + num;
  if (count >= 5) {
    count = 0;
  }

  if (count <= -1) {
    count = 4;
  }

  const widthSlide = reviewWidthSlide();
  aboutMeReview.style.transform = `translateX(-${widthSlide * count}px)`;

  for(let i = 0; i < aboutMeReview.children.length; i++) {
    if (i === count) {
      aboutMeReview.children[i].classList.add('slide-active');
    } else {
      aboutMeReview.children[i].classList.remove('slide-active');
    }
  }

  if (num !== 0) {
    restartSlidesReviews = setTimeout(() => {
      reviewAnimateSlides();
    }, 40000);
  }
}

if (window.location.pathname == '/sobremi')
  document.body.style.backgroundColor = "#fdf7e8ff";
getReviews();
btn_left.addEventListener("click", () => reviewChangeSlide(-1));
btn_right.addEventListener("click", () => reviewChangeSlide(1));
aboutMeReview.addEventListener("mouseenter", () => reviewChangeSlide(0));
aboutMeReview.addEventListener("mouseleave", () => reviewAnimateSlides());
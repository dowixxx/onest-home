document.addEventListener('DOMContentLoaded', function () {

  // swiper-reviews swiper
  const swiper_reviews = new Swiper(".swiper-reviews", {
    slidesPerView: 1,
    spaceBetween: 60,
    pagination: {
      el: ".swiper-reviews-pagination",
      clickable: true,
    },
  });

  // gallery swiper
  const swiper_gallery = new Swiper(".swiper-gallery", {
    slidesPerView: 1,
    spaceBetween: 60,
    pagination: {
      el: ".swiper-gallery-pagination",
      clickable: true,
    },
  });

});


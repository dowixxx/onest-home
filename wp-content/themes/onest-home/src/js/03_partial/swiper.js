document.addEventListener('DOMContentLoaded', function () {
  
  // gallery swiper
  const swiper_gallery = new Swiper(".swiper-gallery", {
    slidesPerView: 1,
    spaceBetween: 60,
    pagination: {
      el: ".swiper-gallery-pagination",
      clickable: true,
    },
  });

  // project swiper
  const swiper_project = new Swiper(".swiper-project", {
    slidesPerView: 1,
    spaceBetween: 24,
    freeMode: true,
    // pagination: {
    //   el: ".swiper-project-pagination",
    //   clickable: true,
    // },
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
    breakpoints: {
      576: {
        slidesPerView: 2,
        spaceBetween: 24,
      },
      768: {
        slidesPerView: 2,
        spaceBetween: 24,
      },
      992: {
        slidesPerView: 4,
        spaceBetween: 48,
      },
    }
  });
  
});
  
  
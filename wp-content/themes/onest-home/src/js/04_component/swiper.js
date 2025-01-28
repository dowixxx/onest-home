document.addEventListener('DOMContentLoaded', function () {



  /*
  * page-about-us.php gallery swiper
  */
  const swiper_gallery_about_us = new Swiper(".page-template-page-about-us .swiper-gallery", {
    slidesPerView: 1,
    spaceBetween: 24,
    pagination: {
      el: ".swiper-gallery-pagination",
      clickable: true,
    },
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
    breakpoints: {
      576: {
        slidesPerView: 1,
        spaceBetween: 24,
      },
      768: {
        slidesPerView: 1,
        spaceBetween: 24,
      },
      992: {
        slidesPerView: 1,
        spaceBetween: 48,
      },
    }
  });



  /*
  * page-contacts.php gallery swiper
  */
  const swiper_gallery_contacts = new Swiper(".page-template-page-contacts .swiper-gallery", {
    slidesPerView: 1,
    spaceBetween: 24,
  //   pagination: {
  //     el: ".swiper-gallery-pagination",
  //     clickable: true,
  //   },
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
    breakpoints: {
      576: {
        slidesPerView: 1,
        spaceBetween: 24,
      },
      768: {
        slidesPerView: 1,
        spaceBetween: 24,
      },
      992: {
        slidesPerView: 1,
        spaceBetween: 48,
      },
    }
  });


  
  /*
  * project swiper
  */
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
  
  
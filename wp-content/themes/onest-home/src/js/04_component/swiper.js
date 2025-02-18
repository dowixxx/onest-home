document.addEventListener('DOMContentLoaded', function () {



  /*
  * page-about-us.php gallery swiper
  */
  const swiper_gallery_about_us = new Swiper(".page-template-page-about-us .swiper-gallery", {
    slidesPerView: 1,
    spaceBetween: 0,
    loop: true,
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
        spaceBetween: 0,
      },
      768: {
        slidesPerView: 1,
        spaceBetween: 0,
      },
      992: {
        slidesPerView: 1,
        spaceBetween: 0,
      },
    }
  });



  /*
  * page-contacts.php gallery swiper
  */
  const swiper_gallery_contacts = new Swiper(".page-template-page-contacts .swiper-gallery", {
    slidesPerView: 1,
    spaceBetween: 0,
    loop: true,
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
        spaceBetween: 0,
      },
      768: {
        slidesPerView: 1,
        spaceBetween: 0,
      },
      992: {
        slidesPerView: 1,
        spaceBetween: 0,
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



  /*
  * page-home.php hero swiper
  */
  const swiper_hero = new Swiper(".page-template-page-home .swiper-hero", {
    slidesPerView: 1,
    spaceBetween: 0,
    pagination: {
      el: ".swiper-pagination",
      type: "fraction",
      formatFractionCurrent: function (number) {
        return number < 10 ? "0" + number : number; // Add leading zero
      },
      formatFractionTotal: function (number) {
          return number < 10 ? "0" + number : number; // Add leading zero
      },
    },
    loop: true,
    autoplay: {
      delay: 7000,
    },  
    speed: 800, 
    // navigation: {
    //   nextEl: ".swiper-button-next",
    //   prevEl: ".swiper-button-prev",
    // },
    breakpoints: {
      576: {
        slidesPerView: 1,
        spaceBetween: 0,
      },
      768: {
        slidesPerView: 1,
        spaceBetween: 0,
      },
      992: {
        slidesPerView: 1,
        spaceBetween: 0,
      },
    }
  });



  
});
  
  
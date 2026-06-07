// project card slider script using:: swiper js (3rd party)
const projectCardSlider = new Swiper(".project-card-slider", {
  slidesPerView: 1,
  spaceBetween: 24,
  centeredSlides: true,

  speed: 900,
  loop: true,

  autoplay: {
    delay: 2500,
    disableOnInteraction: false,
  },

  pagination: {
    el: ".swiper-pagination",
    clickable: true,
  },

  breakpoints: {
    640: { slidesPerView: 1 },
    768: { slidesPerView: 2 },
    1024: { slidesPerView: 3 },
    1400: { slidesPerView: 4 },
  },
});

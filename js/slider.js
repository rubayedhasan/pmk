// get the elements
const sliderTabs = document.querySelectorAll(".slider-tab");

// slider controlling by swiperJS(3rd party)
const swiper = new Swiper(".slider-container", {
  effect: "fade",
  autoplay: {
    delay: 4000,
  },
});

sliderTabs.forEach((tab, index) => {
  tab.addEventListener("click", () => {
    swiper.slideTo(index);
  });
});

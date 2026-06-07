// slider section logics
const sliderTabs = document.querySelectorAll(".slider-tab");

// active pagination tab
function updateIndicator(index) {
  sliderTabs.forEach((tab) => tab.classList.remove("active-slide"));
  sliderTabs[index].classList.add("active-slide");
}

// initialize swiper
const swiper = new Swiper(".slider-container", {
  effect: "slide",
  speed: 1300,

  loop: true,

  autoplay: {
    delay: 4000,
    disableOnInteraction: false,
  },

  on: {
    init: function () {
      updateIndicator(this.realIndex);
    },

    slideChange: function () {
      updateIndicator(this.realIndex);
    },
  },
});

// click pagination tabs
sliderTabs.forEach((tab, index) => {
  tab.addEventListener("click", () => {
    updateIndicator(index);

    // use slideToLoop for loop mode
    swiper.slideToLoop(index);
  });
});

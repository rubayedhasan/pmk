// get the elements
const sliderControls = document.querySelector(".slider-controls");
const sliderIndicator = document.querySelector(".slider-indicator");
const sliderTabs = document.querySelectorAll(".slider-tab");

// Update the slider pagination
function updateIndicator(tab, index) {
  sliderIndicator.style.transform = `translateX(${tab.offsetLeft - 20}px)`;
  sliderIndicator.style.width = `${tab.getBoundingClientRect().width}px`;

  // Calculate the scroll position and scroll smoothly
  const scrollLeft =
    sliderTabs[index].offsetLeft -
    sliderControls.offsetWidth / 2 +
    sliderTabs[index].offsetWidth / 2;
  sliderControls.scrollTo({ left: scrollLeft, behavior: "smooth" });
}

// slider controlling by swiperJS(3rd party)
const swiper = new Swiper(".slider-container", {
  effect: "fade",
  autoplay: {
    delay: 4000,
  },

  on: {
    slideChange: () => {
      const currentIndex = [...sliderTabs].indexOf(
        sliderTabs[swiper.activeIndex],
      );
      updateIndicator(sliderTabs[swiper.activeIndex], currentIndex);
    },
  },
});

// Update the slider on clinking the tabs
sliderTabs.forEach((tab, index) => {
  tab.addEventListener("click", () => {
    swiper.slideTo(index);
  });

  // call the function
  updateIndicator(tab, index);
});

updateIndicator(sliderTabs[0], 0);

window.addEventListener("resize", updateIndicator(swiper.activeIndex, 0));

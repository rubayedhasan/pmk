// navbar section logic
const navbar = document.getElementById("navigation");
const navLinks = document.querySelectorAll(".nav-link");

// active the nav links
navLinks.forEach((link) => {
  link.addEventListener("click", () => {
    navLinks.forEach((l) => l.classList.remove("active"));
    link.classList.add("active");
  });
});

// sticky effect ob=ver navbar on scroll
window.addEventListener("scroll", () => {
  if (window.scrollY > 80) {
    navbar.classList.add("scrolled");
  } else {
    navbar.classList.remove("scrolled");
  }
});

// change the logo on large devices
document.addEventListener("DOMContentLoaded", () => {
  const logoImg = document.getElementById("logo-img");

  // Function to update logo
  const updateTheLogo = () => {
    const windowSize = window.matchMedia(
      "(min-width:992px) and (max-width:1199.98px)",
    );

    if (windowSize.matches) {
      logoImg.src = "./assets/logo/logo.png";
    } else {
      logoImg.src = "./assets/logo/pmk_logo.png";
    }
  };

  // Run on page load
  updateTheLogo();

  // Listen for screen changes dynamically
  const windowSize = window.matchMedia(
    "(min-width:992px) and (max-width:1199.98px)",
  );
  windowSize.addEventListener("change", updateTheLogo);

  // Optional: also update on window resize
  window.addEventListener("resize", updateTheLogo);
});

// slider section  logics
// get the elements
const sliderControls = document.querySelector(".slider-controls");
const sliderIndicator = document.querySelector(".slider-indicator");
const sliderTabs = document.querySelectorAll(".slider-tab");

// Update the indicator's height and width
function updateIndicator(tab, index) {
  sliderIndicator.style.transform = `translateX(${tab.offsetLeft - 20}px)`;
  sliderIndicator.style.width = `${tab.getBoundingClientRect().width}px`;

  // active the current slider
  sliderTabs.forEach((t) => t.classList.remove("active-slide"));
  tab.classList.add("active-slide");

  // Calculate the scroll position and scroll smoothly
  const scrollLeft =
    sliderTabs[index].offsetLeft -
    sliderControls.offsetWidth / 2 +
    sliderTabs[index].offsetWidth / 2;
  sliderControls.scrollTo({ left: scrollLeft, behavior: "smooth" });
}

// slider controlling by swiperJS(3rd party)
// initialize the swiper instance
const swiper = new Swiper(".slider-container", {
  effect: "fade",
  speed: 1300,
  autoplay: {
    delay: 4000,
  },

  navigation: {
    prevEl: "#slider-prev",
    nextEl: "#slider-next",
  },

  on: {
    slideChange: () => {
      const currentIndex = [...sliderTabs].indexOf(
        sliderTabs[swiper.activeIndex],
      );

      // active the indicator on active slider
      updateIndicator(sliderTabs[swiper.activeIndex], currentIndex);
    },
  },
});

// Update the slide and pagination on click the tab
sliderTabs.forEach((tab, index) => {
  tab.addEventListener("click", () => {
    // active the current slider
    sliderTabs.forEach((t) => t.classList.remove("active-slide"));
    tab.classList.add("active-slide");

    swiper.slideTo(index);
  });

  // call the function
  updateIndicator(tab, index);
});

// default: active the indicator first
updateIndicator(sliderTabs[0], 0);

window.addEventListener("resize", updateIndicator(swiper.activeIndex, 0));

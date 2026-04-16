// all section's section container(tag, title, subtitle, description) observer api
const sectionContainers = document.querySelectorAll(".section-container");
const footerWelcomeTExt = document.querySelector(".welcome-text");

const observeSectionContainer = new IntersectionObserver(
  (observedItems) => {
    observedItems.forEach((observedItem) => {
      if (observedItem.isIntersecting) {
        observedItem.target.classList.add("visible-section-head");
      } else {
        observedItem.target.classList.remove("visible-section-head");
      }
    });
  },
  {
    threshold: [0.3],
  },
);

// all section's heading container
sectionContainers.forEach((sectionContainer) =>
  observeSectionContainer.observe(sectionContainer),
);

// footer welcome text
observeSectionContainer.observe(footerWelcomeTExt);

// button container's observer api
const buttonContainers = document.querySelectorAll(".button-container");

const observedButtonContainer = new IntersectionObserver(
  (observedItems) => {
    observedItems.forEach((observedItem) => {
      if (observedItem.isIntersecting) {
        observedItem.target.classList.add("visible-button");
      } else {
        observedItem.target.classList.remove("visible-button");
      }
    });
  },
  {
    threshold: [0.3],
  },
);
buttonContainers.forEach((buttonContainer) =>
  observedButtonContainer.observe(buttonContainer),
);

// about image container section's observer api
const aboutImage = document.querySelector(".about-image-container ");

const observeAboutImage = new IntersectionObserver(
  (observedItems) => {
    observedItems.forEach((observedItem) => {
      if (observedItem.intersectionRatio > 0.15) {
        observedItem.target.classList.add("about-visible");
      } else {
        observedItem.target.classList.remove("about-visible");
      }
    });
  },
  {
    threshold: [0.15],
  },
);

observeAboutImage.observe(aboutImage);

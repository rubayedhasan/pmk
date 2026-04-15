// about image container section's observer api
const aboutImage = document.querySelector(".about-image-container ");

const observeAboutImage = new IntersectionObserver(
  (observerItems) => {
    console.log(observerItems);
    observerItems.forEach((observerItem) => {
      if (observerItem.intersectionRatio > 0.15) {
        observerItem.target.classList.add("about-visible");
      } else {
        observerItem.target.classList.remove("about-visible");
      }
    });
  },
  {
    threshold: [0.15],
  },
);

observeAboutImage.observe(aboutImage);

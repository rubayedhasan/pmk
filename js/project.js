function transitionDelay(element, index) {
  element.style.transitionDelay = `${index * 0.15}s`;
}

//For about body text
document
  .querySelectorAll(".about-body-text, .about-body-quote")
  .forEach((element, idx) => {
    transitionDelay(element, idx);
  });

//For project aside card
document.querySelectorAll(".project-aside-card").forEach((element, idx) => {
  transitionDelay(element, idx);
});

//For challenge card
document.querySelectorAll(".challenge-card").forEach((element, idx) => {
  transitionDelay(element, idx);
});

//For challenge card
document.querySelectorAll(".feature-text ").forEach((element, idx) => {
  transitionDelay(element, idx);
});

//For pb-feature-card
document.querySelectorAll(".pb-feature-card ").forEach((element, idx) => {
  transitionDelay(element, idx);
});

/**
 * script for count down the project impact
 */
// get the element
const projectImpactContainer = document.getElementById("project-impact");

// data of the glance field
const projectImpactData = {
  "project-empowered": 1200,
  "project-employed": 3500,
  "project-training": 100,
  "project-district": 59,
};

// function:: calculate the number
function countAnimation(element, target, duration = 2000) {
  // starting time
  let startTime = null;

  //   function:: control the calculating speed
  function animation(timestamp) {
    if (!startTime) {
      startTime = timestamp;
    }

    // animate time
    const progress = timestamp - startTime;

    // animation steps
    const parentage = Math.min(progress / duration, 1);
    const eased = 1 - Math.pow(1 - parentage, 3);

    // value
    const value = Math.floor(eased * target);

    // set the value in the element
    element.innerText = value.toLocaleString();

    // validation::animation running
    if (parentage < 1) {
      requestAnimationFrame(animation);
    } else {
      element.innerText = target.toLocaleString();
    }
  }

  //   recall the animation
  requestAnimationFrame(animation);
}

// observer method
const observeContainer = new IntersectionObserver(
  (entries) => {
    entries.forEach((entry) => {
      if (entry.isIntersecting) {
        // start counting
        Object.keys(projectImpactData).forEach((keyName) => {
          const element = document.getElementById(keyName);
          if (element) {
            // reset
            element.innerText = "0";

            // count start
            countAnimation(element, projectImpactData[keyName]);
          }
        });
      }
    });
  },
  {
    threshold: 0.5,
  },
);

// observed parent only
if (projectImpactContainer) {
  observeContainer.observe(projectImpactContainer);
}

// project gallery popover functionality
// image click event for display popover

const galleryImageItem = document.querySelectorAll(".ggl-item");
const popOverContainer = document.querySelector(".image-popover");
const popoverImg = document.querySelector(".image-popover img");
const popoverCloseBtn = document.querySelector(".close-popover");

galleryImageItem.forEach((image) => {
  image.addEventListener("click", () => {
    // display the popover
    popOverContainer.style.display = "block";

    // set the current image
    const galleryImg = image.querySelector("img");
    popoverImg.src = galleryImg.getAttribute("src");
  });
});

// function:: event  close  popover
popoverCloseBtn.addEventListener("click", () => {
  popOverContainer.style.display = "none";
});

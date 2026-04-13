// get the element
const graphicalBoard = document.getElementById("impact-graphical-board");

// data of the glance field
const dataOfPmk = {
  "employee-count": 11575,
  "member-count": 51254512,
  "borrower-count": 35299580,
  "branch-count": 365,
  "area-count": 300,
  "zone-count": 25,
  "division-count": 8,
  "district-count": 52,
  "upazila-count": 382,
  "village-count": 65820,
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
        Object.keys(dataOfPmk).forEach((keyName) => {
          const element = document.getElementById(keyName);
          if (element) {
            // reset
            element.innerText = "0";

            // count start
            countAnimation(element, dataOfPmk[keyName]);
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
if (graphicalBoard) {
  observeContainer.observe(graphicalBoard);
}

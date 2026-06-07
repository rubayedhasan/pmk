/**
 * script for count down the kpi items
 */
// get the element
const graphicalBoard = document.getElementById("impact-graphical-board");

// data of the glance field
const dataOfPmk = {
  "employee-count": 2775,
  "member-count": 379721,
  "borrower-count": 313219,
  "branch-count": 364,
  "area-count": 71,
  "zone-count": 25,
  "division-count": 7,
  "district-count": 36,
  "upazila-count": 236,
  "village-count": 46003,
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

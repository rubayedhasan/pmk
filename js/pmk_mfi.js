// common functions
function toggleButtons(elements, className) {
  elements.forEach((button) => {
    button.addEventListener("click", () => {
      // reset active state
      elements.forEach((btn) => btn.classList.remove(className));

      // set active state
      button.classList.add(className);
    });
  });
}

// access elements
const allGuideButtons = document.querySelectorAll(".guide-button");
const allGuideBlocks = document.querySelectorAll(".guide-block");
const allRulesBlocks = document.querySelectorAll(".rules-block");
const allRuleTabs = document.querySelectorAll(".rule-tab");

// toggle active state guide buttons functionality
toggleButtons(allGuideButtons, "guide-button-active");

// display target guide block functionality
function showLoanGuideBlocks(elementId) {
  // initially hide all blocks
  allGuideBlocks.forEach((block) => block.classList.add("no-display"));

  // display target block
  const targetBlock = document.getElementById(elementId);
  targetBlock.classList.remove("no-display");
}

// toggle active state guide buttons functionality
toggleButtons(allRuleTabs, "rule-tab-active");

// display rules block functionality
function showRulesBlock(elementId) {
  // initially hide all blocks
  allRulesBlocks.forEach((block) => {
    block.classList.add("no-display");
    block.classList.remove("rules-block-active");
  });

  // display target block
  const targetBlock = document.getElementById(elementId);
  targetBlock.classList.remove("no-display");
  setTimeout(() => {
    targetBlock.classList.add("rules-block-active");
  }, 50);
}

// saving program cards
const allSavingProgramCards = document.querySelectorAll(".saving-program");
const allSavingRuleContainer = document.querySelectorAll(
  ".saving-program-rules-container",
);
toggleButtons(allSavingProgramCards, "saving-active-container");

function slideRuleContainer(elementId) {
  allSavingRuleContainer.forEach((ruleContainer) => {
    ruleContainer.classList.add("no-display");
    ruleContainer.classList.remove("rule-container-active");
  });

  const targetContainer = document.getElementById(elementId);
  targetContainer.classList.remove("no-display");

  setTimeout(() => {
    targetContainer.classList.add("rule-container-active");
  }, 10);
}

/**
 * script for count down the mfi activity impact
 */
// get the element
const mfiActivityBoard = document.getElementById("activity-impact-board");

// data of the glance field
const mfiImpactData = {
  "impact-year": 38,
  "impact-loan": 40000,
  "impact-borrower": 313219,
  "impact-district": 36,
  "impact-village": 46003,
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
        Object.keys(mfiImpactData).forEach((keyName) => {
          const element = document.getElementById(keyName);
          if (element) {
            // reset
            element.innerText = "0";

            // count start
            countAnimation(element, mfiImpactData[keyName]);
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
if (mfiActivityBoard) {
  observeContainer.observe(mfiActivityBoard);
}

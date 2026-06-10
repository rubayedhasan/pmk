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

// our perspective logic
const circleCenterDiv = document.querySelector(".circle-center");
const circleButtons = document.querySelectorAll(".circle-btn");
const perspectiveObject = document.querySelectorAll(".perspective-object");

// circle button event
circleButtons.forEach((button, index) => {
  button.addEventListener("click", () => {
    // remove and add animation in button
    circleButtons.forEach((btn) => btn.classList.remove("btn-animation"));
    button.classList.add("btn-animation");

    switch (index) {
      case 0:
        circleCenterDiv.innerHTML = `
         <span><i class="fa-regular fa-lightbulb"></i></span>
         <h4 class="circle-text font-playfair">Vision</h4>
        `;
        break;

      case 1:
        circleCenterDiv.innerHTML = `
         <span><i class="fa-solid fa-bullseye"></i></span>
         <h4 class="circle-text font-playfair">Mission</h4>
        `;
        break;
      case 2:
        circleCenterDiv.innerHTML = `
         <span><i class="fa-solid fa-list-check"></i></span>
         <h4 class="circle-text font-playfair">Objectives</h4>
        `;
        break;
      default:
    }

    // hide all perceptive object
    perspectiveObject.forEach((object) =>
      object.classList.remove("object-visible"),
    );

    // visible the target perceptive object
    const targetObjectId = button.dataset.target;
    document.getElementById(targetObjectId).classList.add("object-visible");
  });
});

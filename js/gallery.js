// get the element
const popOverContainer = document.querySelector(".image-popover");
const popoverCloseBtn = document.querySelector(".close-popover");
const popoverImg = document.querySelector(".image-popover img");

const galleryImageItem = document.querySelectorAll(".image-item");

// image click event for display popover
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

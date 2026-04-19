// get the element
const controllerButtons = document.querySelectorAll(
  ".controller-group-button button",
);

const galleryItems = document.querySelectorAll(".gallery-item");
const galleryImageItem = document.querySelectorAll(".image-item");

const popOverContainer = document.querySelector(".image-popover");
const popoverImg = document.querySelector(".image-popover img");
const popoverCloseBtn = document.querySelector(".close-popover");

// function:: for view image  categories
controllerButtons.forEach((button) => {
  button.addEventListener("click", () => {
    // remove and set active state
    controllerButtons.forEach((btn) =>
      btn.classList.remove("group-btn-active"),
    );
    button.classList.add("group-btn-active");

    // get filter data
    const filterBy = button.getAttribute("data-filter");

    // validate filter data and hide and show img
    galleryItems.forEach((item) => {
      const categoryName = item.getAttribute("data-category");

      if (filterBy === "all" || filterBy === categoryName) {
        item.style.display = "block";
      } else {
        item.style.display = "none";
      }
    });
  });
});

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

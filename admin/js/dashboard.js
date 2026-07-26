// // dashboard menu LInk active functionality
const pageLocation = window.location.search || "?dashboard=true";
const dMenuLinks = document.querySelectorAll(".d-menu-link");
const topBarTitle = document.querySelector(".d-title");
dMenuLinks.forEach((link) => {
  const activeLocation = link.getAttribute("href") === pageLocation;
  link.classList.toggle("d-active", activeLocation);

  if (activeLocation) {
    topBarTitle.textContent = link.textContent;
  }
  link.addEventListener("click", () => {
    topBarTitle.textContent = link.textContent;
  });
});

// dashboard menu controller functionality
let isCollapsed = false;
const dMenuController = document.querySelector(".d-menu-controller");
const dMenuContainer = document.querySelector("#dashboard-menu-container");
const dContentContainer = document.querySelector(
  "#dashboard-content-container",
);
dMenuController.addEventListener("click", () => {
  if (!isCollapsed) {
    dMenuContainer.classList.add("dashboard-menu-collapsed");
    dContentContainer.classList.add("dashboard-menu-collapsed");
  } else {
    dMenuContainer.classList.remove("dashboard-menu-collapsed");
    dContentContainer.classList.remove("dashboard-menu-collapsed");
  }

  isCollapsed = !isCollapsed;
});

/**
 * Mobile Navbar
 */
// get the elements
const navbarMask = document.querySelector(".navbar-mask");
const navbarBody = document.querySelector(".mobile-navbar-body");
const hamburgerIcon = document.querySelector(".hamburger-icon");
const closeNav = document.querySelector(".close-nav-mobile");

// function:: open the navbar
function openNavbar() {
  navbarMask.classList.add("open-nav");
  navbarBody.classList.add("open-nav");
}

// function:: close the navbar
function closeNavbar() {
  navbarMask.classList.remove("open-nav-mask");
  navbarBody.classList.remove("open-nav");
}

// click event
hamburgerIcon.addEventListener("click", () => {
  openNavbar();
});
closeNav.addEventListener("click", () => {
  closeNavbar();
});

/**
 * scroll event on window
 */
const nav = document.querySelector(".navbar-section");

window.addEventListener("scroll", () => {
  if (window.scrollY > 96) {
    nav.classList.remove("nav-focused");
  } else {
    nav.classList.add("nav-focused");
  }
});

/*
===================================================
 *  Nav collapse functionality for Mobile Devices
===================================================
 */
document.addEventListener("DOMContentLoaded", function () {
  document
    .querySelectorAll(
      ".mobile-navbar-content > .nav-menus > .nav-dropdown > .item-nav-block",
    )
    .forEach(function (toggle) {
      toggle.addEventListener("click", function (e) {
        e.preventDefault();

        const dropdown = this.closest(".nav-dropdown");

        // Close other main dropdowns
        document
          .querySelectorAll(
            ".mobile-navbar-content > .nav-menus > .nav-dropdown",
          )
          .forEach(function (item) {
            if (item !== dropdown) {
              item.classList.remove("active");
            }
          });

        dropdown.classList.toggle("active");
      });
    });

  // Nested dropdowns (Case Study)
  document
    .querySelectorAll(
      ".mobile-navbar-content .nav-sub-dropdown > .item-nav-block",
    )
    .forEach(function (toggle) {
      toggle.addEventListener("click", function (e) {
        e.preventDefault();
        e.stopPropagation();

        const dropdown = this.closest(".nav-sub-dropdown");

        dropdown.classList.toggle("active");
      });
    });
});

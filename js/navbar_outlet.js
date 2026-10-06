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
  navbarMask.classList.remove("open-nav");
  navbarBody.classList.remove("open-nav");
}

// click event
hamburgerIcon.addEventListener("click", () => {
  openNavbar();
});
closeNav.addEventListener("click", () => {
  closeNavbar();
});

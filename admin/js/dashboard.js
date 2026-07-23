// // dashboard menu LInk active functionality
const pageLocation = window.location.search || "?dashboard=true";
const dMenuLinks = document.querySelectorAll(".d-menu-link");
dMenuLinks.forEach((link) => {
  link.classList.toggle("d-active", link.getAttribute("href") === pageLocation);
});

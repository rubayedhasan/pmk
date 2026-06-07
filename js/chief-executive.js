const sideLinks = document.querySelectorAll(".sidebar-link");
const contentSections = document.querySelectorAll(".content-section");

function setActive() {
  let current = "";
  contentSections.forEach((section) => {
    if (window.scrollY >= section.offsetTop - 120) current = section.id;
  });
  sideLinks.forEach((link) => {
    link.classList.toggle(
      "sidebar-active",
      link.getAttribute("href") === "#" + current,
    );
  });
}

window.addEventListener("scroll", setActive);
setActive();

sideLinks.forEach((link) => {
  link.addEventListener("click", (e) => {
    e.preventDefault();
    const target = document.querySelector(link.getAttribute("href"));
    if (target)
      target.scrollIntoView({
        behavior: "smooth",
        block: "start",
      });
  });
});

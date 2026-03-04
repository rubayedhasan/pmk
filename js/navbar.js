// navbar section logic
const navbar = document.getElementById("navigation");
const navLinks = document.querySelectorAll(".nav-link");

// active the nav links
navLinks.forEach((link) => {
  link.addEventListener("click", () => {
    navLinks.forEach((l) => l.classList.remove("active"));
    link.classList.add("active");
  });
});

// sticky effect over navbar on scroll
window.addEventListener("scroll", () => {
  if (window.scrollY > 80) {
    navbar.classList.add("scrolled");
  } else {
    navbar.classList.remove("scrolled");
  }
});

// change the logo on large devices
document.addEventListener("DOMContentLoaded", () => {
  const logoImg = document.getElementById("logo-img");

  // Function to update logo
  const updateTheLogo = () => {
    const windowSize = window.matchMedia(
      "(min-width:992px) and (max-width:1199.98px)",
    );

    if (windowSize.matches) {
      logoImg.src = "./assets/logo/logo.png";
    } else {
      logoImg.src = "./assets/logo/pmk_logo.png";
    }
  };

  // Run on page load
  updateTheLogo();

  // Listen for screen changes dynamically
  const windowSize = window.matchMedia(
    "(min-width:992px) and (max-width:1199.98px)",
  );
  windowSize.addEventListener("change", updateTheLogo);

  // Optional: also update on window resize
  window.addEventListener("resize", updateTheLogo);
});

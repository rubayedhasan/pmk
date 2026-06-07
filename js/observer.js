// // all section's section container(tag, title, subtitle, description) observer api
// const sectionContainers = document.querySelectorAll(".section-container");
// const footerWelcomeTExt = document.querySelector(".welcome-text");

// const observeSectionContainer = new IntersectionObserver(
//   (observedItems) => {
//     observedItems.forEach((observedItem) => {
//       if (observedItem.isIntersecting) {
//         observedItem.target.classList.add("visible-section-head");
//       } else {
//         observedItem.target.classList.remove("visible-section-head");
//       }
//     });
//   },
//   {
//     threshold: [0.3],
//   },
// );

// // all section's heading container
// sectionContainers.forEach((sectionContainer) =>
//   observeSectionContainer.observe(sectionContainer),
// );

// // footer welcome text
// observeSectionContainer.observe(footerWelcomeTExt);

// // button container's observer api
// const buttonContainers = document.querySelectorAll(".button-container");

// const observedButtonContainer = new IntersectionObserver(
//   (observedItems) => {
//     observedItems.forEach((observedItem) => {
//       if (observedItem.isIntersecting) {
//         observedItem.target.classList.add("visible-button");
//       } else {
//         observedItem.target.classList.remove("visible-button");
//       }
//     });
//   },
//   {
//     threshold: [0.3],
//   },
// );
// buttonContainers.forEach((buttonContainer) =>
//   observedButtonContainer.observe(buttonContainer),
// );

// // about image container section's observer api
// const aboutImage = document.querySelector("#about-image-container ");

// const observeAboutImage = new IntersectionObserver(
//   (observedItems) => {
//     observedItems.forEach((observedItem) => {
//       if (observedItem.intersectionRatio > 0.15) {
//         observedItem.target.classList.add("about-visible");
//       } else {
//         observedItem.target.classList.remove("about-visible");
//       }
//     });
//   },
//   {
//     threshold: [0.15],
//   },
// );

// observeAboutImage.observe(aboutImage);

// // observer api for all section
// const observedSections = new IntersectionObserver(
//   (observedItems) => {
//     observedItems.forEach((observedItem) => {
//       if (observedItem.isIntersecting) {
//         observedItem.target.classList.add("section-visible");
//       } else {
//         observedItem.target.classList.remove("section-visible");
//       }
//     });
//   },
//   {
//     threshold: [0, 0.1, 0.15, 0.2],
//   },
// );

// // pmk-perspective section's observer api
// const pmkPerspective = document.querySelector("#pmk-perspective");
// observedSections.observe(pmkPerspective);

// // pmk-executive section's observer api
// const executiveRow = document.querySelector(".exe-row");
// observedSections.observe(executiveRow);

// // at a glance section's observer api
// const impactGraphicalBoard = document.querySelector("#impact-graphical-board");
// observedSections.observe(impactGraphicalBoard);

// // pmk project section's observer api
// const projectSlider = document.querySelector(".project-container");
// observedSections.observe(projectSlider);

// // image gallery section's observer api
// const imageGallery = document.querySelector("#image-gallery-main-container");
// observedSections.observe(imageGallery);

// // video gallery section's observer api
// const mainVideoContainer = document.querySelector(".main-video-container");
// const playlistContainer = document.querySelector(".playlist-container");
// observedSections.observe(mainVideoContainer);
// observedSections.observe(playlistContainer);

// // latest news section's observe api
// const projectUpdateContainer = document.querySelector(
//   "#project-update-container",
// );
// const recentActivityContainer = document.querySelector(
//   "#recent-activity-container",
// );
// observedSections.observe(projectUpdateContainer);
// observedSections.observe(recentActivityContainer);

// // pmk partner section's observer api
// const nationalAccreditation = document.querySelector(".national-accreditation");
// const developmentPartner = document.querySelector(".development-partners");
// observedSections.observe(nationalAccreditation);
// observedSections.observe(developmentPartner);

function safeObserve(observer, elements) {
  if (!observer) return;

  // Normalize to array
  const items =
    elements instanceof NodeList || Array.isArray(elements)
      ? elements
      : [elements];

  items.forEach((el) => {
    if (el instanceof Element) {
      observer.observe(el);
    }
  });
}

// ================= COMMON OBSERVER =================
const createObserver = (className, threshold = [0.3]) =>
  new IntersectionObserver(
    (entries) => {
      entries.forEach((entry) => {
        entry.target.classList.toggle(className, entry.isIntersecting);
      });
    },
    { threshold },
  );

// ================= SECTION HEAD =================
const sectionContainers = document.querySelectorAll(".section-container");
const footerWelcomeText = document.querySelector(".welcome-text");

const observeSectionContainer = createObserver("visible-section-head");

safeObserve(observeSectionContainer, sectionContainers);
safeObserve(observeSectionContainer, footerWelcomeText);

// ================= BUTTONS =================
const buttonContainers = document.querySelectorAll(".button-container");
const observedButtonContainer = createObserver("visible-button");

safeObserve(observedButtonContainer, buttonContainers);

// ================= ABOUT IMAGE =================
const aboutImage = document.querySelector("#about-image-container");

const observeAboutImage = new IntersectionObserver(
  (entries) => {
    entries.forEach((entry) => {
      entry.target.classList.toggle(
        "about-visible",
        entry.intersectionRatio > 0.15,
      );
    });
  },
  { threshold: [0.15] },
);

safeObserve(observeAboutImage, aboutImage);

// ================= GENERIC SECTION OBSERVER =================
const observedSections = new IntersectionObserver(
  (entries) => {
    entries.forEach((entry) => {
      entry.target.classList.toggle("section-visible", entry.isIntersecting);
    });
  },
  {
    threshold: [0, 0.1, 0.15, 0.2],
  },
);

// ================= ALL TARGETS (SAFE) =================
safeObserve(observedSections, [
  document.querySelector("#pmk-perspective"),
  document.querySelector(".exe-row"),
  document.querySelector("#impact-graphical-board"),
  document.querySelector(".project-container"),
  document.querySelector("#image-gallery-main-container"),
  document.querySelector(".main-video-container"),
  document.querySelector(".playlist-container"),
  document.querySelector("#project-update-container"),
  document.querySelector("#recent-activity-container"),
  document.querySelector(".national-accreditation"),
  document.querySelector(".development-partners"),
]);

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

// // pmk mfi page's all observer
// // loan products
// const mfiLoanProducts = document.querySelector("#mfi-loan-products");
// observedSections.observe(mfiLoanProducts);

// ai generated all observer al once
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
  // index page observer api
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

  // pmk_mfi page's observer api
  document.querySelector(".loan-products-layout"),
  document.querySelector(".loan-process-layout"),
  document.querySelector(".eligible-criteria"),
  document.querySelector(".eligible-criteria"),
  document.querySelector(".loan-guide-layout"),
  document.querySelector(".saving-program-layout"),
  document.querySelector(".saving-rules-parent-container"),
  document.querySelector(".saving-auth-strip"),
  document.querySelector(".mfi-key-field-activities"),
  document.querySelector("#activity-impact-board"),
  document.querySelector(".asc-title"),
  document.querySelector(".activity-slider"),

  // project(raise) page's observer api
  document.querySelector(".about-body-quote"),
  document.querySelector(".aside-photo"),
  document.querySelector(".project-work-life-cycle"),
  document.querySelector(".beneficiaries-cards-layout"),
  document.querySelector(".pp-feature-image"),
  document.querySelector(".aside-project-goal"),
  document.querySelector(".aside-project-objective"),
  document.querySelector(".impact-grid-layout"),
  document.querySelector(".gallery-grid-layout"),

  // our storu page observer api
  document.querySelector(".sub-content-label"),
  document.querySelector(".sub-content-list"),
  document.querySelector(".story-board-layout"),
  // document.querySelector(".hq-info"),
]);

// mfi page all header sections observer api
const allMfiHeaders = document.querySelectorAll(".mfi-section-header");
const observedMfiHeader = createObserver("section-visible");
safeObserve(observedMfiHeader, allMfiHeaders);

// project(raise) header section
const projectPagesAllHeaders = document.querySelectorAll(
  ".project-page-section-header",
);
safeObserve(observedMfiHeader, projectPagesAllHeaders);

//project(raise) about body text section
const allAboutBodyText = document.querySelectorAll(".about-body-text");
safeObserve(observedMfiHeader, allAboutBodyText);

//project(raise) about body text section
const projectAsideCards = document.querySelectorAll(".project-aside-card");
safeObserve(observedMfiHeader, projectAsideCards);

//project(raise) challenge-card section
const challengeCards = document.querySelectorAll(".challenge-card");
safeObserve(observedMfiHeader, challengeCards);

//project(raise) challenge-card section
const featureText = document.querySelectorAll(".feature-text");
safeObserve(observedMfiHeader, featureText);

//project(raise) pb-feature-card section
const featureCard = document.querySelectorAll(".pb-feature-card");
safeObserve(observedMfiHeader, featureCard);

// our story page  header section
const ourStoryAllHeaders = document.querySelectorAll(".story-common-header");
safeObserve(observedMfiHeader, ourStoryAllHeaders);

//our story page about body text section
const allPmkJourneyText = document.querySelectorAll(".pmk-journey-text");
safeObserve(observedMfiHeader, allPmkJourneyText);

//our story page inshort-vmo section
const allInshortVmo = document.querySelectorAll(".inshort-vmo");
safeObserve(observedMfiHeader, allInshortVmo);

//our story page value-container section
const allValueContainer = document.querySelectorAll(".value-container");
safeObserve(observedMfiHeader, allValueContainer);

//our story page recognition-field section
const allRecognitionField = document.querySelectorAll(".recognition-field");
safeObserve(observedMfiHeader, allRecognitionField);

//our story page founder message section
const founderMessageSection = document.querySelectorAll(
  ".founder-figure-image,.mcb-label,.mcb-title,.founder-quote,.founder-message-text,.founder-name,.fs-post,.fs-org-name",
);
safeObserve(observedMfiHeader, founderMessageSection);

//our story page contact section
const contactPageAllSection = document.querySelectorAll(
  ".hq-info,.info-card,.contact-newsletter-container,.maps-tag,.maps-label,.maps-description,.map-card",
);
safeObserve(observedMfiHeader, contactPageAllSection);

//contact button container
const smoothButtonContainer = document.querySelectorAll(
  ".smooth-button-container",
);
safeObserve(observedMfiHeader, smoothButtonContainer);

// observe api for smooth apprear the timeline items
const timelineAppear = new IntersectionObserver(
  (observeItems) => {
    observeItems.forEach((observeItem) => {
      if (observeItem.isIntersecting) {
        console.log(observeItem);
        observeItem.target.classList.add("timeline-visible");
      } else {
        observeItem.target.classList.remove("timeline-visible");
      }
    });
  },
  {
    threshold: [0.25],
  },
);

const timelineItems = document.querySelectorAll(".timeline-item");
timelineItems.forEach((item, idx) => {
  //   item.style.transitionDelay = idx * 0.1 + "s";
  timelineAppear.observe(item);
});

// transition delay function
function transitionDelay(element, index) {
  element.style.transitionDelay = `${index * 0.05}s`;
}

//For pmk-journey-text
document
  .querySelectorAll(".pmk-journey-text,.sub-content-label,.sub-content-list")
  .forEach((element, idx) => {
    transitionDelay(element, idx);
  });

// for value-container
document.querySelectorAll(".value-container").forEach((element, idx) => {
  transitionDelay(element, idx);
});

// for recognition-field
document.querySelectorAll(".recognition-field").forEach((element, idx) => {
  transitionDelay(element, idx);
});

// for founder message
document
  .querySelectorAll(
    ".mcb-label,.mcb-title,.founder-quote,.founder-message-text,.founder-name,.fs-post,.fs-org-name",
  )
  .forEach((element, idx) => {
    transitionDelay(element, idx);
  });

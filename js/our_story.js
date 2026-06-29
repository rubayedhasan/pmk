// observe api for smooth apprear the timeline items
const timelineAppear = new IntersectionObserver(
  (observeItems) => {
    observeItems.forEach((observeItem) => {
      if (observeItem.isIntersecting) {
        console.log(observeItem);
        observeItem.target.classList.add("timeline-visible");
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

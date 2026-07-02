// transition delay function
function transitionDelay(element, index) {
  element.style.transitionDelay = `${index * 0.05}s`;
}

// for info card
document.querySelectorAll(".info-card").forEach((element, idx) => {
  transitionDelay(element, idx);
});
// for map-card
document.querySelectorAll(".map-card").forEach((element, idx) => {
  transitionDelay(element, idx);
});

// get the element
const allList = document.querySelectorAll(".list");
const mainVideo = document.querySelector(".main-video");
const mainVideoTitle = document.querySelector(
  ".main-video-title .main-video-title-text",
);

// playlist video click event
allList.forEach((list) => {
  list.addEventListener("click", () => {
    // remove and set the active status
    allList.forEach((item) => item.classList.remove("list-active"));
    list.classList.add("list-active");

    // get the target video src and title
    const targetSrc = list.querySelector(".list-video").getAttribute("src");
    const targetVideoTitle = list.querySelector(".list-video-title").innerHTML;

    // set the target video as current
    mainVideo.src = targetSrc;
    mainVideo.play();
    mainVideoTitle.innerHTML = targetVideoTitle;
  });
});
